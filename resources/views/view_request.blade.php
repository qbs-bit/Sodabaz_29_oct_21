@extends('layouts.master')
 
@section('content')
  @if (session('status'))
      
          {{ session('status') }}   
  @endif


        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Zero configuration</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				  <br>
          <div class="row">
				  <div class="col-md-8">
          <form method="post" action="{{url('show_requests')}}">
          @csrf
				  <select class="select2 form-control" name="role_val">
          <option value="0">All</option>
          @foreach ($roles as $val )
          <option 
         
         
    value="{{$val->id}}">{{ucwords($val->role)}}</option>

        
   


          @endforeach
							     </select>
				   </div>
				   <div class="col-md-2">
					 
					  <button type="submit" class="btn btn-primary">Show</button>
            </form>
					  </div>
					  </div>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>  
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                         <th>Role</th>
                         <th>Status</th>
                         <th>Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>

                      @foreach ($users as $user)
                        <tr>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{ucwords($user->role->role)}}</td>
                          <td><span class="text-danger font-weight-bold">{{ucwords($user->status)}}</span></td>
                          <td> <a href="{{ route('view_profile', $user->id) }}" class="btn btn-primary">Details</a></td>
                        
                        </tr>
                        @endforeach    
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

@endsection