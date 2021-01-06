@extends('client.layouts.backend')
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
            <div class="col-md-3">
                <div class="block">
                    <div class="block-header">
                        <h1>436</h1>
                    </div>
                    <div class="block-content">
                        <h5>
                        No of Bills
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="block">
                    <div class="block-header">
                        <h1>Rs.43,539</h1>
                    </div>
                    <div class="block-content">
                        <h5>
                        Total Value
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="block">
                    <div class="block-header">
                        <h1>Rs.99.86</h1>
                    </div>
                    <div class="block-content">
                        <h5>
                        Average Bill Value
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="block">
                    <div class="block-header">
                        <h1>2.93</h1>
                    </div>
                    <div class="block-content">
                        <h5>
                        Average Qty/Bill
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-full">
    <div class="row">
        <div class="col-xl-8">
            <div class="block">
                <div id="barchart1" class="padding"></div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="block">
                <div id="piechart1" class="padding"></div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="block">
                <div id="barchart2" class="padding"></div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="block">
                <div id="piechart2" class="padding"></div>
            </div>
        </div>
    </div>
    </div>
    <!-- END Page Content -->
@endsection
