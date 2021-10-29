<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('/web-assets/lib/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/web-assets/lib/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/web-assets/lib/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/web-assets/lib/jquery.bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/web-assets/lib/owl.carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/web-assets/lib/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/web-assets/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/web-assets/css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/web-assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/web-assets/css/responsive.css')}}" />
    <title>Kute shop</title>
</head>
<body class="home">


@include('frontend/layouts/navbar')
@yield('content')

</body>
<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="{{asset('/web-assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/web-assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/web-assets/lib/select2/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/web-assets/lib/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/web-assets/lib/owl.carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/web-assets/lib/jquery.countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web-assets/lib/jquery.elevatezoom.js')}}"></script>

<script type="text/javascript" src="{{asset('web-assets/lib/jquery-ui/jquery-ui.min.js')}}"></script>

<script type="text/javascript" src="{{asset('web-assets/lib/fancyBox/jquery.fancybox.js')}}"></script>

<script type="text/javascript" src="{{asset('/web-assets/js/jquery.actual.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/web-assets/js/theme-script.js')}}"></script>

</body>
</html>