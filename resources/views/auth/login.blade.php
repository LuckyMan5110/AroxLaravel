@extends('layouts.auth-master')

@section('title','Login')
@section('content')

    <div class="page">
        <div class="">
            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto">
                <div class="text-center">
                    <img src="../assets/images/brand/logo.png" class="" alt="">
                </div>
            </div>

            <div class="container-1">
                <div class="access-container p-6">
                    <form class="login-form validate-form" method="post" action="{{ route('login.perform') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <span class="login-form-title">
                            Member Login
                        </span>
                        @include('layouts.partials.messages')

                        @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                        @endif
                        <div class="access-input validate-input" data-validate ="Valid email is required: ex@abc.xyz">
                            <input class="login-input" type="text" value="{{ old('username') }}" name="username" placeholder="Username or Email" required="required" autofocus>
                            <span class="input-focus"></span>
                            <span class="input-symbol">
                                <i class="zmdi zmdi-email" aria-hidden="true"></i>
                            </span>
                        </div>
                        @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                        @endif
                        <div class="access-input validate-input" data-validate = "Password is required">
                            <input class="login-input" type="password" name="password" placeholder="Password" required="required">
                            <span class="input-focus"></span>
                            <span class="input-symbol">
                                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        {{-- <div class="text-right pt-3 pb-3">
                            <p class="mb-0"><a href="forgot-password.html" class="text-primary ml-1">Forgot Password?</a></p>
                        </div> --}}
                        <div class="">
                            <button type="submit" class="btn btn-primary-light btn-block">Login</button>
                        </div>
                        <div class="text-center pt-3">
                            <p class="mb-0">Not a member?<a href="/register" class="text-primary ml-1">Sign UP now</a></p>
                        </div>
                        <div class=" flex-c-m text-center mt-3">
                            <p>Or</p>
                            <div class="social-icons">
                                <ul>
                                    <li><a class="btn  btn-social btn-block"><i class="fa fa-google-plus"></i> Sign up with Google</a></li>
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