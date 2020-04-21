<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo;
use App\User;
use App\Book;
use App\Township;

class FrontController extends Controller
{
    public function index () {
        $townships = Township::select('id', 'township')->get();
        return view('layouts.home', compact('townships'));
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
           'services' => $request['service'],
           'date' => $request['date'],
           'time' => $request['time'],
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
}
