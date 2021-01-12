@extends('layouts.backend')
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
    <div class="content-full">
    <div class="content">
    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{$numberOfClients}}</dt>
                        <dd class="text-muted mb-0"> Number of Clients OnBoard</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-users font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-primary-dark font-size-sm">
                    <a class="font-w500 d-flex align-items-center superadmin-text" href="">
                        View all clients
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base superadmin-text"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">{{ $numberOfActiveClients }}</dt>
                        <dd class="text-muted mb-0">Number of Active Clients</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-toggle-on font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-primary-dark font-size-sm">
                    <a class="font-w500 d-flex align-items-center superadmin-text" href="">
                        Active Customers
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base superadmin-text"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">1</dt>
                        <dd class="text-muted mb-0">Client Expiring in 15 days</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fas fa-clock font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-primary-dark font-size-sm">
                    <a class="font-w500 d-flex align-items-center superadmin-text" href="">
                        Expiring Customer
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base superadmin-text"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">4.5%</dt>
                        <dd class="text-muted mb-0">Conversion Rate</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-chart-line font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-primary-dark font-size-sm">
                    <a class="font-w500 d-flex align-items-center superadmin-text" href="">
                        View statistics
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base superadmin-text"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 d-flex flex-column">
            <div class="block block-rounded flex-grow-1 d-flex flex-column">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title superadmin-text">Earnings Summary</h3>
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
                <div class="block-content bg-body-light">
                    <div class="row items-push text-center w-100">
                        <div class="col-sm-4">
                            <dl class="mb-0">
                                <dt class="font-size-h3 font-w700">
                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 2.5%
                                </dt>
                                <dd class="text-muted mb-0">Customer Growth</dd>
                            </dl>
                        </div>
                        <div class="col-sm-4">
                            <dl class="mb-0">
                                <dt class="font-size-h3 font-w700">
                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 3.8%
                                </dt>
                                <dd class="text-muted mb-0">Page Views</dd>
                            </dl>
                        </div>
                        <div class="col-sm-4">
                            <dl class="mb-0">
                                <dt class="font-size-h3 font-w700">
                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 1.7%
                                </dt>
                                <dd class="text-muted mb-0">New Products</dd>
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
    <div class="block block-rounded">
        <div class="block-header bg-primary-dark">
            <h3 class="block-title superadmin-text">Client Details
                <a href="/client-setting" style="float:right; margin-left:10px;">
                <button type="button" class="btn btn-sm btn-alt-success js-tooltip-enabled" data-toggle="tooltip" title="Add Client Setting" data-original-title="Add">
                    <i class="si si-settings"></i>
                </button>
                </a>
                <a href="/client-add" style="float:right;">
                <button type="button" class="btn btn-sm btn-alt-success js-tooltip-enabled " data-toggle="tooltip" title="Add Client" data-original-title="Add">
                    <i class="fa fa-fw fa-plus"></i>ADD CLIENT
                </button>
                </a>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">Client ID</th>
                        <th class="text-center">Client Name</th>
                        <th class="text-center">Slug</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                    <tr>
                        <td class="text-center">{{ $client->id }}</td>
                        <td class="text-center">{{ $client->first_name }} {{ $client->last_name }}</td>
                        <td class="text-center">{{ $client->slug }}</td>
                        <td class="text-center">{{ ($client->status == 1)?"Active":"Ban" }}</td>
                        <td class="text-center">
                        <!--<a href="/dashboard/{{$client->slug}}"><button class="btn btn-primary">View</button></a>
                        <a href="/dashboard/{{$client->slug}}/edit"><button class="btn btn-success">Edit</button></a>-->
                        <a href="/dashboard/{{$client->slug}}">
                        <button type="button" class="btn btn-sm btn-alt-primary js-tooltip-enabled" data-toggle="tooltip" title="View Client" data-original-title="View">
                            <i class="fa fa-fw fa-eye"></i>
                        </button>
                        </a>
                        <a href="/dashboard/{{$client->slug}}/edit">
                        <button type="button" class="btn btn-sm btn-alt-success js-tooltip-enabled" data-toggle="tooltip" title="Edit Client" data-original-title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                        </button>
                        </a>
                        <!--
                        <form action="/dashboard/client-view" method="get">
                            @csrf
                            <input type="hidden" name="slug" value="{{$client->slug}}">
                            <input type="hidden" name="type" value="Home">
                            
                        </form>
                        -->
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
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
    
    <!-- END Page Content -->
@endsection
