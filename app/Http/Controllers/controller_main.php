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
    function edit($id){
        $employee=employees::findOrFail($id);
        // dd($employee);
        return view('pages.edit_form',compact('employee'));
    }
    function update(Request $request,$id){
        // dd($request->all(),$id);
        $employee=employees::findOrFail($id);
        $validate=$request->validate([

            'firstname'=> 'required|string',
            'lastname'=> 'required|string',
            'role'=> 'required|string',
            'ral'=> 'required|integer',
            ]);
        $employee->update($validate);
        // dd($employee);
        return redirect() -> route('employee_detail', $employee->id);

    }
    function employee_detail($id){
        $employee=employees::findOrFail($id);
        return view('pages.employee_detail',compact('employee'));

    }
}
