<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo;
use App\User;
use App\Book;
use App\Township;

class FrontController extends Controller
{
    // public function test () {
    //     $basic  = new \Nexmo\Client\Credentials\Basic('da5a369c', 'BbNiUlQnIzYCXmQ3');
    //     $client = new \Nexmo\Client($basic);
    //     $res = "";

    //     try {
    //         $message = $client->message()->send([
    //             'to' => '959777425147',
    //             'from' => 'BarBerX',
    //             'text' => 'BarBerX code:'
    //         ]);
    //         $response = $message->getResponseData();
        
    //         if($response['messages'][0]['status'] == 0) {
    //             $res = "The message was sent successfully\n";
    //         } else {
    //             $res = "The message failed with status: " . $response['messages'][0]['status'] . "\n";
    //         }
    //     } catch (Exception $e) {
    //         $res = "The message was not sent. Error: " . $e->getMessage() . "\n";
    //     }

    //     return $res;
    // }

    public function index () {
        $townships = Township::select('id', 'township')->get();
        return view('layouts.home', compact('townships'));
    }

    public function book (Request $request) {

        // $verification = Nexmo::verify()->start([
        //     'number' => $request['number'],
        //     'brand' => 'Verification',
        //     'code_length'  => '4'
        // ]);

        // session(['nexmo_request_id' => $verification->getRequestId(), 'number' => $request['number']]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $request['number'],
            'township_id' => $request['township'],
            'address' => $request['address'],
        ]);

        Book::create([
           'user_id' => $user->id,
           'services' => $request['service'],
           'date' => $request['date'],
           'time' => $request['time'],
           'message' => $request['message'],
        ]);

        $number = $request['number'];

        return redirect('otp')->with('number', $request['number']);
    }

    public function otp () {
        return view('layouts.otp');
    }

    public function otpSave (Request $request) {

        // $request_id = session('nexmo_request_id');
        // $verification = new \Nexmo\Verify\Verification($request_id);

        // Nexmo::verify()->check($verification, $request['code']);

        $date = date_create();

        User::where('phone_number', $request['number'])->update(['phone_verified_at' => date_format($date, 'Y-m-d H:i:s')]);

        return redirect('/');

    }
}
