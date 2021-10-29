@extends('layouts.master')
 
@section('content')
  @if (session('status'))
      
          {{ session('status') }}   
@endif



@if(Auth::user()->role->role == "mills")

<!--------------------------- Mills ------------------------------->

  @include('profiles.mills_profile')

<!--------------------------- Mills End --------------------------->

@elseif(Auth::user()->role->role == "agents")

<!--------------------------- Agents ------------------------------->

  @include('profiles.agents_profile')


<!--------------------------- Agents End --------------------------->

@endif








































  <script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('/app-assets/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
 <script src="{{asset('/app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  

  <!-- END PAGE LEVEL JS-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>


function selectDiv(id){

$("#myClass_"+id).css("background","lightgrey");

}

</script>

@endsection