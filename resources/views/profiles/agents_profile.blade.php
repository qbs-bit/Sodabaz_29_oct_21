<!-- Agents Sections-->
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

  <!-- Form Profile Update -->
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
                          <label for="company_name">
                            Company Name :
                            <span class="danger">*</span>
                          </label>
                          <input type="text" class="form-control required" id="company_name" 
                          name="company_name" value="{{ Auth::user()->company_name }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
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
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="contact">Phone Number :
                            <span class="danger">*</span>
                          </label>
                          <input type="tel" class="form-control" id="phone_number" 
                          name="phone_number" value="{{ Auth::user()->phone_number }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="company_email">
                            Company Email :
                            <span class="danger">*</span>
                          </label>
                          <input type="email" class="form-control required" id="company_email" name="company_email" value="{{ Auth::user()->company_email }}" >
                        </div>
                      </div>
                    </div>
                  
                   <button type="submit" class="btn btn-info">Submit</button>
                
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Form Profile Update end -->

<!-- Agents Sections end-->