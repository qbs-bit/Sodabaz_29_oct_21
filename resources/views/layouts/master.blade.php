<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
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

  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/meteocons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/morris.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/chartist.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/forms/selects/select2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/pickers/daterange/daterangepicker.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/app.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/simple-line-icons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/timeline.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/dashboard-ecommerce.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/forms/wizard.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/pickers/daterange/daterange.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/image_upload.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/users.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/tags/tagging.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/dashboard-ecommerce.css')}}">
 

 
  
  <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->


@include('layouts.navbar')
@include('layouts.sidebar')

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- eCommerce statistic -->

      @yield('content')
        <!--/ Basic Horizontal Timeline -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
  </footer>

  <script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/forms/tags/tagging.min.js')}}" type="text/javascript"></script>
  
   <script src="{{asset('/app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/scripts/forms/wizard-steps.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"
  type="text/javascript"></script>

  <script src="{{asset('app-assets/js/scripts/pages/users-contacts.js')}}" type="text/javascript"></script>
  <script src="{{asset('app-assets/js/scripts/forms/tags/tagging.js')}}" type="text/javascript"></script>


@yield('scripts')


</body>
</html>
