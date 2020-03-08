<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class FrontendController extends Controller
{ public function __construct() {
    $curl2 = curl_init();
    curl_setopt_array($curl2, array(
    CURLOPT_URL => "http://13.229.92.91/api/getContact",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
    ),
    ));

    $response2 = curl_exec($curl2);
    curl_close($curl2);
    $contact =  json_decode($response2);
    view()->share('contact',$contact->contacts);
}
    public function index($page = 'home')
    {
        // return dd('ded');
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "http://13.229.92.91/api/getContent/".$page,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $datas = json_decode($response);
            return view('front-end.home')->with('datas',$datas);
        
       
    }

}

