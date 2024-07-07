@extends('layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add User</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('user.add')}}">
                                    @csrf
                                    <div class="row">
                                        <label for="name" class="col-lg-2 col-form-label">Name</label>
                                        <div class="form-group col-lg-3">
                                            <input type="name" class="form-control" id="name" name="name" required>
                                            <x-input-error :messages="$errors->get('name')" class="text text-danger" />
                                        </div>
                                        <label for="email" class="offset-1 offset-md-0 offset-sm-0 col-lg-2 col-form-label">Email</label>
                                        <div class="form-group col-lg-3">
                                            <input type="email" class="form-control" id="email" name="email" required>
                                            <x-input-error :messages="$errors->get('email')" class="text text-danger" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="passowrd" class="col-lg-2 col-form-label">Password</label>
                                        <div class="form-group col-lg-3">
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            <x-input-error :messages="$errors->get('password')" class="text text-danger" />
                                        </div>
                                        <label for="password_confirmation" class="offset-1 offset-md-0 offset-sm-0 col-lg-2 col-form-label">Confirm Passowrd</label>
                                        <div class="form-group col-lg-3">
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="text text-danger" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="role" class="col-lg-2 col-form-label">Role</label>
                                        <div class="form-group col-lg-3">
                                            <select class="form-control" id="role" name="role" required>
                                                <option value="" selected disabled="">Select Role</option>
                                                <option value="2">Admin</option>
                                                <option value="3">User</option>
                                            </select>
                                            <x-input-error :messages="$errors->get('role')" class="text text-danger" />
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Add User">
                                </form>
                            </div>
                            <hr>
                            <div class="card-footer">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th>S #</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php($s=1)
                                        @foreach($user as $users)
                                        <tr>
                                            <th>{{$s++}}</th>
                                            <th class="text-capitalize">{{$users->name}}</th>
                                            <th>{{$users->email}}</th>
                                            <th>
                                                @if($users->role!=1)
                                                <a class="btn btn-icon" href="#" data-id="{{$users->id}}" id="deleteuser" title="Delete User"><i class="fas fa-trash"></i></a>
                                                    @else
                                                    <a class="btn btn-icon" disabled title="Delete Not Allowed"><i class="fas fa-trash"></i></a>
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