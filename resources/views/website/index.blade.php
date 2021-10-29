@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')
<style type="text/css">
  #cd{min-height:400px;
    z-index:;
    border:none;
    border-radius: 15px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }
  .our_market{

  }
  .table{
  font-size: 8px;
  text-align: center;
  font-weight: 600px;
}

#center_section{

  padding: 20px;
  background-color: #d5495b;
  font-family: Muli;
  font-size: 14px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.31;
  letter-spacing: normal;
  text-align: center;
  color: #fff;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

#td_1{
 
  font-style: italic;
}

.market_a:hover 
{ 
  /*text-decoration:none; 
  border: 1px solid #d5495b;
  */
  color:#d5495b;
  font-weight: bold;
  transition: 0.3s;
} 

#td_3{
  color: #d5495b;
}

#td_3_2{
  color: #57bcec;
  
}

#td_3_3{
  color: #54a483;
}


#td_5{
  color: #047f04;
}

.th{
  font-weight:bold;

}

#secondtable{
 
}

#card1{
  transition: transform .3s;
   border:none;
   border-radius: 15px;
   box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}

#card1:hover{
  transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

#card2{
   border:none;
   border-radius: 15px;
   box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}

#banner_image{

  height:700px;
}

#heading_div{
  border-top:1px solid rgb(23, 77, 105, 0.25);
  border-width: thin;


}

#nav-yarn-tab, #nav-fabric-tab, #nav-finished-tab, #nav-yarn-tab2, #nav-fabric-tab2, #nav-finished-tab2, #nav-yarn-tab3, #nav-fabric-tab3, #nav-finished-tab3{
 color:white;
 background-color:#d5495b;
 padding: 3px
 padding-right:6px;
 border:1px solid rgba(115, 23, 35, 0.24);
 border-top: 0px;
 border-left: 0px;
 /*box-shadow: rgba(168, 42, 58, 0.2) 0px 7px 29px 0px;*/
}

#u_l {
  justify-content: center;
  display: flex;
  margin-bottom:-10px;
}

.nav-tabs {
    border-bottom:0px;

}

.tab_btn:focus{
  outline: none;
  border:1px solid rgba(115, 23, 35, 0.24);
}

