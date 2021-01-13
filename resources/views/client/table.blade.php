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
                <h1 class="flex-sm-fill h3 my-2">Tables</h1>
                
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item">Masters</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/client/masters/tables">Table</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    @if($client_pub_table == "Not")
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
                    <form method="POST" action="/client/masters/tables">
                    @csrf
                    <tbody>
                        <tr>
                            <td class="block-title">Number of tables:</td>
                            <td><input type="number" name="number_of_table" class="form-control" value="{{old('number_of_table')}}">
                            @if ($errors->has('number_of_table'))
                                <span class="error">{{ $errors->first('number_of_table') }}</span>
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

    @else
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title superadmin-text">Table Details</h3>
            </div>
            @if($msgsucc)
                <span class="succ">{{ $msgsucc }}</span>
            @endif
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center">Number of Tables</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">{{$client_pub_table->number_of_tables}}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-alt-success js-tooltip-enabled" data-toggle="modal" data-target="#edit-number_of_tables" title="Edit Table" data-original-title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="edit-number_of_tables" tabindex="-1" role="dialog" aria-labelledby="edit-number_of_tables" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Edit Number of tables</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="gutters-tiny">
                            <form action="/client/masters/tables/edit" method="post">
                            @csrf
                                <div class="form-group">
                                <input type="hidden" name="id" class="form-control" value="{{$client_pub_table->id}}">
                                Number of tables:
                                <input type="number" name="number_of_table" class="form-control" value="{{$client_pub_table->number_of_tables}}">
                                @if ($errors->has('number_of_table'))
                                    <span class="error">{{ $errors->first('number_of_table') }}</span>
                                @endif
                                </div>
                                <div class="form-group" style="word-spacing:20px; float:right;">
                                    <button class="btn btn-success" style="padding-left:20px; padding-right:20px;">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- END Page Content -->
@endsection
