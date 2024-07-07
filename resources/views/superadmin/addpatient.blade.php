@extends('layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Patient</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('patient.store')}}">
                                    @csrf
                                <div class="row">
                                    <label for="cnic" class="col-lg-1 col-form-label">Cnic</label>
                                    <div class="form-group col-lg-3">
                                        <input type="text" class="form-control" id="cnic" name="cnic" required minlength="13" maxlength="13">
                                        <span class="text text-sm">Write CNIC without Dashes</span>
                                        @error('cnic')
                                        <div class=" text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <label for="name" class="col-form-label">Name</label>
                                    <div class="form-group col-lg-3">
                                        <input type="text" class="form-control" id="name" name="name" required>
                                        @error('name')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <label for="dob" class="col-form-label">DOB</label>
                                    <div class="form-group col-lg-3">
                                        <input type="date" class="form-control" id="dob" name="dob" required>
                                        @error('dob')
                                        <div class=" text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">

                                    <label for="mobileno" class="col-lg-1 col-form-label">Mobile No</label>
                                    <div class="form-group col-lg-3">
                                        <input type="tel" class="form-control masked-phone" id="mobileno" name="mobileno" data-phonemask="03__-_______" required>
                                        @error('mobileno')
                                        <div class=" text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <label for="cellno" class="col-form-label">Cell No</label>
                                    <div class="form-group col-lg-3">
                                        <input type="tel" class="form-control masked-phone" id="cellno" name="cellno" data-phonemask="03__-_______">
                                    </div>
                                    <label for="city" class="col-form-label">City</label>
                                    <div class="form-group col-lg-3">
                                        <select class="form-control" required id="city" name="city">
                                            <option value="" selected disabled="">Select City</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                        @error('city')
                                        <div class=" text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                    <div class="row">
                                        <label class="col-lg-1 d-block">Gender</label>
                                        <div class="col-lg-1 form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="male" value="male" name="gender" required>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="female" value="female" name="gender">
                                            <label class="form-check-label" for="female">FeMale</label>
                                        </div>
                                        @error('gender')
                                        <div class=" text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Add Patient">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection