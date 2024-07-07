<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctorList(){
        $doctor=Doctor::get();
        return view('superadmin.doctorlist',compact('doctor'));
    }

    public function doctorAdd(Request $request){
        //dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'mobileno' => ['required'],
            'qualification' => ['required'],
        ]);

        Doctor::create($request->all());
        return redirect()->back()->with("message", "Doctor Added Successfully");
    }
}
