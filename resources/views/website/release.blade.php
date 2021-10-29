@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')
	<!-- Hero Section-->
    <section class="hero hero-home no-padding">
      <div class="container-fluid p-0">       
        <div style="background: url({{asset('website-assets/img/Banner.png)')}};" class="item d-flex col-lg-12">
           <div class="container">
            <center>
           <h1 style="color: black;">MEDIA RELEASE</h1>
            </center>
          </div>
        </div>
    </div>
    </section>
    <main>
      <div class="container">
        <div class="row">
          <!-- Sidebar-->
          <div class="sidebar col-lg-4 sidebar">
            <div class="block">
              <h3 class="text-uppercase">Latest</h3>
              <ul class="list-unstyled">
              	 @foreach($company as $data)
                <li>
                  <a style="text-decoration: none;">
                	{{$data->created_at->diffForHumans()}}
            	  </a>
                  <a href="{{url('website/release',$data->id)}}" class="fw-bold nohover mb-3">
                    {{$data->title}}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          <!-- /Sidebar end-->
          <!-- Grid -->
          <div class="products-grid col-lg-8 sidebar-left">
	      	<!-- item-->
	      	@foreach($single_company as $data)
	          <header>
	              <h3>
	              	{{$data->title}}
	              </h3>
	   		 </header>
	   		 <div class="text-content"> 
              <p><img src="{{asset('/rfq_files/'.$data->image)}}" alt="announcement blog" class="img-fluid"></p>
              <p>
              	{{$data->detail}}
              </p>
              <p>
              	{{$data->created_at->diffForHumans()}}
              </p>
             </div>
             @endforeach
          </div>
          <!-- / Grid End-->
        </div>
      </div>
    </main>
   	
@include('website.layouts.footer')
@endsection