@extends('layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-capitalize">{{$name}}-{{$patientid}} Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th>S #</th>
                                            <th>Date</th>
                                            <th>Doctor Name</th>
                                            <th>Remarks</th>
                                            <th>Medication</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php($s=1)
                                        @foreach($appintment as $appointments)
                                        <tr>
                                            <th>{{$s++}}</th>
                                            <th>{{$appointments->date}}</th>
                                            <th class="text-capitalize">{{$appointments->doctor->name}}</th>
                                            <th class="text-capitalize">{{$appointments->remarks}}</th>
                                            <th class="text-capitalize">{{$appointments->medications}}</th>
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
@endsection