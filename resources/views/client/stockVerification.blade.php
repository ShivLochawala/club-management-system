@extends('client.layouts.backend')
@section('title', 'Reports')
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
                <h1 class="flex-sm-fill h3 my-2">Stock Verification</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/client/reports/stock-verification">Stock Verification</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content-full">
        <div class="block block-rounded content-full">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>From</label>
                        <input type="date" name="from" class="form-control" value="{{old('from')}}">
                        @if ($errors->has('from'))
                            <span class="error">{{ $errors->first('from') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>To</label>
                        <input type="date" name="to" class="form-control" value="{{old('to')}}">
                        @if ($errors->has('to'))
                            <span class="error">{{ $errors->first('to') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Store</label>
                        <select name="store" id=""  class="form-control" >
                            <option value="">SELECT</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded">
            <!--<div class="block-header">
                <h3 class="block-title"></h3>
            </div>-->
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center">Itemcode</th>
                            <th class="text-center">Item</th>
                            <th class="text-center">Compstk</th>
                            <th class="text-center">Opstk</th>
                            <th class="text-center">Ratio</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Spover</th>
                            <th class="text-center">Phystk</th>
                            <th class="text-center">Remarks</th>
                            <th class="text-center">Diff</th>
                            <th class="text-center">Tobill</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">BDC3</td>
                            <td class="text-center">555</td>
                            <td class="text-center">32.00</td>
                            <td class="text-center">8.00</td>
                            <td class="text-center">1.00</td>
                            <td class="text-center">72.00</td>
                            <td class="text-center">-</td>
                            <td class="text-center">32.00</td>
                            <td class="text-center">NIL</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="text-center">BLW23</td>
                            <td class="text-center">8 PM Whisky</td>
                            <td class="text-center">627.00</td>
                            <td class="text-center">25.44</td>
                            <td class="text-center">12.50</td>
                            <td class="text-center">24.00</td>
                            <td class="text-center">4.00</td>
                            <td class="text-center">622.00</td>
                            <td class="text-center">-5</td>
                            <td class="text-center">5.00</td>
                            <td class="text-center">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
