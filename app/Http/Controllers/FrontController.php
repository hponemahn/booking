<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo;
use App\User;
use App\Book;
use App\Township;
use App\Time;
use DB;
use App\DisabledDay;
use App\DisabledCount;

class FrontController extends Controller
{
    public function index () {

        $disabledDays = [];
        for ($i=0; $i < 7; $i++) { 
            $date = strtotime("+" . $i . " day");
            $disabledDays[] = date('d/m/Y', $date);
        }
        
        $disDays = DisabledDay::select('day')->whereIn('day', $disabledDays)->get();

        $disabledDays = [];
        foreach ($disDays as $disDay) {
            $disabledDays[] = $disDay->day;
        }

        $townships = Township::select('id', 'township')->get();
        $times = Time::select('id', 'time')->get();
        return view('layouts.home', compact('townships', 'times', 'disabledDays'));
    }

    public function book (Request $request) {

        $number = "95" . substr($request['number'],1);

        // $verification = Nexmo::verify()->start([
        //     'number' => $number,
        //     'brand' => 'BarBerX',
        //     'code_length'  => '4'
        // ]);

        $user = User::where('phone_number', $number)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $number,
            'township_id' => $request['township'],
            'address' => $request['address'],
        ]);

        if ($user == 0) {
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone_number' => $number,
                'township_id' => $request['township'],
                'address' => $request['address'],
            ]);
        } else {
            $user = User::where('phone_number', $number)->select('id')->first();
        }

        $book = Book::create([
           'user_id' => $user->id,
        //    'nexmo_request_id' => $verification->getRequestId(),
        //    'nexmo_request_id' => 7,
           'services' => $request['service'],
           'date' => $request['date'],
           'time_id' => $request['time'],
           'message' => $request['message'],
        //    'is_confirm' => 1,
            'is_confirm' => 1,
        ]);

        // $request->session()->put([
        //     'nexmo_request_id' => $verification->getRequestId(), 
        //     'number' => $number
        // ]);

        $this->disabledDays($book->date, $book->time_id);

        // return redirect('otp');
        return redirect('/')->with('status', 'BOOKED SUCCESSFULLY! Thank you');
    }

    function disabledDays ($bDate, $bTimeId) {
        $disabledCount = DisabledCount::where([['day', $bDate], ['time_id', $bTimeId]])->get();

        if (count($disabledCount) == 0) {
            DisabledCount::create([
                'day' => $bDate, 
                'time_id' => $bTimeId, 
                'count' => DB::raw('count+1'),
            ]);
        } else {
            if ($disabledCount[0]->count < 5) {
                DisabledCount::where([['day', $bDate], ['time_id', $bTimeId]])->update([
                    'day' => $bDate, 
                    'time_id' => $bTimeId, 
                    'count' => DB::raw('count+1'),
                ]);

                $totalCount = DisabledCount::where('day', $bDate)->select('day', DB::raw("SUM(count) as total_count"))->groupBy('day')->get();
                if ($totalCount[0]->total_count == 25) {
                    DisabledDay::create(['day' => $bDate]);
                }
            } 
        }
    }

    public function otpSave (Request $request) {

        $request_id = $request->session()->get('nexmo_request_id');
        $verification = new \Nexmo\Verify\Verification($request_id);

        try {
            Nexmo::verify()->check(
                $verification,
                $request['code']
            );


            $book = tap(Book::where('nexmo_request_id', $request_id))->update([
                'is_confirm' => 1,
            ])->first();

            $this->disabledDays($book->date, $book->time_id);
                
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
            'brand' => 'BarBerX',
            'code_length'  => '4'
        ]);

        $request->session()->put([
            'nexmo_request_id' => $verification->getRequestId(), 
            'number' => $request['number'
        ]]);

        return redirect('otp')->with('status', 'Changed phone number successfully');
    }

    public function test () {
        return Book::select('time_id', 'date', DB::raw('count(*) as total'))->where([['is_confirm', 1]])->groupBy('time_id', 'date')->orderBy('date', 'asc')->get();
    }

    public function changeTime(Request $request)
    {
        return $timeTotal = Book::select('time_id', 'date', DB::raw('count(*) as total'))->where([['is_confirm', 1], ['date', $request->date]])->groupBy('time_id', 'date')->get();
    }
}
