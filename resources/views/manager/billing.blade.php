@extends('manager.layouts.backend')
@section('title', 'Billing')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Billing</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/{{session()->get('client-slug')}}/manager/billing">Billing</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content-full">
        <div class="content-full">
            <div class="row">
                <div class="col-sm-8 block block-rounded content-full">
                    <div class="block-title">Bar Billing - Counter 1
                        <div style="float:right;margin-left:5px;"><input type="date" class="form-control"></div><div style="float:right;">Day Opened</div>
                    </div><br>
                    <div class="table-bordered table-striped table-vcenter content-full">
                        <div class="row">
                            <div class="col-sm-4">
                                Member No <select name="memberno" id="" class="form-control">
                                            <option value="">Select</option>
                                            <option value="A1">A1</option>
                                            <option value="A2">A2</option>
                                        </select>
                                Orders <input type="text" name="order" value="134" class="form-control" readonly>
                            </div>
                            <div class="col-sm-4">
                                Name <select name="membername" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Achyutha">Achyutha B V</option>
                                        <option value="Manish">Manish</option>
                                    </select>
                                Waiter <select name="membername" id="" class="form-control">
                                            <option value="">Select</option>
                                            <option value="Rajesh">Rajesh H R</option>
                                            <option value="Ganesh">Ganesh V F</option>
                                        </select>
                            </div>
                            <div class="col-sm-4">
                                Bill No <input type="text" name="order" value="25674" class="form-control" readonly>
                            </div>
                        </div>
                        <div role="separator" class="divider-hor"></div>
                        <div class="row">
                            <div class="col-sm-2">
                                Item No
                            </div>
                            <div class="col-sm-3">
                                <select name="itemno" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="555">555</option>
                                    <option value="BLW23">BLW23</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-primary">Add</button>
                            </div>
                        </div><br>
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th class="text-center">SI No</th>
                                    <th class="text-center">Item No</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-center">Price (Rs.)</th>
                                    <th class="text-center">Total Value (Rs.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">BLW35</td>
                                    <td class="text-center">Blenders Pride</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">120.00</td>
                                    <td class="text-center">120.00</td>
                                </tr>
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-right" colspan="3">Grand Total</td>
                                    <td class="text-center">120.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-full btn-spacing text-center">
                        <button class="btn btn-primary">Update Payment</button>
                    
                        <button class="btn btn-primary">Hold Bill</button>
                    
                        <button class="btn btn-primary">Release Bill</button>
                    
                        <button class="btn btn-primary">Reprint Bill</button>
                    
                        <button class="btn btn-primary">Cancel Bill</button>
                    </div>
                </div>
                <div class="col-sm-4 block block-rounded content-full">
                    <table class="table table-bordered table-striped table-vcenter">
                        <tr>
                            <th colspan="2" style="text-align:center;">Bill Summary</th>
                        </tr>
                        <tr>
                            <td>Total Pcs</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Gross Amount</td>
                            <td>Rs. 120.00</td>
                        </tr>
                        <tr>
                            <td>Bill Discount</td>
                            <td>Rs. 00.00</td>
                        </tr>
                        <tr>
                            <td>Sub Total</td>
                            <td>Rs. 120.00</td>
                        </tr>
                        <tr>
                            <td>Service Charges</td>
                            <td>Rs. 00.00</td>
                        </tr>
                        <tr>
                            <td>Net Amount</td>
                            <td>Rs. 120.00</td>
                        </tr>
                    </table>
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <button class="btn btn-success">SAVE & PRINT</button>
                            </div>
                            <div class="col-sm-6 text-center">
                                <button class="btn btn-danger" style="padding-left:30px; padding-right:30px;">Exit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
