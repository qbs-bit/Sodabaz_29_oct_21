<!-- Mills Sections Start-->
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
   
  <!-- Profile Update -->
    <section id="validation">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-content collapse show">
              <div class="card-body">
                <form id="profile" method="POST" action="{{url('mills/profile')}}" enctype="multipart/form-data" class="form">
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
                          <label for="city">
                            City :
                            <span class="danger">*</span>
                          </label>
                         <input type="text" class="form-control required" id="address"
                          name="address" value="{{ Auth::user()->address }}" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="contact">Phone Number :
                            <span class="danger">*</span>
                          </label>
                          <input type="tel" class="form-control" id="phone_number" 
                          name="phone_number" value="{{ Auth::user()->phone_number }}">
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group">
                          <label for="website">Website :
                            <span class="danger">*</span>
                          </label>
                          <input type="text" class="form-control" id="website" 
                          name="website" value="{{ Auth::user()->website }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="registered_address">
                            Registered Address :
                            <span class="danger">*</span>
                          </label>
                          <input type="text" class="form-control required" id="registered_address" name="registered_address" value="{{ Auth::user()->registered_address }}">
                        </div>
                        <div class="form-group">
                          <label for="company_email">
                            Company Email :
                            <span class="danger">*</span>
                          </label>
                          <input type="email" class="form-control required" id="company_email" name="company_email" value="{{ Auth::user()->company_email }}" >
                        </div>
                        <div class="form-group">
                          <label for="stn_ntn">STN / NTN :
                          <span class="danger">*</span></label>
                          <input type="number" class="form-control required" id="stn_ntn" step="any" min="0" name="stn_ntn" value="{{ Auth::user()->stn_ntn }}" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                         <label for="payment_method">Payment Method : 
                         <span class="danger">*</span></label>
                            <select id="payment_method" class="form-control required" name="payment_method" >
                              <option value="">Select Payment Method</option>
                              
                              <option value="card">Card</option>
                              <option value="cash">Cash</option>
                              <option value="{{ Auth::user()->payment_method }}" {{Auth::user()->payment_method ==Auth::user()->payment_method  ? 'selected' : ''}}>{{ Auth::user()->payment_method}}</option>
                            </select>
                       </div>
                        <div class="form-group">
                          <label for="shipping_method">Shipping Method :
                           <span class="danger">*</span></label>
                          <input type="text" name="shipping_method" id="shipping_method" class="form-control required" value="{{ Auth::user()->shipping_method }}" >
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
  <!-- Profile Update end -->

  <!-- Preference and About Company -->
  <!---
