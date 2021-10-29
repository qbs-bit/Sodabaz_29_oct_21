@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')

	<!-- Hero Section-->
    <section class="hero hero-home no-padding">
      <div class="container-fluid p-0">       
        <div style="background: url({{asset('website-assets/img/Banner.png)')}};" class="item d-flex col-lg-12">
           <div class="container">
            <center>
           <h1 style="color: black;">EVENT GALLERY</h1>
            </center>
          </div>
        </div>
    </div>
    </section>

    <!-- Main Section-->

    <section class="blog gray-bg">
    	<center>
      <div class="container">
        <div class="row" >
          
          <div class="col-lg-6 col-md-6 col-sm-6" >
            <img style="width: 100%;" src="{{asset('/website-assets/img/event3.jpg')}}" alt="...">
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
            <img style="width: 100%; height: 100%;" src="{{asset('/website-assets/img/event5.jpeg')}}" alt="...">
          </div>
          
        </div>
		<br>
		<br>	


        <div class="row">
          
          <div class="col-lg-12 col-md-12 col-sm-12">
            <img style="width: 100%; height: auto;" src="{{asset('/website-assets/img/gallery3.jpg')}}" alt="...">
          </div>
          
        </div>
        <br>
		<br>


        <div class="row">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
            <img style="width: 100%; height: auto;" src="{{asset('/website-assets/img/event6.jpg')}}" alt="...">
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6">
            <img style="width: 100%; height: auto;" src="{{asset('/website-assets/img/event2.jpg')}}" alt="...">
          </div>
         
        </div>
        <br>
		<br>	


        <div class="row">
          
          <div class="col-lg-12 col-md-12 col-sm-12">
            <img style="width: 100%; height: auto;" src="{{asset('/website-assets/img/event7.jpg')}}" alt="...">
          </div>
          
        </div>

      </div>
      </center>
    </section>

@include('website.layouts.footer')
@endsection