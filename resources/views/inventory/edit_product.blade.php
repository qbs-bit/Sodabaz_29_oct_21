@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
    @endif
  
 
    <meta name="csrf-token" content="{{ Session::token() }}"> 

    <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="basic-form-layouts">
            <div class="row match-height">
             
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="bordered-layout-colored-controls">Edit Product</h4>
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
                    <form class="form form-horizontal form-bordered" enctype="multipart/form-data" method="post" action="{{url('mills/editproduct')}}">
                    	@foreach($products as $products)
                      <input type="hidden" id="id" value="{{$products->id}}" name="id">
                     <div class="form-body">
                        <h4 class="form-section"><i class="la la-eye"></i> Product Details</h4>                       
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-4 label-control" for="userinput1"> Select Category</label>
                              <div class="col-md-8">
                              @csrf
                              <select disabled id="cat_id" class="form-control" name="cat_id">
                                 <option value="{{$products->category->id}}">
                                 	{{$products->category->category}}
                                 </option>
                                 @foreach($category as $cat)
                                 <option value="{{$cat->id}}">{{$cat->category}}</option>
                                 @endforeach
                              </select>
                              </div>
                            </div>
                          </div>
                         <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control" for="userinput3">Product Code</label>
                              <div class="col-md-8">
                              <input type="number" id="product_code" class="form-control" value="{{$products->product_code}}" name="product_code" disabled>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-4 label-control" for="userinput1">Product Type</label>
                              <div class="col-md-8">
                              <select id="product_type" class="form-control" name="product_type">
                              	@if($products->product_type=="New")
                                  <option value="{{$products->product_type}}">{{$products->product_type}}</option>
                                  <option value="Latest">Latest</option>
                                @elseif($products->product_type=="Latest")
                                <option value="{{$products->product_type}}">{{$products->product_type}}</option>
                                  <option value="New">Old</option>
                                @endif
                              </select>

                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-md-4 label-control" for="userinput2">Product Name</label>
                              <div class="col-md-8">
                                <input type="text" id="product_name" class="form-control" value="{{$products->product_name}}" name="product_name">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control" for="userinput3">Dimensions</label>
                              <div class="col-md-8">
                              <input type="text" id="dimensions" class="form-control" value="{{$products->dimensions}}" name="dimensions">
                             
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control" for="userinput8">Select Unit</label>
                              <div class="col-md-8">
                              <select id="unit_id" class="form-control" name="unit_id">
                                 <option value="{{$products->unit->id}}">{{$products->unit->unit}}</option>
                              </select>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control" for="userinput3">Per Unit Price</label>
                              <div class="col-md-8">
                              <input type="number" id="per_unit_price" class="form-control" value="{{$products->per_unit_price}}" name="per_unit_price">
                             
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group row last">
                              <label class="col-md-4 label-control" for="userinput8">Bidding</label>
                              <div class="col-md-8">
                              <select id="is_bid" onchange="getbidstatus(this)" class="form-control" name="is_bid" disabled>
                                  <option value="">Select Option</option>
                                <option value="1">Active</option>
                                <option value="0">Not Active</option>
                               </select>
                              
                              </div>
                            </div>
                          </div>

                        </div>

                        <div id="appendarea"></div>

                       
                        <h4 class="form-section"><i class="ft-mail"></i>Product Images</h4>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                            <label class="col-md-2 label-control" for="userinput8">Product Images</label>
                              <div class="col-md-8">

                              <div>
                                 <label style="font-size: 14px;">
                                 <span style='font-weight:bold'>Attachment Instructions :</span>
                                 </label>
                                 <ul>
                                    <li>
                                       Allowed only files with extension (jpg & png)
                                    </li>
                                    <li>
                                       Upload 3 images with 300 KB for each
                                    </li>
                                    <li>
                                      Select Multiple Files At Once
                                    </li>
                                 </ul>
                                 <!--To give the control a modern look, I have applied a stylesheet in the parent span.-->
                                 <span class="btn btn-info fileinput-button">
                                 <span>Select Attachment</span>
                                 <input type="file" name="files[]" id="files" multiple accept="image/jpeg, image/png,"><br />
                                 </span>
                                 <output id="Filelist"></output>
                              </div>

                              </div>
                            </div>
                          </div>
                        </div>




                             
                          <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row last">
                              <label class="col-md-2 label-control" for="userinput8">Product Description</label>
                              <div class="col-md-8">
                                <textarea id="userinput8" rows="6" class="form-control" name="description"
                                placeholder="Description"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
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
         
