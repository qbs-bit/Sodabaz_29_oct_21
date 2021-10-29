@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
    @endif


    <div class="content-body">
        <!-- Basic form layout section start -->
        <section class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-head">
                  <div class="card-header">
                    <h4 class="card-title">Live Bidding</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
                    </div>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <!-- Task List table -->
                    <div class="table-responsive">
                      <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                        <thead>
                          <tr>
                            <th class="text-center">User</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Bid at</th>
                            <th class="text-center">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                          @foreach ($biddings_detail as $bid_detail )
                              @foreach ($biddings as $bid )
                                @if($bid_detail->product_id == $bid->product_id )
                                  
                                  <!-------------Status Change Condition--------->


                                  @if($bid_detail->status == "Accepted")
                                  <tr>
                                    <td class="text-center text-info">
                                      {{$bid_detail->getuser->name}}
                                    </td>
                                    <td class="text-center">
                                    	{{$bid_detail->amount}}
                                    </td>
                                    <td class="text-center">
                                    	{{$bid_detail->qty}}
                                    </td>
                                    <td class="text-center">
                                    	{{$bid_detail->created_at->diffForHumans()}}
                                    </td>
                                    <td class="text-center">
                                    	<button class="btn btn-info" href="{{url('accept',$bid_detail->id)}}" class="dropdown-item" onclick="return confirm('Are you sure?')" disabled>
                                        <i class="fa fa-check-circle"></i>
                                        Accept
                                      </button>
                                      <button class="btn btn-danger" href="{{url('reject',$bid_detail->id)}}" class="dropdown-item" onclick="return confirm('Are you sure?')" disabled>
                                       	<i class="fa fa-close"></i>
                                       	Reject
                                      </button>
                                    </td>
                                  </tr>
                                  @elseif($bid_detail->status == "Rejected")
                                  <tr>
                                    <td class="text-center text-danger">
                                      {{$bid_detail->getuser->name}}
                                    </td>
                                    <td class="text-center">
                                      {{$bid_detail->amount}}
                                    </td>
                                    <td class="text-center">
                                      {{$bid_detail->qty}}
                                    </td>
                                    <td class="text-center">
                                      {{$bid_detail->created_at->diffForHumans()}}
                                    </td>
                                    <td class="text-center">
                                      <button class="btn btn-info" href="{{url('accept',$bid_detail->id)}}" class="dropdown-item" onclick="return confirm('Are you sure?')" disabled>
                                        <i class="fa fa-check-circle"></i>
                                        Accept
                                      </button>
                                      <button class="btn btn-danger" href="{{url('reject',$bid_detail->id)}}" class="dropdown-item" onclick="return confirm('Are you sure?')" disabled>
                                        <i class="fa fa-close"></i>
                                        Reject
                                      </button>
                                    </td>
                                  </tr>

                                  @else
                                  <tr>
                                    <td class="text-center">
                                      {{$bid_detail->getuser->name}}
                                    </td>
                                      <td class="text-center">
                                    	{{$bid_detail->amount}}
                                    </td>
                                    <td class="text-center">
                                    	{{$bid_detail->qty}}
                                    </td>
                                    <td class="text-center">
                                    	{{$bid_detail->created_at->diffForHumans()}}
                                    </td>
                                    <td class="text-center">                              
                                      <a class="btn btn-info" href="{{url('accept',$bid_detail->id)}}" class="dropdown-item" onclick="return confirm('Are you sure?')">
                                        <i class="fa fa-check-circle"></i>
                                        Accept
                                      </a>
                                      <a class="btn btn-danger" href="{{url('reject',$bid_detail->id)}}" class="dropdown-item" onclick="return confirm('Are you sure?')">
                                       	<i class="fa fa-close"></i>
                                       	Reject
                                      </a>
                                    </td>
                                  </tr>
                                  @endif

                                  <!-------------Status Change Condition End--------->

                                @endif
                              @endforeach
                          @endforeach
                         
                        </tbody>
                        <tfoot>
                          <tr>
                          	<th class="text-center">User</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Bid at</th>
                            <th class="text-center">Actions</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>



        <!-- // Basic form layout section end -->
    </div>
    
    
@endsection

