@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
    @endif
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
            <div class="row match-height">
            
            <div class="row">
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-content">
                  <div class="card-body text-center">
                    <p class="text-uppercase">You Are Purchasing</p>
                    <h3 class="text-uppercase">Apple Watch</h3>
                    <div class="rating">
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star-half-o"></i>
                    </div>
                    <img src="../../../app-assets/images/elements/apple-watch.png" alt="apple-watch"
                    width="250px" class="img-fluid p-2">
                    <button type="button" class="btn btn-success btn-block btn-glow text-uppercase p-1">Purchase</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-content">
                  <div class="card-body text-center">
                    <p class="text-uppercase">You Are Purchasing</p>
                    <h3 class="text-uppercase">Fitbit Watch</h3>
                    <div class="rating">
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star-half-o"></i>
                    </div>
                    <img src="../../../app-assets/images/elements/fitbit-watch.png" alt="apple-watch"
                    width="250px" class="img-fluid p-2">
                    <button type="button" class="btn btn-danger btn-block btn-glow text-uppercase p-1">Purchase</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-content">
                  <div class="card-body text-center">
                    <p class="text-uppercase">You Are Purchasing</p>
                    <h3 class="text-uppercase">Samsung Gear s2</h3>
                    <div class="rating">
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star"></i>
                      <i class="la la-star-half-o"></i>
                    </div>
                    <img src="../../../app-assets/images/elements/samsung-gear.png" alt="apple-watch"
                    width="250px" class="img-fluid p-2">
                    <button type="button" class="btn btn-warning btn-block btn-glow text-uppercase p-1">Purchase</button>
                  </div>
                </div>
              </div>
            </div>
          </div>





            </div>
        </section>
        <!-- // Basic form layout section end -->
    </div>
    

@endsection

