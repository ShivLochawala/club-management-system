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
<?php
 
 $dataPoints1 = array(
     array("label"=> "MON", "y"=> 36.12),
     array("label"=> "TUE", "y"=> 34.87),
     array("label"=> "WED", "y"=> 40.30),
     array("label"=> "THU", "y"=> 35.30),
     array("label"=> "FRI", "y"=> 39.50),
     array("label"=> "SAT", "y"=> 50.82),
     array("label"=> "SUN", "y"=> 74.70)
 );
 $dataPoints2 = array(
     array("label"=> "MON", "y"=> 64.61),
     array("label"=> "TUE", "y"=> 70.55),
     array("label"=> "WED", "y"=> 72.50),
     array("label"=> "THU", "y"=> 81.30),
     array("label"=> "FRI", "y"=> 63.60),
     array("label"=> "SAT", "y"=> 69.38),
     array("label"=> "SUN", "y"=> 98.70)
 );
     
 ?>
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Dashboard</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-sm btn-alt-primary" id="dropdown-analytics-overview" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-calendar-alt"></i>
                            Last 30 days
                            <i class="fa fa-fw fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-overview">
                            <a class="dropdown-item font-w500" href="javascript:void(0)">This Week</a>
                            <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Week</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item font-w500" href="javascript:void(0)">This Month</a>
                            <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Month</a>
                        </div>
                    </div>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h4 font-w700">436</dt>
                        <dd class="text-muted mb-0">No of Bills</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-money-bill-alt font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-primary-dark font-size-sm">
                    <a class="font-w500 d-flex align-items-center superadmin-text" href="">
                        View No of Bills
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h4 font-w700">Rs.43,539</dt>
                        <dd class="text-muted mb-0">Total Value</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-calculator font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-primary-dark font-size-sm">
                    <a class="font-w500 d-flex align-items-center superadmin-text" href="">
                        View Total Value
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h4 font-w700">Rs.99.86</dt>
                        <dd class="text-muted mb-0">Average Bill Value</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fas fa-tachometer-alt font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-primary-dark font-size-sm">
                    <a class="font-w500 d-flex align-items-center superadmin-text" href="">
                        View Average Bill
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h4 font-w700">{{$days}}</dt>
                        <dd class="text-muted mb-0"> Expiry In Days</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fas fa-clock font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-primary-dark font-size-sm">
                    <a class="font-w500 d-flex align-items-center superadmin-text" data-original-title="Date" data-toggle="modal" data-target="#view-expiry" href="">
                        View Expiry Date
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 d-flex flex-column">
            <div class="block block-rounded flex-grow-1 d-flex flex-column">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">Earnings Summary</h3>
                    <!--
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-settings"></i>
                        </button>
                    </div>
                    -->
                </div>
                <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <div id="chartContainer" style="width: 591px; height: 295px;" width="591" height="295"></div>
                    <!--
                    <canvas class="js-chartjs-earnings chartjs-render-monitor" id="chartContainer" style="display: block; width: 591px; height: 295px;" width="591" height="295"></canvas>
                    -->
                </div>
                <div class="block-content bg-primary-dark">
                    <div class="row items-push text-center w-100 superadmin-text">
                        <div class="col-sm-4">
                            <dl class="mb-0">
                                <dt class="font-size-h3 font-w700">
                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 2.5%
                                </dt>
                                <dd class="mb-0">Customer Growth</dd>
                            </dl>
                        </div>
                        <div class="col-sm-4">
                            <dl class="mb-0">
                                <dt class="font-size-h3 font-w700">
                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 3.8%
                                </dt>
                                <dd class="mb-0">Page Views</dd>
                            </dl>
                        </div>
                        <div class="col-sm-4">
                            <dl class="mb-0">
                                <dt class="font-size-h3 font-w700">
                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 1.7%
                                </dt>
                                <dd class="mb-0">New Products</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 d-flex flex-column">
            <div class="row row-deck flex-grow-1">
                <div class="col-md-6 col-xl-12">
                    <div class="block block-rounded d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                            <dl class="mb-0">
                                <dt class="font-size-h2 font-w700">570</dt>
                                <dd class="text-muted mb-0">Total Orders</dd>
                            </dl>
                            <div>
                                <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-danger bg-danger-light">
                                    <i class="fa fa-caret-down mr-1"></i>
                                    2.2%
                                </div>
                            </div>
                        </div>
                        <div class="block-content p-1 text-center overflow-hidden">
                            <span class="js-sparkline" data-type="line" data-points="[33,29,32,37,38,30,34,28,43,45,26,45,49,39]" data-width="100%" data-height="70px" data-chart-range-min="20" data-line-color="rgba(210, 108, 122, .4)" data-fill-color="rgba(210, 108, 122, .15)" data-spot-color="transparent" data-min-spot-color="transparent" data-max-spot-color="transparent" data-highlight-spot-color="#D26C7A" data-highlight-line-color="#D26C7A" data-tooltip-suffix="Orders"><canvas width="293" height="70" style="display: inline-block; width: 293.422px; height: 70px; vertical-align: top;"></canvas></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="block block-rounded d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                            <dl class="mb-0">
                                <dt class="font-size-h2 font-w700">$5,234.21</dt>
                                <dd class="text-muted mb-0">Total Earnings</dd>
                            </dl>
                            <div>
                                <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-light">
                                    <i class="fa fa-caret-up mr-1"></i>
                                    4.2%
                                </div>
                            </div>
                        </div>
                        <div class="block-content p-1 text-center oveflow-hidden">
                            <span class="js-sparkline" data-type="line" data-points="[716,1185,750,1365,956,890,1200,968,1158,1025,920,1190,720,1352]" data-width="100%" data-height="70px" data-chart-range-min="300" data-line-color="rgba(70,195,123, .4)" data-fill-color="rgba(70,195,123, .15)" data-spot-color="transparent" data-min-spot-color="transparent" data-max-spot-color="transparent" data-highlight-spot-color="#46C37B" data-highlight-line-color="#46C37B" data-tooltip-prefix="$"><canvas width="293" height="70" style="display: inline-block; width: 293.422px; height: 70px; vertical-align: top;"></canvas></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="block block-rounded d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                            <dl class="mb-0">
                                <dt class="font-size-h2 font-w700">264</dt>
                                <dd class="text-muted mb-0">New Customers</dd>
                            </dl>
                            <div>
                                <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-light">
                                    <i class="fa fa-caret-up mr-1"></i>
                                    9.3%
                                </div>
                            </div>
                        </div>
                        <div class="block-content p-1 text-center oveflow-hidden">
                            <span class="js-sparkline" data-type="line" data-points="[25,15,36,14,29,19,36,41,28,26,29,33,23,41]" data-width="100%" data-height="70px" data-chart-range-min="0" data-line-color="rgba(70,195,123, .4)" data-fill-color="rgba(70,195,123, .15)" data-spot-color="transparent" data-min-spot-color="transparent" data-max-spot-color="transparent" data-highlight-spot-color="#46C37B" data-highlight-line-color="#46C37B" data-tooltip-prefix="$"><canvas width="293" height="70" style="display: inline-block; width: 293.422px; height: 70px; vertical-align: top;"></canvas></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="view-expiry" tabindex="-1" role="dialog" aria-labelledby="view-expiry" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Your Expiry Date</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="gutters-tiny">
                            <div class="form-group text-center">
                                <h1>{{$expired_date}}</h1>
                            </div>
                            <div class="form-group" style="word-spacing:20px; float:right;">
                                <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="content-full">
        <div class="row">
            <div class="col-xl-8">
                <div class="block">
                    <div id="barchart1" class="padding table-responsive"></div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="block">
                    <div id="piechart1" class="padding"></div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="block">
                    <div id="barchart2" class="padding table-responsive"></div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="block">
                    <div id="piechart2" class="padding"></div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- END Page Content -->
<script>
    window.onload = function () {
    
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title:{
            text: ""
        },
        axisY:{
            includeZero: true
        },
        legend:{
            cursor: "pointer",
            verticalAlign: "top",
            horizontalAlign: "top",
            itemclick: toggleDataSeries
        },
        data: [{
            type: "column",
            name: "This Week",
            indexLabel: "{y}",
            yValueFormatString: "$#0.##",
            showInLegend: true,
            dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
        },{
            type: "column",
            name: "Last Week",
            indexLabel: "{y}",
            yValueFormatString: "$#0.##",
            showInLegend: true,
            dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
    
    function toggleDataSeries(e){
        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
            e.dataSeries.visible = false;
        }
        else{
            e.dataSeries.visible = true;
        }
        chart.render();
    }
    
    }
</script>
@endsection
