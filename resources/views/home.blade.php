
@foreach ($rfq as $rfq)
@endforeach
@foreach ($bid as $bid)
@endforeach
@foreach ($order as $order)
@endforeach
@foreach ($msgs as $msgs)
@endforeach
@foreach ($mills as $mills)
@endforeach
@foreach ($transporters as $transporters)
@endforeach
@foreach ($agents as $agents)
@endforeach

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
            <a class="navbar-brand" href="{{url('/home')}}">
              <img alt="logo" src="{{asset('/app-assets/images/logo/sodabaz13.png')}}">
              
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>

      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <a href="{{url('website/index')}}" target="_blank" class="btn btn-info text-white"><i class="la la-home"></i></a>
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
              <li class="dropdown dropdown-user nav-item">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <span class="mr-1">
                    <span class="user-name text-bold-700">{{ Auth::user()->name }}</span>
                  </span>
                  <span class="avatar avatar-online">
                    <img class="rounded-circle" style="height: 35px; width: 35px;" src="{{ asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}" alt="avatar">
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  @if(Auth::user()->role->role == "admin")
                  <a class="dropdown-item" href="{{url('/profile')}}">
                    <i class="ft-user"></i> Update Profile
                  </a>
                  @elseif(Auth::user()->role->role == "mills" || Auth::user()->role->role == "agents" || Auth::user()->role->role == "transporter" )
                   <a class="dropdown-item" href="{{url('mills/profile')}}">
                    <i class="ft-user"></i> Update Profile
                  </a>
                  @endif
                  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="ft-power"></i>
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

  <!-- side bar -->

  @if(Auth::user()->role->role == "admin")
  <div  class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" nav-item {{ (request()->is('home')) ? 'active' : '' }}">
        <a href="{{url('home')}}"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.animation.main">Dashboard</span></a>
      </li>
      <li class=" nav-item"><a href=""><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Requests</span></a>
        <ul class="menu-content">
          <li class="nav-item {{ (request()->is('view_requests')) ? 'active' : '' }}"><a class="menu-item" href="{{url('view_requests')}}" data-i18n="nav.dash.ecommerce">View Requests</a>
          </li>
          <!---
          <li class="nav-item {{ (request()->is('view_users')) ? 'active' : '' }}"> <a class="menu-item" href="{{url('view_users')}}" data-i18n="nav.dash.crypto">View Users</a>
          </li> --->
        </ul>
      </li>
      <li class=" nav-item {{ (request()->is('support')) ? 'active' : '' }}">
        <a href="{{url('support')}}"><i class="la la-envelope"></i><span class="menu-title" data-i18n="nav.animation.main">Support</span></a>
      </li>
      <li class=" nav-item {{ (request()->is('enquiry_fields')) ? 'active' : '' }}">
        <a href="{{url('enquiry_fields')}}"><i class="la la-unlock"></i><span class="menu-title" data-i18n="nav.animation.main">Enquiry Fields</span></a>
      </li>
      <li class=" nav-item"><a href=""><i class="la la-bell"></i><span class="menu-title" data-i18n="nav.dash.main">Annoucements
        </span></a>
            <ul class="menu-content">
                <li class="{{ (request()->is('product_announcements')) ? 'active' : '' }}">
                  <a class="menu-item" href="{{url('product_announcements')}}" data-i18n="nav.dash.crypto">
                    Product Announcements
                  </a>
                </li>
                <li class="{{ (request()->is('company_announcements')) ? 'active' : '' }}">
                  <a class="menu-item" href="{{url('company_announcements')}}" data-i18n="nav.dash.crypto">
                    Company Announcements
                  </a>
                </li>
            </ul>
        </li>
      <li class=" nav-item"><a href=""><i class="la la-user"></i><span class="menu-title" data-i18n="nav.dash.main">Settings
        </span></a>
            <ul class="menu-content">
                <li class="{{ (request()->is('/profile')) ? 'active' : '' }}">
                  <a class="menu-item" href="{{url('/profile')}}" data-i18n="nav.dash.crypto">
                    Update Profile
                  </a>
                </li>
                <li class="{{ (request()->is('change_password')) ? 'active' : '' }}">
                  <a class="menu-item" href="{{url('change_password')}}" data-i18n="nav.dash.crypto">
                    Change Password
                  </a>
                </li>
            </ul>
        </li>
    </ul>
    </div>
  </div>


