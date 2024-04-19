@extends('layouts.app-master')
@section('title','User add')

@section('content')
    <div class="side-app useradd">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add</li>
            </ol>
            <div>
                <a href="#" class="btn btn-sm btn-primary"><i class="ti-settings"></i> General Settings </a>
                <a href="#" class="btn btn-sm btn-secondary"><i class="ti-file"></i> Print </a>
                <a href="#" class="btn btn-sm btn-danger">Buy Now </a>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="userprofile">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            <h3 class="mb-0 card-title">Personal Avatar</h3>
                                        </div>
                                        <div class="card-body">
                                            <input type="file" name="image_p" class="dropify" data-height="300" />
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header">
                                            <h3 class="mb-0 card-title">Company Avatar</h3>
                                        </div>
                                        <div class="card-body">
                                            <input type="file" name="image_b" class="dropify" data-height="300" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-9 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add New User</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Full Name or Company Name</label>
                                        <input type="text" class="form-control"  name="name"  placeholder="Type your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        @if ($errors->has('username'))
                                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                        @endif
                                        <input type="text" class="form-control" name="username" placeholder="Type your Username" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                                <input type="text" class="form-control" name="email" placeholder="Type your email" required="required">
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        @if ($errors->has('password'))
                                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                        @endif
                                        <input type="password" class="form-control" name="password"  placeholder="Type your Password" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirem Password</label>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your previous password" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group overflow-hidden">
                                        <label>User Type</label>
                                        <select class="form-control select2 w-100" name="user_type">
                                            <option value="1" selected="selected">Person</option>
                                            <option value="2">Company</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group overflow-hidden">
                                        <label>User State</label>
                                        <select class="form-control select2 w-100" name="state">
                                            <option value="1" selected="selected">Non-verified</option>
                                            <option value="2">Verified</option>
                                            <option value="3">Guest</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('users.index') }}" class="btn btn-danger-light mt-1 mr-3"><i class="typcn typcn-chevron-left"></i>Back to list</a>
                            <button type="submit" class="btn btn-success-light mt-1"><i class="typcn typcn-clipboard"></i>Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->
        </form>
        


    </div>
@endsection