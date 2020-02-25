<!doctype html>
<html class="no-js " lang="en"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>{{ $title }} - {{ env('APP_NAME') }}</title> 
    <link rel="icon" href="{{ URL::asset('public/images/logo/logo.png') }}" type="image/x-icon">
	<link rel="stylesheet" href="{{ URL::asset('public/plugins/bootstrap/css/bootstrap.min.css') }}"> 
	<link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('public/css/color_skins.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/plugins/sweetalert/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/custom.css') }}">  
    <link rel="stylesheet" ref="https://fonts.googleapis.com/css?family=Raleway:100,600" type="text/css">

	@yield('extraCss')
</head>
<body class="theme-cyan">

	<div class="page-loader-wrapper">
	    <div class="loader"> 
	        <img src="{{ URL::asset('public/images/loader/ball.gif') }}" width="3%">      
	    </div>
	</div>

	<div class="overlay"></div>
	<!-- Top Bar -->
	<nav class="navbar">
	    <ul class="nav navbar-nav navbar-left">
	        <li>
	            <div class="navbar-header">
	                <a href="javascript:void(0);" class="bars"></a>
	                <a class="navbar-brand"><span class="m-l-10" style="color:white;">{{ env('APP_NAME') }} PORTAL</span></a>
	            </div>
	        </li>        
	        <li>
	            <a>
	                <i style="opacity: 0;" class="zmdi zmdi-arrow-left"></i>
	                <i style="opacity: 0;" class="zmdi zmdi-arrow-right"></i>
	            </a>
	        </li>   
	        <li class="dropdown float-right">
	        	<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
	        		<i class="zmdi zmdi-menu"></i>
	        	</a>

				@include('templates.nav.index')

	        </li>      
	    </ul>
	</nav>

	@include('templates.sidebar.index')

	@yield('content') 

	<script src="{{ URL::asset('public/js/jquery.js') }}"></script>
	<script src="{{ URL::asset('public/bundles/libscripts.bundle.js') }}"></script>  
	<script src="{{ URL::asset('public/bundles/vendorscripts.bundle.js') }}"></script>   
	<script src="{{ URL::asset('public/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ URL::asset('public/plugins/sweetalert/sweetalert.min.js') }}"></script>  
    <script src="{{ URL::asset('public/js/custom.js') }}"></script>  

	@yield('extraJs')
	@include('templates.nofications.index')
</body> 
</html>