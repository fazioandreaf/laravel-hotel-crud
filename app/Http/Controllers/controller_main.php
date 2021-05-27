<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller_main extends Controller
{
    function home(){
        return view('pages.home');
    }
}
