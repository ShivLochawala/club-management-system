@extends('layouts.backend')
@section('title', 'Support')
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
                <h1 class="flex-sm-fill h3 my-2">Support</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/support">Support</a>
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
            <h3 class="block-title">Support</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">Date</th>
                        <th class="text-center">Client Name</th>
                        <th class="text-center">Subject</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($client_supports as $client_support)
                    <tr>
                        <td class="text-center">{{ $client_support->date }}</td>
                        @foreach($clients as $client)
                            @if($client->id == $client_support->client_id)
                            <td class="text-center">{{ $client->company_name }}</td>
                            @endif
                        @endforeach
                        <td class="text-center">{{ $client_support->client_subject }}</td>
                        <td class="text-center">{{ $client_support->client_description }}</td>
                        @if($client_support->status == 0)
                        <td class="text-center">Open</td>
                        @elseif($client_support->status == 1)
                        <td class="text-center">Replied</td>
                        @elseif($client_support->status == 2)
                        <td class="text-center">Closed</td>
                        @endif
                        <td class="text-center">
                        <a href="/support/{{$client_support->id}}"><button class="btn btn-primary">View</button></a>
                        <!--<a href="/support/{{$client_support->id}}/edit"><button class="btn btn-success">Reply</button></a>-->
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
