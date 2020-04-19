<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function test () {
        $basic  = new \Nexmo\Client\Credentials\Basic('da5a369c', 'BbNiUlQnIzYCXmQ3');
        $client = new \Nexmo\Client($basic);
        $res = "";

        try {
            $message = $client->message()->send([
                'to' => '959777425147',
                'from' => 'BarBerX',
                'text' => 'BarBerX code:'
            ]);
            $response = $message->getResponseData();
        
            if($response['messages'][0]['status'] == 0) {
                $res = "The message was sent successfully\n";
            } else {
                $res = "The message failed with status: " . $response['messages'][0]['status'] . "\n";
            }
        } catch (Exception $e) {
            $res = "The message was not sent. Error: " . $e->getMessage() . "\n";
        }

        return $res;
    }
}
