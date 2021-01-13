@extends('layouts.backend')
@section('title', 'Client')
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
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
    <div class="block block-rounded">
        <div class="block-header bg-primary-dark">
            <h3 class="block-title superadmin-text">Client Details
                <a href="/client-setting" style="float:right; margin-left:10px;">
                <button type="button" class="btn btn-sm btn-alt-success js-tooltip-enabled" data-toggle="tooltip" title="Add Client Setting" data-original-title="Add">
                    <i class="si si-settings"></i>
                </button>
                <a href="/client-payment" style="float:right; margin-left:10px;">
                <button type="button" class="btn btn-sm btn-alt-success js-tooltip-enabled" data-toggle="tooltip" title="Add Client Payment" data-original-title="Add">
                    <i class="fa fa-credit-card"></i>
                </button>
                </a>
                </a>
                <a href="/client-add" style="float:right;">
                <button type="button" class="btn btn-sm btn-alt-success js-tooltip-enabled" data-toggle="tooltip" title="Add Client" data-original-title="Add">
                    <i class="fa fa-fw fa-plus"></i>
                </button>
                </a>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">Client ID</th>
                        <th class="text-center">Client Name</th>
                        <th class="text-center">Slug</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <td class="text-center">{{ $client->id }}</td>
                        <td class="text-center">{{ $client->first_name }} {{ $client->last_name }}</td>
                        <td class="text-center">{{ $client->slug }}</td>
                        <td class="text-center">{{ ($client->status == 1)?"Active":"Ban" }}</td>
                        <td class="text-center">
                        <a href="/client-details/{{$client->slug}}"><button type="button" class="btn btn-sm btn-alt-primary js-tooltip-enabled" data-toggle="tooltip" title="View Client" data-original-title="View">
                            <i class="fa fa-fw fa-eye"></i>
                        </button></a>
                        <a href="/client-details/{{$client->slug}}/edit"><button type="button" class="btn btn-sm btn-alt-success js-tooltip-enabled" data-toggle="tooltip" title="Edit Client" data-original-title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                        </button></a>
                        <button type="button" class="btn btn-sm btn-alt-info js-tooltip-enabled" data-toggle="tooltip" title="Send Notification" data-original-title="Edit">
                            <i class="fa fa-fw fa-bell"></i>
                        </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <!-- END Page Content -->
@endsection
