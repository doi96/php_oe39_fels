<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>OE39 FELS</title>

    <!-- Stylesheets
    ================================================= -->
	<link rel="stylesheet" href="{{ asset('css/frontend_css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/frontend_css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/frontend_css/ionicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/frontend_css/font-awesome.min.css') }}" />
    <!--Google Webfont-->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
	<header id="header">
        @include('layouts.frontend_layout.header')
    </header>
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

                <!-- Newsfeed Common Side Bar Left
                ================================================= -->

    	          @yield('content')

                <!-- Top user Side Bar Right
                ================================================= -->
    		</div>
    	</div>
    </div>

    <!-- Footer
    ================================================= -->
    @include('layouts.frontend_layout.footer')
    
    {{-- <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div> --}}
    
    <!-- Scripts
    ================================================= -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script>
    <script src="{{ asset('js/frontend_js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/jquery.sticky-kit.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/frontend_js/script.js') }}"></script>
  </body>
</html>
