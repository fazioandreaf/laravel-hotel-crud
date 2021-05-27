<?php

namespace App\Http\Controllers;
use App\employees;

use Illuminate\Http\Request;

class controller_main extends Controller
{
    function home(){
        $employees=employees::all();
        // dd($employees);
        return view('pages.home',compact('employees'));
    }
}
