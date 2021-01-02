@extends('layouts.backend')
@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Client</h1>
        
                
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/client-details">Client</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/client-setting">Setting</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content-full">
        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title">Client Settings</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center">Client Name</th>
                            <th class="text-center">System Name</th>
                            <th class="text-center">Logo Light</th>
                            <th class="text-center">Logo Dark</th>
                            <th class="text-center">Fav Icon</th>
                            <th class="text-center">SMTP Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($client_settings as $client_setting)
                        <tr>
                            @foreach($clients as $client)
                                @if($client->id == $client_setting->client_id)
                                <td class="text-center">{{ $client->company_name }}</td>
                                @endif
                            @endforeach
                            <td class="text-center">{{ $client_setting->system_name }}</td>
                            <td class="text-center">
                                <img src="storage/logo_light/{{$client_setting->logo_light}}" style="width:100px;height:100px;" alt="logo_light">
                            </td>
                            <td class="text-center">
                                <img src="storage/logo_dark/{{$client_setting->logo_dark}}" style="width:100px;height:100px;" alt="logo_dark">
                            </td>
                            <td class="text-center">
                                <img src="storage/fav_icon/{{$client_setting->fav_icon}}" style="width:100px;height:100px;" alt="fav_icon">
                            </td>
                            <td class="text-center">{{ $client_setting->smtp_details }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="content-full">
        <!-- Your Block -->
        <div class="block block-rounded">
            <div class="block-header">
                <h2>Client Setting</h2>
            </div>
            @if($msgsucc)
                <span class="succ">{{ $msgsucc }}</span>
            @endif
            <div class="block-content">
                <table class="table">
                    <form method="POST" action="/client-setting" enctype="multipart/form-data">
                    @csrf
                    <tbody>
                        <tr>
                            <td class="block-title">Company Name</td>
                            <td>
                                <select name="client_id" class="form-control">
                                    <option value="">Select Company</option>
                                    @foreach($clients as $client)
                                    <option value="{{$client->id}}">{{$client->company_name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('client_id'))
                                    <span class="error">{{ $errors->first('client_id') }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Client Slug(Optional)<small>If you want to change Slug of Company</small></td>
                            <td>
                                <input type="text" name="slug" class="form-control" value="{{old('slug')}}">
                            </td>
                        </tr>
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
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
