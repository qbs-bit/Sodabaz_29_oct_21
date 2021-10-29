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
                  <h4 class="card-title" id="bordered-layout-colored-controls">Company Announcements</h4>
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
                    <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="{{url('/save_companyannouncements')}}">
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
                        <h4 class="form-section"><i class="la la-file"></i> Add Details</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Title</label>
                              <div class="col-md-8">
                              <input type="text" id="title" class="form-control" placeholder="Title" name="title">
                             
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Company Name</label>
                              <div class="col-md-8">
                              <input type="text" id="company_name" class="form-control" placeholder="Company Name" name="company_name">
                             
                              </div>
                            </div>
                          </div>
                        </div>          
                          <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Description</label>
                              <div class="col-md-8">
                                <textarea id="description" rows="6" class="form-control" name="detail"
                                placeholder="Description"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Posted By</label>
                              <div class="col-md-8">
                                <input type="text" id="posted_by"  class="form-control" name="posted_by" placeholder="Posted By">
                              </div>
                            </div>
                            <div class="form-group row last">
                              <label class="col-md-4 label-control">Image</label>
                              <div class="col-md-8">
                                <input type="file" id="image" class="form-control" name="image">
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