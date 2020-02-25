<!doctype html>
<html class="no-js " lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 

    <title>@yield('title') - {{ env('APP_NAME') }}</title>

    <link rel="icon" href="{{ URL::asset('public/images/logo/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('public/plugins/bootstrap/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ URL::asset('public/plugins/sweetalert/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/custom.css') }}">  
    <link rel="stylesheet" href="{{ URL::asset('public/css/main.css') }}">    
    <link rel="stylesheet" href="{{ URL::asset('public/css/color_skins.css') }}">
    <link rel="stylesheet" ref="https://fonts.googleapis.com/css?family=Raleway:100,600" type="text/css">
</head> 
<body class="theme-cyanx login-wallpaper-light js-sweetalert">
    <div class="authentication sidebar-collapse">  
        <div class="page-header"> 

            @yield('content') 

            <footer class="footer">
                <div class="container"> 
                    <div class="copyright">

                        {{ date("Y") }} &copy; <span><a target="_blank">{{ strtoupper(env('APP_NAME')) }}</a></span>

                    </div>
                </div>
            </footer> 
        </div>
    </div>  
    <script src="{{ URL::asset('public/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ URL::asset('public/bundles/vendorscripts.bundle.js') }}"></script> 

    <script src="{{ URL::asset('public/bundles/mainscripts.bundle.js') }}"></script> 
    <script src="{{ URL::asset('public/plugins/sweetalert/sweetalert.min.js') }}"></script>  
    <script src="{{ URL::asset('public/js/custom.js') }}"></script>  

    @include('templates.nofications.index')
    
</body> 
</html>