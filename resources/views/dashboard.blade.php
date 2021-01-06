@extends('layouts.backend')
@section('title', 'Dashboard')
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
                <h1 class="flex-sm-fill h3 my-2">Dashboard</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/dashboard">Dashboard</a>
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
                        <h1>{{$numberOfClients}}</h1>
                    </div>
                    <div class="block-content">
                        <h5>
                        Number of Clients OnBoard
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <div class="block-header">
                        <h1>{{ $numberOfActiveClients }}</h1>
                    </div>
                    <div class="block-content">
                        <h5>
                        Number of Active Clients
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block">
                    <div class="block-header">
                        <h1>1</h1>
                    </div>
                    <div class="block-content">
                        <h5>
                        Client Expiring in 15 days
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-full">
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Client Details</h3>
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
                        <a href="/dashboard/{{$client->slug}}"><button class="btn btn-primary">View</button></a>
                        <a href="/dashboard/{{$client->slug}}/edit"><button class="btn btn-success">Edit</button></a>
                        <!--
                        <form action="/dashboard/client-view" method="get">
                            @csrf
                            <input type="hidden" name="slug" value="{{$client->slug}}">
                            <input type="hidden" name="type" value="Home">
                            
                        </form>
                        -->
                        
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