<section id="form-control-repeater">
  <div class="row">
    <div class="col-md-12 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="file-repeater">
           <b>Preference</b>
          </h4>
          <br>
          <p>Which company types are you most interested in?<br>
            Choose at least one Option.
          </p>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
        </div>
        <div class="card-content collapse show">
          <div class="card-body ">
            <form class="form" method="post" action="{{url('mills/save_interest')}}">
              @csrf
              <div class="row justify-content-center">
                <div onclick="selectDiv('1')" id="myClass_1" class="col-lg-5 col-md-12 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/source.png')}}" alt="icon">
                    </div>
                   
                    <div class="pt-1">
                      <p style="font-size: 14px; text-align: center;">Source Suppliers</p>
                      <input type="hidden" name="interest[]" value="Source Suppliers" />
                    </div>
                  </div>
                </div>
                &nbsp;
                <div onclick="selectDiv('2')" class="col-lg-5 col-md-12 col-sm-6 border" id="myClass_2">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/thread.png')}}" alt="icon">
                    </div>
                   
                    <div class="p-1">
                      <p style="font-size: 14px; text-align: center;">Yarn Manufacturers</p>
                      <input type="hidden" name="interest[]" value="Yarn Manufacturers" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center pt-1">
                <div onclick="selectDiv('3')" id="myClass_3" class="col-lg-5 col-md-12 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/control-lever.png')}}" alt="icon">
                    </div>
                   
                    <div class="pt-1">
                      <p style="font-size: 14px; text-align: center;">Fabric Suppliers</p>
                      <input type="hidden" name="interest[]" value="Fabric Suppliers" />
                    </div>
                  </div>
                </div>
                &nbsp;
                <div onclick="selectDiv('4')" id="myClass_4" class="col-lg-5 col-md-12 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/fabric-paint.png')}}" alt="icon">
                    </div>
                   
                    <div class="p-1">
                      <p style="font-size: 14px; text-align: center;">Dyeing & Printing</p>
                      <input type="hidden" name="interest[]" value="Dyeing and Printing" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center pt-1">
                <div onclick="selectDiv('5')" id="myClass_5" class="col-lg-5 col-md-12 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/sewing.png')}}" alt="icon">
                    </div>
                   
                    <div class="pt-1">
                      <p style="font-size: 14px; text-align: center;">Textile Products</p>
                      <input type="hidden" name="interest[]" value="Textile Products" />
                    </div>
                  </div>
                </div>
                &nbsp;
                <div onclick="selectDiv('6')" id="myClass_6" class="col-lg-5 col-md-12 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/women-coat.png')}}" alt="icon">
                    </div>
                   
                    <div class="p-1">
                      <p style="font-size: 14px; text-align: center;">Women Garments</p>
                      <input type="hidden" name="interest[]" value="Women Garments" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center pt-1">
                <div onclick="selectDiv('7')" id="myClass_7" class="col-lg-5 col-md-6 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/sewing-machine.png')}}" alt="icon">
                    </div>
                   
                    <div class="pt-1">
                      <p style="font-size: 14px; text-align: center;">Other Specialities</p>
                      <input type="hidden" name="interest[]" value="Other Specialities" />
                    </div>
                  </div>
                </div>
                &nbsp;
                <div onclick="selectDiv('8')" id="myClass_8" class="col-lg-5 col-md-6 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/tuxedo.png')}}" alt="icon">
                    </div>
                   
                    <div class="p-1">
                      <p style="font-size: 14px; text-align: center;">Men Garments</p>
                      <input type="hidden" name="interest[]" value="Men Garments" />
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row justify-content-left pl-2">
                <div class="col-lg-5 col-md-12">
                <input type="submit" class="btn btn-info" value="Save">
              </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="file-repeater">
           <b>Tell us more about the company</b>
          </h4>
          <br>
          <p>Which Product categories does your company deal in?<br>
            Choose at least one Option.
          </p>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
        </div>
        <div class="card-content collapse show">
          <div class="card-body ">
            <form class="form" method="" action="">
              <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/source.png')}}" alt="icon">
                    </div>
                   
                    <div class="pt-1">
                      <p style="font-size: 14px; text-align: center;">Source Suppliers</p>
                    </div>
                  </div>
                </div>
                &nbsp;
                <div class="col-lg-5 col-md-12 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/thread.png')}}" alt="icon">
                    </div>
                   
                    <div class="p-1">
                      <p style="font-size: 14px; text-align: center;">Yarn Manufacturers</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center pt-1">
                <div class="col-lg-5 col-md-12 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/control-lever.png')}}" alt="icon">
                    </div>
                   
                    <div class="pt-1">
                      <p style="font-size: 14px; text-align: center;">Fabric Suppliers</p>
                    </div>
                  </div>
                </div>
                &nbsp;
                <div class="col-lg-5 col-md-12 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/fabric-paint.png')}}" alt="icon">
                    </div>
                   
                    <div class="p-1">
                      <p style="font-size: 14px; text-align: center;">Dyeing & Printing</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center pt-1">
                <div class="col-lg-5 col-md-12 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/sewing.png')}}" alt="icon">
                    </div>
                   
                    <div class="pt-1">
                      <p style="font-size: 14px; text-align: center;">Textile Products</p>
                    </div>
                  </div>
                </div>
                &nbsp;
                <div class="col-lg-5 col-md-12 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/women-coat.png')}}" alt="icon">
                    </div>
                   
                    <div class="p-1">
                      <p style="font-size: 14px; text-align: center;">Women Garments</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center pt-1">
                <div class="col-lg-5 col-md-6 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/sewing-machine.png')}}" alt="icon">
                    </div>
                   
                    <div class="pt-1">
                      <p style="font-size: 14px; text-align: center;">Other Specialities</p>
                    </div>
                  </div>
                </div>
                &nbsp;
                <div class="col-lg-5 col-md-6 col-sm-6 border">
                  <div class="media align-items-stretch">
                    <div class="pt-1">
                      <img style="width:50px; height:50px;" src="{{asset('/rfq_files/tuxedo.png')}}" alt="icon">
                    </div>
                   
                    <div class="p-1">
                      <p style="font-size: 14px; text-align: center;">Men Garments</p>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row justify-content-left pl-2">
                <div class="col-lg-5 col-md-12">
                <input type="submit" class="btn btn-info" value="Save">
              </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
--->
  <!-- Preference and About Company end -->

<!---Mills Sections End--->