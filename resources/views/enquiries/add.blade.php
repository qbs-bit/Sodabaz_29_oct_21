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
                  <h4 class="card-title" id="bordered-layout-colored-controls">Insert Enquiry</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      
                    </ul>
                  </div>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <div class="card-text">
                    </div>
                    <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="{{url('mills/save_enquiry')}}">
                    	@csrf
                    	@if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                     <div class="form-body">
                        <h4 class="form-section"><i class="la la-file"></i> Enquiry Details</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Product Name</label>
                              <div class="col-md-8">
                              	
                                <select class="select2 form-control" name="product_name" id="product_name">
                                  <option selected disabled>Product Name</option>
                                  @foreach($products as $products)
                                  <option value="{{$products->id}}">{{$products->product_name}}</option>
                                  @endforeach
                                  
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Quantity</label>
                              <div class="col-md-8">
                              	<input type="number" id="quantity" class="form-control" placeholder="Quantity" name="quantity">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">First Delivery</label>
                              <div class="col-md-8">
                                <input type="datetime-local" id="first_delivery" class="form-control" placeholder="First Delivery" name="first_delivery">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Payment Term</label>
                              <div class="col-md-8">
                                <select id="payment_term" class="form-control" name="payment_term">
                                  <option selected disabled>Select Payment Term</option>
                                  <option value="PIA">PIA</option> 
                                  <option value="Net 7">Net 7</option> 
                                  <option value="Net 10">Net 10</option> 
                                  <option value="Net 30">Net 30</option> 
                                  <option value="Net 60">Net 60</option> 
                                  <option value="Net 90">Net 90</option>
                                  <option value="EOM">EOM</option>   
                              </select>
                              </div>
                            </div>
                          </div>
                        </div> 
                     	<div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Category</label>
                              <div class="col-md-8">
                              	<select class="form-control" id="category_id" name="category_id">
                              		<option selected disabled>Select Category</option>
                              		@foreach($category as $cat)
	                          		<option value="{{$cat->id}}">
	                              		{{$cat->category}}
	                            	</option>
	                            	@endforeach
                              	</select>
                                <!-- <input type="text" readonly id="category_id" class="form-control" name="category_id"> -->
                                
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Subcategory</label>
                              <div class="col-md-8">

                              	<select class="form-control" id="subcategory_id" name="subcategory_id">
	                          		<option selected disabled>Select Subcategory</option>
	                          		@foreach($subcategory as $cat)
	                          		<option value="{{$cat->id}}">
	                              		{{$cat->getcategory->category}} - {{$cat->category}}
	                            	</option>
	                            	@endforeach
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
                              <select id="unit_id" class="form-control" name="unit_id">
                                  <option selected disabled>Select Unit</option>
                                  @foreach($unit as $unit)
                                <option value="{{$unit->id}}">{{$unit->unit}}</option>
                                  @endforeach
                              </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Expected Price</label>
                              <div class="col-md-8">
                              	<input type="text" id="expected_price" class="form-control" placeholder="Expected Price" name="expected_price">
                              </div>
                            </div>
                          </div>
                        </div>
                                   
                          <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Description</label>
                              <div class="col-md-8">
                                <textarea id="description" rows="6" class="form-control" name="description"
                                placeholder="Description"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Ship To</label>
                              <div class="col-md-8">
                                <input type="text" id="ship_to"  class="form-control" name="ship_to" placeholder="Ship To">
                              </div>
                            </div>
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">File</label>
                              <div class="col-md-8">
                                <input type="file" id="file" class="form-control" name="file">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Bidding Start</label>
                              <div class="col-md-8">
                                <input type="datetime-local" id="bidding_start" class="form-control" name="bidding_start">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Bidding End</label>
                              <div class="col-md-8">
                                <input type="datetime-local" id="bidding_end" class="form-control" name="bidding_end">
                              </div>
                            </div>
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
        <!-- // insert form end -->
    </div>
    
    

@endsection

@section('scripts')

    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> -->
    <script>
    $(document).ready(function(){

      var cat_options     = $('#category_id option');
      var subcat_options  = $('#subcategory_id option');
      var unit_options    = $('#unit_id option');

      $('#product_name').change(function() {
        var pid =   $(this).find(':selected')[0].value;
        $.ajax({
          type: 'GET',
          url: 'get-product/'+pid,
          // data: {id : pid},
          dataType: 'json',
          success: function(data) {
            $.each(data, function(key, resp) {
              
              // Select category
              $( cat_options ).each(function( index ) {
                var cat_option_id = $(this).val();
                if(cat_option_id == resp.cat_id) {
                  $(this).prop("selected", true);
                }
              });
              
              // Select sub-category
              $( subcat_options ).each(function( index ) {
                var subcat_option_id = $(this).val();
                if(subcat_option_id == resp.sub_cat_id) {
                  $(this).prop("selected", true);
                }
              });
              
              // Select unit
              $( unit_options ).each(function( index ) {
                var unit_option_id = $(this).val();
                if(unit_option_id == resp.unit_id) {
                  $(this).prop("selected", true);
                }
              });

            });
          }
        });
      });
    });
    </script>
    <!-- <script>
      $(document).ready(function(){
     
     $('#product_name').on('change', function() {
    var product_name = $('#product_name').val();
   
            if(product_name) {
                $.ajax({
                  url: '{{url("mills/showproductdetails")}}'+"/"+product_name,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                       
                      $.each(data, function(key, value) {
                    $('#category_id').val(value.category);
                      //$('#price_per_unit').val(value.per_unit_price);
                      });

                    }
            });
            }else{
           $('#sub_cat_id').val(' ');
            }
        });
    });
    </script> -->


  <script type="text/javascript">

//start bidding default value function
      var currentDate = new Date();
      currentDate.setHours(currentDate.getHours()+5);

      jQuery("#bidding_start").val(currentDate.toJSON().slice(0,19));

      

//end bidding default value function
      var currentDate2 = new Date();
      currentDate2.setHours(currentDate2.getHours()+5);
      currentDate2.setDate(currentDate2.getDate()+30);

      jQuery("#bidding_end").val(currentDate2.toJSON().slice(0,19));


     $(".js-example-tags").select2({
  tags: true
});

    
  </script>
@endsection