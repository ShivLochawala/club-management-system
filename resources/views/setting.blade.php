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
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    @if($admin_setting != "Not")
    <div class="content">
        <div class="justify-content-center">
            <div class="block">
                <div class="block-header  bg-primary-dark">
                <h2 class="block-title superadmin-text">Setting Details<a href="/settings/{{$admin_setting->id}}" style="float:right;"><button type="button" class="btn btn-sm btn-alt-success js-tooltip-enabled" data-toggle="tooltip" title="Edit Settings" data-original-title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                            </button></a></h2>
                </div>
               
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="block-title">System Name</td>
                            <td>{{$admin_setting->system_name}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Title</td>
                            <td>{{$admin_setting->title}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Description</td>
                            <td>{{$admin_setting->description}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Footer</td>
                            <td>{{$admin_setting->footer}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Logo Light</td>
                            <td>
                                <img src="storage/logo_light/{{$admin_setting->logo_light}}" style="width:100px;height:100px;" alt="logo_light">
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Logo Dark</td>
                            <td>
                                <img src="storage/logo_dark/{{$admin_setting->logo_dark}}" style="width:100px;height:100px;" alt="logo_dark">
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Fav Icon</td>
                            <td>
                                <img src="storage/fav_icon/{{$admin_setting->fav_icon}}" style="width:100px;height:100px;" alt="fav_icon">
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">SMTP Detail</td>
                            <td>{{$admin_setting->smtp_details}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @else
    <div class="content">
        <div class="justify-content-center">
            <div class="block block-rounded">
                <div class="block-content">
                    <h2>Add Setting</h2>
                    @if($msgsucc)
                        <span class="succ">{{ $msgsucc }}</span>
                    @endif
                    <table class="table">
                        <form method="POST" action="/settings" enctype="multipart/form-data">
                        @csrf
                        <tbody>
                            <tr>
                                <td class="block-title">System Name</td>
                                <td>
                                    <input type="text" name="system_name" class="form-control" value="{{old('system_name')}}">
                                    @if ($errors->has('system_name'))
                                        <span class="error">{{ $errors->first('system_name') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Title</td>
                                <td>
                                    <input type="text" name="title" class="form-control" value="{{old('title')}}">
                                    @if ($errors->has('title'))
                                        <span class="error">{{ $errors->first('title') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Description</td>
                                <td>
                                    <input type="text" name="description" class="form-control" value="{{old('description')}}">
                                    @if ($errors->has('description'))
                                        <span class="error">{{ $errors->first('description') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Footer</td>
                                <td>
                                    <input type="text" name="footer" class="form-control" value="{{old('footer')}}">
                                    @if ($errors->has('footer'))
                                        <span class="error">{{ $errors->first('footer') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Logo Light</td>
                                <td>
                                    <input type="file" name="logo_light" class="form-control" value="{{old('logo_light')}}">
                                    @if ($errors->has('logo_light'))
                                        <span class="error">{{ $errors->first('logo_light') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Logo Dark</td>
                                <td>
                                    <input type="file" name="logo_dark" class="form-control" value="{{old('logo_dark')}}">
                                    @if ($errors->has('logo_dark'))
                                        <span class="error">{{ $errors->first('logo_dark') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">Fav Icon</td>
                                <td>
                                    <input type="file" name="fav_icon" class="form-control" value="{{old('fav_icon')}}">
                                    @if ($errors->has('fav_icon'))
                                        <span class="error">{{ $errors->first('fav_icon') }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="block-title">SMTP Details</td>
                                <td>
                                    <input type="text" name="smtp_details" class="form-control" value="{{old('smtp_details')}}">
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
    @endif
    <!-- END Page Content -->
@endsection
