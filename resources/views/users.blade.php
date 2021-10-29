@extends('layouts.master')

@section('content')
@if (session('status'))

{{ session('status') }}
@endif
@foreach ($users as $user)
@endforeach

<section id="configuration">
  <div class="row">
    <div class="col-12">
      <div class="card">
      	<div class="card-header">
       	 <h2 class="">{{ucwords($user->role->role)}}</h2>
        </div>
        <div class="card-content collapse show">
          <div class="card-body card-dashboard">
            <table class="table table-striped table-bordered zero-configuration">
              <thead>
                <tr>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Company Name</th>
                 <th>Phone</th>
                 <th>Joined</th>
                 
                </tr>
              </thead>
              <tbody>

              	@foreach ($users as $user)
                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->company_name}}</td>
                  <td>{{$user->phone_number}}</td>
                  <td>{{$user->created_at->diffForHumans()}}</td>
                
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