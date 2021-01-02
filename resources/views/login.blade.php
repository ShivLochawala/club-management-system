@extends('layouts.simple')

@section('content')
    <!-- Hero -->
    <div class="">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <img src="storage/image/login-bg.jpg" class="login-img" alt="login-img">
            </div>
            <div class="col-xl-3">
                <div class="login-form">
                    <div class="block-content">
                        <form method="POST" action="login">
                            @csrf
                            <h1>Login</h1>
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
                                <input type="password" class="form-control" name="password" id="Password" placeholder="Password" value="{{old('password')}}">
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
        </div>
    </div>
    <!-- END Hero -->
@endsection
