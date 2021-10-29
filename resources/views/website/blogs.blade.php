@extends('website/layouts/app')
@section('content')
@include('website.layouts.nav')

<!-- Hero Section-->
    <section class="hero hero-home no-padding">
      <div class="container-fluid p-0">       
        <div style="background: url({{asset('website-assets/img/Banner.png)')}};" class="item d-flex col-lg-12">
           <div class="container">
            <center>
           <h1 style="color: black;">BLOGS</h1>
            </center>
          </div>
        </div>
    </div>
    </section>

     <!-- Main Section-->

    <section class="blog">
      <div class="container">
        <div class="row">
          <!-- post-->
          <div class="col-lg-6">
            <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
              <div class="thumbnail d-flex-align-items-center justify-content-center"><img src="{{asset('/website-assets/img/blog-1.jpg')}}" alt="..."></div>
              <div class="info"> 
                <h4 class="h5"> <a href="post.html">Newest photo apps          </a></h4><span class="date">Category Name | <i class="fa fa-clock-o"></i> Date</span>
                <p>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Aenean ultricies mi vitae est. </p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /end post-->
          
          <!-- post-->
          <div class="col-lg-6">
            <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
              <div class="thumbnail d-flex-align-items-center justify-content-center"><img src="{{asset('/website-assets/img/blog-2.jpg')}}" alt="..."></div>
              <div class="info"> 
                <h4 class="h5"> <a href="post.html">Best books about Photography          </a></h4><span class="date">Category Name | <i class="fa fa-clock-o"></i> Date</span>
                <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /end post-->
          
          <!-- post-->
          <div class="col-lg-6">
            <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
              <div class="thumbnail d-flex-align-items-center justify-content-center"><img src="{{asset('/website-assets/img/blog1.jpg')}}" alt="..."></div>
              <div class="info"> 
                <h4 class="h5"> <a href="post.html">Best books about Fashion          </a></h4><span class="date">Category Name | <i class="fa fa-clock-o"></i> Date</span>
                <p>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.  Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /end post-->
          
          <!-- post-->
          <div class="col-lg-6">
            <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
              <div class="thumbnail d-flex-align-items-center justify-content-center"><img src="{{asset('/website-assets/img/blog2.jpg')}}" alt="..."></div>
              <div class="info"> 
                <h4 class="h5"> <a href="post.html">Autumn fashion tips and tricks          </a></h4><span class="date">Category Name | <i class="fa fa-clock-o"></i> Date</span>
                <p>Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /end post-->
          
          <!-- post-->
          <div class="col-lg-6">
            <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
              <div class="thumbnail d-flex-align-items-center justify-content-center"><img src="{{asset('/website-assets/img/blog-1.jpg')}}" alt="..."></div>
              <div class="info"> 
                <h4 class="h5"> <a href="post.html">Newest photo apps          </a></h4><span class="date">Category Name | <i class="fa fa-clock-o"></i> Date</span>
                <p>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Aenean ultricies mi vitae est. </p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /end post-->
          
          <!-- post-->
          <div class="col-lg-6">
            <div class="post post-gray d-flex align-items-center flex-md-row flex-column">
              <div class="thumbnail d-flex-align-items-center justify-content-center"><img src="{{asset('/website-assets/img/blog-2.jpg')}}" alt="..."></div>
              <div class="info"> 
                <h4 class="h5"> <a href="post.html">Best books about Photography          </a></h4><span class="date">Category Name | <i class="fa fa-clock-o"></i> Date</span>
                <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="post.html" class="read-more">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- /end post-->
          
        </div>
        <!-- Pagination 
        <nav aria-label="..." class="d-block w-100">
          <ul class="pagination pagination-custom d-flex justify-content-between d-block w-100">
            <li class="page-item">
            	<a href="#" class="page-link">
            		&lt; Older posts
        		</a>
            </li>
            <li class="page-item disabled">
            	<a href="#" tabindex="-1" class="page-link">
            		Newer posts  &gt;                                   
            	</a>
            </li>
          </ul>
        </nav>
        -->
      </div>
    </section>



@include('website.layouts.footer')
@endsection