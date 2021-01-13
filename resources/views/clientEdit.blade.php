@extends('layouts.backend')
@section('title', 'Client')
@section('content')
    <!-- Hero 
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                @if (Request::path() == "dashboard/$clients->slug/edit")
                    <h1 class="flex-sm-fill h3 my-2">Dashboard</h1>
                @elseif(Request::path() == "client-details/$clients->slug/edit")
                    <h1 class="flex-sm-fill h3 my-2">Client</h1>
                @endif
                
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            @if (Request::path() == "dashboard/$clients->slug/edit")
                                <a class="link-fx" href="/dashboard">Dashboard</a>
                            @elseif(Request::path() == "client-details/$clients->slug/edit")
                                <a class="link-fx" href="/client-details">Client</a>
                            @endif
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            @if (Request::path() == "dashboard/$clients->slug/edit")
                                <a class="link-fx" href="/dashboard/{{$clients->slug}}/edit">Edit</a>
                            @elseif(Request::path() == "client-details/$clients->slug/edit")
                                <a class="link-fx" href="/client-details/{{$clients->slug}}/edit">Edit</a>
                            @endif
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    -->
    <!-- END Hero -->
    <div class="bg-image" style="background-image: url('/media/photos/photo8@2x.jpg');">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="/media/avatars/avatar13.jpg" alt="">
                </div>
                <h1 class="h2 text-white mb-0">{{$clients->first_name}} {{$clients->last_name}}</h1>
                <span class="text-white-75">{{$clients->company_name}}</span>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block block-rounded">
            <div class="block-header bg-primary-dark">
                <h2 class="block-title superadmin-text">Edit Client</h2>
            </div>
            @if($msgsucc)
                <span class="succ">{{ $msgsucc }}</span>
            @endif
            <div class="block-content">
                <table class="table">
                @if (Request::path() == "dashboard/$clients->slug/edit")
                    <form method="POST" action="/dashboard/{{$clients->slug}}/edit">
                @elseif(Request::path() == "client-details/$clients->slug/edit")
                    <form method="POST" action="/client-details/{{$clients->slug}}/edit">
                @endif
                    @csrf
                    <tbody>
                        <input type="hidden" name="id" class="form-control" value="{{$clients->id}}">
                        <tr>
                            <td class="block-title">Company Name</td>
                            <td><input type="text" name="company_name" class="form-control" value="{{$clients->company_name}}">
                            @if ($errors->has('company_name'))
                                <span class="error">{{ $errors->first('company_name') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">First Name</td>
                            <td><input type="text" name="first_name" class="form-control" value="{{$clients->first_name}}">
                            @if ($errors->has('first_name'))
                                <span class="error">{{ $errors->first('first_name') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Last Name</td>
                            <td><input type="text" name="last_name" class="form-control" value="{{$clients->last_name}}">
                            @if ($errors->has('last_name'))
                                <span class="error">{{ $errors->first('last_name') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Address</td>
                            <td><input type="text" name="address" class="form-control" value="{{$clients->address}}">
                            @if ($errors->has('address'))
                                <span class="error">{{ $errors->first('address') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Country</td>
                            <td><input type="text" name="country" class="form-control" value="{{$clients->country}}">
                            @if ($errors->has('country'))
                                <span class="error">{{ $errors->first('country') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">State</td>
                            <td>
                            <input type="text" name="state" class="form-control" value="{{$clients->state}}">
                            @if ($errors->has('state'))
                                <span class="error">{{ $errors->first('state') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">City</td>
                            <td>
                            <input type="text" name="city" class="form-control" value="{{$clients->city}}">
                            @if ($errors->has('city'))
                                <span class="error">{{ $errors->first('city') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Postal Code</td>
                            <td>
                            <input type="text" name="postal_code" class="form-control" value="{{$clients->postal_code}}">
                            @if ($errors->has('postal_code'))
                                <span class="error">{{ $errors->first('postal_code') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Email ID</td>
                            <td>
                            <input type="email" name="email" class="form-control" value="{{$clients->email}}">
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Phone</td>
                            <td>
                            <input type="text" name="phone" class="form-control" value="{{$clients->phone}}">
                            @if ($errors->has('phone'))
                                <span class="error">{{ $errors->first('phone') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Mobile</td>
                            <td>
                            <input type="number" name="mobile" class="form-control" value="{{$clients->mobile}}">
                            @if ($errors->has('mobile'))
                                <span class="error">{{ $errors->first('mobile') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">status</td>
                            <td>
                            <select name="status" id="" class="form-control" >
                                <option value="{{($clients->status == 1)?1:0}}">{{($clients->status == 1)?"Active":"Ban" }}</option>
                                <option value="1">Active</option>
                                <option value="0">Ban</option>
                            </select>
                            <!--<input type="text" name="status" class="form-control" value="{{$clients->status}}">-->
                            @if ($errors->has('status'))
                                <span class="error">{{ $errors->first('status') }}</span>
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
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
