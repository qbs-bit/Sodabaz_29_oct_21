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
                  <h4 class="card-title" id="bordered-layout-colored-controls">Submit RFQ</h4>
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
                    <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="{{url('mills/save_rfq')}}">
                    	@csrf
                     <div class="form-body">
                        <h4 class="form-section"><i class="la la-eye"></i> RFQ Details</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Title</label>
                              <div class="col-md-8">
                              <input type="text" id="keywords" class="form-control" placeholder="Title" name="keywords">
                             
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Quantity</label>
                              <div class="col-md-8">
                              <input type="text" id="quantity" class="form-control" placeholder="Quantity" name="quantity">
                             
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Unit</label>
                              <div class="col-md-8">
                              <input type="text" id="unit" class="form-control" placeholder="Unit" name="unit">
                             
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Price Range</label>
                              <div class="col-md-4">
                              <input type="text" id="start_price" class="form-control" placeholder="From" name="start_price">
                              
                              </div>
                              <div class="col-md-4">
                             <input type="text" id="end_price" class="form-control" placeholder="To" name="end_price">
                              
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
                                <input type="text" id="ship_to"  class="form-control" name="ship_to">
                              </div>
                            </div>
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Upload File</label>
                              <div class="col-md-8">
                                <input type="file" id="upload"  class="form-control" name="upload">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                             <div class="form-group row last">
                              <label class="col-md-4 label-control">Image</label>
                              <div class="col-md-8">
                                <input type="file" id="image"  class="form-control" name="image">
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
        <!-- // Basic form layout section end -->
    </div>


@endsection