@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')
<style type="text/css">
  ul.experiences li {
    position:relative; /* so that pseudoelements are positioned relatively to their "li"s*/
    /* use padding-bottom instead of margin-bottom.*/ 
    margin-bottom: 0; /* This overrides previously specified margin-bottom */
    padding-bottom: 0.5em;
}

ul.experiences li:after {
    /* bullets */
    content: url({{asset('website-assets/img/bullet_image.png)')}};
    position: absolute;
    left: -26px; /*adjust manually*/
    top: 0px;
}

ul.experiences li:before {
    /* lines */
    content:"";
    position: absolute;
    left: -16px; /* adjust manually */
    border-left: 1px solid black;
    height: 100%;
    width: 1px;
}

ul.experiences li:first-child:before {
   /* first li's line */
   top: 6px; /* moves the line down so that it disappears under the bullet. Adjust manually */
}

ul.experiences li:last-child:before {
    /* last li's line */
   height: 6px; /* shorten the line so it goes only up to the bullet. Is equal to first-child
</style>
	<!-- Hero Section-->
    <section class="hero hero-home no-padding">
      <div class="container-fluid p-0">       
        <div style="background: url({{asset('website-assets/img/Banner.png)')}};" class="item d-flex col-lg-12">
           <div class="container">
            <center>
           <h2 style="color: black;">COMPANY ANNOUNCEMENTS</h2>
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
              <ul class="list-unstyled experiences">
              	 @foreach($company as $data)
                <li>
                  <a style="text-decoration: none;">
                	{{$data->created_at->diffForHumans()}}
            	  </a>
                  <a href="{{url('website/company_announcements',$data->id)}}" class="fw-bold nohover mb-3">
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