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
          <h4 class="card-title">Biddings on Your Products</h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
          <br>
          <br>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-body  my-gallery">
          <div class="card-deck-wrapper">
            <div class="card-deck">
              @foreach ($biddings as $bidding)
              
                <div class="col-xl-3 col-md-6 col-sm-12">
                      <div class="card">
                        <div class="card-content">
                          <div style="border-style: groove; border-width: thin;" class="card-body">

                            @foreach ($products_img as $pro)
                              @if($bidding->product_id == $pro->product_id )
                                <?php

                                  $image = $pro->image;
                                  $res1=trim($image,"[");
                                  $res2=trim($res1,"]");
                                  $arr=explode(",", $res2);

                                  $img1=substr($arr[0], 0,-1);
                                  $img1=substr($img1, 1);

                                ?>
                                
                                  <img class="card-img img-fluid mb-1" src="{{asset('/images/'.$img1)}}" alt="Card image cap">
                              

                              @endif
                            @endforeach
                            

                            <center>
                            <h4 class="card-title">{{$bidding->product->product_name}}</h4>
                            @if($bidding->bidding_end > Carbon\Carbon::now())
                            <p style="color: #e9692c ;" class="card-text">Ending in: {{ \Carbon\Carbon::parse($bidding->bidding_end)->diffForHumans() }}</p>
                            
                            @else
                            <p style="color: red;" class="card-text">Ended: {{ \Carbon\Carbon::parse($bidding->bidding_end)->diffForHumans() }}</p>
                            @endif
                            <a class="btn btn-info" href="{{url('biddings/single_bidding', $bidding->product_id)}}" >
                              View More
                            </a>
                            </center>
                          </div>
                        </div>
                      </div>
                    </div>
              
              @endforeach
            </div>
          </div>
        </div>
 			</div>
    </div>
  </div>
</section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">

      	$(function(){

      	$('#rfq_table').DataTable(
      	{	

      		//responsive:true
      		"scrollX":false
      	});



      	})
      </script>
@endsection