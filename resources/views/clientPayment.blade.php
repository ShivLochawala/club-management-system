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
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/client-payment">Payment</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content-full">
        <!-- Your Block -->
        <div class="block block-rounded">
            <div class="block-header">
                <h2>Client Payment</h2>
            </div>
            @if($msgsucc)
                <span class="succ">{{ $msgsucc }}</span>
            @endif
            <div class="block-content">
                <table class="table">
                    <form method="POST" action="/client-payment">
                    @csrf
                    <tbody>
                        <tr>
                            <td class="block-title">Company Name</td>
                            <td>
                                <select name="client_id" class="form-control">
                                    <option value="">Select Company</option>
                                    @foreach($clients as $client)
                                    <option value="{{$client->id}}">{{$client->company_name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('client_id'))
                                    <span class="error">{{ $errors->first('client_id') }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Payment Method</td>
                            <td>
                                <select name="payment_method" class="form-control">
                                    <option value="">Select Method</option>
                                    <option value="Online">Online</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Cheque">Cheque</option>
                                </select>
                                @if ($errors->has('payment_method'))
                                    <span class="error">{{ $errors->first('payment_method') }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Invoice Amount</td>
                            <td>
                                <input type="number" name="invoice_amount" class="form-control" value="{{old('invoice_amount')}}">
                                @if ($errors->has('invoice_amount'))
                                    <span class="error">{{ $errors->first('invoice_amount') }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Confim Amount</td>
                            <td>
                                <input type="text" name="confirm_amount" class="form-control" value="{{old('confim_amount')}}">
                                @if ($errors->has('confirm_amount'))
                                    <span class="error">{{ $errors->first('confirm_amount') }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Payment Reference Number</td>
                            <td>
                                <input type="text" name="payment_ref_number" class="form-control" value="{{old('payment_ref_number')}}">
                                @if ($errors->has('payment_ref_number'))
                                    <span class="error">{{ $errors->first('payment_ref_number') }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Renewal Duration</td>
                            <td>
                                <select name="renewal_duration" class="form-control">
                                    <option value="">Select Duration</option>
                                    <option value="30">1 Month</option>
                                    <option value="60">2 Months</option>
                                    <option value="90">3 Months</option>
                                    <option value="120">4 Months</option>
                                    <option value="150">5 Months</option>
                                    <option value="180">6 Months</option>
                                    <option value="210">7 Months</option>
                                    <option value="240">8 Months</option>
                                    <option value="270">9 Months</option>
                                    <option value="300">10 Months</option>
                                    <option value="330">11 Months</option>
                                    <option value="365">12 Months</option>
                                </select>
                                @if ($errors->has('refnewal_duration'))
                                    <span class="error">{{ $errors->first('refnewal_duration') }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Payment Recevied Date</td>
                            <td>
                                <input type="date" name="date" class="form-control" value="{{old('date')}}">
                                @if ($errors->has('date'))
                                    <span class="error">{{ $errors->first('date') }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center;">
                            <button class="btn btn-success">Save</button>
                            </td>
                        </tr>
                    </tbody>
                    </form>
                </table>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <div class="content-full">
        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title">Client Payment History</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center">Date</th>
                            <th class="text-center">Company Name</th>
                            <th class="text-center">Payment Method</th>
                            <th class="text-center">Invoice Amount</th>
                            <th class="text-center">Ref. Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($client_payments as $client_payment)
                        <tr>
                            <td class="text-center">{{ $client_payment->date }}</td>
                            @foreach($clients as $client)
                                @if($client->id == $client_payment->client_id)
                                <td class="text-center">{{ $client->company_name }}</td>
                                @endif
                            @endforeach
                            <td class="text-center">{{ $client_payment->payment_method }}</td>
                            <td class="text-center">{{ $client_payment->invoice_amount }}</td>
                            <td class="text-center">{{ $client_payment->payment_ref_number}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
