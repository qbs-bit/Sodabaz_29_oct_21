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
                        <h4 class="card-title" id="basic-layout-form-center"><b>Add Category<b></h4>
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
                            <form class="form" method="post" action="{{url('mills/save_category')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row justify-content-md-center">
                                    <div class="col-md-6">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="eventInput1">Category Name</label>
                                                <input type="text" id="category" class="form-control" placeholder="Category Name" name="category">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="eventInput1">Image</label>
                                                <input type="file" id="image" class="form-control" name="image">
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
            </div>
        </div>
    </section>
    <!-- // Basic form layout section end -->
    <!-- Basic example section start -->
        <section id="basic-examples">
          <div class="row">
            <div class="col-12 mt-3 mb-1">
              <h4 class="text-uppercase"><b>Categories</h4></b>
            </div>
          </div>
         
          <div class="row match-height">
             @foreach($category as $cat)
            <div class="col-xl-3 col-md-6 col-sm-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <img class="card-img img-fluid mb-1" src="{{asset('/rfq_files/category_images/'.$cat->image)}}"
                    alt="Card image cap">
                    <h4 class="card-title"><center>{{$cat->category}}</center></h4>
                   <div class="card-body">
                    <center>
                    @if($cat->status=="Active")
                        <a style="color: green;" class="card-link">{{$cat->status}}</a> &nbsp;
                    @elseif($cat->status=="Inactive")
                        <a style="color: red;" class="card-link">{{$cat->status}}</a> &nbsp;
                    @endif
                    <button class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#{{$cat->id}}"><i class="la la-edit"></i>Edit </button>
                    </center>
                  </div>
                  </div>
                </div>
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
                                        <option value="Inactive">
                                            Inactive
                                        </option>
                                    @elseif($cat->status=="Inactive")
                                        <option value="{{$cat->status}}">
                                            {{$cat->status}}
                                        </option>
                                        <option value="Active">
                                        Active
                                    </option>
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
                <!---Modal End--->
              </div>
            </div>
           @endforeach
          </div>
          <nav aria-label="page navigation example" class="d-flex justify-content-center">
            <span>
                {{$category->links('layouts.pagination')}}
            </span>
          </nav>
        </section>
    <!-- // Basic example section end -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" >
    
    function update_category(id)
    {
        $('#category')
    }


</script>

@endsection

