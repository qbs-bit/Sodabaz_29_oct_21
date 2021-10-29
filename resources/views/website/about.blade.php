@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')
<style type="text/css">
  #cd{
    border:none;
    border-radius: 15px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }
</style>

    <!-- Hero Section-->
    <section class="hero hero-home no-padding">
      <div class="container-fluid p-0">       
        <div style="background: url({{asset('website-assets/img/Banner.png)')}};" class="item d-flex col-lg-12">
           <div class="container">
            <center>
           <h1 style="color: black;">ABOUT US</h1>
            </center>
          </div>
        </div>
    </div>
    </section>

<!-- about us-->
    <section class="padding-small">
      <div class="container">
        <div class="row about-item">
          <div class="col-lg-8 col-sm-9">
            <center><h1>Who We Are?</h1></center>
            <p class="text-muted">As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.As am hastily invited settled at limited civilly fortune me. Really spring in extent an by.</p>
            <p class="text-muted">As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.As am hastily invited settled at limited civilly fortune me. Really spring in extent an by.</p>
          </div>
          <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
            <div class="about-icon ml-lg-0">
            	<img src="{{asset('/website-assets/img/about1.jpg')}}" style="width: 100%; min-height:350px; height: auto;">
            </div>
          </div>
        </div>
        

      <div class="row about-item">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-lg-4">
            <img src="{{asset('/website-assets/img/about2.jpg')}}" style="width: 100%; min-height:350px; height: auto;">
          </div>
          <div class="col-md-8 col-sm-8 col-lg-8">
            <center><h1>Why We Best?</h1></center>
            <p class="text-muted">As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.As am hastily invited settled at limited civilly fortune me. Really spring in extent an by.</p>
            <p class="text-muted">As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.As am hastily invited settled at limited civilly fortune me. Really spring in extent an by.</p>
          </div>
        </div>
      </div>


        <div class="row about-item">
          <div class="col-lg-8 col-sm-9">
            <center><h1>Why Choose Us?</h1></center>
            <p class="text-muted">As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.As am hastily invited settled at limited civilly fortune me. Really spring in extent an by.</p>
            <p class="text-muted">As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity.As am hastily invited settled at limited civilly fortune me. Really spring in extent an by.</p>
          </div>
          <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
            <div class="about-icon ml-lg-0">
              <img src="{{asset('/website-assets/img/about3.jpg')}}" style="width: 100%; min-height:350px; height: auto;">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="card" id="cd">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                       <!----------------Address Row------------->
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="row">
                          <div class="col-lg-2">
                            <img class="contact-icon" style="width:40px; height:40px;" src="{{asset('/website-assets/img/map2.png')}}">
                          </div>
                          <div class="col-lg-6">
                            <p>123 Mockup St, New York</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <!----------------Phone Row------------->
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="row">
                          <div class="col-lg-2">
                            <img class="contact-icon" style="width:40px; height:40px;" src="{{asset('/website-assets/img/telephone.png')}}">
                          </div>
                          <div class="col-lg-6">
                            <p>(+1) 123 456 7590</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <!----------------Form Row------------->
                    <form id="contact-form" method="post" action="{{url('support')}}" class="custom-form form">
                      @csrf
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="row">
                          <div class="col-lg-6">
                          <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your name" required="required" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                          </div>
                          </div>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="message" class="form-label">Your message for us *</label>
                          <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <!------------Submit Button Row-------------->
                    <div class="row">
                      <div class="col-lg-12">
                        <input type="submit" style="background-color:#d7495b; border-color:#d7495b;" value="Send Message" class="btn btn-template"/>
                      </div>
                    </div>
                  </form>
                    </div>
                    <div class="col-lg-6">
                      <center>
                        <img style="width:300px; height:300px; margin-top:65px;" src="{{asset('/website-assets/img/email2.png')}}">
                      </center>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

@include('website.layouts.footer')
@endsection