<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <!--<title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework</title>-->
        <title>@yield('title') - Club Management System</title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{ mix('/css/oneui.css') }}">
        <link rel="stylesheet" id="css-main" href="{{ asset('/css/style.css') }}">
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/amethyst.css') }}"> -->
        @yield('css_after')

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.js')}}"></script>
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
        <style type="text/css">
        .jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
        </style>
        <style type="text/css">/* Chart.js */
        @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
        </style>
        <style>
        /* width */
        ::-webkit-scrollbar {
        width: 5px;
        height: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey; 
        border-radius: 10px;
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: grey; 
        border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: black; 
        }
        </style>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawBarChart1);
            function drawBarChart1() {
                var data1 = google.visualization.arrayToDataTable([
                    ['Waiter Name', 'Sales'],
                    ['Mitul',2000],
                    ['Vishnu',1500],
                    ['Madhav',1000],
                    ['Chintu',900],
                    ['Avin',1200]   
                        <?php
                        /*$count = 1;
                        foreach($clients as $client) {
                            if($count == $clientCount){
                                echo "['".$client->company_name."', '".$client->first_name."', '".$client->last_name."']";    
                            }else{
                                echo "['".$client->company_name."', '".$client->first_name."', '".$client->last_name."'],";
                            }
                            $count++;
                        }*/
                        ?>
                ]);
                var options1 = {
                    title: 'Waiter Wise Sales Summary',
                    is3D: false,
                };
                var chart1 = new google.charts.Bar(document.getElementById('barchart1'));
                chart1.draw(data1, google.charts.Bar.convertOptions(options1));
            }

            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawPieChart1);
            function drawPieChart1() {
                var data2 = google.visualization.arrayToDataTable([
                    ['Company Name', 'Sales', 'Profit'],
                    ['ABC',200,20000],
                    ['CDF',100,10000]   
                        <?php
                        /*$count = 1;
                        foreach($clients as $client) {
                            if($count == $clientCount){
                                echo "['".$client->company_name."', '".$client->first_name."', '".$client->last_name."']";    
                            }else{
                                echo "['".$client->company_name."', '".$client->first_name."', '".$client->last_name."'],";
                            }
                            $count++;
                        }*/
                        ?>
                ]);
                var options2 = {
                    title: 'Monthly Counter Wise Sales - Value',
                    is3D: false,
                };
                var chart2 = new google.visualization.PieChart(document.getElementById('piechart1'));
                chart2.draw(data2, options2);
            }

            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawBarChart2);
            function drawBarChart2() {
                var data3 = google.visualization.arrayToDataTable([
                    ['Days', 'Sales'],
                    ['Mon',11000],
                    ['Tue',15000],
                    ['Wed',10000],
                    ['Thu',9000],
                    ['Fri',12000],
                    ['Sat',25000],
                    ['Sun',30000]   
                        <?php
                        /*$count = 1;
                        foreach($clients as $client) {
                            if($count == $clientCount){
                                echo "['".$client->company_name."', '".$client->first_name."', '".$client->last_name."']";    
                            }else{
                                echo "['".$client->company_name."', '".$client->first_name."', '".$client->last_name."'],";
                            }
                            $count++;
                        }*/
                        ?>
                ]);
                var options3 = {
                    title: 'Monthly Sales - Days Wise',
                    is3D: false,
                };
                var chart3 = new google.charts.Bar(document.getElementById('barchart2'));
                chart3.draw(data3, google.charts.Bar.convertOptions(options3));
            }
            
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawPieChart2);
            function drawPieChart2() {
                var data4 = google.visualization.arrayToDataTable([
                    ['Company Name', 'Sales'],
                    ['ABC',20000],
                    ['CDF',10000]   
                        <?php
                        /*$count = 1;
                        foreach($clients as $client) {
                            if($count == $clientCount){
                                echo "['".$client->company_name."', '".$client->first_name."', '".$client->last_name."']";    
                            }else{
                                echo "['".$client->company_name."', '".$client->first_name."', '".$client->last_name."'],";
                            }
                            $count++;
                        }*/
                        ?>
                ]);
                var options4 = {
                    title: 'Monthly Counter Wise Sales - Value',
                    is3D: false,
                };
                var chart4 = new google.visualization.PieChart(document.getElementById('piechart2'));
                chart4.draw(data4, options4);
            }                    
        </script>
    </head>
    <body style="overflow-x: hidden;zoom:80%;">
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
            <!-- Side Overlay-->
            <aside id="side-overlay" class="font-size-sm">
                <!-- Side Header -->
                <div class="content-header border-bottom">
                    <!-- User Avatar -->
                    <a class="img-link mr-1" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                    </a>
                    <!-- END User Avatar -->

                    <!-- User Info -->
                    <div class="ml-2">
                        <a class="text-dark font-w600 font-size-sm" href="javascript:void(0)">{{session()->get('client')['company_name']}}</a>
                    </div>
                    <!-- END User Info -->

                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="ml-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-fw fa-times"></i>
                    </a>
                    <!-- END Close Side Overlay -->
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <p>
                        Content..
                    </p>
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="/{{session()->get('client-slug')}}/dashboard">
                        <span class="smini-visible">
                            <i class="fa fa-circle-notch text-primary"></i>
                        </span>
                        <span class="smini-hide font-size-h5 tracking-wider">
                            Licrapro
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Extra -->
                    <div>
                        <!-- Options -->
                        <div class="dropdown d-inline-block ml-2">
                            <a class="btn btn-sm btn-dual" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="si si-drop"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                                <!-- Color Themes -->
                                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="default" href="#">
                                    <span>Default</span>
                                    <i class="fa fa-circle text-default"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{ mix('css/themes/amethyst.css') }}" href="#">
                                    <span>Amethyst</span>
                                    <i class="fa fa-circle text-amethyst"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{ mix('css/themes/city.css') }}" href="#">
                                    <span>City</span>
                                    <i class="fa fa-circle text-city"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{ mix('css/themes/flat.css') }}" href="#">
                                    <span>Flat</span>
                                    <i class="fa fa-circle text-flat"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{ mix('css/themes/modern.css') }}" href="#">
                                    <span>Modern</span>
                                    <i class="fa fa-circle text-modern"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{ mix('css/themes/smooth.css') }}" href="#">
                                    <span>Smooth</span>
                                    <i class="fa fa-circle text-smooth"></i>
                                </a>
                                <!-- END Color Themes -->

                                <div class="dropdown-divider"></div>

                                <!-- Sidebar Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                    <span>Sidebar Light</span>
                                </a>
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                    <span>Sidebar Dark</span>
                                </a>
                                <!-- Sidebar Styles -->

                                <div class="dropdown-divider"></div>

                                <!-- Header Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_light" href="#">
                                    <span>Header Light</span>
                                </a>
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_dark" href="#">
                                    <span>Header Dark</span>
                                </a>
                                <!-- Header Styles -->
                            </div>
                        </div>
                        <!-- END Options -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-fw fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Extra -->
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                    <!-- Side Navigation -->
                    <div class="content-side">
                        <ul class="nav-main">
                            <li class="nav-main-item">
                                <a class='nav-main-link {{ request()->is(session()->get("client-slug")."/dashboard/*") ? " active" : "" }} {{ request()->is(session()->get("client-slug")."/dashboard") ? " active" : "" }}' href='/{{session()->get("client-slug")}}/dashboard'>
                                    <i class="nav-main-link-icon fas fa-tachometer-alt"></i>
                                    <span class="nav-main-link-name">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-main-item ">
                                <a class='nav-main-link nav-main-link-submenu {{ request()->is(session()->get("client-slug")."/products/*") ? " active" : "" }}' data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fas fa-beer"></i>
                                    <span class="nav-main-link-name">Products</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is(session()->get('client-slug').'/products/product-add') ? ' active' : '' }}" href="/{{session()->get('client-slug')}}/products/product-add">
                                            <span class="nav-main-link-name">Product Add</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is(session()->get('client-slug').'/products/product-details') ? ' active' : '' }}" href="/{{session()->get('client-slug')}}/products/product-details">
                                            <span class="nav-main-link-name">Product Details</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- {{ request()->is('client/*') ? ' open' : '' }} -->
                            <li class="nav-main-item ">
                                <a class="nav-main-link nav-main-link-submenu {{ request()->is(session()->get('client-slug').'/masters/*') ? ' active' : '' }}" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-server"></i>
                                    <span class="nav-main-link-name">Masters</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is(session()->get('client-slug').'/masters/tables/*') ? ' active' : '' }} {{ request()->is(session()->get('client-slug').'/masters/tables') ? ' active' : '' }}" href="/{{session()->get('client-slug')}}/masters/tables">
                                            <span class="nav-main-link-name">Tables</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is(session()->get('client-slug').'/masters/member/*') ? ' active' : '' }} {{ request()->is(session()->get('client-slug').'/masters/member') ? ' active' : '' }}" href="/client-add">
                                            <span class="nav-main-link-name">Members</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is(session()->get('client-slug').'/masters/manager/*') ? ' active' : '' }} {{ request()->is(session()->get('client-slug').'/masters/manager') ? ' active' : '' }}" href="/{{session()->get('client-slug')}}/masters/manager">
                                            <span class="nav-main-link-name">Cashiers</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is(session()->get('client-slug').'/masters/waiter/*') ? ' active' : '' }} {{ request()->is(session()->get('client-slug').'/masters/waiter') ? ' active' : '' }}" href="/{{session()->get('client-slug')}}/masters/waiter">
                                            <span class="nav-main-link-name">Waiters</span>
                                        </a>
                                    </li>
                                    <!--<li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client/masters/product') ? ' active' : '' }}" href="/client/masters/product">
                                            <span class="nav-main-link-name">Products</span>
                                        </a>
                                    </li>-->
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-payment') ? ' active' : '' }}" href="/client-payment">
                                            <span class="nav-main-link-name">Department</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-setting') ? ' active' : '' }}" href="/client-setting">
                                            <span class="nav-main-link-name">Section</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-payment') ? ' active' : '' }}" href="/client-payment">
                                            <span class="nav-main-link-name">Category</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-setting') ? ' active' : '' }}" href="/client-setting">
                                            <span class="nav-main-link-name">UOM</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--
                            <li class="nav-main-item ">
                                <a class="nav-main-link nav-main-link-submenu {{ request()->is('client/transactions/*') ? ' active' : '' }}" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-credit-card"></i>
                                    <span class="nav-main-link-name">Transactions</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-add') ? ' active' : '' }}" href="/client-add">
                                            <span class="nav-main-link-name">KOT</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client/transactions/billing') ? ' active' : '' }}" href="/client/transactions/billing">
                                            <span class="nav-main-link-name">Billing</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-log') ? ' active' : '' }}" href="/client-log">
                                            <span class="nav-main-link-name">Reprint KOT</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-payment') ? ' active' : '' }}" href="/client-payment">
                                            <span class="nav-main-link-name">Reprint Bill</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-setting') ? ' active' : '' }}" href="/client-setting">
                                            <span class="nav-main-link-name">Product List</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            -->
                            <li class="nav-main-item ">
                                <a class="nav-main-link nav-main-link-submenu {{ request()->is(session()->get('client-slug').'/reports/*') ? ' active' : '' }}" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-file"></i>
                                    <span class="nav-main-link-name">Reports</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is(session()->get('client-slug').'/reports/stock-report') ? ' active' : '' }}" href="/{{session()->get('client-slug')}}/reports/stock-report">
                                            <span class="nav-main-link-name">Stock Report</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is(session()->get('client-slug').'/reports/daily-report') ? ' active' : '' }}" href="/{{session()->get('client-slug')}}/reports/daily-report">
                                            <span class="nav-main-link-name">Daily Report</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-log') ? ' active' : '' }}" href="/client-log">
                                            <span class="nav-main-link-name">Monthly Report</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-payment') ? ' active' : '' }}" href="/client-payment">
                                            <span class="nav-main-link-name">MIS Reports</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-setting') ? ' active' : '' }}" href="/client-setting">
                                            <span class="nav-main-link-name">Master Lists</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is(session()->get('client-slug').'/reports/stock-statement') ? ' active' : '' }}" href="/{{session()->get('client-slug')}}/reports/stock-statement">
                                            <span class="nav-main-link-name">Stock Statement</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is(session()->get('client-slug').'/reports/stock-verification') ? ' active' : '' }}" href="/{{session()->get('client-slug')}}/reports/stock-verification">
                                            <span class="nav-main-link-name">Stock Verification</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item ">
                                <a class="nav-main-link nav-main-link-submenu {{ request()->is('client-details/*') ? ' active' : '' }} {{ request()->is('client-details') ? ' active' : '' }} {{ request()->is('client-payment') ? ' active' : '' }} {{ request()->is('client-log') ? ' active' : '' }} {{ request()->is('client-setting') ? ' active' : '' }} {{ request()->is('client-add') ? ' active' : '' }}" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon fa fa-cogs"></i>
                                    <span class="nav-main-link-name">Settings</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-payment') ? ' active' : '' }}" href="#">
                                            <span class="nav-main-link-name">SMS Setting</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-add') ? ' active' : '' }}" href="#">
                                            <span class="nav-main-link-name">Day Opening</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-details/*') ? ' active' : '' }} {{ request()->is('client-details') ? ' active' : '' }}" href="#">
                                            <span class="nav-main-link-name">Day Closing</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-log') ? ' active' : '' }}" href="#">
                                            <span class="nav-main-link-name">Daily Backup</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-payment') ? ' active' : '' }}" href="#">
                                            <span class="nav-main-link-name">Company Setup</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-setting') ? ' active' : '' }}" href="#">
                                            <span class="nav-main-link-name">Users Setup</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ request()->is('client-payment') ? ' active' : '' }}" href="#">
                                            <span class="nav-main-link-name">Notification Setup</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--<li class="nav-main-heading">Various</li>
                            <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon si si-bulb"></i>
                                    <span class="nav-main-link-name">Examples</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                            <span class="nav-main-link-name">DataTables</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}" href="/pages/slick">
                                            <span class="nav-main-link-name">Slick Slider</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                                            <span class="nav-main-link-name">Blank</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading">More</li>
                            <li class="nav-main-item open">
                                <a class="nav-main-link" href="/">
                                    <i class="nav-main-link-icon si si-globe"></i>
                                    <span class="nav-main-link-name">Landing</span>
                                </a>
                            </li>
                            -->
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- END Sidebar Scrolling -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>
                        <?php 
                            date_default_timezone_set('Asia/Kolkata');
                            echo date('D dS M-Y, g:i:s');
                        ?>
                        @if(session()->get('clientStatus') == 0)
                        <a href="/client/dashboard/clientStatus/1"><button type="button" class="btn btn-success mr-2" style="margin-left:10px;">Open</button></a>
                        @else
                        <a href="/client/dashboard/clientStatus/0"><button type="button" class="btn btn-danger mr-2" style="margin-left:10px;">Close</button></a>
                        @endif
                        
                        <!-- END Toggle Mini Sidebar -->

                        <!-- Apps Modal -->
                        <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                        <!--
                        <button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">
                            <i class="fa fa-fw fa-cubes"></i>
                        </button>
                        -->
                        <!-- END Apps Modal -->

                        <!-- Open Search Section (visible on smaller screens) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <!--<button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-fw fa-search"></i>
                        </button>-->
                        <!-- END Open Search Section -->

                        <!-- Search Form (visible on larger screens) -->
                        <!--<form class="d-none d-sm-inline-block" action="/dashboard" method="POST">
                            @csrf
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-body border-0">
                                        <i class="fa fa-fw fa-search"></i>
                                    </span>
                                </div>
                            </div>
                        </form>-->
                        <!-- END Search Form -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <!-- Notifications Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-bell"></i>
                                <!--<span class="text-primary">•</span>-->
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-2 bg-primary-dark text-center rounded-top">
                                    <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                                </div>
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new follower</div>
                                                <span class="font-w500 text-muted">15 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">1 new sale, keep it up</div>
                                                <span class="font-w500 text-muted">22 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-times-circle text-danger"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">Update failed, restart server</div>
                                                <span class="font-w500 text-muted">26 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">2 new sales, keep it up</div>
                                                <span class="font-w500 text-muted">33 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-user-plus text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new subscriber</div>
                                                <span class="font-w500 text-muted">41 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new follower</div>
                                                <span class="font-w500 text-muted">42 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-arrow-down mr-1"></i> Load More..
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Notifications Dropdown -->
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="Header Avatar" style="width: 21px;">
                                <span class="d-none d-sm-inline-block ml-2">{{session()->get('client')['company_name']}}</span>
                                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ml-1 mt-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 border-0" aria-labelledby="page-header-user-dropdown">
                                <!--<div class="p-3 text-center bg-primary-dark rounded-top">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                                    <p class="mt-2 mb-0 text-white font-w500">{{session()->get('client')['company_name']}}</p>
                                    <!--<p class="mb-0 text-white-50 font-size-sm">Web Developer</p>
                                </div>-->
                                <div class="p-2">
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="/{{session()->get('client-slug')}}/profile">
                                        <span class="font-size-sm font-w500">Profile</span>
                                        <!--<span class="badge badge-pill badge-primary ml-2">1</span>-->
                                    </a>
                                    <!--<div role="separator" class="dropdown-divider"></div>-->
                                    <!--<a class="dropdown-item d-flex align-items-center justify-content-between" href="/settings">
                                        <span class="font-size-sm font-w500">Settings</span>
                                    </a>-->
                                    <!--<div role="separator" class="dropdown-divider"></div>-->
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="/logout">
                                        <span class="font-size-sm font-w500">Log Out</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->
                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() 
                        <button type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                        </button>-->
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-white">
                    <div class="content-header">
                        <form class="w-100" action="/dashboard" method="POST">
                            @csrf
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                   </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader 
                <div class="text-right">
                    
                </div>-->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->
            <div style="margin:50px;">
            </div>
            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light" style="position: fixed;
   bottom: 0;  width: 100%; left:10;">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center" style="float:right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://bridcodes.net/" target="_blank">Birdcodes</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="/{{session()->get('client-slug')}}/dashboard">Licrapro</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

            <!-- Apps Modal -->
            <!-- Opens from the modal toggle button in the header -->
            <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Apps</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row gutters-tiny">
                                    <div class="col-6">
                                        <!-- CRM -->
                                        <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-speedometer fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    CRM
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END CRM -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Products -->
                                        <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-rocket fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    Products
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Products -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Sales -->
                                        <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-plane fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    Sales
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Sales -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Payments -->
                                        <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-wallet fa-2x text-primary"></i>
                                                <p class="font-w600 font-size-sm mt-2 mb-3">
                                                    Payments
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Payments -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Apps Modal -->
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS -->
        <script src="{{ mix('js/oneui.app.js') }}"></script>
        
        <!--
        <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>-->
        <script src="{{ asset('/js/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{ asset('/js/plugins/chart.js/Chart.bundle.min.js')}}"></script>
        <script>jQuery(function(){ One.helpers([ 'sparkline']); });</script>
        <script src="{{ asset('js/script.js') }}"></script>
        <!-- Laravel Scaffolding JS -->
        <!-- <script src="{{ mix('/js/laravel.app.js') }}"></script> -->
        
        @yield('js_after')
    </body>
</html>
