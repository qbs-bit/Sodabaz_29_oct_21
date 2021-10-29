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
                    <h4 class="card-title">All Products</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
                      <a href="{{url('mills/add_products')}}" class="btn btn-info btn-sm"><i class="ft-plus white"></i>Add Product</a>
                      
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
                            <th>Category</th>
                            <!--<th>Sub Category</th>--->
                            <th>Product Name</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($products as $product)
                            
                          <tr>
                            <td>
                              <div class="media">
                              <!--
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                                </div>
                                -->
                                <div class="media-body media-middle">
                                  <a href="#" style="color:#17a2b8;">
                                    <b>
                                      {{$product->category->category}}
                                    </b>
                                  </a>
                                </div>
                              </div>
                            </td>
                            <!----
                            <td class="text-center">
                              <a href="#">
                                {{$product->subcat}}
                              </a>
                            </td>
                            ---->
                            <td class="text-center">{{$product->product_name}}</td>
                            <td class="text-center">{{$product->unit->unit}}</td>
                            <td class="text-center">{{$product->per_unit_price}}</td>
                            <td class="text-center">
                              <?php 
                                $gettotalQuantity = \App\Models\Stock::gettotalQuantity($product->id);

                                $getsoldQuantity = \App\Models\order_details::getsoldQuantity($product->id);


                                foreach ($gettotalQuantity as $value) {
                                 $totalquantity = $value->totalquantity;
                                }

                                foreach ($getsoldQuantity as $value) {
                                 $soldquantity = $value->soldquantity;
                                }

                                $stock = ( $totalquantity-$soldquantity);

                              ?>
                              {{$stock}}
                            </td>
                            <td>
                              <span class="dropdown">
                                <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="true" class="btn btn-info dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                  <a href="{{url('mills/edit_product',$product->id)}}" class="dropdown-item">
                                    <i class="ft-edit-2"></i> 
                                  Edit
                                </a>
                                  <a href="{{url('mills/product_delete', $product->id)}}" onclick="return confirm('Are you sure?')" class="dropdown-item">
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
                          <th>Category</th>
                            <!---<th>Sub Category</th>----->
                            <th>Product Name</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stock</th>
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

