@extends('layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Today Patient Appointments</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th>S #</th>
                                            <th>Patient id</th>
                                            <th>Patient Name</th>
                                            <th>Doctor Name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php($s=1)
                                        @foreach($appointment as $appointments)
                                        <tr>
                                            <th>{{$s++}}</th>
                                            <th>{{$appointments->patient->patientid}}</th>
                                            <th class="text-capitalize">{{$appointments->patient->name}}</th>
                                            <th class="text-capitalize">{{$appointments->doctor->name}}</th>
                                            <th>
                                                <a class="btn btn-icon" href="#" data-toggle="modal" data-target="#medication" data-target-id="{{$appointments->id}}" title="Get Medication"><i class="fas fa-eye"></i></a>
                                                <a class="btn btn-icon" href="#" data-id="{{$appointments->id}}" id="cancelappointment" title="Cancel Appointment"><i class="fas fa-trash"></i></a>
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
    <div class="modal fade" id="medication" tabindex="-1" role="dialog" aria-labelledby="formModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Get Medication</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('medication')}}">
                        @csrf
                        <div class="form-group">
                            <label>Remarks</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <input type="hidden" id="id" name="id" required>
                                <input type="text" class="form-control" name="remarks" id="remarks" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Medications</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="medications" id="medications" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                        <button type="button" class="btn m-t-15 waves-effect btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection