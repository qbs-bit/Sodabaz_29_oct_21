@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
@endif
<style type="text/css">
.scroll {
    max-height: 270px;
    overflow-y: scroll;
}
</style>
<!-- Form control repeater section start -->
<section id="form-control-repeater">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title" id="file-repeater">
          	@foreach ($detail as $rfq)

          		<b>{{$rfq->get_user->company_name}}</b>

          	@endforeach -
          	RFQ Details
          </h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
        	@foreach ($detail as $rfq)
          <div class="card-body">
            <form class="form row" method="post" action="{{url('mills/accept_rfq')}}">
            	
              <div class="form-group mb-1 col-md-6 mb-2">
              	<label>Title</label>
                <input type="text" class="form-control" readonly name="keywords" value="{{$rfq->keywords}}">
              </div>
              
              <div class="form-group col-md-6 mb-2">
              	<label>Quantity</label>
                <input type="num" class="form-control" readonly value="{{$rfq->quantity}}" name="quantity">
              </div>

              <div class="form-group col-md-6 mb-2">
              	<label>Unit</label>
                <input type="text" class="form-control" readonly value="{{$rfq->unit}}" name="unit">
              </div>
              <div class="form-group col-md-6 mb-2">
              	<label>Price Range</label>
                <input type="text" class="form-control" readonly value="{{$rfq->start_price}} - {{$rfq->end_price}}" name="phone">
              </div>
              <div class="form-group col-md-6 mb-2">
              	<label>Ship To</label>
                <input type="text" class="form-control" readonly value="{{$rfq->ship_to}}" name="phone">
              </div>
              <div class="form-group col-md-6 mb-2 ">
              	<label class="text-white">_</label>
                 <a href="{{asset('/rfq_files/'.$rfq->upload)}}" download="{{$rfq->upload}}" class="btn btn-info btn-block">Download file!</a>
              </div>
              <div class="form-group col-12 mb-2">
              	<label>Description</label>
                <textarea rows="3" class="form-control" readonly name="comment" placeholder="About Project">{{$rfq->description}}</textarea>
              </div>
              <input type="hidden" name="rfq_id" value="{{$rfq->id}}">
              <hr>
              <div class="form-group col-md-6 mb-2 ">
                <a class="btn btn-info text-white" data-toggle="modal" data-target="#rfq_modal">
                  Submit Quotation
                </a>
                              
              </div>
            </form>
            <!-- Modal -->
                <div class="modal fade text-left" id="rfq_modal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel1">Submit Quotation</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <div class="card-content collpase show">
                        <div class="card-body">
                          <div class="card-text">
                          </div>
                          <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="{{url('mills/submit_quotation')}}">
                            @csrf
                           <div class="form-body">
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
                                      <input type="hidden" name="rfq_id" value="{{$rfq->id}}">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-actions right">
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
              </div>
                <!---Modal End----> 
          </div>
          @endforeach
        </div>
      </div>
    </div>

    {{-- Post Comments --}}
           
    <div class="col-md-6 ">
      <div class="card mt-8">
        <h5 class="card-header">Comments <span style="background-color:#17a2b8;" class="comment-count badge">{{ count($rfq->comments) }}</span></h5>
        <div class="card-body">
          {{-- List Start --}}
          <div class="comments scroll"> 
            @if(count($rfq->comments)>0)
                  @foreach($rfq->comments as $comment)
            <div class="row">
              <div class="col-md-1 col-sm-1 col-lg-1">
                 <span class="avatar avatar-online">
                    <img class="rounded-circle" style="height: 35px; width: 40px;" src="{{ asset('/storage/'.config('chatify.user_avatar.folder').'/'.$comment->user_data->avatar) }}" alt="avatar">
                </span>
              </div>
              <div style="" class="col-md-8 col-sm-8 col-lg-8">
                <p style="color: black;">
                  <b>{{ $comment->user_data->name}}</b>  
                  <br>
                  {{ $comment->comment_text }}
                </p>
             
              <small>
              {{ $comment->created_at->diffForHumans() }}
            </small>
            </div>
             </div>
            
            @endforeach
            @else
              <p class="no-comments">No Comments Yet</p>
            @endif
          </div>
          <br>
           {{-- Add Comment --}}
          <div class="add-comment mb-3 form-actions right">
              @csrf
              <textarea class="form-control comment" placeholder="Enter Comment"></textarea>
              <button data-post="{{ $rfq->id }}" class="btn btn-info btn-sm mt-2 save-comment">Submit</button>
          </div>
        </div>
      </div>

    </div>
  </div>
        {{-- ## End Post Comments --}}
</section>
  <!-- // Form control repeater section end -->

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
// Save Comment
$(".save-comment").on('click',function(){
    var _comment=$(".comment").val();
    var _post=$(this).data('post');
    var vm=$(this);
    // Run Ajax
    $.ajax({
        url:"{{ url('mills/save-comment') }}",
        type:"post",
        dataType:'json',
        data:{
            comment:_comment,
            post:_post,
            _token:"{{ csrf_token() }}"
        },
        beforeSend:function(){
            vm.text('Saving...').addClass('disabled');
        },
        success:function(res){
          
            var _html='<blockquote class="blockquote animate__animated animate__bounce"> <b><label style="color:black;">{{ Auth::user()->name}}</label></b><br>\
            <small class="mb-0">'+_comment+'</small>\
            </blockquote><hr/>';
            if(res.bool==true){
                $(".comments").prepend(_html);
                $(".comment").val('');
                $(".comment-count").text($('blockquote').length);
                $(".no-comments").hide();
            }
            vm.text('Save').removeClass('disabled');

        } 
          
        
    });
});
</script>
@endsection