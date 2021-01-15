@extends('manager.layouts.backend')
@section('title', 'Profile')
@section('content')
    <div class="bg-image" style="background-image: url('/media/photos/photo8@2x.jpg');">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="/media/avatars/avatar13.jpg" alt="">
                </div>
                <h1 class="h2 text-white mb-0">{{session()->get('manager')['name']}}</h1>
                <span class="text-white-75">Manager</span>
            </div>
        </div>
    </div>
    <!-- END Hero -->
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
                                <label for="one-profile-edit-username">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$manager->name}}">
                            </div>
                            <div class="form-group">
                                <label for="one-profile-edit-email">Email ID</label>
                                <input type="email" class="form-control" id="email" name="one-profile-edit-email" value="{{$manager->email}}">
                            </div>
                            <div class="form-group">
                                <label for="one-profile-edit-username">Mobile No</label>
                                <input type="number" class="form-control" id="mobile" name="mobile" value="{{$manager->mobile}}">
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
                    <form action="/{{session()->get('client-slug')}}/manager/profile" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$manager->id}}">
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
    </div>
    <!-- Hero 
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Profile</h1>
                
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/manager/profile">Profile</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    -->
    <!-- Page Content
    <div class="content-full">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="block block-content">
                    <h2>Profile</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="block-title">Name</td>
                                <td>{{$manager->name}}</td>
                            </tr>
                            <tr>
                                <td class="block-title">Email ID</td>
                                <td>{{$manager->email}}</td>
                            </tr>
                            <tr>
                                <td class="block-title">Mobile No</td>
                                <td>{{$manager->mobile}}</td>
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
                    <form action="/manager/profile" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$manager->id}}">
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
