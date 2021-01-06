@extends('layouts.simple')
@section('title', 'Super Admin')
@section('content')
    <!-- Hero -->
    <div class="content-full">
        <div class="row justify-content-center content-full">
            <div class="col-sm-3">
               <!-- <img src="storage/image/bar-bg2.jpg" class="login-img" alt="login-img">-->
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
                                <!--<label for="exampleInputEmail1">Email ID</label>-->
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
    <!-- END Hero -->
@endsection
