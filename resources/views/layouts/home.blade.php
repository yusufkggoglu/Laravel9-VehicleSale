<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Yusuf K.">
    <meta name="msapplication-tap-highlight" content="yes"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0"/>

    <!-- Google Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lekton:400,700,400italic' rel='stylesheet' type='text/css'>

    <!--  Bootstrap 3-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!--  Slider -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.kenburnsy.css">

    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">

    <!-- Web Icons Font -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/iconmoon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/et-line.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/ionicons.css">

    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">

    <!-- Tabs -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/tabs.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/tabstyles.css"/>

    <!-- Loader Style -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/loader-1.css">

    <!-- Costum Styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="{{asset('assets')}}/favicon.ico">

    <!-- Modernizer & Respond js -->
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    @yield('css')
    @yield('headerjs')
</head>

<body>
@include('home._header')


<div class="menu-wrap" style="background-image: url({{asset('assets')}}/img/nav_bg.jpg)">
    <div class="menu-content">
        @include('home._category')
    </div>
</div>

@section('content')
    içerik alanı
@show
@include('home._footer')
@yield('footerjs')
</body>
</html>
