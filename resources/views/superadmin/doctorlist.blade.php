@extends('layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Doctor List</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('doctor.add')}}">
                                    @csrf
                                    <div class="row">
                                        <label for="name" class="col-lg-2 col-form-label">Name</label>
                                        <div class="form-group col-lg-3">
                                            <input type="text" class="form-control" id="name" name="name" required>
                                            <x-input-error :messages="$errors->get('name')" class="text text-danger" />
                                        </div>
                                        <label for="mobileno" class="offset-1 offset-md-0 offset-sm-0 col-lg-2 col-form-label">Mobile No</label>
                                        <div class="form-group col-lg-3">
                                            <input type="tel" class="form-control masked-phone" id="mobileno" name="mobileno" required data-phonemask="03__-_______">
                                            <x-input-error :messages="$errors->get('mobileno')" class="text text-danger" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="qualification" class="col-lg-2 col-form-label">Qualification</label>
                                        <div class="form-group col-lg-8">
                                            <input type="text" class="form-control" id="qualification" name="qualification" required>
                                            <x-input-error :messages="$errors->get('qualification')" class="text text-danger" />
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Add Doctor">
                                </form>
                            </div>
                            <hr>
                            <div class="card-footer">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th>S #</th>
                                            <th>Doctor Name</th>
                                            <th>Mobile No</th>
                                            <th>Qualification</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php($s=1)
                                        @foreach($doctor as $doctors)
                                            <tr>
                                                <th>{{$s++}}</th>
                                                <th class="text-capitalize">{{$doctors->name}}</th>
                                                <th>{{$doctors->mobileno}}</th>
                                                <th class="text-uppercase">{{$doctors->qualification}}</th>
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