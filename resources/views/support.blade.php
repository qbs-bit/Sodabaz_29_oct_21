@extends('layouts.master')

@section('content')
@if (session('status'))

{{ session('status') }}
@endif

	<section id="configuration">
        <!-- Basic Tables start -->
        <div class="row">
          <div class="col-lg-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Basic Tables</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              </div>
              <div class="card-content collapse show">
                <div class="table-responsive">
                  <table class="table mb-0">
                    <thead class="thead-dark">
                      <tr class="text-center">
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Datetime</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                    	<?php $count = 1; ?>
                    @foreach($msg as $data)
                      <tr class="text-center">
                        <th scope="row">{{$count++}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->created_at->diffForHumans()}}</td>
                        <td>
                			   <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#{{$data->id}}">
                  				Show Message
              				   </button>
              			   </td>
                      </tr>
                      <!-- Modal Start -->
		                <div class="modal fade text-left" id="{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        							<div class="modal-dialog" role="document">
        							  <div class="modal-content">
        								<div class="modal-header">
        								  <h4 class="modal-title" id="myModalLabel1">Message</h4>
        								  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        									<span aria-hidden="true">&times;</span>
        								  </button>
        								</div>
        								<div class="modal-body">
        								  <p>{{$data->message}}</p>
        								</div>
        								<div class="modal-footer">
        								  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
        								</div>
        							  </div>
        							</div>
        						</div>
		                <!---Modal End--->
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Basic Tables end -->
    </section>
       


@endsection