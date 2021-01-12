@extends('layouts.backend')
@section('title', 'Setting')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Setting</h1>
        
                
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/settings">Setting</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/settings/{{$admin_setting->id}}">Edit</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="justify-content-center">
            <div class="block block-rounded">
                <div class="block-header  bg-primary-dark">
                    <h2 class="block-title superadmin-text">Edit Setting</h2>
                </div>
                    @if($msgsucc)
                        <span class="succ">{{ $msgsucc }}</span>
                    @endif
                    <table class="table">
                        <form method="POST" action="/settings/{{$admin_setting->id}}" enctype="multipart/form-data">
                        @csrf
                        <tbody>
                            <input type="hidden" name="id" value="{{$admin_setting->id}}">
                            <tr>
                                <td class="block-title">System Name</td>
                                <td>
                                    <input type="text" name="system_name" class="form-control" value="{{$admin_setting->system_name}}">
                                    @if ($errors->has('system_name'))
                                        <span class="error">{{ $errors->first('system_name') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Title</td>
                                <td>
                                    <input type="text" name="title" class="form-control" value="{{$admin_setting->title}}">
                                    @if ($errors->has('title'))
                                        <span class="error">{{ $errors->first('title') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Description</td>
                                <td>
                                    <input type="text" name="description" class="form-control" value="{{$admin_setting->description}}">
                                    @if ($errors->has('description'))
                                        <span class="error">{{ $errors->first('description') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Footer</td>
                                <td>
                                    <input type="text" name="footer" class="form-control" value="{{$admin_setting->footer}}">
                                    @if ($errors->has('footer'))
                                        <span class="error">{{ $errors->first('footer') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Logo Light</td>
                                <td>
                                    <img src="/storage/logo_light/{{$admin_setting->logo_light}}" style="width:100px;height:100px;" alt="logo_light"/>
                                    <input type="file" name="logo_light" class="form-control" value="{{$admin_setting->logo_light}}">
                                    @if ($errors->has('logo_light'))
                                        <span class="error">{{ $errors->first('logo_light') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Logo Dark</td>
                                <td>
                                    <img src="/storage/logo_dark/{{$admin_setting->logo_dark}}" style="width:100px;height:100px;" alt="logo_dark">
                                    <input type="file" name="logo_dark" class="form-control" value="{{$admin_setting->logo_dark}}">
                                    @if ($errors->has('logo_dark'))
                                        <span class="error">{{ $errors->first('logo_dark') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Fav Icon</td>
                                <td>
                                    <img src="/storage/fav_icon/{{$admin_setting->fav_icon}}" style="width:100px;height:100px;" alt="fav_icon">
                                    <input type="file" name="fav_icon" class="form-control" value="{{$admin_setting->fav_icon}}">
                                    @if ($errors->has('fav_icon'))
                                        <span class="error">{{ $errors->first('fav_icon') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">SMTP Details</td>
                                <td>
                                    <input type="text" name="smtp_details" class="form-control" value="{{$admin_setting->smtp_details}}">
                                    @if ($errors->has('smtp_details'))
                                        <span class="error">{{ $errors->first('smtp_details') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center;">
                                <button class="btn btn-success">Save</button>
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
