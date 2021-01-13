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
                <h1 class="flex-sm-fill h3 my-2">Daily Report</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/client/reports/daily-report">Daily Report</a>
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
            <div class="block-content ">
                <div class="row">
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
        </div>
        <div class="block block-rounded">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title text-center superadmin-text">Daily Bill Wise Sales Summary</h3>
            </div>
            
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center">Date</th>
                            <th class="text-center">Bill No</th>
                            <th class="text-center">Member No</th>
                            <th class="text-center">Member Name</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                       <td class="text-center">04-01-2021</td>
                       <td class="text-center">200201</td> 
                       <td class="text-center">MB-001</td>
                       <td class="text-center">Janak Lochawala</td>
                       <td class="text-center">Rs. 5000/-</td>
                    </tr>
                    <tr>
                       <td class="text-center">04-01-2021</td>
                       <td class="text-center">200202</td>
                       <td class="text-center">MB-002</td>
                       <td class="text-center">Dhruvi Jariwala</td>
                       <td class="text-center">Rs. 8000/-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="block block-rounded">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title text-center superadmin-text">Daily Member Wise Sales Summary</h3>
                    </div>
                    
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                                <tr>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Member No</th>
                                    <th class="text-center">Member Name</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">04-01-2021</td>
                            <td class="text-center">MB-001</td>
                            <td class="text-center">Janak Lochawala</td>
                            <td class="text-center">Rs. 5000/-</td>
                            </tr>
                            <tr>
                                <td class="text-center">04-01-2021</td>
                            <td class="text-center">MB-002</td>
                            <td class="text-center">Dhruvi Jariwala</td>
                            <td class="text-center">Rs. 8000/-</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="block block-rounded">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title text-center superadmin-text">Waiter Wise Sales Summary</h3>
                    </div>
                    
                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                                <tr>
                                    <th class="text-center">Waiter No</th>
                                    <th class="text-center">Waiter Name</th>
                                    <th class="text-center">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td class="text-center">WT-001</td>
                            <td class="text-center">Shankers</td>
                            <td class="text-center">Rs. 2300/-</td>
                            </tr>
                            <tr>
                            <td class="text-center">WT-002</td>
                            <td class="text-center">Swati</td>
                            <td class="text-center">Rs. 4500/-</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
