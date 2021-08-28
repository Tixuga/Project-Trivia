<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TriviaController extends Controller
{
    //

    function questions()
    {
        // $curl = curl_init();
        // $request = '{
        //             "response_code": 0,
        //             "results": [
        //                 {
        //                     "category": "Entertainment: Cartoon & Animations",
        //                     "type": "multiple",
        //                     "difficulty": "medium",
        //                     "question": "What is Scooby-Doo&#039;s real name?",
        //                     "correct_answer": "Scoobert",
        //                     "incorrect_answers": [
        //                         "Scooter",
        //                         "Scrappy",
        //                         "Shooby"
        //                     ]
        //                 }
        //             ]
        //         }';
        // $certificate_location = '/usr/local/openssl-0.9.8/certs/cacert.pem';
        // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, $certificate_location);
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, $certificate_location);

        // curl_setopt($curl, CURLOPT_URL, 'https://opentdb.com/api.php?amount=1');
        // curl_setopt($curl, CURLOPT_POST, true);
        // curl_setopt($curl, CURLOPT_HTTPHEADER, ['content-type: application/json']);
        // curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // $response = curl_exec($curl);
        // $err = curl_error($curl);

        // curl_close($curl);

        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
            
        //     header('content-type: application/json');

        //     $result = json_encode($response, true);
        //     print_r($result['results']['category']);
        //     return view('pages.gamePage', ['result' => $result]);
        // }
      

        // $curl = curl_init();
        
        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => 'https://opentdb.com/api.php?amount=1',
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => '',
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => 'GET',
        //   CURLOPT_HTTPHEADER => array(
        //     'Cookie: PHPSESSID=020ced9d1669bee410eba457ced329e5'
        //   ),
        // ));
        
        // $response = curl_exec($curl);
        
        // curl_close($curl);
        // echo $response;
        
       

        $url = "https://opentdb.com/api.php?amount=1";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
$resp = json_encode($resp, true);
//  dd($resp);
return view('pages.gamePage', ['resp' => $resp]);

curl_close($curl);

    }
}