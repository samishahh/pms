@extends('layouts.master')
@section('content')
    <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="row ">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">Patients</h5>
                                                <h2 class="mb-3 font-18">{{$tpatients}}</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="{{asset('public/assets/img/banner/2.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15"> Doctors</h5>
                                                <h2 class="mb-3 font-18">{{$tdoctors}}</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="{{asset('public/assets/img/banner/1.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">Appointmenta</h5>
                                                <h2 class="mb-3 font-18">{{$tappointments}}</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="{{asset('public/assets/img/banner/3.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">Medicate</h5>
                                                <h2 class="mb-3 font-18">{{$tmedicates}}</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="{{asset('public/assets/img/banner/4.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Today Appointments</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>S #</th>
                                            <th>Patient Name</th>
                                            <th>Mobile No</th>
                                            <th>Doctor</th>
                                            <th>Remarks</th>
                                            <th>Status</th>
                                        </tr>
                                        @php($s=1)
                                        @foreach($appointment as $appointments)
                                            <tr>
                                                <th>{{$s++}}</th>
                                                <th>{{$appointments->patient->name}}</th>
                                                <th>{{$appointments->patient->mobileno}}</th>
                                                <th>{{$appointments->doctor->name}}</th>
                                                <th>{{$appointments->remarks}}</th>
                                                <th>
                                                @if($appointments->status==2)
                                                    <span class="badge badge-success">Done</span>
                                                @elseif($appointments->status==1)
                                                    <span class="badge badge-info">Pending</span>
                                                @else
                                                    <span class="badge badge-danger">Cancel</span>
                                                @endif
                                                </th>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection