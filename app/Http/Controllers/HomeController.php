<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('home');
    }

    function sms()
    {
        $baseUrl = 'https://app.smsnoc.com/api/v3/sms/send';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer 509|f9yjE4Wls90vxV2F13OkRT0uyS8JxZIaGPmHnDyp',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post($baseUrl, [
            'recipient' => '88' . '01732379393',
            'sender_id' => '1234',
            'type' => 'plain',
            'message' => 'This is a test message from Sonet Dev',
        ]);

        return $response;
    }


    function sms2()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.sms.net.bd/sendsms',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'api_key' => '2dYuSnQNkQUUahkgg5f4EkMC414CIm0Kp7H0m1qp',
                'msg' => "Demo Text Message from Sonet Dev",
                'to' => '01732379393'
            ),
        ));
        $response = curl_exec($curl);

        return $response;
    }
}
