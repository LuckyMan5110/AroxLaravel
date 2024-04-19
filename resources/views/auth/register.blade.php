@extends('layouts.auth-master')
@section('title','Register')

@section('content')
    {{-- <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        
        @include('auth.partials.copy')
    </form> --}}

    <div class="page">
        <div class="">

            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto">
                <div class="text-center">
                    <img src="../assets/images/brand/logo.png" class="h-8" alt="">
                </div>
            </div>
            <div class="container-1">
                <div class="access-container p-6">
                    <form class="login-form validate-form" method="post" action="{{ route('register.perform') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <span class="login-form-title">
                            Registration
                        </span>
                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                        <div class="access-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="login-input" type="text" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                            <span class="input-focus"></span>
                            <span class="input-symbol">
                                <i class="mdi mdi-account" aria-hidden="true"></i>
                            </span>
                        </div>

                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                        <div class="access-input validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="login-input" type="text" name="email" value="{{ old('email') }}" placeholder="Email" required="required">
                            <span class="input-focus"></span>
                            <span class="input-symbol">
                                <i class="zmdi zmdi-email" aria-hidden="true"></i>
                            </span>
                        </div>

                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                        <div class="access-input validate-input" data-validate = "Password is required">
                            <input class="login-input" type="password" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                            <span class="input-focus"></span>
                            <span class="input-symbol">
                                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        
                        @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                        <div class="access-input validate-input" data-validate = "Password is required">
                            <input class="login-input" type="password"  name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                            <span class="input-focus"></span>
                            <span class="input-symbol">
                                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                            </span>
                           
                        </div>


                        <div class="form-group form-elements">
                            <div class="form-label">Choose type</div>
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="user_type" value="1" checked>
                                    <span class="custom-control-label">Person</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="user_type" value="2">
                                    <span class="custom-control-label">Company</span>
                                </label>
                            </div>
                        </div>

                        {{-- <label class="custom-control custom-checkbox mt-4 mb-4">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
                        </label> --}}
                        <div class="">
                            <button type="submit" class="btn btn-primary-light btn-block">Register</button>
                        </div>
                        <div class="text-center pt-3">
                            <p class="mb-0">Already have account?<a href="/login" class="text-primary ml-1">Sign In</a></p>
                        </div>
                        <div class=" flex-c-m text-center mt-3">
                            <p>Or</p>
                            <div class="social-icons">
                                <ul>
                                    <li><a class="btn  btn-social btn-block"><i class="fa fa-google-plus "></i> Sign up with Google</a></li>
                                    <li><a class="btn  btn-social btn-block mt-2"><i class="fa fa-facebook"></i> Sign in with Facebook</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
@endsection