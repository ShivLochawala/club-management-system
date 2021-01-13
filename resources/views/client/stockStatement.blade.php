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
                <h1 class="flex-sm-fill h3 my-2">Stock Statement</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/client/reports/stock-statement">Stock Statement</a>
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
            <div class="block-content bg-primary-dark">
                <div class="row superadmin-text">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-2"> <label for="">From</label></div>
                            <div class="col-sm-10">
                            <input type="date" name="from" class="form-control" value="{{old('from')}}"></p>
                            @if ($errors->has('from'))
                                <span class="error">{{ $errors->first('from') }}</span>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-2"><label>To</label></div>
                            <div class="col-sm-10">
                            <input type="date" name="to" class="form-control" value="{{old('to')}}">
                            @if ($errors->has('to'))
                                <span class="error">{{ $errors->first('to') }}</span>
                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-2"><label>Store</label></div>
                            <div class="col-sm-10">
                            <select name="store" id=""  class="form-control" >
                                <option value="">SELECT</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center">Itemno</th>
                            <th class="text-center">Item</th>
                            <th class="text-center">Opball</th>
                            <th class="text-center">Purqty</th>
                            <th class="text-center">Salqty</th>
                            <th class="text-center">Spill</th>
                            <th class="text-center">Balance</th>
                            <th class="text-center">Ratio</th>
                            <th class="text-center">Pcode</th>
                            <th class="text-center">Compstk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">553</td>
                            <td class="text-center">555</td>
                            <td class="text-center">29.00</td>
                            <td class="text-center">270.00</td>
                            <td class="text-center">288.00</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="text-center">1.00</td>
                            <td class="text-center">BDC3</td>
                            <td class="text-center">11.00</td>
                        </tr>
                        <tr>
                            <td class="text-center">87</td>
                            <td class="text-center">8 PM Whisky</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="text-center">-</td>
                            <td class="text-center">12.50</td>
                            <td class="text-center">BLW23</td>
                            <td class="text-center">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
