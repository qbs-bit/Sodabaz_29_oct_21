@extends('layouts.master')
 
@section('content')
  @if (session('status'))
      
          {{ session('status') }}   
  @endif

<div class="app-content">
    <div class="content-wrapper">
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="horizontal-form-layouts">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="horz-layout-basic">Change Password</h4>
                  
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <form class="form form-horizontal" method="post" action="{{url('save_password')}}">
                      @csrf
                      @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                      @endforeach 
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-md-3 label-control mt-1" for="current_password">Current Password:</label>
                          <div class="col-md-9 col-lg-9">
                            <input type="password" id="current_password" class="form-control" name="current_password">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control mt-1" for="new_password">New Password:</label>
                          <div class="col-md-9 col-lg-9">
                            <input type="password" id="new_password" class="form-control" name="new_password">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control mt-1" for="confirm_new_password">Confirm New Password:</label>
                          <div class="col-md-9 col-lg-9">
                            <input type="password" id="confirm_new_password" class="form-control" name="confirm_new_password">
                          </div>
                        </div>
                      </div>
                      <div class="form-actions right">
                        <button type="submit" class="btn btn-info">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
   </div>
  </div>
 </div>



@endsection