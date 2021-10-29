@extends('layouts.master')

@section('content')
@if (session('status'))

{{ session('status') }}
@endif


<div class="content-body">
    <!-- Basic form layout section start -->
    <section id="basic-form-layouts">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form-center">Add New Stock</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <form class="form" method="post" action="{{url('mills/save_stock')}}">
                            @csrf
                        <div class="card-body">
                                <div class="row">
                                    
                                <div class="col-md-4">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="eventInput1">Select Product</label>
                                                <select class="form-control" id="product_id" name="product_id">
                                                    <option value="">
                                                        Select Product
                                                    </option>
                                                    @foreach ($products as $product)
                                                        <option value="{{$product->id}}">
                                                            {{$product->product_code}}-{{$product->product_name}}
                                                        </option>    
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-4">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="eventInput1">Unit</label>
                                                <input type="text" readonly id="unit" class="form-control" placeholder="Unit" name="unit">
                                          
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="eventInput1">Price Per Unit</label>
                                                <input type="text" id="price_per_unit"  onkeyup="gettotal()"  class="form-control" placeholder="Price Per Unit" name="per_unit_price">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="row">
                            <div class="col-md-4">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="eventInput1">Stock Quantity</label>
                                            <input type="number" id="quantity" class="form-control" onkeyup="gettotal()"  placeholder="Stock Quantity" name="quantity"></textarea>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="col-md-4">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="eventInput1">Total Amount</label>
                                            <input type="text" readonly id="total" class="form-control" placeholder="Total Amount" name="total_amount">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="eventInput1"></label><br>
                                            <button type="submit" class="btn btn-info col-12">
                                        <i class="la la-check-square-o"></i> Submit
                                    </button>
                                     </div>
                                    </div>
                                </div>
                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- // Basic form layout section end -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
     
    $('#product_id').on('change', function() {
    var product_id = $('#product_id').val();
    
            if(product_id) {
                $.ajax({
                  url: '{{url("mills/showproductunit")}}'+"/"+product_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                       
                      $.each(data, function(key, value) {
                    $('#unit').val(value.unit);
                      $('#price_per_unit').val(value.per_unit_price);
                      });

                    }
            });
            }else{
           $('#sub_cat_id').val(' ');
            }
        });
    });


    function gettotal(){
   price = $('#price_per_unit').val();
   qty = $('#quantity').val();

    if(qty){
    total = price*qty;
    $('#total').val(total);
     }else{
        $('#total').val('');   
     }                             

    }

</script>
@endsection

