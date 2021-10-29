@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')


	<!-- Hero Section-->
    <section class="hero hero-home no-padding">
      <div class="container-fluid p-0">       
        <div style="background: url({{asset('website-assets/img/Banner.png)')}};" class="item d-flex col-lg-12">
           <div class="container">
            <center>
           <h1 style="color: black;">MILLS</h1>
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

           <div class=""><img src="{{asset('/website-assets/img/mills1.png')}}" style="width: 100%; min-height:350px; height: auto;" alt="..."></div>
          </div>

          <div class=" col-lg-6">
            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
              <ul class="price list-inline no-margin">
              	<h3>Showcase your company & skills to verified buyers </h3>
              </ul>
            </div>
            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Be part of world's largest sales & marketeing platform for fabric and garment suppliers.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Create an indivisual and outstanding company profile visible to buyers.
            </p>


            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Exhibit your latest product developments in digital showrooms and catalogues.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Build trust by displaying your varified certificates.
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
              	<h3>Find and contact buyers directly </h3>
              </ul>
            </div>
            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Access the world’s largest database of verified sourcing professionals.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Find the right buyer using filters, such as country, order quantity and category.
            </p>


            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Contact buyers directly through our secure messaging and create business opportunities.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	See buyer information and become independent from middle-men.
            </p>
          </div>
          <div class="col-lg-6">
           <div class=""><img src="{{asset('/website-assets/img/mills2.png')}}" style="width: 100%; min-height:350px; height: auto;" alt="...">
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

           <div class=""><img src="{{asset('/website-assets/img/mills1.png')}}" style="width: 100%; min-height:350px; height: auto;" alt="..."></div>
          </div>

          <div class=" col-lg-6">
            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
              <ul class="price list-inline no-margin">
              	<h3>Spot and react to bussiness opportunities </h3>
              </ul>
            </div>
            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Be notified about Request For Quotations (RFQ) matching your company profile.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Send quotes directly to buyers using a structured form.
            </p>


            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Discover exciting business opportunities and buyer search requests everyday.
            </p>

            <p>
            	<i><img style="height: 24px; width: 24px;" src="{{asset('/website-assets/img/tick.png')}}"></i>  
            	Actively create business opportunities by directly contacting verified buyers.
            </p>
          </div>
        </div>
      </div>
    </section>


@include('website.layouts.footer')
@endsection