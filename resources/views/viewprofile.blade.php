


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Dashboard </title>
  <link rel="apple-touch-icon" href="{{asset('/app-assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('/app-assets/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/meteocons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/morris.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/chartist.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/forms/selects/select2.min.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/simple-line-icons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/timeline.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/dashboard-ecommerce.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item mr-auto">
            <a class="navbar-brand"href="{{url('/home')}}">
              <img class="brand-logo" alt="modern admin logo" src="{{asset('/app-assets/images/logo/logo.png')}}">
              <h3 class="brand-text">Sodabaz</h3>
            </a>
          </li>
          <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      
      
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
              <div class="search-input">
                <input class="input" type="text" placeholder="Explore Modern...">
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
                                <!-- Right Side Of Navbar -->
                               <li>
                                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </li>
                    </ul>
      </div>
    
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{url('/')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Requests</span></a>
          <ul class="menu-content">
            <li class="active"><a class="menu-item" href="{{url('view_requests')}}" data-i18n="nav.dash.ecommerce">View Requests</a>
            </li>
            <li><a class="menu-item" href="{{url('view_users')}}" data-i18n="nav.dash.crypto">View Users</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- eCommerce statistic -->
      


<div class="row match-height">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form-center">Check Users Profile to Approve</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="card-text">
                      <p></p>
                    </div>
                    <form class="form">
                      <div class="row justify-content-md-center">
                        <div class="col-md-6">
                          <div class="form-body">
                          <div class="form-group">

                          @foreach ($data as $user)
                           
                              <label for="eventInput1">User Role</label>
                              <input type="text" id="eventInput1" readonly class="form-control" placeholder="User Role" value="{{ucwords($user->role->role)}}">
                            </div>
                           
                         
                            <div class="form-group">
                              <label for="eventInput1">Name</label>
                              <input type="text" id="eventInput1" readonly class="form-control" placeholder="name" name="fullname" value="{{ucwords($user->name)}}">
                            </div>
                            <div class="form-group">
                              <label for="eventInput1">Compnay Name</label>
                              <input type="text" id="eventInput1" readonly class="form-control" placeholder="name" name="fullname" value="{{ucwords($user->company_name)}}">
                            </div>
             
                            <div class="form-group">
                              <label for="eventInput4">Email</label>
                              <input type="email" id="eventInput4" readonly class="form-control" placeholder="email" name="email" value="{{ucwords($user->email)}}">
                            </div>
                            <div class="form-group">
                              <label for="eventInput5">Contact Number</label>
                              <input type="tel" id="eventInput5" readonly class="form-control" name="contact" placeholder="contact number" value="{{ucwords($user->phone_number)}}">
                            </div>
                            <div class="form-group">
                              <label for="eventInput5">Address</label>
                              <input type="text" id="eventInput5" readonly class="form-control" name="contact" placeholder="contact number" value="{{ucwords($user->address)}}">
                            </div>

                            <div class="form-group">
                              <label for="eventInput5">STN NTN</label>
                              <input type="text" id="eventInput5" readonly class="form-control" name="contact" placeholder="contact number" value="{{ucwords($user->stn_ntn)}}">
                            </div>

                            <div class="form-group">
                              <label for="eventInput5">Company Email</label>
                              <input type="text" id="eventInput5" readonly class="form-control" name="contact" placeholder="contact number" value="{{ucwords($user->company_email)}}">
                            </div>

                                                <div class="form-group">
                              <label for="eventInput5">Payment Method</label>
                              <input type="text" id="eventInput5" readonly class="form-control" name="contact" placeholder="contact number" value="{{ucwords($user->payment_method)}}">
                            </div>




                            @endforeach
                          </div>
                        </div>
                      </div>
                      <div class="form-actions center">
                      <a href="{{route('cancel_profile', $user->id)}}" type="submit"  onclick="return confirm('Are you sure you want to cancel profile?');" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </a>
                        <a href="{{route('approve_profile', $user->id)}}" type="submit" class="btn btn-primary"
                       
    onclick="return confirm('Are you sure you want to approve your profile?');">
                          <i class="la la-check-square-o"></i> Approve
                        </a>
                        </button>

                       
                      </div>

                      <!--<div class="" id="append_area">-->
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>


<script>

function cancel_request(){

}
</script>





          
        <!--/ Basic Horizontal Timeline -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
        target="_blank">PIXINVENT </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('/app-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/vendors/js/timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
   <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"
  type="text/javascript"></script>
   <script src="{{asset('/app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('/app-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>
</body>
</html>