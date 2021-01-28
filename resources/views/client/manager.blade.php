@extends('client.layouts.backend')
@section('title', 'Master')
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
        <div class="content">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Cashier</h1>
                
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item">Masters</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/{{session()->get('client-slug')}}/masters/manager">Cashier</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block block-rounded">
            <div class="block-header bg-primary-dark">
                <h2 class="block-title superadmin-text">Add </h2>
            </div>
            @if($msgsucc)
                <span class="succ">{{ $msgsucc }}</span>
            @endif
            <div class="block-content">
                <table class="table">
                    <form method="POST" action="/{{session()->get('client-slug')}}/masters/manager">
                    @csrf
                    <tbody>
                        <input type="hidden" name="id" class="form-control" value="{{$clientId}}">
                        <tr>
                            <td class="block-title">Cashier Name</td>
                            <td><input type="text" name="name" class="form-control" value="{{old('name')}}">
                            @if ($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Email ID</td>
                            <td><input type="email" name="email" class="form-control" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Mobile</td>
                            <td><input type="number" name="mobile" class="form-control" value="{{old('mobile')}}">
                            @if ($errors->has('mobile'))
                                <span class="error">{{ $errors->first('mobile') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Password</td>
                            <td><input type="password" name="password" class="form-control" value="{{old('password')}}">
                            @if ($errors->has('password'))
                                <span class="error">{{ $errors->first('password') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center;">
                            <button class="btn btn-success">Add</button>
                            </td>
                        </tr>
                    </tbody>
                    </form>
                </table>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title superadmin-text">Cashier Details</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email ID</th>
                            <th class="text-center">Mobile No</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($managers as $manager)
                        <tr>
                            <td class="text-center">{{$manager->name}}</td>
                            <td class="text-center">{{$manager->email}}</td>
                            <td class="text-center">{{$manager->mobile}}</td>
                            <td class="text-center">
                                @if($manager->status == 1)
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">Ban</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="/{{session()->get('client-slug')}}/masters/manager/{{$manager->id}}">
                                    <button type="button" class="btn btn-sm btn-alt-success js-tooltip-enabled" data-toggle="tooltip" title="Edit Manager" data-original-title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                </a>
                                <button type="button" class="btn btn-sm btn-alt-danger js-tooltip-enabled" title="Delete Manager" data-original-title="Delete" data-toggle="modal" data-target="#delete-manager" data-id="{{$manager->id}}">
                                    <i class="fa fa-fw fa-trash"></i>
                                </button>
                                
                            </td>
                        </tr>
                        <div class="modal fade" id="delete-manager" tabindex="-1" role="dialog" aria-labelledby="delete-manager" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="block block-rounded block-themed block-transparent mb-0">
                                        <div class="block-header bg-primary-dark">
                                            <h3 class="block-title">Delete Cashier</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                    <i class="si si-close"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <div class="gutters-tiny">
                                                <div class="form-group">
                                                    Are you sure you want to delete cashier?
                                                </div>
                                                <div class="form-group" style="word-spacing:20px; float:right;">
                                                    <form action="/{{session()->get('client-slug')}}/masters/manager/delete" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" class="form-control" value="{{$manager->id}}">
                                                        <button class="btn btn-success" style="padding-left:20px; padding-right:20px;">Ok</button>
                                                    </form>
                                                    <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
