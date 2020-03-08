<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class FrontendController extends Controller
{
    public function index($page = 'home')
    {
        if($page == 'home'){
            return view('front-end.home');
        }
       
    }

}

