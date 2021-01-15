@extends('layouts.simple')
@section('title', 'Super Admin')
@section('content')
    <!-- Hero 
    <div class="content-full">
        <div class="row justify-content-center content-full">
            <div class="col-sm-3">
               <!-- <img src="storage/image/bar-bg2.jpg" class="login-img" alt="login-img">-->
               <!--
            </div>
            <div class="col-sm-3">
                <div class="login-form2">
                    <div class="block-content">
                        <form method="POST" action="/superadmin">
                            @csrf
                            <h1 class="superadmin-text">Login</h1>
                            @if($invalid)
                                <span class="error">{{ $invalid }}</span>
                            @endif
                            <div class="form-group">
                                
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email ID" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{old('password')}}">
                                @if ($errors->has('password'))
                                    <span class="error">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    -->
    <div class="hero-static">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <!-- Sign In Block -->
                    <div class="block block-rounded block-themed mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Sign In</h3>
                            <div class="block-options">
                                <a class="btn-block-option font-size-sm" href="op_auth_reminder.html">Forgot Password?</a>
                                <!--
                                <a class="btn-block-option" href="op_auth_signup.html" data-toggle="tooltip" data-placement="left" title="New Account">
                                    <i class="fa fa-user-plus"></i>
                                </a>
                                -->
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="p-sm-3 px-lg-4 py-lg-5">
                                <h1 class="h2 mb-1">OneUI</h1>
                                <p class="text-muted">
                                    Welcome, please login.
                                </p>

                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signin" action="/superadmin" method="POST">
                                    @csrf
                                    @if($invalid)
                                        <span class="error">{{ $invalid }}</span>
                                    @endif
                                    <div class="py-3">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-alt form-control-lg" name="email" id="email" placeholder="Email ID" value="{{old('email')}}">
                                            @if ($errors->has('email'))
                                                <span class="error">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-alt form-control-lg" name="password" id="password" placeholder="Password" value="{{old('password')}}">
                                            @if ($errors->has('password'))
                                                <span class="error">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember">
                                                <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-xl-5">
                                            <button type="submit" class="btn btn-block btn-alt-primary">
                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                    <!-- END Sign In Block -->
                </div>
            </div>
        </div>
        <!--
        <div class="content content-full font-size-sm text-muted text-center">
            <strong>OneUI 4.8</strong> &copy; <span data-toggle="year-copy"></span>
        </div>
        -->
    </div>
    <!-- END Hero -->
@endsection
