@extends('manager.layouts.backend')
@section('title', 'Dashboard')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Dashboard</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item"><button class="btn btn-info"><i class="fa fa-filter" aria-hidden="true"></i> Status Filter</button></li>
                        <!--<li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/dashboard">Dashboard</a>
                        </li>-->
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content --> 
    
    <div class="content-full">
        <div class="row justify-content-center">
            @for($i = 1; $i <= $client_pub_tables->number_of_tables; $i++)
                @if($i%2 == 0)
                <div class="col-md-3">
                    <a href="/manager/table-info/{{$i}}/1" style="color:gray;" data-toggle="modal" data-target="#add-member">
                        <div class="block content-full">
                            <div class="row">
                                <div class="col-md-2">
                                    <button class="btn btn-secondary">{{$i}}</button>
                                </div>
                                <div class="col-md-10 text-left">
                                    Empty <br>
                                    <small>15 Minutes</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @elseif($i%3 == 0)
                <div class="col-md-3">
                    <a href="/manager/order-take">
                        <div class="block content-full">
                            <div class="row">
                                <div class="col-md-2">
                                    <button class="btn btn-danger">{{$i}}</button>
                                </div>
                                <div class="col-md-10 text-left">
                                    <div style="color:red;">Seated</div>
                                    <small style="color:gray;">10 Minutes</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @elseif($i%5 == 0)
                <div class="col-md-3">
                    <a href="/manager/order-info">
                        <div class="block content-full">
                            <div class="row">
                                <div class="col-md-2">
                                    <button class="btn btn-warning">{{$i}}</button>
                                </div>
                                <div class="col-md-10 text-left">
                                    <div style="color:orange;">Ordered</div>
                                    <small style="color:gray;">07 Minutes</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @else
                <div class="col-md-3">
                    <a href="/manager/billing">
                        <div class="block content-full">
                            <div class="row">
                                <div class="col-md-2">
                                    <button class="btn btn-success">{{$i}}</button>
                                </div>
                                <div class="col-md-10 text-left">
                                    <div style="color:green;">Served</div>
                                    <small style="color:gray;">05 Minutes</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endif
                <!-- @if($table_info->isEmpty())
                    <div class="col-md-3">
                        <a href="/manager/table-info/{{$i}}/1" class="text-gray" data-toggle="modal" data-target="#add-member">
                            <div class="block content-full">
                                <button class="btn btn-outline-secondary">{{$i}}</button> Empty 
                            </div>
                        </a>
                    </div>
                @else
                    <div class="col-md-3">
                        <div class="block content-full">
                            <button class="btn btn-outline-warning">{{$i}}</button>
                        </div>
                    </div>
                @endif-->
            @endfor
        </div>
    </div>

    <!-- END Page Content -->
    <div class="modal fade" id="add-member" tabindex="-1" role="dialog" aria-labelledby="add-member" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Add Customer(Member)</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="gutters-tiny">
                        <form action="/manager/add-manager" method="post">
                            @csrf
                            <div class="form-group">
                                Name : <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                Mobile : <input type="number" name="mobile" class="form-control">
                            </div>
                            <div class="form-group">
                                Waiter : 
                                <select name="waiter_id" id="" class="form-control">
                                    <option value="">Select</option>
                                    @foreach($waiters as $waiter)
                                    <option value="{{$waiter->id}}">{{$waiter->name}}</option>
                                    @endforeach
                                </select>
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
@endsection
