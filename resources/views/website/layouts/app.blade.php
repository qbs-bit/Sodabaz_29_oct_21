<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.bootstrapious.com/hub/1-4-3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jun 2021 10:16:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Website</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/app-assets/images/ico/fav-icn.png')}}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('/website-assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('/website-assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli" />
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{asset('/website-assets/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="{{asset('/website-assets/vendor/nouislider/nouislider.css')}}">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="{{asset('/website-assets/css/custom-fonticons.css')}}">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{asset('/website-assets/vendor/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('/website-assets/vendor/owl.carousel/assets/owl.theme.default.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('/website-assets/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('/website-assets/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/website-assets/img/favicon.ico')}}">
    
    <!-- Modernizr-->
    <script src="{{asset('/website-assets/js/modernizr.custom.79639.js')}}"></script>
  </head>
  <body style="background-color: #fcfcfc">
  	@yield('content')
  </body>
  <!-- JavaScript files-->
    <script src="{{asset('/website-assets/vendor/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('/website-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('/website-assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>

    <script src="{{asset('/website-assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

    <script src="{{asset('/website-assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>

    <script src="{{asset('/website-assets/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>

    <script src="{{asset('/website-assets/vendor/nouislider/nouislider.min.js')}}"></script>

    <script src="{{asset('/website-assets/vendor/jquery-countdown/jquery.countdown.min.js')}}"></script>

    <script src="{{asset('/website-assets/vendor/masonry-layout/masonry.pkgd.min.js')}}"></script>

    <script src="{{asset('/website-assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <!-- masonry -->
    <script>
      $(function(){
          var $grid = $('.masonry-wrapper').masonry({
              itemSelector: '.item',
              columnWidth: '.item',
              percentPosition: true,
              transitionDuration: 0,
          });
      
          $grid.imagesLoaded().progress( function() {
              $grid.masonry();
          });
      })
      
      
    </script>
    <!-- Main Template File-->
    <script src="{{asset('/website-assets/js/front.js')}}"></script>
    </html>

