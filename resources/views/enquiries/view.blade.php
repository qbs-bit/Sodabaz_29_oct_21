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
                    <h4 class="card-title">My Enquiries</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <!-- Task List table -->
                    <div class="table-responsive">
                      <table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                        <thead>
                          <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Exp Price</th>
                            <th>First Delivery</th>
                            <th>Payment Term</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($enquiry as $data)
                            
                          <tr>
                            <td class="text-center">
                              <a href="#" style="color:#17a2b8;">
                                <b>
                                {{$data->product_name}}
                                </b>
                              </a>
                            </td>
                            <td class="text-center">{{$data->quantity}}</td>
                            <td class="text-center">{{$data->expected_price}}</td>
                            <td class="text-center">
                              {{ \Carbon\Carbon::parse($data->first_delivery)->format('d/m/Y')}}
                            </td>
                            <td class="text-center">{{$data->payment_term}}</td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-info dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="{{url('mills/edit',$data->id)}}" class="dropdown-item">
                                    <i class="ft-edit-2"></i> 
                                  Edit
                                </a>
                                  <a href="{{url('mills/rejected',$data->id)}}" onclick="return confirm('Are you sure?')" class="dropdown-item">
                                    <i class="ft-trash-2"></i>
                                  Delete
                                </a>
                                </span>
                              </span>
                            </td>
                          </tr>
                        
                          @endforeach

                         
                          
                        </tbody>
                        <tfoot>
                          <tr>
                          <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Exp Price</th>
                            <th>First Delivery</th>
                            <th>Payment Term</th>
                            <th>Actions</th>
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

