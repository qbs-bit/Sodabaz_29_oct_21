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
                            <h4 class="card-title" id="basic-layout-form-center">Manage Subcategory</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form class="form" method="post" action="{{url('mills/save_sub_category')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-6">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="eventInput1">Select Category</label>
                                                    <select class="form-control" name="category_id">
                                                        <option selected disabled>Select Category</option>
                                                        @foreach($category as $cat)
                                                            <option value="{{$cat->id}}">{{$cat->category}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="eventInput1">Subcategory Name</label>
                                                    <input type="text" id="eventInput1" class="form-control" placeholder="Sub Category Name" name="sub_category">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-md-center">
                                        <div class="col-md-6">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label for="eventInput1">Image</label>
                                                    <input type="file" id="image" class="form-control" name="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-body">
                                                <div class="form-group">
                                                     <label for="eventInput1">Select Unit</label>
                                                    <select class="form-control" name="unit">
                                                        <option selected disabled>Select Unit</option>
                                                        @foreach($units as $units)
                                                            <option value="{{$units->id}}">{{$units->unit}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions center">
                                        <button type="submit" class="btn btn-info">
                                            <i class="la la-check-square-o"></i> Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
               
                    <div class="card-deck-wrapper">
                        <div class="card-deck">
                            @foreach($subcategory as $cat)
                                <div class="col-3">
                                    <div class="card" style="border-style: groove; max-height: 600px;">
                                    <div class="card-body">
                                    <figure class="card card-img-top border-grey border-lighten-2">
                                    <img style="max-height: 400px;" class="gallery-thumbnail card-img-top" src="{{asset('/rfq_files/subcategory_images/'.$cat->image)}}" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                    <div class="card-body px-0">
                                  <h4 class="card-title">{{$cat->category}}</h4>
                                  <p class="card-text">{{$cat->status}}</p>
                                  <b><p class="card-text"></p></b>
                                  <br>
                                  <p class="card-text">
                                    <button class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#{{$cat->id}}"><i class="la la-edit"></i> </button>
                                  </p>
                                    </div>
                                  </figure>
                                   <!-- Modal Start -->
                    <div class="modal fade" id="{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="{{url('mills/update_category')}}">
                                    @csrf
                                <div class="modal-body">
                                    <input type="text" id="category" class="form-control" placeholder="Category Name" name="category" value="{{$cat->category}}">

                                    <select id="status" class="form-control" name="status">
                                        @if($cat->status=="Active")
                                            <option value="{{$cat->status}}">{{$cat->status}}</option>
                                            <option value="Inactive">Inactive</option>
                                        @elseif($cat->status=="Inactive")
                                            <option value="{{$cat->status}}">{{$cat->status}}</option>
                                            <option value="Active">Active</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="cat_id" value="{{$cat->id}}">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                                </div>
                                </div>
                                </div>
                            @endforeach
                            </div>
                          </div>
                        </div>
            </div>
        </section>
        <!-- // Basic form layout section end -->
    </div>
    <script>
        $(document).ready(function(){
            $('edit').click(function(){
                $("edit_category").modal('show');
            })
        })
    </script>
@endsection