<!-- admin side bar end-->

<!-- admin dashboard-->

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- eCommerce statistic -->
        <h1></h1>
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <a href="{{url('/users','2')}}">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">{{$mills->totalmills}}</h3>
                      <h6>Mills</h6>
                    </div>
                    <div>
                      <i class="icon-basket-loaded info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: {{$mills->totalmills}}%" aria-valuenow="{{$mills->totalmills}}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <a href="{{url('/users','3')}}">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">{{$transporters->totaltransporters}}</h3>
                      <h6>Transporters</h6>
                    </div>
                    <div>
                      <i class="icon-pointer warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: {{$transporters->totaltransporters}}%" aria-valuenow="{{$transporters->totaltransporters}}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <a href="{{url('/users','4')}}">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">{{$agents->totalagents}}</h3>
                      <h6>Agents</h6>
                    </div>
                    <div>
                      <i class="icon-user success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: {{$agents->totalagents}}%"
                    aria-valuenow="{{$agents->totalagents}}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                    <a href="#">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">99.89%</h3>
                      <h6>Certification Authorities</h6>
                    </div>
                    <div>
                      <i class="icon-heart danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <a href="#">
                </div>
              </div>
            </div>
          </div>
        </div>

</div>
</div>
</div>

<!-- admin dashboard end-->
  @elseif(Auth::user()->role->role == "mills")

<!-- mills side bar-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" role="navigation" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item {{ (request()->is('home')) ? 'active' : '' }}">
          <a href="{{url('home')}}"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.animation.main">Dashboard</span></a>
        </li>
        <!---
        <li class=" nav-item">
          <a href="{{url('mills/marketplace')}}"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.animation.main">Marketplace</span></a>
        </li>
        ---->
        <li class=" nav-item"><a href=""><i class="la la-clipboard"></i><span class="menu-title" data-i18n="nav.dash.main">Inventory Manage</span></a>
          <ul class="menu-content">
              <li class="{{ (request()->is('mills/manage_category')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_category')}}" data-i18n="nav.dash.ecommerce">Category</a>
              </li>
              <!---
              <li><a class="menu-item" href="{{url('mills/manage_sub_category')}}" data-i18n="nav.dash.crypto">Manage Sub Category</a>
              </li>
              ---->
              <li class="{{ (request()->is('mills/manage_unit')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_unit')}}" data-i18n="nav.dash.sales">Units</a>
              </li>

              <li class="{{ (request()->is('mills/manage_product')) ? 'active' : '' }} {{ (request()->is('mills/add_products')) ? 'active' : '' }}">
                <a class="menu-item" href="{{url('mills/manage_product')}}" data-i18n="nav.dash.sales">Product
              </a>
              </li>

              <li class="{{ (request()->is('mills/manage_stock')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_stock')}}">Stock</a>
              </li>
            
          </ul>
        </li>
        <!---
            <li class=" nav-item"><a href="{{url('website/index')}}"><i class="la la-puzzle-piece"></i><span class="menu-title" data-i18n="nav.animation.main">Buy Product</span></a>
            </li>
            
            <li class=" nav-item"><a href="{{url('website/index')}}"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.animation.main">Orders</span></a>
            </li>
            
        <li class=" nav-item"><a href=""><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.dash.main">Manage Rfqs</span></a>
          <ul class="menu-content">
              <li class="{{ (request()->is('mills/add_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/add_rfq')}}" data-i18n="nav.dash.ecommerce">Add Rfqs</a>
              </li>
              <li class="{{ (request()->is('mills/view_rfq')) ? 'active' : '' }} {{ (request()->is('mills/submitted_quotations/id')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/view_rfq')}}" data-i18n="nav.dash.crypto">View Rfqs</a>

              </li>
              <li class="{{ (request()->is('mills/new_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/new_rfq')}}" data-i18n="nav.dash.crypto">New Rfqs</a>
              </li>
              <li class="{{ (request()->is('mills/accepted_quotations')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/accepted_quotations')}}" data-i18n="nav.dash.crypto">Accepted Quotations</a>
              </li>
              
          </ul>
        </li>
        --->


        <li class=" nav-item"><a href=""><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.dash.main">Manage Enquiries</span></a>
          <ul class="menu-content">
              <li class="{{ (request()->is('mills/add_enquiries')) ? 'active' : '' }}">
                <a class="menu-item" href="{{url('mills/add_enquiries')}}" data-i18n="nav.dash.ecommerce">Add Enquiries</a>
              </li>
              <li class="{{ (request()->is('mills/view_enquiries')) ? 'active' : '' }}">
                <a class="menu-item" href="{{url('mills/view_enquiries')}}" data-i18n="nav.dash.ecommerce">View Enquiries</a>
              </li>
              <li class="{{ (request()->is('mills/enquiries_bid')) ? 'active' : '' }}">
                <a class="menu-item" href="{{url('mills/enquiries_bid')}}" data-i18n="nav.dash.ecommerce">Enquiries Bids</a>
              </li>
              <!-----
              <li class="{{ (request()->is('mills/view_rfq')) ? 'active' : '' }} {{ (request()->is('mills/submitted_quotations/id')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/view_rfq')}}" data-i18n="nav.dash.crypto">View Rfqs</a>

              </li>
              <li class="{{ (request()->is('mills/new_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/new_rfq')}}" data-i18n="nav.dash.crypto">New Rfqs</a>
              </li>
              <li class="{{ (request()->is('mills/accepted_quotations')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/accepted_quotations')}}" data-i18n="nav.dash.crypto">Accepted Quotations</a>
              </li>
              ------->
          </ul>
        </li>
        <li class="nav-item {{ (request()->is('mills/accepted_requests')) ? 'active' : '' }}"><a href="{{url('mills/accepted_requests')}}"><i class="la la-map"></i><span class="menu-title">Accepted Requests</span></a>
        </li>


        <li class=" nav-item {{ (request()->is('chatify')) ? 'active' : '' }}"><a href="{{url('/chatify')}}"><i class="la la-comments"></i><span class="menu-title">Messenger</span></a>
        </li>

        <li class=" nav-item"><a href=""><i class="la la-user"></i><span class="menu-title" data-i18n="nav.dash.main">Bidding Details
            </span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('your_bids')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/your_bids')}}" data-i18n="nav.dash.crypto">
                        Your Bids
                      </a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li class="{{ (request()->is('accepted_bids')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/accepted_bids')}}" data-i18n="nav.dash.crypto">
                        Accepted Bids
                      </a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li class="{{ (request()->is('biddings')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/biddings')}}" data-i18n="nav.dash.crypto">
                        Bids on My Products
                      </a>
                    </li>
                </ul>
            </li>
        <li class=" nav-item"><a href=""><i class="la la-user"></i><span class="menu-title" data-i18n="nav.dash.main">Settings
            </span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('mills/profile')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('mills/profile')}}" data-i18n="nav.dash.crypto">
                        Update Profile
                      </a>
                    </li>
                    <li class="{{ (request()->is('change_password')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('change_password')}}" data-i18n="nav.dash.crypto">
                        Change Password
                     </a>
                </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- mills side bar end-->

<!--mills dashboard -->


<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
        <div class="content-body">
          <!-- eCommerce statistic -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-success">
                <div class="card-content">
                  <div class="card-body pb-1">
                    <div class="row text-white">
                      <div class="col-6">
                        <h5 style="font-weight:bold;" class="text-white mb-2">Accepted RFQs</h5>
                        
                        
                        <h5 style="font-weight:bold;" class="pt-1 m-0 text-white">{{$rfq->totalrfq}}</h5>
                      </div>
                      <div class="col-6 text-right">
                        
                          <i class="icon-speech text-white font-large-2 float-right"></i>
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-info">
                <div class="card-content">
                  <div class="card-body pb-1">
                    <div class="row text-white">
                      <div class="col-6">
                        <h5 style="font-weight:bold;" class="text-white mb-2">Accepted Bids</h5>
                        
                        
                        <h5 style="font-weight:bold;" class="pt-1 m-0 text-white">{{$bid->totalbid}}</h5>
                      </div>
                      <div class="col-6 text-right">
                       
                        <i class="icon-graph text-white font-large-2 float-right"></i>
                        
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-warning">
                <div class="card-content">
                  <div class="card-body pb-1">
                    <div class="row text-white">
                      <div class="col-6">
                        <h5 style="font-weight:bold;" class="text-white mb-2">Total Orders</h5>
                        
                        <h5 style="font-weight:bold;" class="pt-1 m-0 text-white">{{$order->totalorder}}</h5>
                      </div>
                      <div class="col-6 text-right">
                       <i class="icon-pie-chart text-white font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-danger">
                <div class="card-content">
                  <div class="card-body pb-1">
                    <div class="row text-white">
                      <div class="col-6">
                        <h5 style="font-weight:bold;" class="text-white">Messenger</h5>
                        <br>
                        <h5 style="font-weight:bold;" class="pt-1 m-0 text-white">{{$msgs->totalmsgs}}</h5>
                      </div>
                      <div class="col-6 text-right">
                       <i class="icon-user text-white font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
        <!--/ eCommerce statistic -->
        <!----------------------START MAIN SECTION-------------------->
        <!-- Recent Transactions -->
        <div class="row">
          <div id="recent-transactions" class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recent Orders</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">#</th>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Order#</th>
                        <th class="border-top-0">Customer Name</th>
                        <th class="border-top-0">Amount</th>
                        <th class="border-top-0">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=1;
                        ?>
                        @foreach($recent_orders as $data)
                         
                      <tr>
                        <td class="text-truncate">
                         {{$i++}}
                        </td>
                        <td class="text-truncate">
                          
                          {{$data->status}}
                        </td>
                        <td class="text-truncate">
                          <a href="#">
                            INV-{{$data->id}}
                          </a>
                        </td>
                        <td class="text-truncate">
                          <span>{{$data->customer->name}}</span>
                        </td>
                        <td class="text-truncate">{{$data->total_amount}}</td>
                        <td class="text-truncate">{{$data->created_at->diffForHumans()}}</td>
                      </tr>
                        
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Recent Transactions -->

          <!---------------------END MAIN SECTION-------------------->
      </div>
  </div>
</div>
<!-- mills dashboard end -->


@elseif(Auth::user()->role->role == "transporter")
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" nav-item"><a href="{{url('transporter/services')}}"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.animation.main">Services</span></a>
    </li>
    <li class=" nav-item"><a href="{{url('transporter/requests')}}"><i class="la la-file-text"></i><span class="menu-title">Requests</span></a>
    </li>
    <li class=" nav-item"><a href="{{url('/chatify')}}"><i class="la la-envelope"></i><span class="menu-title">Messenger</span></a>
        </li>
    </ul>
  </div>
</div>

<!-- transpoters side bar end-->

<!-- transpoters dashboard-->

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- eCommerce statistic -->
        <h1>Transpoter Dashboard</h1>
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="info">850</h3>
                      <h6>Services</h6>
                    </div>
                    <div>
                      <i class="icon-basket-loaded info font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">$748</h3>
                      <h6>Requests</h6>
                    </div>
                    <div>
                      <i class="icon-pie-chart warning font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%"
                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">146</h3>
                      <h6>Agents</h6>
                    </div>
                    <div>
                      <i class="icon-user-follow success font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">99.89 %</h3>
                      <h6>Certification Authorities</h6>
                    </div>
                    <div>
                      <i class="icon-heart danger font-large-2 float-right"></i>
                    </div>
                  </div>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</div>
</div>
</div>

<!-- transpoters dashboard end-->
@elseif(Auth::user()->role->role == "agents")

<!-- agents side bar-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" role="navigation" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item {{ (request()->is('home')) ? 'active' : '' }}">
          <a href="{{url('home')}}"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.animation.main">Dashboard</span></a>
        </li>
        <!---
        <li class=" nav-item">
          <a href="{{url('mills/marketplace')}}"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.animation.main">Marketplace</span></a>
        </li>
        ---->
        <!-----
        <li class=" nav-item"><a href=""><i class="la la-clipboard"></i><span class="menu-title" data-i18n="nav.dash.main">Inventory Manage</span></a>
          <ul class="menu-content">
              <li class="{{ (request()->is('mills/manage_category')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_category')}}" data-i18n="nav.dash.ecommerce">Category</a>
              </li>
              
              <li><a class="menu-item" href="{{url('mills/manage_sub_category')}}" data-i18n="nav.dash.crypto">Manage Sub Category</a>
              </li>
              
              <li class="{{ (request()->is('mills/manage_unit')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_unit')}}" data-i18n="nav.dash.sales">Units</a>
              </li>

              <li class="{{ (request()->is('mills/manage_product')) ? 'active' : '' }} {{ (request()->is('mills/add_products')) ? 'active' : '' }}">
                <a class="menu-item" href="{{url('mills/manage_product')}}" data-i18n="nav.dash.sales">Product
              </a>
              </li>

              <li class="{{ (request()->is('mills/manage_stock')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_stock')}}">Stock</a>
              </li>
            
          </ul>
        </li>
        ----->
        <!---
            <li class=" nav-item"><a href="{{url('website/index')}}"><i class="la la-puzzle-piece"></i><span class="menu-title" data-i18n="nav.animation.main">Buy Product</span></a>
            </li>
            
            <li class=" nav-item"><a href="{{url('website/index')}}"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.animation.main">Orders</span></a>
            </li>
        --->
        <!----
        <li class=" nav-item"><a href=""><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.dash.main">Manage Rfqs</span></a>
          <ul class="menu-content">
              <li class="{{ (request()->is('mills/add_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/add_rfq')}}" data-i18n="nav.dash.ecommerce">Add Rfqs</a>
              </li>
              <li class="{{ (request()->is('mills/view_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/view_rfq')}}" data-i18n="nav.dash.crypto">View Rfqs</a>

              </li>
              <li class="{{ (request()->is('mills/new_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/new_rfq')}}" data-i18n="nav.dash.crypto">New Rfqs Requests</a>
              
              </li>
              
          </ul>
        </li>
        ----->
        <!----
        <li class="nav-item {{ (request()->is('mills/accepted_requests')) ? 'active' : '' }}"><a href="{{url('mills/accepted_requests')}}"><i class="la la-map"></i><span class="menu-title">Accepted Requests</span></a>
        </li>
        ----->


        <li class=" nav-item {{ (request()->is('chatify')) ? 'active' : '' }}"><a href="{{url('/chatify')}}"><i class="la la-comments"></i><span class="menu-title">Messenger</span></a>
        </li>

        <!----
        <li class=" nav-item"><a href=""><i class="la la-user"></i><span class="menu-title" data-i18n="nav.dash.main">Bidding Details
            </span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('your_bids')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/your_bids')}}" data-i18n="nav.dash.crypto">
                        Your Bids
                      </a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li class="{{ (request()->is('accepted_bids')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/accepted_bids')}}" data-i18n="nav.dash.crypto">
                        Accepted Bids
                      </a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li class="{{ (request()->is('biddings')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/biddings')}}" data-i18n="nav.dash.crypto">
                        Bids on My Products
                      </a>
                    </li>
                </ul>
            </li>
        --->
        <li class=" nav-item"><a href=""><i class="la la-user"></i><span class="menu-title" data-i18n="nav.dash.main">Settings
            </span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('mills/profile')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('mills/profile')}}" data-i18n="nav.dash.crypto">
                        Update Profile
                      </a>
                    </li>
                    <li class="{{ (request()->is('change_password')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('change_password')}}" data-i18n="nav.dash.crypto">
                        Change Password
                     </a>
                </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- agents side bar end-->