<div id="section"></div>
            </div>
        </section>
        <!-- // Basic form layout section end -->
    </div>
      

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
   //I added event handler for the file upload control to access the files properties.
   document.addEventListener("DOMContentLoaded", init, false);
   
   //To save an array of attachments
   var AttachmentArray = [];
   
   //counter for attachment array
   var arrCounter = 0;
   
   //to make sure the error message for number of files will be shown only one time.
   var filesCounterAlertStatus = false;
   
   //un ordered list to keep attachments thumbnails
   var ul = document.createElement("ul");
   ul.className = "thumb-Images";
   ul.id = "imgList";
   
   function init() {
   //add javascript handlers for the file upload event
   document
    .querySelector("#files")
    .addEventListener("change", handleFileSelect, false);
   }
   
   //the handler for file upload event
   function handleFileSelect(e) {
   //to make sure the user select file/files
   if (!e.target.files) return;
   
   //To obtaine a File reference
   var files = e.target.files;
   
   // Loop through the FileList and then to render image files as thumbnails.
   for (var i = 0, f; (f = files[i]); i++) {
    //instantiate a FileReader object to read its contents into memory
    var fileReader = new FileReader();
   
    // Closure to capture the file information and apply validation.
    fileReader.onload = (function(readerEvt) {
      return function(e) {
        //Apply the validation rules for attachments upload
        ApplyFileValidationRules(readerEvt);
   
        //Render attachments thumbnails.
        RenderThumbnail(e, readerEvt);
   
        //Fill the array of attachment
        FillAttachmentArray(e, readerEvt);
      };
    })(f);
   
    // Read in the image file as a data URL.
    // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
    // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
    fileReader.readAsDataURL(f);
   }
   document
    .getElementById("files")
    .addEventListener("change", handleFileSelect, false);
   }
   
   //To remove attachment once user click on x button
   jQuery(function($) {
   $("div").on("click", ".img-wrap .close", function() {
    var id = $(this)
      .closest(".img-wrap")
      .find("img")
      .data("id");
   
    //to remove the deleted item from array
    var elementPos = AttachmentArray.map(function(x) {
      return x.FileName;
    }).indexOf(id);
    if (elementPos !== -1) {
      AttachmentArray.splice(elementPos, 1);
    }
   
    //to remove image tag
    $(this)
      .parent()
      .find("img")
      .not()
      .remove();
   
    //to remove div tag that contain the image
    $(this)
      .parent()
      .find("div")
      .not()
      .remove();
   
    //to remove div tag that contain caption name
    $(this)
      .parent()
      .parent()
      .find("div")
      .not()
      .remove();
   
    //to remove li tag
    var lis = document.querySelectorAll("#imgList li");
    for (var i = 0; (li = lis[i]); i++) {
      if (li.innerHTML == "") {
        li.parentNode.removeChild(li);
      }
    }
   });
   });
   
   //Apply the validation rules for attachments upload
   function ApplyFileValidationRules(readerEvt) {
   //To check file type according to upload conditions
   if (CheckFileType(readerEvt.type) == false) {
    alert(
      "The file (" +
        readerEvt.name +
        ") does not match the upload conditions, You can only upload jpg/png files"
    );
    e.preventDefault();
    return;
   }
   
   //To check file Size according to upload conditions
   if (CheckFileSize(readerEvt.size) == false) {
    alert(
      "The file (" +
        readerEvt.name +
        ") does not match the upload conditions, The maximum file size for uploads should not exceed 300 KB"
    );
    e.preventDefault();
    return;
   }
   
   //To check files count according to upload conditions
   if (CheckFilesCount(AttachmentArray) == false) {
    if (!filesCounterAlertStatus) {
      filesCounterAlertStatus = true;
      alert(
        "According to upload conditions you can only upload 3 files."
      );
    }
    e.preventDefault();
    return;
   }
   }
   
   //To check file type according to upload conditions
   function CheckFileType(fileType) {
   if (fileType == "image/jpeg") {
    return true;
   } else if (fileType == "image/png") {
    return true;
   } else {
    return false;
   }
   return true;
   }
   
   //To check file Size according to upload conditions
   function CheckFileSize(fileSize) {
   if (fileSize < 300000) {
    return true;
   } else {
    return false;
   }
   return true;
   }
   
   //To check files count according to upload conditions
   function CheckFilesCount(AttachmentArray) {
   //Since AttachmentArray.length return the next available index in the array,
   //I have used the loop to get the real length
   var len = 0;
   for (var i = 0; i < AttachmentArray.length; i++) {
    if (AttachmentArray[i] !== undefined) {
      len++;
    }
   }
   //To check the length only get 3 files
   if (len > 2) {
    return false;
   } else {
    return true;
   }
   }
   
   //Render attachments thumbnails.
   function RenderThumbnail(e, readerEvt) {
   var li = document.createElement("li");
   ul.appendChild(li);
   li.innerHTML = [
    '<div class="img-wrap"> <span class="close">&times;</span>' +
      '<img class="thumb" src="',
    e.target.result,
    '" title="',
    escape(readerEvt.name),
    '" data-id="',
    readerEvt.name,
    '"/>' + "</div>"
   ].join("");
   
   var div = document.createElement("div");
   div.className = "FileNameCaptionStyle";
   li.appendChild(div);
   div.innerHTML = [readerEvt.name].join("");
   document.getElementById("Filelist").insertBefore(ul, null);
   }
   
   //Fill the array of attachment
   function FillAttachmentArray(e, readerEvt) {
   AttachmentArray[arrCounter] = {
    AttachmentType: 1,
    ObjectType: 1,
    FileName: readerEvt.name,
    FileDescription: "Attachment",
    NoteText: "",
    MimeType: readerEvt.type,
    Content: e.target.result.split("base64,")[1],
    FileSizeInBytes: readerEvt.size
   };
   arrCounter = arrCounter + 1;
   }

