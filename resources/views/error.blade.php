<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <!--<title>OneUI - Bootstrap 4 Admin Template &amp; UI Framework</title>-->
        <title>Error - Club Management System</title>

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
    </head>
    <body>
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="hero">
                    <div class="hero-inner text-center">
                        <div class="bg-white">
                            <div class="content content-full overflow-hidden">
                                <div class="py-4">
                                    <!-- Error Header -->
                                    <h1 class="display-1 font-w600 text-city">404</h1>
                                    <h2 class="h4 font-w400 text-muted mb-5">We are sorry but the page you are looking for was not found..</h2>
                                    <!-- END Error Header -->
                                </div>
                            </div>
                        </div>
                        <div class="content content-full text-muted">
                            <!-- Error Footer -->
                            <p class="mb-1">
                                Would you like to let us know about it?
                            </p>
                            <a class="link-fx" href="/{{session()->get('client-slug')}}/dashboard">Go Back to Dashboard</a>
                            <!-- END Error Footer -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
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
