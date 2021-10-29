@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')


	<!-- Hero Section-->
    <section class="hero hero-home no-padding">
      <div class="container-fluid p-0">       
        <div style="background: url({{asset('website-assets/img/Banner.png)')}};" class="item d-flex col-lg-12">
           <div class="container">
            <center>
           <h1 style="color: black;">AGENTS</h1>
            </center>
          </div>
        </div>
    </div>
    </section>

    <!-- Main Section-->

    <section class="product-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">

           <div class=""><img src="{{asset('/website-assets/img/agents1.png')}}" style="width: 100%; min-height:350px; height: auto;" alt="..."></div>
          </div>

          <div class=" col-lg-6">
            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
              <ul class="price list-inline no-margin">
              	<h3>Find a new supplier </h3>
              </ul>
            </div>
            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Access the world’s largest network of verified fabric suppliers and apparel manufacturers.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Find the best supplier with our unique search filters and matching logic.
            </p>


            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	View detailed company profiles with comparable and trusted information and directly get in touch.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Save time and effort whilst avoiding traveling.
            </p>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>

      <div class="container">
        <div class="row">
        	<div class=" col-lg-6">
            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
              <ul class="price list-inline no-margin">
              	<h3>Request & compare quotes </h3>
              </ul>
            </div>
            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Create targeted RFQs tailored to your specific product.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Receive fast, structured and comparable offers from relevant suppliers.
            </p>


            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Manage your selection process simply.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Reduce lead times and source closer to demand.
            </p>
          </div>
          <div class="col-lg-6">
           <div class=""><img src="{{asset('/website-assets/img/agents2.png')}}" style="width: 100%; min-height:350px; height: auto;" alt="...">
           </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>

      <div class="container">
        <div class="row">
          <div class="col-lg-6">

           <div class=""><img src="{{asset('/website-assets/img/agents3.png')}}" style="width: 100%; min-height:350px; height: auto;" alt="..."></div>
          </div>

          <div class=" col-lg-6">
            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
              <ul class="price list-inline no-margin">
              	<h3>Explore showrooms & catalogues </h3>
              </ul>
            </div>
            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	View thousands of product samples and the latest designs from your desk.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Access to fabric catalogues with thousands of high quality pictures.
            </p>


            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Fine tune your search with industry leading filter options.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Add products to your favorite list and request more information directly from suppliers.
            </p>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>

      <div class="container">
        <div class="row">
          <div class=" col-lg-6">
            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
              <ul class="price list-inline no-margin">
                <h3>Verified Certificates </h3>
              </ul>
            </div>
            <p>
              <i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
              Free access to the largest database of verified compliance standards.
            </p>

            <p>
              <i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
              Get full insight into the compliance levels of suppliers, including certification numbers, product scope, validity, locations and more.
            </p>


            <p>
              <i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
              Stay up to date and review the status of your suppliers’ certificates with one click.
            </p>

            <p>
              <i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
              Our database is constantly updating so you always have the correct information at your fingertips.
            </p>
          </div>
          <div class="col-lg-6">
           <div class=""><img src="{{asset('/website-assets/img/agents4.png')}}" style="width: 100%; min-height:350px; height: auto;" alt="...">
           </div>
          </div>
        </div>
      </div>
    </section>


@include('website.layouts.footer')
@endsection