/*
    $(document).ready(function() {
    
    $('#cat_id').on('change', function() {
    var cat_id = $('#cat_id').val();
    $('#sub_cat_id').html('<option value="">Select Sub Category</option>');
    
            if(cat_id) {
                $.ajax({
                  url: '{{url("mills/showsubcat")}}'+"/"+cat_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                    
                      console.log(data);
                      $.each(data, function(key, value) {

                 $('#sub_cat_id').append('<option value="'+ value.id +'">'+ value.category +'</option>');
                      });

                    }

                });
            }else{
           $('#sub_cat_id').html('<option value="">Select Sub Category</option>');
            }
        });
    });
    */


function getbidstatus(status){
if(status.value == 1){

                hcode = '<div class="row"><div class="col-md-6"><div class="form-group row last">';
                hcode += '<label class="col-md-4 label-control" for="userinput3">Bidding Start</label>';
                hcode +='<div class="col-md-8">';
                hcode +='<input type="datetime-local" class="form-control" placeholder="Bidding Start" name="bidding_start">';
                hcode +='</div></div></div>';  

               hcode+='<div class="col-md-6"><div class="form-group row last">';
               hcode+=' <label class="col-md-4 label-control" for="userinput8">Bidding End</label>';
               hcode+=' <div class="col-md-8">';
               hcode+='  <input type="datetime-local" id="quantity" class="form-control" placeholder="End Date Time" name="bidding_end">';
               hcode+=' </div></div></div></div>';

                hcode += '<div class="row"><div class="col-md-6"><div class="form-group row last">';
                hcode += '<label class="col-md-4 label-control" for="userinput3">Minimum Amount</label>';
                hcode +='<div class="col-md-8">';
                hcode +='<input type="number" class="form-control" placeholder="Minimum Amount" name="minimum_amount">';
                hcode +='</div></div></div>';  

               hcode+='<div class="col-md-6"><div class="form-group row last">';
               hcode+=' <label class="col-md-4 label-control" for="userinput8">Maximum Amount</label>';
               hcode+=' <div class="col-md-8">';
               hcode+='  <input type="number" id="quantity" class="form-control" placeholder="Maximum Amount" name="maximum_amount">';
               hcode+=' </div></div></div></div>';
                        
                               
                  
     $('#appendarea').append(hcode);            

}else{
  $('#appendarea').html(' ');            

}
}
</script>



@endsection


