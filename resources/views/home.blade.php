@extends('layouts.simple')
@section('title', 'LIBRA')
@section('content')
    <!-- Hero -->
    <div class="content-full">
        <div class="row justify-content-center content-full">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-3">
                <div class="login-form2">
                    <div class="block-header">
                       <h5 class="superadmin-text">In which side you want to go?</h5> 
                    </div>
                    <div class="block-content content-full" style="word-spacing: 50px;">
                        <a href="/superadmin"><button class="btn btn-success">Super Admin</button></a> 
                        <a href="/admin"><button class="btn btn-primary" style="padding-left:30px; padding-right:30px;"> Client</button></a>
                    </div>
                    <div class="block-content content-full" style="word-spacing: 50px;">
                        <a href="/manager"><button class="btn btn-warning" style="padding-left:28px; padding-right:28px;"> Manager</button></a>
                        <a href="/waiter"><button class="btn btn-light" style="padding-left:28px; padding-right:28px;"> Waiter</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <!-- END Hero -->
@endsection
