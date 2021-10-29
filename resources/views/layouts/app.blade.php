<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Sodabaz</title>
  <link rel="apple-touch-icon" href="{{asset('/app-assets/images/ico/fav-icn.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('/app-assets/images/ico/fav-icn.png')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/custom.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/login-register.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <!-- END Custom CSS-->


  <link rel="apple-touch-icon" href="{{asset('/assets/app-assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/app-assets/images/ico/fav-icn.png')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/fonts/meteocons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/charts/morris.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/charts/chartist.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/forms/selects/select2.min.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/fonts/simple-line-icons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/pages/timeline.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/css/pages/dashboard-ecommerce.css')}}">
 
</head>
<body>
    <div id="app">
       

        <main class="py-4">
            @yield('content')
        </main>
    </div>


  <!-- BEGIN VENDOR JS-->
  <script src="{{asset('assets/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('assets/app-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('assets/app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/app-assets/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('assets/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('assets/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
   <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('assets/app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"
  type="text/javascript"></script>
   <script src="{{asset('assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('assets/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('assets/app-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>



 <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('app-assets/js/scripts/forms/form-login-register.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->



</body>
</html>
