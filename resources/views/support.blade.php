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
    <div class="bg-primary-dark">
        <div class="content content-full overflow-hidden">
            <div class="mt-7 mb-5 text-center">
                <h1 class="h2 text-white mb-2 invisible" data-toggle="appear" data-class="animated fadeInDown">Support Center.</h1>
                <h2 class="h4 font-w400 text-white-75 invisible" data-toggle="appear" data-class="animated fadeInDown">Building products is not our only job. We care about our clients.</h2>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <!-- Categories-->
    <div class="content content-boxed overflow-hidden">
        <div class="row">
            <div class="col-sm-6 col-md-3 invisible" data-toggle="appear" data-class="animated fadeInDown">
                <a class="block block-bordered block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full border-bottom text-center">
                        <div class="py-3">
                            <i class="si si-user fa-2x text-amethyst"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <span class="font-w600 text-uppercase font-size-sm">Account</span>
                        <span class="badge badge-secondary">23</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 invisible" data-toggle="appear" data-timeout="200" data-class="animated fadeInDown">
                <a class="block block-bordered block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full border-bottom text-center">
                        <div class="py-3">
                            <i class="si si-settings fa-2x text-city"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <span class="font-w600 text-uppercase font-size-sm">Features</span>
                        <span class="badge badge-secondary">11</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 invisible" data-toggle="appear" data-timeout="400" data-class="animated fadeInDown">
                <a class="block block-bordered block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full border-bottom text-center">
                        <div class="py-3">
                            <i class="si si-target fa-2x text-flat"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <span class="font-w600 text-uppercase font-size-sm">Services</span>
                        <span class="badge badge-secondary">16</span>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 invisible" data-toggle="appear" data-timeout="600" data-class="animated fadeInDown">
                <a class="block block-bordered block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full border-bottom text-center">
                        <div class="py-3">
                            <i class="si si-wallet fa-2x text-smooth"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                        <span class="font-w600 text-uppercase font-size-sm">Payments</span>
                        <span class="badge badge-secondary">19</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- END Categories -->
    <!-- Page Content -->
    <div class="content">
    <div class="block block-rounded">
        <div class="block-header bg-primary-dark">
            <h3 class="block-title superadmin-text">Support</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">Date</th>
                        <th class="text-center">Company Name</th>
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
                        <td class="text-center"><span class="badge badge-success">Open</span></td>
                        @elseif($client_support->status == 1)
                        <td class="text-center"><span class="badge badge-warning">Replied</span></td>
                        @elseif($client_support->status == 2)
                        <td class="text-center"><span class="badge badge-danger">Closed</span></td>
                        @endif
                        <td class="text-center">
                        <a href="/support/{{$client_support->id}}">
                            <i class="text-black fa fa-fw fa-eye" title="View Query" data-original-title="View"></i>
                        </a>
                        <!--<a href="/support/{{$client_support->id}}"><button type="button" class="btn btn-sm btn-alt-primary js-tooltip-enabled" data-toggle="tooltip" title="View Query" data-original-title="View">
                            <i class="fa fa-fw fa-eye"></i>
                        </button></a>-->
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
