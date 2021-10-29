@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
@endif
<style type="text/css">
.scroll {
    max-height: 270px;
    overflow-y: scroll;
}
</style>
<!-- Form control repeater section start -->
<section id="form-control-repeater">
  <div class="row">
    <div class="col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="file-repeater">
          	@foreach ($detail as $rfq)
          		<b>{{$rfq->get_user->company_name}}</b>
          	@endforeach -
          	Submitted RFQ Details
          </h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
        	@foreach ($detail as $rfq)
          <div class="card-body">
            <form class="form row" method="post" action="{{url('mills/accept')}}">
            	@csrf
            	<div class="form-group mb-1 col-md-6 mb-2">
              	<label>Name</label>
                <input type="text" class="form-control" readonly name="name" value="{{$rfq->get_user->name}}">
              </div>
              <div class="form-group col-md-6 mb-2">
              	<label>Company Name</label>
                <input type="num" class="form-control" readonly value="{{$rfq->get_user->company_name}}" name="company_name">
              </div>
              <div class="form-group mb-1 col-md-6 mb-2">
              	<label>Title</label>
                <input type="text" class="form-control" readonly name="keywords" value="{{$rfq->title}}">
              </div>
              <div class="form-group col-md-6 mb-2">
              	<label>Quantity</label>
                <input type="num" class="form-control" readonly value="{{$rfq->quantity}}" name="quantity">
              </div>
              <div class="form-group col-md-6 mb-2">
              	<label>Unit</label>
                <input type="text" class="form-control" readonly value="{{$rfq->unit}}" name="unit">
              </div>
              <div class="form-group col-md-6 mb-2">
              	<label>Price Range</label>
                <input type="text" class="form-control" readonly value="{{$rfq->start_price}} - {{$rfq->end_price}}" name="phone">
              </div>
              <div class="form-group col-md-6 mb-2">
              	<label>Ship To</label>
                <input type="text" class="form-control" readonly value="{{$rfq->ship_to}}" name="phone">
              </div>
              <div class="form-group col-md-6 mb-2 ">
              	<label class="text-white">_</label>
                 <a href="{{asset('/rfq_files/'.$rfq->upload)}}" download="{{$rfq->upload}}" class="btn btn-info btn-block">Download file!</a>
              </div>
              <div class="form-group col-12 mb-2">
              	<label>Description</label>
                <textarea rows="3" class="form-control" readonly name="comment" placeholder="About Project">{{$rfq->description}}</textarea>
              </div>
              <input type="hidden" name="id" value="{{$rfq->id}}">
              <hr>
              <div class="form-group col-md-6 mb-2 ">
                <button class="btn btn-info text-white" type="submit">
                  Accept
                </button>              
              </div>
            </form>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>      
</section>
  <!-- // Form control repeater section end -->
@endsection