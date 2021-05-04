<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no" />
    
        <link rel="shortcut icon" href="favicon.ico" />
    
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('assets/css/frontend/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/frontend/jquery-ui.structure.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('assets/css/frontend/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="{{asset('assets/css/frontend/style.min.css')}}" rel="stylesheet" type="text/css" />
        @livewireStyles
        <title>Login</title>
    </head>

<body data-color="mainColor">
    <!-- LOADER -->
    <div class="loading dr-blue-2">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_four"></div>
                <div class="object object_three"></div>
                <div class="object object_two"></div>
                <div class="object object_one"></div>
            </div>
        </div>
    </div>
    <img class="center-image" src="img/1.jpg" alt="">
    
    @yield('login')
    @yield('signup')

    <script src="{{asset('assets/js/frontend/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('assets/js/frontend/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/frontend/jquery-ui.min.js')}}"></script>
	<script src="{{asset('assets/js/frontend/idangerous.swiper.min.js')}}"></script>
	<script src="{{asset('assets/js/frontend/jquery.viewportchecker.min.js')}}"></script>
	<script src="{{asset('assets/js/frontend/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/js/frontend/jquery.mousewheel.min.js')}}"></script>
	<script src="{{asset('assets/js/frontend/all.js')}}"></script>
	<script src="{{asset('assets/js/frontend/jquery.circliful.min.js')}}"></script>
	<script src="{{asset('assets/js/frontend/myJquery.js')}}"></script>

    @livewireScripts
</body>

</html>