@extends('layouts.backend')
@section('title', 'Profile')
@section('content')
    <!-- Hero 
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
    </div>-->
    <div class="bg-image" style="background-image: url('/media/photos/photo8@2x.jpg');">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="/media/avatars/avatar13.jpg" alt="">
                </div>
                <h1 class="h2 text-white mb-0">{{session()->get('admin')['username']}}</h1>
                <span class="text-white-75">Super Admin</span>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- User Profile -->
        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title">User Profile</h3>
            </div>
            <div class="block-content">
                <form action="be_pages_projects_edit.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="font-size-sm text-muted">
                                Your account’s vital info. Your username will be publicly visible.
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="one-profile-edit-username">Username</label>
                                <input type="text" class="form-control" id="one-profile-edit-username" name="one-profile-edit-username" placeholder="Enter your username.." value="{{$admin->username}}">
                            </div>
                            <div class="form-group">
                                <label for="one-profile-edit-email">Email Address</label>
                                <input type="email" class="form-control" id="one-profile-edit-email" name="one-profile-edit-email" placeholder="Enter your email.." value="{{$admin->email}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END User Profile -->

        <!-- Change Password -->
        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title">Change Password</h3>
            </div>
            <div class="block-content">
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="font-size-sm text-muted">
                            Changing your sign in password is an easy way to keep your account secure.
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                    <form action="/profile" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$admin->id}}">
                        @if($msgsucc)
                            <span class="error">{{ $msgsucc }}</span>
                        @endif
                        <div class="form-group">
                            <label for="one-profile-edit-password">Current Password</label>
                            <input type="password" name="current_password" class="form-control">
                                @if ($errors->has('current_password'))
                                    <span class="error">{{ $errors->first('current_password') }}</span>
                                @endif
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="one-profile-edit-password-new">New Password</label>
                                <input type="password" name="new_password" class="form-control">
                                @if ($errors->has('new_password'))
                                    <span class="error">{{ $errors->first('new_password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="one-profile-edit-password-new-confirm">Confirm New Password</label>
                                <input type="password" name="confirm_password" class="form-control">
                                @if ($errors->has('confirm_password'))
                                    <span class="error">{{ $errors->first('confirm_password') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-primary">
                                Update
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Change Password -->

        <!-- Billing Information -->
        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title">Billing Information</h3>
            </div>
            <div class="block-content">
                <form action="be_pages_projects_edit.html" method="POST" onsubmit="return false;">
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="font-size-sm text-muted">
                                Your billing information is never shown to other users and only used for creating your invoices.
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="form-group">
                                <label for="one-profile-edit-company-name">Company Name (Optional)</label>
                                <input type="text" class="form-control" id="one-profile-edit-company-name" name="one-profile-edit-company-name">
                            </div>
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="one-profile-edit-firstname">Firstname</label>
                                    <input type="text" class="form-control" id="one-profile-edit-firstname" name="one-profile-edit-firstname">
                                </div>
                                <div class="col-6">
                                    <label for="one-profile-edit-lastname">Lastname</label>
                                    <input type="text" class="form-control" id="one-profile-edit-lastname" name="one-profile-edit-lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="one-profile-edit-street-1">Street Address 1</label>
                                <input type="text" class="form-control" id="one-profile-edit-street-1" name="one-profile-edit-street-1">
                            </div>
                            <div class="form-group">
                                <label for="one-profile-edit-street-2">Street Address 2</label>
                                <input type="text" class="form-control" id="one-profile-edit-street-2" name="one-profile-edit-street-2">
                            </div>
                            <div class="form-group">
                                <label for="one-profile-edit-city">City</label>
                                <input type="text" class="form-control" id="one-profile-edit-city" name="one-profile-edit-city">
                            </div>
                            <div class="form-group">
                                <label for="one-profile-edit-postal">Postal code</label>
                                <input type="text" class="form-control" id="one-profile-edit-postal" name="one-profile-edit-postal">
                            </div>
                            <div class="form-group">
                                <label for="one-profile-edit-vat">VAT Number</label>
                                <input type="text" class="form-control" id="one-profile-edit-vat" name="one-profile-edit-vat" value="IT00000000" disabled>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Billing Information -->

        <!-- Connections -->
        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title">Connections</h3>
            </div>
            <div class="block-content">
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="font-size-sm text-muted">
                            You can connect your account to third party networks to get extra features.
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-7">
                        <div class="form-group row">
                            <div class="col-sm-10 col-md-8 col-xl-6">
                                <a class="btn btn-block btn-alt-danger text-left" href="javascript:void(0)">
                                    <i class="fab fa-fw fa-google opacity-50 mr-1"></i> Connect to Google
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 col-md-8 col-xl-6">
                                <a class="btn btn-block btn-alt-info text-left" href="javascript:void(0)">
                                    <i class="fab fa-fw fa-twitter opacity-50 mr-1"></i> Connect to Twitter
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 col-md-8 col-xl-6">
                                <a class="btn btn-block btn-alt-primary bg-transparent d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>
                                        <i class="fab fa-fw fa-facebook mr-1"></i> John Doe
                                    </span>
                                    <i class="fa fa-fw fa-check mr-1"></i>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4 col-xl-6 mt-1 d-md-flex align-items-md-center font-size-sm">
                                <a class="btn btn-sm btn-light btn-rounded" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-pencil-alt mr-1"></i> Edit Facebook Connection
                                </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 col-md-8 col-xl-6">
                                <a class="btn btn-block btn-alt-warning bg-transparent d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>
                                        <i class="fab fa-fw fa-instagram mr-1"></i> @john_doe
                                    </span>
                                    <i class="fa fa-fw fa-check mr-1"></i>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4 col-xl-6 mt-1 d-md-flex align-items-md-center font-size-sm">
                                <a class="btn btn-sm btn-light btn-rounded" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-pencil-alt mr-1"></i> Edit Instagram Connection
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Connections -->
    </div>
    <!--
    <div class="content">
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
                                <td class="block-title">Email ID</td>
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
    -->
    <!-- END Page Content -->
@endsection
