@extends('layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Patient Record</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th>S #</th>
                                            <th>Patient id</th>
                                            <th>CNIC</th>
                                            <th>Patient Name</th>
                                            <th>DoB</th>
                                            <th>Mobile No</th>
                                            <th>Cell No</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php($s=1)
                                        @foreach($patient as $patients)
                                        <tr>
                                            <th>{{$s++}}</th>
                                            <th>{{$patients->patientid}}</th>
                                            <th>{{$patients->cnic}}</th>
                                            <th class="text-capitalize">{{$patients->name}}</th>
                                            <th>{{$patients->dob}}</th>
                                            <th>{{$patients->mobileno}}</th>
                                            <th>{{$patients->cellno}}</th>
                                            <th class="text-capitalize">{{$patients->gender}}</th>
                                            <th width="18%">
                                                <a class="btn btn-icon" href="#" data-toggle="modal" data-target="#appointment" data-target-id="{{$patients->id}}" data-target-name="{{$patients->name}}" title="Get Appointment"><i class="fas fa-eye"></i></a>
                                                <a class="btn btn-icon" href="#" data-id="{{$patients->id}}" id="deletepatient" title="Delete Patient"><i class="fas fa-trash"></i></a>
                                                <a class="btn btn-icon" href="{{route('patient.details',$patients->id)}}" title="Patient Details"><i class="fas fa-book"></i></a>
                                            </th>
                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- Edit Supplier -->
    <div class="modal fade" id="appointment" tabindex="-1" role="dialog" aria-labelledby="formModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Appointment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('appointment')}}">
                        @csrf
                        <div class="form-group">
                            <label>Patient Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <input type="hidden" id="id" name="patient_id" required>
                                <input type="text" class="form-control text-capitalize" name="name" id="name" required readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Doctor</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-docker"></i>
                                    </div>
                                </div>
                                <select class="form-control" required id="doctorid" name="doctor_id">
                                    <option value="" selected disabled="">Select Doctor</option>
                                    @foreach($doctor as $doctors)
                                    <option value="{{$doctors->id}}" class="text-capitalize">{{$doctors->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Get Appointment</button>
                        <button type="button" class="btn m-t-15 waves-effect btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection