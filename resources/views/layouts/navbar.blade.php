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
                <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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