<!--agents dashboard -->

<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
        <div class="content-body">
          <!-- eCommerce statistic -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-success">
                <div class="card-content">
                  <div class="card-body pb-1">
                    <div class="row text-white">
                      <div class="col-6">
                        <h5 style="font-weight:bold;" class="text-white mb-2">Accepted RFQs</h5>
                        
                        
                        <h5 style="font-weight:bold;" class="pt-1 m-0 text-white">{{$rfq->totalrfq}}</h5>
                      </div>
                      <div class="col-6 text-right">
                        
                          <i class="icon-speech text-white font-large-2 float-right"></i>
                        
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-info">
                <div class="card-content">
                  <div class="card-body pb-1">
                    <div class="row text-white">
                      <div class="col-6">
                        <h5 style="font-weight:bold;" class="text-white mb-2">Accepted Bids</h5>
                        
                        
                        <h5 style="font-weight:bold;" class="pt-1 m-0 text-white">{{$bid->totalbid}}</h5>
                      </div>
                      <div class="col-6 text-right">
                       
                        <i class="icon-graph text-white font-large-2 float-right"></i>
                        
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-warning">
                <div class="card-content">
                  <div class="card-body pb-1">
                    <div class="row text-white">
                      <div class="col-6">
                        <h5 style="font-weight:bold;" class="text-white mb-2">Total Orders</h5>
                        
                        <h5 style="font-weight:bold;" class="pt-1 m-0 text-white">{{$order->totalorder}}</h5>
                      </div>
                      <div class="col-6 text-right">
                       <i class="icon-pie-chart text-white font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-danger">
                <div class="card-content">
                  <div class="card-body pb-1">
                    <div class="row text-white">
                      <div class="col-6">
                        <h5 style="font-weight:bold;" class="text-white">Messenger</h5>
                        <br>
                        <h5 style="font-weight:bold;" class="pt-1 m-0 text-white">{{$msgs->totalmsgs}}</h5>
                      </div>
                      <div class="col-6 text-right">
                       <i class="icon-user text-white font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
        <!--/ eCommerce statistic -->
        <!----------------------START MAIN SECTION-------------------->
        <!-- Recent Transactions -->
        <div class="row">
          <div id="recent-transactions" class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recent Orders</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    
                  </ul>
                </div>
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">#</th>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Order#</th>
                        <th class="border-top-0">Customer Name</th>
                        <th class="border-top-0">Amount</th>
                        <th class="border-top-0">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=1;
                        ?>
                        @foreach($recent_orders as $data)
                         
                      <tr>
                        <td class="text-truncate">
                         {{$i++}}
                        </td>
                        <td class="text-truncate">
                          
                          {{$data->status}}
                        </td>
                        <td class="text-truncate">
                          <a href="#">
                            INV-{{$data->id}}
                          </a>
                        </td>
                        <td class="text-truncate">
                          <span>{{$data->customer->name}}</span>
                        </td>
                        <td class="text-truncate">{{$data->total_amount}}</td>
                        <td class="text-truncate">{{$data->created_at->diffForHumans()}}</td>
                      </tr>
                        
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Recent Transactions -->

          <!---------------------END MAIN SECTION-------------------->
      </div>
  </div>
</div>
<!-- agents dashboard end -->

@endif






<!--main side and dashbard end -->



  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      
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
