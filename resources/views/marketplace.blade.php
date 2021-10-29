@extends('layouts.master')

@section('content')
    @if (session('status'))

        {{ session('status') }}
@endif
@foreach ($data as $data)
@endforeach
<style type="text/css">
  #cd{min-height: 250px;
    z-index: 1;
  }
  .table{
  font-size: 10px;
  color:black;
}


</style>
<!----------------------START MAIN SECTION-------------------->
          <div class="container" style="margin-bottom: 30px;">
        <center><h3 style="color: gray;">Marketplace</h3></center>
        <br>
        <div class="row" style="text-align: center;">
         <div class="container" style="">
            <div class="row text-center">

          <!--------------- Market Summary Start ---------------->
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header" style="background: linear-gradient(180deg, rgba(43,187,198,1) 50%, rgba(28,123,130,1) 100%);">
                    
                    <h4 class="card-title" style="color: white;">
                    Market Summary</h4>
                  </div>
                  <div class="card-body">
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="tab-limit" data-toggle="tab" role="tab" aria-controls="limit" aria-expanded="true" href="#limit">Limit</a>

                        <a class="nav-link" id="tab-market" data-toggle="tab" role="tab" aria-controls="market" href="#market" aria-selected="false" >Market</a>
                      </div>
                    </nav>
                    <!-------------- Limit Tab -------------->
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="limit" role="tabpanel" aria-labelledby="tab-limit">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Number</th>
                                <th>Langitude</th>
                                <th>Latitude</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->geo->lng}}</td>
                                <td>{{$data->address->geo->lat}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->geo->lng}}</td>
                                <td>{{$data->address->geo->lat}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->geo->lng}}</td>
                                <td>{{$data->address->geo->lat}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->geo->lng}}</td>
                                <td>{{$data->address->geo->lat}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->geo->lng}}</td>
                                <td>{{$data->address->geo->lat}}</td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                      <!-------------- Market Tab -------------->
                      <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="tab-market">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Number</th>
                                <th>Suite</th>
                                <th>Zipcode</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      <!--------------------  Market Summary Ends --------------------->

      <!-------------------- Market Activity Start -------------------->

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header" style="background: linear-gradient(180deg, rgba(43,187,198,1) 50%, rgba(28,123,130,1) 100%);">
                  <span href="{{asset('/website-assets/img/market_activity.png')}}"></span>
                  <h4 class="card-title" style="color: white;">
                    Market Activity
                  </h4>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="nav-tabContent">
                    <table class="table">
                            <thead>
                              <tr>
                                <th>Number</th>
                                <th>Suite</th>
                                <th>Zipcode</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


          <!------------------- Market Activity Ends -------------------->


          <!-------------------- Open Market Start -------------------->

            <div class="col-lg-4">
                <div class="card">
                  <div class="card-header" style="background: linear-gradient(180deg, rgba(43,187,198,1) 50%, rgba(28,123,130,1) 100%);">
                    <span href="{{asset('/website-assets/img/market_summary.png')}}"></span>
                    <h4 class="card-title" style="color: white;">
                   Open Market</h4>
                  </div>
                  <div class="card-body">
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="tab-limit2" data-toggle="tab" role="tab" aria-controls="limit" aria-expanded="true" href="#limit2">Limit</a>

                        <a class="nav-link" id="tab-market2" data-toggle="tab" role="tab" aria-controls="market" href="#market2" aria-selected="false" >Market</a>
                      </div>
                    </nav>
                    <!-------------- Limit Tab -------------->
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="limit2" role="tabpanel" aria-labelledby="tab-limit2">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Number</th>
                                <th>Suite</th>
                                <th>Number</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->id}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->id}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->id}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->id}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->id}}</td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                      <!-------------- Market Tab -------------->
                      <div class="tab-pane fade" id="market2" role="tabpanel" aria-labelledby="tab-market2">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Number</th>
                                <th>Suite</th>
                                <th>Zipcode</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                              <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->address->suite}}</td>
                                <td>{{$data->address->zipcode}}</td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


          <!------------------- Open Market Ends -------------------->

        </div>
      </div>
    </div>
  </div>
          <!---------------------END MAIN SECTION-------------------->

@endsection