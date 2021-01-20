@extends('manager.layouts.backend')
@section('title', 'Order-Info')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <button class="btn btn-secondary">In Progress</button>
                    <button class="btn btn-secondary" >Completed</button>
                    <button class="btn btn-secondary" >Cancelled</button>
                    <button class="btn btn-secondary" >Choose Filters</button>
                </nav>
                <div class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <input type="search" name="search" placeholder="Enter order number to search" class="form-control">
                </div>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="content-full">
            <div class="row">
                <div class="col-sm-3 content-full">
                    <table class="table table-vcenter">
                        <!--
                        <tr class="red-bg">
                            <th style="text-align:left;">Take Away</th>
                            <th style="text-align:right;">25:10:20</th>
                        </tr>-->
                        <tr class="red-bg">
                            <th style="text-align:left;">#1</th>
                            <th style="text-align:right;">Online Order</th>
                        </tr>
                        <tr style="background-color:white;">
                            <td style="text-align:left;">Panner Tikka</td>
                            <td style="text-align:right;">1</td>
                        </tr>
                        <tr style="background-color:white;">
                            <td style="text-align:left;">Beer</td>
                            <td style="text-align:right;">2</td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-3 content-full">
                    <table class="table table-vcenter">
                        <!--
                        <tr class="red-bg">
                            <th style="text-align:left;">Take Away</th>
                            <th style="text-align:right;">23:25:20</th>
                        </tr>
                        -->
                        <tr class="red-bg">
                            <th style="text-align:left;">abc-13 #1</th>
                            <th style="text-align:right;">POS</th>
                        </tr>
                        <tr style="background-color:white;">
                            <td style="text-align:left;">Fiery Rings 4 Pcs</td>
                            <td style="text-align:right;">3</td>
                        </tr>
                        <!--
                        <tr class="red-bg">
                            <td colspan="2" style="text-align:center;">Start Preparing</td>
                        </tr>
                        -->
                    </table>
                </div>
                <div class="col-sm-3 content-full">
                    <table class="table table-vcenter">
                        <!--
                        <tr class="red-bg">
                            <th style="text-align:left;">Take Away</th>
                            <th style="text-align:right;">21:12:52</th>
                        </tr>
                        -->
                        <tr class="red-bg">
                            <th style="text-align:left;">rj2-37 #1</th>
                            <th style="text-align:right;">POS</th>
                        </tr>
                        <tr style="background-color:white;">
                            <td style="text-align:left;">Chicken Wings 2 Pcs</td>
                            <td style="text-align:right;">4</td>
                        </tr>
                        <!--
                        <tr class="red-bg">
                            <td colspan="2" style="text-align:center;">Start Preparing</td>
                        </tr>
                        -->
                    </table>
                </div>
                <div class="col-sm-3 content-full">
                    <table class="table table-vcenter">
                        <!--
                        <tr class="red-bg">
                            <th style="text-align:left;">Delivery</th>
                            <th style="text-align:right;">21:09:32</th>
                        </tr>
                        -->
                        <tr class="red-bg">
                            <th style="text-align:left;">rj2-39 #1</th>
                            <th style="text-align:right;">Zomato</th>
                        </tr>
                        <tr style="background-color:white;">
                            <td style="text-align:left;">Veg Biryani[Large]</td>
                            <td style="text-align:right;">1</td>
                        </tr>
                        <tr style="background-color:white;">
                            <td style="text-align:left;">Mix Veg Raita</td>
                            <td style="text-align:right;">1</td>
                        </tr>
                        <tr style="background-color:white;">
                            <td style="text-align:left;">Beer</td>
                            <td style="text-align:right;">2</td>
                        </tr>
                        <!--
                        <tr class="red-bg">
                            <td colspan="2" style="text-align:center;">Start Preparing</td>
                        </tr>
                        -->
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
