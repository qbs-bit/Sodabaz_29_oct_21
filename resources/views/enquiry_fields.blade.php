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
                        <h4 class="card-title" id="basic-layout-form-center"><b> Enquiry Fields<b></h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                             
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form class="form" method="post" action="{{url('mills/save_category')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
		                          <div class="col-md-6">
		                            <div class="form-group row last">
		                              <label class="col-md-4 label-control">Field Catalog</label>
		                              <div class="col-md-8">
		                              	<select class="form-control" id="category_id" name="category_id">
		                              		<option selected disabled>Select Catalog</option>
			                          		<option value="yes">Activate</option>
			                          		<option value="no">Deactivate</option>
		                              	</select>
		                              </div>
		                            </div>
		                          </div>
		                          <div class="col-md-6">
		                            <div class="form-group row last">
		                              <label class="col-md-4 label-control">Field Name</label>
		                              <div class="col-md-8">
		                              	<select class="form-control" id="category_id" name="category_id">
		                              		<option selected disabled>Select Catalog</option>
			                          		<option value="yes">Activate</option>
			                          		<option value="no">Deactivate</option>
		                              	</select>
		                              </div>
		                            </div>
		                          </div>
		                        </div>
		                        <div class="row">
		                          <div class="col-md-6">
		                            <div class="form-group row last">
		                              <label class="col-md-4 label-control">Field Content Type</label>
		                              <div class="col-md-8">
		                              	<select class="form-control" id="category_id" name="category_id">
		                              		<option selected disabled>Select Content Type</option>
			                          		<option value="yes">Activate</option>
			                          		<option value="no">Deactivate</option>
		                              	</select>
		                              </div>
		                            </div>
		                          </div>
		                          <div class="col-md-6">
		                            <div class="form-group row last">
		                              <label class="col-md-4 label-control">Field Display Name</label>
		                              <div class="col-md-8">
		                              	<select class="form-control" id="category_id" name="category_id">
		                              		<option selected disabled>Select Display Name</option>
			                          		<option value="yes">Activate</option>
			                          		<option value="no">Deactivate</option>
		                              	</select>
		                              </div>
		                            </div>
		                          </div>
		                        </div>
		                        <div class="row">
		                          <div class="col-md-6">
		                            <div class="form-group row last">
		                              <label class="col-md-4 label-control">Field Something Dropdown</label>
		                              <div class="col-md-8">
		                              	<select class="form-control" id="category_id" name="category_id">
		                              		<option selected disabled>Select Something Dropdown</option>
			                          		<option value="yes">Activate</option>
			                          		<option value="no">Deactivate</option>
		                              	</select>
		                              </div>
		                            </div>
		                          </div>
		                          <div class="col-md-6">
		                            <div class="form-group row last">
		                              <label class="col-md-4 label-control"></label>
		                              <div class="col-md-8 text-right">
		                              	<button type="submit" class="btn btn-info">
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
       


@endsection