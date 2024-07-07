@extends('layouts.credentialsmaster')
@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Update Password</h4>
                        </div>
                        <div class="card-body">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="POST" action="{{ route('password.store') }}" class="needs-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Old Password</label>
                                    </div>
                                    <input type="hidden" name="id" value="{{$id}}">
                                    <input id="oldpassword" type="password" data-id="{{$id}}" class="form-control" name="oldpassword" required>
                                    <x-input-error :messages="$errors->get('oldpassword')" class="text text-danger" />
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">New Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <x-input-error :messages="$errors->get('password')" class="text text-danger" />
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password_confirmation" class="control-label">Confirm Password</label>
                                    </div>
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="text text-danger" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection