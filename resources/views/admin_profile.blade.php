@extends('layouts.master')
 
@section('content')
  @if (session('status'))
      
          {{ session('status') }}   
  @endif
<section id="user-profile-cards" class="row mt-2">
  <div class="col-xl-12 col-md-12 col-12">
    <div class="card">
      <div class="text-center">
        <div class="card-body">
          
          <img src="{{ asset('/storage/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}" class="rounded-circle" style="height: 170px; width: 165px;" alt="profile picture">
          </div>
          <div class="card-body">
            <h4 class="card-title">{{Auth::user()->name}}</h4>
            <h5 class="card-subtitle text-muted">{{Auth::user()->company_name}}</h5>
          </div>
          <div class="card-body">
            <form class="form" method="post" action="{{url('mills/save_picture')}}" enctype="multipart/form-data">
              @csrf
              <center>
              <input type="file" id="image" class="form-control col-sm-3 col-md-3 col-xl-3" name="image"><br>
              <button type="submit" class="btn btn-info">
                <i class="la la-check-square-o"></i>
               Update Picture
              </button>
            </center>
            </form>
          </div>
        </div>
      <div class="list-group list-group-flush">
      </div>
    </div>
  </div>
</section>

<!-- Form profile end -->
    <section id="validation">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content collapse show">
              <div class="card-body">
                <form id="profile" method="POST" action="{{url('profile')}}" enctype="multipart/form-data" class="form">
                  @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">
                            Name :
                            <span class="danger">*</span>
                          </label>
                          <input type="text" class="form-control required" id="name" 
                          name="name" value="{{ Auth::user()->name }}">
                        </div>
                      </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">
                            Email Address :
                            <span class="danger">*</span>
                          </label>
                          <input type="email" class="form-control required" id="email"
                          name="email" value="{{ Auth::user()->email }}" >
                        </div>
                      </div>
                    </div>
                    <div class="form-actions right">
                      <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Form profile end -->
@endsection