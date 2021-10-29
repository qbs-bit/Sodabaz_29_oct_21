<style type="text/css">
  
a.dropdown-item:hover{

background-color:#d7495b;
}

a, a:hover {
  color: #000;
  text-decoration: none;
}

#nav_li {
 
  position: relative;
  padding-bottom: 3px;
}
#nav_li:last-child {
  margin-right: 0;
}

#nav_li:after {
  content: '';
  display: block;
  margin: auto;
  height: 3px;
  width: 0px;
  background: transparent;
  transition: width .5s ease, background-color .5s ease;
}
#nav_li:hover:after {
  width: 100%;
  background: #d7495b;
}

@media (min-width: 1024px) {
  #pp {
    margin-left: 50px;
    
  }
}

</style>

<!-- navbar-->
    <header class="header">
      <!-- Tob Bar-->
      <nav class="navbar navbar-expand-lg ">
       
        <div class="container-fluid ">  
          <!-- Navbar Header  -->
          <a href="{{url('website/index')}}" class="navbar-brand">
            <img src="{{asset('/app-assets/images/logo/sodabaz_website.png')}}" alt="logo">
            <!---<h2 style="color:#ef5847;">Sodabaz</h2>--->
          </a>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
              <li id="nav_li" class="nav-item">
                <a href="{{url('website/index')}}"class="nav-link {{ (request()->is('website/index')) ? 'active' : '' }}">
                  Home
                </a>
              </li>
              <li id="nav_li" class="nav-item"><a href="{{url('website/mills')}}" class="nav-link {{ (request()->is('website/mills')) ? 'active' : '' }}">Mills</a>
              </li>
              <li id="nav_li" class="nav-item "><a href="{{url('website/agents')}}" class="nav-link {{ (request()->is('website/agents')) ? 'active' : '' }}">Agents</a>
              </li>
              <li id="nav_li" class="nav-item"><a href="{{url('website/transporters')}}" class="nav-link {{ (request()->is('website/transporters')) ? 'active' : '' }}">Transporters </a>
              </li>
              <li id="nav_li" class="nav-item"><a href="{{url('website/authorities')}}" class="nav-link {{ (request()->is('website/authorities')) ? 'active' : '' }}">Authorities</a>
              </li>
              <li id="nav_li" class="nav-item"><a href="{{url('website/products/all')}}" class="nav-link {{ (request()->is('website/products')) ? 'active' : '' }}">Products</a>
              </li>
              <li id="nav_li" class="nav-item dropdown"><a id="mediabrief" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false" class="nav-link {{ (request()->is('website/release')) ? 'active' : '' }}">
                Media Brief
                    <i class="fa fa-angle-down"></i></a>
                  <ul aria-labelledby="mediabrief" class="dropdown-menu">
                    <!----
                    <li>
                      <a href="{{url('website/release')}}" class="dropdown-item">
                       Media Release
                      </a>
                    </li>
                    ----->
                    @foreach($latest_product as $product)
                    @endforeach
                    @foreach($latest_company as $company)
                    @endforeach
                    <li>
                      <a href="{{url('website/company_announcements',$company->id)}}" class="dropdown-item">
                       Company Announcements
                      </a>
                    </li>
                    <li>
                      <a href="{{url('website/product_announcements',$product->id)}}"class="dropdown-item">
                       Product Announcements
                      </a>
                    </li>
                    <li>
                      <a href="{{url('website/gallery')}}" class="dropdown-item">
                        Event Gallery
                      </a>
                    </li>
                   <li>
                    <a href="{{url('website/blogs')}}" class="dropdown-item">
                      Blogs
                    </a>
                  </li>
                </ul>
              </li>
              <li id="nav_li" class="nav-item"><a href="{{url('website/about')}}" class="nav-link {{ (request()->is('website/about')) ? 'active' : '' }}">About Us</a>
              </li>
              
             @guest
             <li class="nav-item ml-2">
              <!--- Login --->
              @if (Route::has('login'))
              <div class="dropdown show">
                <a style="border-color:#57bcec; color: black; background-color: white;" class="btn btn-info pl-4 pr-4" href="{{url('/login')}}">
                  Log in
                </a>
              </div>
              @endif
            </li>
            @if (Route::has('register'))
            <li class="nav-item ml-2">
              <!-- Signup-->
              <div class="dropdown show">
                <a style="border-color:#57bcec; color: black; background-color: #57bcec " class="btn btn-info pl-4 pr-4" href="{{url('/register')}}" >
                  Register                      
                </a>
              </div>
              @endif
            </li>
            @else
            <li class="nav-item" id="pp">
              <a id="logindd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" class="nav-link">
                <span class="">
                  {{ Auth::user()->name }}
                </span>
                <img class="rounded-circle" style="height:35px; width:35px;" src="{{ asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}" alt="profile picture">
              </a>
              <ul aria-labelledby="logindd" class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="{{url('home')}}">
                    Dashboard
                  </a>
                </li>
                <li>
                 <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault(); 
                 document.getElementById('logout-form').submit();">
                  <i class="ft-power"></i>
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
                </li>
              </ul>
            </li>
            
            @endguest
          </ul>
            </div>
            <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">
              <!-- Search Button
              <div class="search"><i class="icon-search"></i></div> -->
              <!-- User Not Logged - link to login page-->

              <!-- Cart Dropdown-->
             
             
            </div>
          </div>
        </div>
      </nav>
    </header>
<!-- navbar ends-->