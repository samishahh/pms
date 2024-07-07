<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;

// route group for user
Route::middleware(['auth', 'verified', 'user'])->group(function () {
    Route::get('user/dashboard',[PatientController::class,'dashboardData'])->name('user.dashboard');
//    Route::get('/doctorlist',[DoctorController::class,'doctorList'])->name('doctor.list');
});

//Route Group For admin
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('admin/dashboard',[PatientController::class,'dashboardData'])->name('admin.dashboard');
});
//route group for superadmin
Route::middleware(['auth', 'verified', 'superadmin'])->group(function () {
    Route::get('superadmin/dashboard',[PatientController::class,'dashboardData'])->name('superadmin.dashboard');
//    Route::get('/superadmin/doctorlist',[DoctorController::class,'doctorList'])->name('doctor.list');
//    Route::post('doctorlist/add',[DoctorController::class,'doctorAdd'])->name('doctor.add');
//    Route::view('/addpatient','superadmin.addpatient')->name('patient.add');
//    Route::post('addpatient/store',[PatientController::class,'patientStore'])->name('patient.store');
//    Route::get('/patientrecord',[PatientController::class,'patientRecord'])->name('patient.record');
//    Route::get('/patientrecord/delete',[PatientController::class,'patientRecordDelete'])->name('patientrecord.delete');
//    Route::get('/patientrecord/{id}',[PatientController::class,'patientDetails'])->name('patient.details');
//    Route::post('/patientrecord/appointment',[AppointmentController::class,'appointment'])->name('appointment');
//    Route::get('/patientappointment',[AppointmentController::class,'patientAppointment'])->name('patient.appointment');
//    Route::post('/patientappointment/medication',[AppointmentController::class,'medication'])->name('medication');
//    Route::get('/patientappointment/cancel',[AppointmentController::class,'patientAppointmentCancel'])->name('patientappointment.cancel');
    Route::get('/userlist',[UserController::class,'userList'])->name('user.list');
    Route::post('/userlist/add',[UserController::class,'userAdd'])->name('user.add');
    Route::get('/user/delete',[UserController::class,'userDelete'])->name('user.delete');
});

//Routes for superadmin,admin
Route::middleware(['auth', 'verified','checkrole:2,1'])->group(function(){
    Route::get('/doctorlist',[DoctorController::class,'doctorList'])->name('doctor.list');
    Route::post('doctorlist/add',[DoctorController::class,'doctorAdd'])->name('doctor.add');
});
//routes for superadmin,admin,user
Route::middleware(['auth', 'verified','checkrole:3,2,1'])->group(function(){
    Route::view('/addpatient','superadmin.addpatient')->name('patient.add');
    Route::post('addpatient/store',[PatientController::class,'patientStore'])->name('patient.store');
    Route::get('/patientrecord',[PatientController::class,'patientRecord'])->name('patient.record');
    Route::get('/patientrecord/delete',[PatientController::class,'patientRecordDelete'])->name('patientrecord.delete');
    Route::get('/patientrecord/{id}',[PatientController::class,'patientDetails'])->name('patient.details');
    Route::post('/patientrecord/appointment',[AppointmentController::class,'appointment'])->name('appointment');
    Route::get('/patientappointment',[AppointmentController::class,'patientAppointment'])->name('patient.appointment');
    Route::post('/patientappointment/medication',[AppointmentController::class,'medication'])->name('medication');
    Route::get('/patientappointment/cancel',[AppointmentController::class,'patientAppointmentCancel'])->name('patientappointment.cancel');
    Route::view('/error','error')->name('error');
});

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';
