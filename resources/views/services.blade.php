
@extends('layouts.master')
 
 @section('content')
   @if (session('status'))
    {{ session('status') }}   
   @endif



        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">My Services</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				 
                  <div class="heading-elements">
                  <a href="{{url('transporter/add_services')}}" class="btn btn-primary btn-sm"><i class="ft-plus white"></i>Add Services</a>
                   
                   
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                        <th>Delivery Location</th>
                          <th>Delivery In</th>
                         <th>Price Per Unit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $i=1;
                      ?>
                        @foreach($service as $service)
                          @if(Auth::user()->id== $service->user_id)
                          <tr>
                            <td>{{$i}}</td>
                            <td>{{$service->user->name}}</td>
                            <td>{{$service->service_location->locations}}</td>
                            <td>{{$service->service_location->delivery_in}}</td>
                            <td>{{$service->per_unit_price}}</td>
                          </tr>
                          @endif
                          <?php
                          $i++;
                          ?>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection