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
                        <h4 class="card-title" id="basic-layout-form-center">Manage New Services</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <form action="{{url('transporter/save_service')}}" method="post">
                            @csrf
                        <div class="card-body">
                                <div class="row">
                                    
                                <div class="col-md-12">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="eventInput1">Enter Per Unit Price</label>
                                                <input type="number" id="per_unit_price" class="form-control" placeholder="Per Unit Price" name="per_unit_price">
                                          
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="eventInput1">Enter Service Locations </label>
                                                <input type="text" id="loc_1" class="form-control" placeholder="Enter Services Locations" name="loc[]">
                                             </div>
                                        </div>
                                </div>



                                 <div class="col-md-4">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="eventInput1">Delievery With In</label>
                                                <input type="text" id="loc_2" class="form-control" placeholder="Delievry With In" name="time[]">
                                          
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="eventInput1">Action</label><br>
                                         <button class="btn btn-primary" type="button" onclick="add()"> + Add </button> 
                                         <button class="btn btn-danger" type="button" onclick="remove()"> - Remove </button> 
                                         <input type="hidden" name="total_count" value="1" id="total_count" />
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div id="append_area"></div>
                                <div class="card-footer">
                                    <button class="btn btn-primary">Submit</button>
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

function add(){
    var i = parseInt($('#total_count').val())+1;

hcode = '<div class="row" id="row_'+i+'">';
hcode +='<div class="col-md-4"><input type="text" name="loc[]" placeholder="Enter Services Locations"  class="form-control" id="loc_'+i+'"></div>';
hcode +='<div class="col-md-4"><input type="text" name="time[]" placeholder="Delievry With in" class="form-control" id="del_'+i+'"></div>';
hcode +='</div>';
$('#append_area').append(hcode);
$('#total_count').val(i);

}

function remove(){
    var last_chq_no = $('#total_count').val();

    if(last_chq_no>1){
        $('#row_'+last_chq_no).remove();
        $('#total_count').val(last_chq_no-1);
      }

}

</script>
@endsection

