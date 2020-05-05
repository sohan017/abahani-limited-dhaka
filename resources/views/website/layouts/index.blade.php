<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from kodeforest.net/html/gameplay/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jan 2020 21:01:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('website/css/bootstrap.css')}}" rel="stylesheet">
    <!-- DL Menu CSS -->
    <link href="{{ asset('website/js/dl-menu/component.css')}}" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="{{ asset('website/css/slick.css')}}" rel="stylesheet"/>
    <link href="{{ asset('website/css/slick-theme.css')}}" rel="stylesheet"/>
    <!-- ICONS CSS -->
    <link href="{{ asset('website/css/font-awesome.css')}}" rel="stylesheet">
	<link href="{{ asset('website/css/svg-icons.css')}}" rel="stylesheet">
    @yield('css')
    <!-- Pretty Photo CSS -->
    <link href="{{ asset('website/css/prettyPhoto.css')}}" rel="stylesheet">
    <!-- Typography CSS -->
    <link href="{{ asset('website/css/typography.css')}}" rel="stylesheet">
    <!-- Widget CSS -->
    <link href="{{ asset('website/css/widget.css')}}" rel="stylesheet">
    <!-- Shortcodes CSS -->
    <link href="{{ asset('website/css/shortcodes.css')}}" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
    <link href="{{ asset('website/style.css')}}" rel="stylesheet">
	<!-- Color CSS -->
    <link href="{{ asset('website/css/color.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('website/css/responsive.css')}}" rel="stylesheet">
 
  </head>

  <body>

<!--kode Wrapper Start-->  
<div class="kode_wrapper"> 
	<!--Header 2 Wrap Start-->
	@include("website.partial.header")
  	
    <!--Header 2 Wrap End-->
	
	
	 <div class="content-wrapper">
     @yield('content')
    	<!-- Content Header (Page header) -->
     </div>
    
    <!--Footer Wrap End-->
     @include("website.partial.footer")

</div>
<!--kode Wrapper End-->
    <!--Jquery Library-->
    <script src="{{ asset('website/js/jquery.js')}}"></script>
	<!--Bootstrap core JavaScript-->
    <script src="{{ asset('website/js/bootstrap.js')}}"></script>
    <!--Slick Slider JavaScript-->
    <script src="{{ asset('website/js/slick.min.js')}}"></script>
    <!--Number Count (Waypoints) JavaScript-->
    <script src="{{ asset('website/js/downCount.js')}}"></script>
    <script src="{{ asset('website/js/waypoints-min.js')}}"></script>
    <!--Dl Menu Script-->
    <script src="{{ asset('website/js/dl-menu/modernizr.custom.js')}}"></script>
    <script src="{{ asset('website/js/dl-menu/jquery.dlmenu.js')}}"></script>
    <!--Progress bar JavaScript-->
    <script src="{{ asset('website/js/jprogress.js')}}" type="text/javascript"></script>
    <!--Pretty Photo JavaScript-->
    <script src="{{ asset('website/js/jquery.prettyPhoto.js')}}"></script>
    <!--Custom JavaScript-->
	<script src="{{ asset('website/js/custom.js')}}"></script>
    @yield('js')
  </body>

<!-- Mirrored from kodeforest.net/html/gameplay/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jan 2020 21:03:58 GMT -->
</html>
