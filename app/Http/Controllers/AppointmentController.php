<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointment(Request $request){
        //dd($request->all());
        $date=date('Y-m-d');
        Appointment::create($request->all()+['date' => $date]);
        return redirect()->back()->with("message", "Appointment Created Successfully");
    }

    public function patientAppointment(){
        $date=date('Y-m-d');
        $appointment=Appointment::where('date',$date)->where('status',1)->get();
        return view('superadmin.patientappointment',compact('appointment'));
    }

    public function medication(Request $request){
        Appointment::where('id',$request->id)->update(['remarks'=>$request->remarks,'medications'=>$request->medications,'status'=>2]);
        return redirect()->back();
    }

    public function patientAppointmentCancel(Request $request){
        Appointment::where('id',$request->id)->update(['status'=>0]);
        echo 1;
    }
}
