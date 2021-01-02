@extends('layouts.backend')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Profile</h1>
                
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/profile">Profile</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content-full">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="block block-content">
                    <h2>Profile</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="block-title">Username</td>
                                <td>{{$admin->username}}</td>
                            </tr>
                            <tr>
                                <td class="block-title">First Name</td>
                                <td>{{$admin->email}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-6">
                <div class="block block-content">
                    <h2>Change Password</h2>
                    <table class="table">
                    @if($msgsucc)
                        <span class="error">{{ $msgsucc }}</span>
                    @endif
                    <form action="/profile" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$admin->id}}">
                        <tbody>
                            <tr>
                                <td class="block-title">Current Password</td>
                                <td>
                                    <input type="password" name="current_password" class="form-control">
                                    @if ($errors->has('current_password'))
                                        <span class="error">{{ $errors->first('current_password') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">New Password</td>
                                <td>
                                    <input type="password" name="new_password" class="form-control">
                                    @if ($errors->has('new_password'))
                                        <span class="error">{{ $errors->first('new_password') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Confirm Password</td>
                                <td>
                                    <input type="password" name="confirm_password" class="form-control">
                                    @if ($errors->has('confirm_password'))
                                        <span class="error">{{ $errors->first('confirm_password') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:right;">
                                    <button class="btn btn-primary">Change</button>
                                </td>
                            </tr>
                        </tbody>
                    </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