.nav-tabs a{
  color:white;
}
</style>
<!-- Hero Section-->
    <section class="hero hero-home no-padding">
      <!-- Hero Slider-->
      <div class="owl-carousel owl-theme hero-slider">
        <div style="background: url({{asset('website-assets/img/slider.png)')}};" id="banner_image" class="item d-flex align-items-center has-pattern">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-white ml-3">
                  
                  <h2>The Best Global B2B eCommerce</h2>
                  <h2>Platform for Textiles</h2>
                  <p class="lead"> Sodabaz is Pakistan’s biggest online B2B E-Commerce <br> marketplace, where the textile industry can deal one-to-one <br> with each other at the best prices.</p>
                
              </div>
            </div>
          </div>
        </div>
        <div style="background: url({{asset('website-assets/img/slider.png)')}};" class="item d-flex align-items-center">
          <div class="container">
            <div class="row">
               <div class="col-lg-12 text-white ml-3">
                  
                  <h2>The Best Global B2B eCommerce</h2>
                  <h2>Platform for Textiles</h2>
                  <p class="lead"> Sodabaz is Pakistan’s biggest online B2B E-Commerce <br> marketplace, where the textile industry can deal one-to-one <br> with each other at the best prices.</p>
                
              </div>
            </div>
          </div>
        </div>
        <div style="background: url({{asset('website-assets/img/slider.png)')}};" class="item d-flex align-items-center">
          <div class="container">
            <div class="row">
               <div class="col-lg-12 text-white ml-3">
                  
                  <h2>The Best Global B2B eCommerce</h2>
                  <h2>Platform for Textiles</h2>
                  <p class="lead"> Sodabaz is Pakistan’s biggest online B2B E-Commerce <br> marketplace, where the textile industry can deal one-to-one <br> with each other at the best prices.</p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <!-- Hero Section Ends--->

    <!----------------------Start Our Market Section-------------------->
      <div class="container-fluid" style="background: url({{asset('website-assets/img/left.png)')}}; background-size: auto 100%; background-position: right; background-repeat: no-repeat;">
        <div class="container">
          <header>
              <center>
                <h3 style="color: black;">
                  Our Market                  
                </h3>
                <br>
              </center>
            </header>
            <br>
          <div class="row">
            <!-----------First Section Start------>
            <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
              <div id="card1" class="card">
                <div id="center_section" class="card-header">
                  <h5>Open Enquiries</h5>
                  <ul id="u_l" role="tablist" class="row nav nav-tabs">
                    <li class="nav-item">
                      <a data-toggle="tab" href="#nav-yarn" role="tab" class="nav-link active">
                        Yarn
                      </a>
                   </li>
                   <li class="nav-item">
                      <a data-toggle="tab" href="#nav-fabric" role="tab" class="nav-link">
                        Fabric
                      </a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="tab" href="#nav-finished" role="tab" class="nav-link">
                      Finished Goods
                    </a>
                  </li>
                </ul>
                </div>

                <div class="card-body tab-content" id="nav-tabContent">

                  <!-------Yarn Tab------->
                    <div class="tab-pane fade show active table-responsive" id="nav-yarn" role="tabpanel">
                    <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th class="th">Product</th>
                        <th class="th">Quantity</th>
                        <th class="th">Expected Price</th>
                        <th class="th">First Delivery</th>
                        <th class="th">Payment Term</th>
                      </tr>
                        @foreach($yarn as $yarn)
                        <tr>
                          <td id="td_1">
                            <a class="market_a" href="{{url('website/single_enquiry',$yarn->id)}}">
                              {{$yarn->product_name}}
                            </a
                            >
                          </td>

                          <td>
                            <a class="market_a" href="{{url('website/single_enquiry',$yarn->id)}}">
                              {{$yarn->quantity}}
                            </a>
                          </td>

                          <td id="td_3">
                            <a class="market_a" href="{{url('website/single_enquiry',$yarn->id)}}">
                              {{$yarn->expected_price}}
                            </a>
                          </td>

                          <td>
                            <a class="market_a" href="{{url('website/single_enquiry',$yarn->id)}}">
                              {{ \Carbon\Carbon::parse($yarn->first_delivery)->format('d/m/Y')}}
                            </a>
                          </td>

                          <td>
                            <a class="market_a" href="{{url('website/single_enquiry',$yarn->id)}}">
                              {{$yarn->payment_term}}
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      
                    </thead>
                    </table>
                    </div>
                  <!-------Yarn Tab Ends-->

                  <!-------Fabric Tab---------->
                    <div class="tab-pane fade table-responsive" id="nav-fabric" role="tabpanel">
                    <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th class="th">Product</th>
                        <th class="th">Quantity</th>
                        <th class="th">Expected Price</th>
                        <th class="th">First Delivery</th>
                        <th class="th">Payment Term</th>
                      </tr>
                        @foreach($fabric as $fabric)
                        <tr>
                          <td id="td_1">
                            <a class="market_a" href="{{url('website/single_enquiry',$fabric->id)}}">
                              {{$fabric->product_name}}
                            </a>
                          </td>

                          <td>
                            <a class="market_a" href="{{url('website/single_enquiry',$fabric->id)}}">
                              {{$fabric->quantity}}
                            </a>
                          </td>

                          <td id="td_3">
                            <a class="market_a" href="{{url('website/single_enquiry',$fabric->id)}}">
                              {{$fabric->expected_price}}
                            </a>
                          </td>

                          <td>
                            <a class="market_a" href="{{url('website/single_enquiry',$fabric->id)}}">
                              {{ \Carbon\Carbon::parse($fabric->first_delivery)->format('d/m/Y')}}
                            </a>
                          </td>

                          <td>
                            <a class="market_a" href="{{url('website/single_enquiry',$fabric->id)}}">
                              {{$fabric->payment_term}}
                            </a>
                          </td>
                        </tr>
                        @endforeach
                    </thead>
                    </table>
                    </div>
                  <!-------Fabric Tab Ends----->

                  <!-------Finished Goods Tab------->
                    <div class="tab-pane fade table-responsive" id="nav-finished" role="tabpanel">
                    <table class="table table-borderless">
                    <thead>
                       <tr>
                        <th class="th">Product</th>
                        <th class="th">Quantity</th>
                        <th class="th">Expected Price</th>
                        <th class="th">First Delivery</th>
                        <th class="th">Payment Term</th>
                      </tr>
                        @foreach($finished as $finished)
                        <tr>
                          <td id="td_1">
                            <a class="market_a" href="{{url('website/single_enquiry',$finished->id)}}">
                             {{$finished->product_name}}
                            </a>
                          </td>
                          <td>
                            <a class="market_a" href="{{url('website/single_enquiry',$finished->id)}}">
                              {{$finished->quantity}}
                            </a>
                          </td>

                          <td id="td_3">
                            <a class="market_a" href="{{url('website/single_enquiry',$finished->id)}}">
                              {{$finished->expected_price}}
                            </a>
                          </td>

                          <td>
                            <a class="market_a" href="{{url('website/single_enquiry',$finished->id)}}">
                              {{ \Carbon\Carbon::parse($finished->first_delivery)->format('d/m/Y')}}
                            </a>
                          </td>

                          <td>
                            <a class="market_a" href="{{url('website/single_enquiry',$finished->id)}}">
                              {{$finished->payment_term}}
                            </a>
                          </td>

                        </tr>
                        @endforeach
                    </thead>
                    </table>
                    </div>
                  <!-------Finished Good Tab Ends--->
                </div>
              </div>
            </div>           
            <!-----------First Section Ends----->

            <!-----------Second Section(Market Highlights)--------->
            <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
              <div id="card1" class="card">
                <div id="center_section"  class="card-header">
                  <h5>Market Highlights</h5>
                  <ul id="u_l" role="tablist" class="row nav nav-tabs">
                    <li class="nav-item">
                      <a data-toggle="tab" href="#nav-yarn2" role="tab" class="nav-link active">
                        Yarn
                      </a>
                   </li>
                   <li class="nav-item">
                      <a data-toggle="tab" href="#nav-fabric2" role="tab" class="nav-link">
                        Fabric
                      </a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="tab" href="#nav-finished2" role="tab" class="nav-link">
                      Finished Goods
                    </a>
                  </li>
                </ul>
                </div>
                
                <div class="card-body tab-content" id="nav-tabContent">
                  <!-------Yarn Tab------->
                  <div class="tab-pane fade show active" id="nav-yarn2" role="tabpanel">
                    <div style="height:170px;" class="row">
                      <div class="col-12">
                        <img class="w-100" style="height: 120px;" src="{{asset('/website-assets/img/table_image1.png')}}" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 table-responsive">
                        <table id="secondtable" class="table table-borderless">
                          <thead>
                            <tr>
                              <td>KEL</td>
                              <td>4.38</td>
                              <td>45.5</td>
                              <td>2.75</td>
                              <td>4.38</td>
                              <td id="td_5">.3</td>
                              <td>2.75</td>
                            </tr>
                            <tr>
                              <td>SILK</td>
                              <td>4.38</td>
                              <td>45.5</td>
                              <td>2.75</td>
                              <td>4.38</td>
                              <td id="td_5">.09</td>
                              <td>2.75</td>
                            </tr>
                            <tr>
                              <td>PRL</td>
                              <td>4.38</td>
                              <td>45.5</td>
                              <td>2.75</td>
                              <td>4.38</td>
                              <td id="td_5">1.87</td>
                              <td>2.75</td>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-------Yarn Tab Ends----->

                  <!-------Fabric Tab-------->
                  <div class="tab-pane fade" id="nav-fabric2" role="tabpanel">
                    <div style="height:170px;" class="row">
                      <div class="col-12">
                        <img class="w-100" style="height: 120px;" src="{{asset('/website-assets/img/table_image2.png')}}" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 table-responsive">
                        <table id="secondtable" class="table table-borderless">
                          <thead>
                            <tr>
                              <td>KEL</td>
                              <td>4.38</td>
                              <td>45.5</td>
                              <td>2.75</td>
                              <td>4.38</td>
                              <td id="td_5">.3</td>
                              <td>2.75</td>
                            </tr>
                            <tr>
                              <td>SILK</td>
                              <td>4.38</td>
                              <td>45.5</td>
                              <td>2.75</td>
                              <td>4.38</td>
                              <td id="td_5">.09</td>
                              <td>2.75</td>
                            </tr>
                            <tr>
                              <td>PRL</td>
                              <td>4.38</td>
                              <td>45.5</td>
                              <td>2.75</td>
                              <td>4.38</td>
                              <td id="td_5">1.87</td>
                              <td>2.75</td>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-------Fabric Tab Ends--->

                  <!-------Finished Goods Tab------->
                  <div class="tab-pane fade" id="nav-finished2" role="tabpanel">
                    <div style="height: 170px;" class="row">
                      <div class="col-12">
                        <img class="w-100" style="height: 120px;" src="{{asset('/website-assets/img/table_image3.png')}}" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 table-responsive">
                        <table id="secondtable" class="table table-borderless">
                          <thead>
                            <tr>
                              <td>KEL</td>
                              <td>4.38</td>
                              <td>45.5</td>
                              <td>2.75</td>
                              <td>4.38</td>
                              <td id="td_5">.3</td>
                              <td>2.75</td>
                            </tr>
                            <tr>
                              <td>SILK</td>
                              <td>4.38</td>
                              <td>45.5</td>
                              <td>2.75</td>
                              <td>4.38</td>
                              <td id="td_5">.09</td>
                              <td>2.75</td>
                            </tr>
                            <tr>
                              <td>PRL</td>
                              <td>4.38</td>
                              <td>45.5</td>
                              <td>2.75</td>
                              <td>4.38</td>
                              <td id="td_5">1.87</td>
                              <td>2.75</td>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-------Finished Good Tab Ends--->
                </div>
                
                
              </div>
            </div>
            <!-----------Second Section Ends---->

            <!-----------Third Section---------->
            <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
              <div id="card1" class="card">
                <div id="center_section" class="card-header">
                  <h5>Open Offers</h5>
                  <ul id="u_l" role="tablist" class="row nav nav-tabs">
                    <li class="nav-item">
                      <a data-toggle="tab" href="#nav-yarn3" role="tab" class="nav-link active">
                        Yarn
                      </a>
                   </li>
                   <li class="nav-item">
                      <a data-toggle="tab" href="#nav-fabric3" role="tab" class="nav-link">
                        Fabric
                      </a>
                  </li>
                  <li class="nav-item">
                    <a data-toggle="tab" href="#nav-finished3" role="tab" class="nav-link">
                      Finished Goods
                    </a>
                  </li>
                </ul>
                </div>
                <div class="card-body tab-content" id="nav-tabContent">
                 <!-------Yarn Tab------->
                  <div class="tab-pane fade show active table-responsive" id="nav-yarn3" role="tabpanel">
                    <table class="table table-borderless">
                      <thead>
                    <tr>
                      <th class="th">Price</th>
                      <th class="th">Quantity</th>
                      <th class="th">Payment</th>
                      <th class="th">Bid</th>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3">.3</td>
                    </tr>
                      </thead>
                    </table>
                  </div>
                  <!-----Yarn Tab Ends---->

                  <!-------Fabric Tab------->
                  <div class="tab-pane fade table-responsive" id="nav-fabric3" role="tabpanel">
                    <table class="table table-borderless">
                      <thead>
                    <tr>
                      <th class="th">Price</th>
                      <th class="th">Quantity</th>
                      <th class="th">Payment</th>
                      <th class="th">Bid</th>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_2">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_2">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_2">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_2">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_2">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_2">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_2">.3</td>
                    </tr>
                      </thead>
                    </table>
                  </div>
                  <!-----Fabric Tab Ends---->

                  <!-------Finished Goods Tab------->
                  <div class="tab-pane fade table-responsive" id="nav-finished3" role="tabpanel">
                    <table class="table table-borderless">
                      <thead>
                    <tr>
                      <th class="th">Price</th>
                      <th class="th">Quantity</th>
                      <th class="th">Payment</th>
                      <th class="th">Bid</th>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_3">.3</td>
                    </tr>
                    <tr>
                      <td >4.38</td>
                      <td>4.25</td>
                      <td id="td_1">2.75</td>
                      <td id="td_3_3">.3</td>
                    </tr>
                      </thead>
                    </table>
                  </div>
                  <!-----Finished Goods Tab Ends---->

                </div>
              </div>
            </div>
              <!-----------Third Section Ends----->
          </div>
      </div>
    </div>
    <br>
    <bt>
    <br>
      <!---------------------End Our Market Section----------------------->



      <!-- Entity Quick Access -->
        <div class="container-fluid" style="background: url({{asset('website-assets/img/right.png)')}}; background-size: auto 100%; background-position: left; background-repeat: no-repeat;">
           <div  class="container mt-5">
            <div class="row text-center">
              <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="card" id="cd">
                  <div class="card-body">
                    <img src="{{asset('/website-assets/img/mills_logo.png')}}" alt="mills" style="max-width: 115px; max-height: 140px;" class="mt-4">
                    <br>
                    <span class="mt-4" style="font-size: 30px; font-weight: 15px; color: #212121;">
                      Mills
                    </span>
                    <p class="mt-4 text-center p-3" style="color: #89898d;font-size: 15px;  ">
                       A marketplace for all types of textile mills, with the best market competitive rates.
                    </p>
                    <a href="{{url('website/mills')}}" class="btn btn-light text-white mt-4 mb-5 pl-4 pr-4" style="background-color:#57bcec;">
                      Learn More
                    </a>
                    <span>
                      <img align="right" style="width:73px; height:70px; position: absolute; right:0px;bottom: 0px;" src="{{asset('/website-assets/img/corner.png')}}"/>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="card" id="cd">
                  <div class="card-body">
                    <img src="{{asset('/website-assets/img/agents_logo.png')}}" alt="agents" style="max-width: 115px; max-height: 140px;" class="mt-4">
                    <br>
                    <span class="mt-4" style="font-size: 30px; font-weight: 15px; color: #212121;">
                      Agents
                    </span>
                    <p class="mt-4 text-center p-3" style="color: #89898d;font-size: 15px;  ">
                      Agents can play their role and can facilitate the mills to make the best deals.
                    </p>
                    
                    <a href="{{url('website/agents')}}" class="btn btn-light text-white mt-4 mb-5 pl-4 pr-4" style="background-color:#57bcec;">
                      Learn More
                    </a>
                    <span>
                      <img align="right" style="width:73px; height:70px; position: absolute; right:0px;bottom: 0px;" src="{{asset('/website-assets/img/corner.png')}}"/>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="card" id="cd">
                  <div class="card-body">
                    <img src="{{asset('/website-assets/img/Transporters_logo.png')}}" alt="transporters" style="max-width: 115px; max-height: 140px;" class="mt-4">
                    <br>
                    <span class="mt-4" style="font-size: 30px; font-weight: 15px; color: #212121;">
                      Transporters
                    </span>
                    <p class="mt-4 text-center p-3" style="color: #89898d;font-size: 15px;  ">
                      Sodabaz provides transporters to get profitable contracts, one-stop solutions for the suppliers.
                    </p>
                    
                    <a href="{{url('website/transporters')}}" class="btn btn-light text-white mt-4 mb-5 pl-4 pr-4" style="background-color:#57bcec;">
                      Learn More
                    </a>
                    <span>
                      <img align="right" style="width:73px; height:70px; position: absolute; right:0px;bottom: 0px;" src="{{asset('/website-assets/img/corner.png')}}"/>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Entity Quick Access Ends -->
      <br>
      <br>
      <br>

          <!------------------- Announcement Start -------------------->

          <div  class="container">
            <header>
              <center>
                <h3 style="color: black;">
                  Announcements                  
                </h3>
                <br>
              </center>
            </header>
            <br>
            <div class="row">
              <div class="col-lg-1 col-md-12 col-sm-12 mb-4">
              </div>
              <!-----------First Section--------->
              <div id="accordion1" class="col-lg-5 col-md-12 col-sm-12 mb-4">
                <div id="card2" class="card">
                  <div style="border:0px"  class="card-header bg-white" id="headingOne">
                    <div class="row pt-4">
                      <div style="font-size:20px; color: #878786;" class="col-10 text-uppercase">
                        <span class="ml-3">Product Announcements</span>
                      </div>
                      <div class="col-2 pt-1">
                        <img data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="height:25px;width:25px;" src="{{asset('/website-assets/img/toggle.png')}}" >
                      </div>
                    </div>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                    <div class="card-body p-5" style="margin-top: -20px;">
                      @foreach($product as $data)
                      <div id="heading_div" class="row pt-3 pb-3 pr-3">
                        <div class="col-12">
                          <small>
                            {{$data->created_at->diffForHumans()}}
                          </small>
                          <br>
                          <p>
                            <a href="{{url('website/product_announcements',$data->id)}}">
                            {{$data->title}} - {{$data->company_name}}
                            </a>
                          </p>
                        </div>
                      </div>
                      @endforeach
                      <span>
                        <img align="right" style="width:73px; height:70px; position: absolute; right:0px;bottom: 0px;" src="{{asset('/website-assets/img/corner.png')}}"/>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <!-----------Second Section--------->
              <div id="accordion2" class="col-lg-5 col-md-12 col-sm-12 mb-4">
                <div id="card2" class="card">
                  <div style="border:0px" class="card-header bg-white" id="headingTwo">
                    <div class="row pt-4">
                      <div style="font-size:20px; color: #878786;" class="col-10 text-uppercase ">
                        <span class="ml-3">Company Announcements</span>
                      </div>
                      <div class="col-2 pt-1">
                        <img data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="height:25px;width:25px;" src="{{asset('/website-assets/img/toggle.png')}}" >
                      </div>
                    </div>
                  </div>

                  <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion2">
                    <div class="card-body p-5" style="margin-top: -20px;">
                      @foreach($company as $data)
                      <div id="heading_div" class="row pt-3 pb-3 pr-3">
                        <div class="col-12">
                          <small>
                            {{$data->created_at->diffForHumans()}}
                          </small>
                          <br>
                          <p>
                            <a href="{{url('website/company_announcements',$data->id)}}">
                            {{$data->title}}
                            </a>
                          </p>
                        </div>
                      </div>
                      @endforeach
                      <span>
                        <img align="right" style="width:73px; height:70px; position: absolute; right:0px;bottom: 0px;" src="{{asset('/website-assets/img/corner.png')}}"/>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-1 col-md-12 col-sm-12">
              </div>
            </div>
          </div>


    <!------------------- Announcement End -------------------->


    <!------------------- Metrices Start -------------------->

    <section class="padding-small">
      <div class="">
        <header>
          <center>
            <h3 style="color: black;">
              Our Metrices                  
            </h3>
          </center>
        </header>
        <div class="row">
          <div class="col-md-12">
            <img src="{{asset('/website-assets/img/metrics2.png')}}" style="width: 100%; height: : 100%;" >  
          </div>
        </div>
    </div>
    </section>
    <!------------------- Matrices End -------------------->

    <!-- Portfolio Section-->
    <section class="blog">
      <div class="container">
        
      <div class="row">
          <div class="col-md-12">
            <img src="{{asset('/website-assets/img/app.png')}}" style="width: 100%; height: : 100%;" >  
          </div>
        </div>
      </div>
    </section>
<!-- Portfolio Section Ends-->

@include('website.layouts.footer')
@endsection
