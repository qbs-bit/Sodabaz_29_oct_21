@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
@endif

<div class="content-body">
        <!-- insesrt form start -->
        <section id="basic-form-layouts">
            <div class="row match-height">
             
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="bordered-layout-colored-controls">Edit Enquiry</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <div class="card-text">
                    </div>
                    <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="{{url('mills/update_enquiry')}}">
                      @csrf
                      @foreach($enquiry as $enquiry)
                      <input type="hidden" id="enquiry_id" value="{{$enquiry->id}}" name="enquiry_id">
                     <div class="form-body">
                        <h4 class="form-section"><i class="la la-file"></i> Enquiry Details</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Product Name</label>
                              <div class="col-md-8">
                              	<input type="text" id="product_name" class="form-control" placeholder="Product Name" name="product_name" value="{{$enquiry->product_name}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Quantity</label>
                              <div class="col-md-8">
                              	<input type="number" id="quantity" class="form-control" placeholder="Quantity" name="quantity" value="{{$enquiry->quantity}}">
                              </div>
                            </div>
                          </div>
                        </div>
                     	<div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Category</label>
                              <div class="col-md-8">
                              	<select disabled="" class="form-control" id="category_id" name="category_id">
                              		<option value="{{$enquiry->category_id}}">{{$enquiry->category->category}}</option>
                              	
                              	</select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Subcategory</label>
                              <div class="col-md-8">
                              	<select disabled class="form-control" id="subcategory_id" name="subcategory_id">
  	                          		<option value="{{$enquiry->subcategory_id}}">
  	                              	{{$enquiry->subcategory->category}}
  	                            	</option>
                              	</select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control" for="unit_id">Select Unit</label>
                              <div class="col-md-8">
                              <select disabled="" id="unit_id" class="form-control" name="unit_id">
                                <option value="">{{$enquiry->unit->unit}}</option>
                              </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Expected Price</label>
                              <div class="col-md-8">
                              	<input type="text" id="expected_price" class="form-control" placeholder="Expected Price" name="expected_price" value="{{$enquiry->expected_price}}">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Payment Term</label>
                              <div class="col-md-8">
                              	<select disabled id="payment_term" class="form-control" name="payment_term">
                                  <option value="{{$enquiry->payment_term}}">{{$enquiry->payment_term}}</option> 
                              </select>
                              </div>
                            </div>
                          </div>
                       
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Ship To</label>
                              <div class="col-md-8">
                                <input type="text" id="ship_to"  class="form-control" name="ship_to" value="{{$enquiry->ship_to}}" placeholder="Ship To">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
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
        <!-- // insert form end -->
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

@endsection