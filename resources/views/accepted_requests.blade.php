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
              <h4 class="card-title">Accepted Requests</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content collapse show">
              <div class="card-body card-dashboard">
                <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                    <tr>
                    <th class="text-center">Acceptor</th>
                      <th class="text-center">Location</th>
                      <th class="text-center">Delivery In</th>
                     <th class="text-center">Amount</th>
                     <th class="text-center">Accepted Since:</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($accepted_request as $req)
                  		@if(Auth::user()->id== $req->requestor->id)
                  		<tr>
                  			<td class="text-center">
                          {{$req->requestor->name}}
                        </td>
                  			<td class="text-center">
                          {{$req->location}}
                        </td>
                  			<td class="text-center">
                          {{$req->delivery_in}}
                        </td>
                  			<td class="text-center">
                          {{$req->amount}}
                        </td>
                  			<td class="text-center">
                          {{$req->created_at->diffForHumans()}}
                        </td>
                  		</tr>
                  		@endif
                  	@endforeach
                  </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>


@endsection