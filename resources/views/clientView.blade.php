@extends('layouts.backend')
@section('title', 'Client')
@section('content')
    <!-- Hero -->
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
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content-full">
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
    <div class="content-full">
        <!-- Your Block -->
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
        <!-- END Your Block -->
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
    <!-- END Page Content -->
@endsection
