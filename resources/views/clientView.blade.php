@extends('layouts.backend')
@section('title', 'Client')
@section('content')
    <!-- Hero 
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                @if (Request::path() == "dashboard/$clients->slug")
                    <h1 class="flex-sm-fill h3 my-2">Dashboard</h1>
                @elseif(Request::path() == "client-details/$clients->slug")
                    <h1 class="flex-sm-fill h3 my-2">Client</h1>
                @endif
                
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            @if (Request::path() == "dashboard/$clients->slug")
                                <a class="link-fx" href="/dashboard">Dashboard</a>
                            @elseif(Request::path() == "client-details/$clients->slug")
                                <a class="link-fx" href="/client-details">Client</a>
                            @endif
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            @if (Request::path() == "dashboard/$clients->slug")
                                <a class="link-fx" href="/dashboard/{{$clients->slug}}">View</a>
                            @elseif(Request::path() == "client-details/$clients->slug")
                                <a class="link-fx" href="/client-details/{{$clients->slug}}">View</a>
                            @endif
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    -->
    <!-- END Hero -->

    <!-- Page Content -->
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
    <!-- Stats -->
    <div class="bg-white border-bottom">
        <div class="content content-boxed">
            <div class="row items-push text-center">
                <div class="col-6 col-md-4">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Users</div>
                    <a class="link-fx font-size-h3">03</a>
                </div>
                <div class="col-6 col-md-4">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Expiring in (Days)</div>
                    <a class="link-fx font-size-h3">{{$days}}</a>
                </div>
                <div class="col-6 col-md-4">
                    <div class="font-size-sm font-w600 text-muted text-uppercase">Want to Extent?</div>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#extent-validity">Extent Validity</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Stats -->
    <div class="content content-boxed">
        <div class="row">
            <div class="col-md-7 col-xl-8">
                <!-- Updates -->
                <div class="block block-rounded">
                    <div class="block-header bg-primary-dark">
                        <h4 class="block-title superadmin-text">Basic Details</h4>
                    </div>
                    <div class="block-content">
                        <table class="table borderless">
                            <tbody>
                                <tr>
                                    <td class="block-title">Company Name</td>
                                    <td>{{$clients->company_name}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">First Name</td>
                                    <td>{{$clients->first_name}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">Last Name</td>
                                    <td>{{$clients->last_name}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">Address</td>
                                    <td>{{$clients->address}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">Country</td>
                                    <td>{{$clients->country}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">State</td>
                                    <td>{{$clients->state}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">City</td>
                                    <td>{{$clients->city}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">Postal Code</td>
                                    <td>{{$clients->postal_code}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">Email ID</td>
                                    <td>{{$clients->email}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">Phone</td>
                                    <td>{{$clients->phone}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">Mobile</td>
                                    <td>{{$clients->mobile}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">status</td>
                                    <td>{{ ($clients->status == 1)?"Active":"Ban" }}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">Renewal Date</td>
                                    <td>{{ $clients->renewal_date}}</td>
                                </tr>
                                <tr>
                                    <td class="block-title">Expired Date</td>
                                    <td>{{ $clients->expiring_date}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title superadmin-text">Setting Details</h3>
                    </div>
                  
                   @if($client_settings == "Not")
                    <div class="block-content block-content-full">
                        There is no client setting details are enterd. If you want to add settings than clieck on 
                        <a href="/client-setting" style="float:right; margin-left:10px;">
                        <button type="button" class="btn btn-sm btn-alt-success js-tooltip-enabled" data-toggle="tooltip" title="Add Client Setting" data-original-title="Add">
                        <i class="si si-settings"></i> Add Setting
                        </button>
                        </a>
                    </div>
                    @else
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                        <table class="table borderless">
                            <tbody>
                                <tr>
                                    <td class="text-center">System Name</td>
                                    <td class="text-center">{{ $client_settings->system_name }}</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Logo Light</td>
                                    <td class="text-center">
                                        <img src="/storage/logo_light/{{$client_settings->logo_light}}" style="width:100px;height:100px;" alt="logo_light">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">Logo Dark</td>
                                    <td class="text-center">
                                        <img src="/storage/logo_dark/{{$client_settings->logo_dark}}" style="width:100px;height:100px;" alt="logo_dark">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">Fav Icon</td>
                                    <td class="text-center">
                                        <img src="/storage/fav_icon/{{$client_settings->fav_icon}}" style="width:100px;height:100px;" alt="fav_icon">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">SMTP Details</td>
                                    <td class="text-center">{{ $client_settings->smtp_details }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
                <!-- END Updates -->
            </div>
            <div class="col-md-5 col-xl-4">
                
                <!-- Payment -->
                <div class="block block-rounded">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title superadmin-text">
                            <i class="fa fa-credit-card text-muted mr-1"></i> Payment Details
                        </h3>
                    </div>
                    <div class="block-content">
                        <ul class="nav-items font-size-sm">
                            @foreach ($client_payments as $client_payment)
                            <li>
                                <a class="media py-2" href="javascript:void(0)">
                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                        {{ $client_payment->date }}
                                    </div>
                                    <div class="media-body">
                                        <div class="font-w600">{{ $client_payment->payment_method }}</div>
                                    </div>
                                    <div class="media-body">
                                        <div class="font-w400 text-muted">{{ $client_payment->invoice_amount }}</div>
                                        <div class="font-w400 text-muted">{{ $client_payment->payment_ref_number}}</div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- END Payment -->
                
                <!-- SMS Details -->
                <div class="block block-rounded">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title superadmin-text">
                            <i class="fa fa-credit-card text-muted mr-1"></i> SMS Details
                        </h3>
                    </div>
                    <div class="block-content">
                        <ul class="nav-items font-size-sm">
                            
                            <li>
                                <a class="media py-2" href="javascript:void(0)">
                                    <div class="mr-5 ml-2 overlay-container overlay-bottom">
                                        100
                                    </div>
                                    <div class="media-body">
                                        <div class="font-w600">Remain</div>
                                    </div>
                                    
                                </a>
                            </li>
                        
                        </ul>
                    </div>
                </div>
                <!-- END Payment -->
                <!-- Log -->
                <div class="block block-rounded">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title superadmin-text">
                            <i class="fa fa-history text-muted mr-1"></i>Log Details
                        </h3>
                    </div>
                    <div class="block-content">
                        @foreach ($client_logs as $client_log)
                        <div class="media d-flex align-items-center push">
                            <div class="mr-3">
                                {{ $client_log->date }}
                            </div>
                            <div class="media-body">
                                <div class="font-w600">{{ $client_log->activity }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- END Log -->
            </div>
        </div>
    </div>
    <div class="modal fade" id="extent-validity" tabindex="-1" role="dialog" aria-labelledby="extent-validity" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Extent Validity</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="gutters-tiny">
                        <form action="/extent-validity" method="post">
                            @csrf
                            <input type="hidden" name="client_id" value="{{$clients->id}}">
                            <div class="form-group">
                                Current Validity : {{$days}} {{($days==1)?"Day":"Days"}}
                            </div>
                            <div class="form-group">
                                Extent Validity : <input type="number" name="days" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Save</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header">
                <h2>Client Details</h2>
            </div>
            <div class="block-content">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="block-title">Company Name</td>
                            <td>{{$clients->company_name}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">First Name</td>
                            <td>{{$clients->first_name}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Last Name</td>
                            <td>{{$clients->last_name}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Address</td>
                            <td>{{$clients->address}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Country</td>
                            <td>{{$clients->country}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">State</td>
                            <td>{{$clients->state}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">City</td>
                            <td>{{$clients->city}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Postal Code</td>
                            <td>{{$clients->postal_code}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Email ID</td>
                            <td>{{$clients->email}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Phone</td>
                            <td>{{$clients->phone}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Mobile</td>
                            <td>{{$clients->mobile}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">status</td>
                            <td>{{ ($clients->status == 1)?"Active":"Ban" }}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Renewal Date</td>
                            <td>{{ $clients->renewal_date}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Expired Date</td>
                            <td>{{ $clients->expiring_date}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="block">
                    <div class="block-header">
                        <h1>10</h1>
                    </div>
                    <div class="block-content">
                        <h5>
                        Total Number of Users
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <div class="block-header">
                        <h1>{{$days}}</h1>
                    </div>
                    <div class="block-content">
                        <h5>
                        Expiring in (Days)
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                
                <div class="block">
                    <div class="block-header">
                        <h3>Want to Extent?</h3>
                    </div>
                    <div class="block-content">
                        <h5>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#extent-validity">Extent Validity</button>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- END Page Content -->
@endsection
