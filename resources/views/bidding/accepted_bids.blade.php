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
          <h4 class="card-title">Your Accepted Bids</h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
         
         <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
          </div>
        </div>
       <div class="card-content collapse show">
          <div class="card-body card-dashboard">
            <table id="rfq_table" class="table table-striped table-bordered zero-configuration">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Product Name</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Bid Datetime</th>
              </tr>
              </thead>
              <tbody>
              <?php
                $i=1;
              ?>
              @foreach ($mybiddings as $data)
                  <tr>
                  <td>{{$i}}</td>
                  <td style="color: green;">
                    <b>
                      {{$data->getproduct->product_name}}
                    <b/>
                  </td>
                  <td>{{$data->amount}}</td>
                  <td>{{$data->status}}</td>
                  <td>{{$data->created_at}}</td>
                  </tr>
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