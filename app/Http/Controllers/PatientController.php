<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patientStore(Request $request){
        //dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'cnic' => ['required', 'integer','unique:'.Patient::class],
            'dob' => ['required'],
            'mobileno' => ['required'],
            'cellno' => ['required'],
            'city' => ['required'],
            'gender' => ['required'],
        ]);
        $nameshort = explode(" ", $request->name);
        $patientid = "";

        foreach ($nameshort as $names) {
            $patientid .= mb_substr($names, 0, 1);
        }

        //dd($patientid);
        $id=Patient::create($request->all())->id;
        $patientid=$patientid.$id;
        Patient::where('id',$id)->update(['patientid'=>$patientid]);
        return redirect()->back()->with("message", "Patient Added Successfully");
    }

    public function patientRecord(){
        $patient=Patient::get();
        $doctor=Doctor::get();
        return view('superadmin.patientrecord',compact('patient','doctor'));
    }

    public function patientRecordDelete(Request $request){
        Patient::where('id',$request->id)->delete();
        echo 1;
    }

    public function patientDetails($id){
        //dd($id);
        $name=Patient::where('id',$id)->value('name');
        $patientid=Patient::where('id',$id)->value('patientid');
        $appintment=Appointment::where('patient_id',$id)->get();
        return view('superadmin.patientdetails',compact('name','patientid','appintment'));
    }

    public function dashboardData(){
        $date=date('Y-m-d');
        $tpatients=Patient::count();
        $tdoctors=Doctor::count();
        $tappointments=Appointment::where('date',$date)->count();
        $tmedicates=Appointment::where('status',2)->count();
        $appointment=Appointment::where('date',$date)->get();
        return view('dashboard',compact('tpatients','tdoctors','tappointments','tmedicates','appointment'));
    }
}
