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
	          <img src="{{asset('/app-assets/images/portrait/pp.jpg')}}" class="rounded-circle  height-150"
	          alt="Card image">
	        </div>
	        <div class="card-body">
	          <h4 class="card-title">{{Auth::user()->name}}</h4>
	          <h6 class="card-subtitle text-muted">{{Auth::user()->company_name}}</h6>
	        </div>
	        <div class="card-body">
	          <button type="button" class="btn btn-danger mr-1"><i class="la la-plus"></i> Follow</button>
	          <button type="button" class="btn btn-primary mr-1"><i class="ft-user"></i> Profile</button>
	        </div>
	      </div>
	      <div class="list-group list-group-flush">
	      </div>
	    </div>
      </div>
</section>


@endsection