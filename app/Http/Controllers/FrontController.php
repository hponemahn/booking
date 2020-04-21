<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo;
use App\User;
use App\Book;
use App\Township;
use App\Time;
use DB;

class FrontController extends Controller
{
    public function index () {
        $townships = Township::select('id', 'township')->get();
        $times = Time::select('id', 'time')->get();
        return view('layouts.home', compact('townships', 'times'));
    }

    public function book (Request $request) {

        $verification = Nexmo::verify()->start([
            'number' => $request['number'],
            'brand' => 'BarBerX code:',
            'code_length'  => '4'
        ]);

        $user = User::where('phone_number', $request['number'])->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $request['number'],
            'township_id' => $request['township'],
            'address' => $request['address'],
        ]);

        if ($user == 0) {
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone_number' => $request['number'],
                'township_id' => $request['township'],
                'address' => $request['address'],
            ]);
        } else {
            $user = User::where('phone_number', $request['number'])->select('id')->first();
        }

        Book::create([
           'user_id' => $user->id,
           'nexmo_request_id' => $verification->getRequestId(),
           'services' => $request['service'],
           'date' => $request['date'],
           'time_id' => $request['time'],
           'message' => $request['message'],
        ]);

        $request->session()->put([
            'nexmo_request_id' => $verification->getRequestId(), 
            'number' => $request['number']
        ]);

        return redirect('otp');
    }

    public function otpSave (Request $request) {

        $request_id = $request->session()->get('nexmo_request_id');
        $verification = new \Nexmo\Verify\Verification($request_id);

        try {
            Nexmo::verify()->check(
                $verification,
                $request['code']
            );

            Book::where('nexmo_request_id', $request_id)->update([
                'is_confirm' => 1,
            ]);
            
            $request->session()->forget('nexmo_request_id');

            $date = date_create();

            User::where('phone_number', $request['number'])->update(['phone_verified_at' => date_format($date, 'Y-m-d H:i:s')]);

            $request->session()->forget('number');

            return redirect('/')->with('status', 'BOOKED SUCCESSFULLY! Thank you');

        } catch (Nexmo\Client\Exception\Request $e) {
            return redirect()->back()->withErrors([
                'code' => "The verification code you entered was incorrect or expired"
            ]);
     
        }
    }

    public function change (Request $request) {
        User::where('phone_number', $request->session()->get('number'))->update(['phone_number' => $request['number']]);
        $request->session()->forget('number');
        $request->session()->forget('nexmo_request_id');

        $verification = Nexmo::verify()->start([
            'number' => $request['number'],
            'brand' => 'BarBerX code:',
            'code_length'  => '4'
        ]);

        $request->session()->put([
            'nexmo_request_id' => $verification->getRequestId(), 
            'number' => $request['number'
        ]]);

        return redirect('otp')->with('status', 'Changed phone number successfully');
    }

    public function test () {
        return Book::select('time_id', 'date', DB::raw('count(*) as total'))->where([['is_confirm', 1], ['date', '23/04/2020']])->groupBy('time_id', 'date')->get();
    }

    public function changeTime(Request $request)
    {
        return $timeTotal = Book::select('time_id', 'date', DB::raw('count(*) as total'))->where([['is_confirm', 1], ['date', $request->date]])->groupBy('time_id', 'date')->get();
    }
}
