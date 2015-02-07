<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Free Aditii Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'> -->
    <?php $path = "theme1" ?>
    {{HTML::style('assets/' . $path . '/css/style.css')}}

    {{HTML::script('assets/' . $path . '/js/jquery.min.js')}}

    <!-- start slider -->       
    {{HTML::style('assets/' . $path . '/css/slider.css')}}

    {{HTML::script('assets/' . $path . '/js/modernizr.custom.28468.js')}}
    {{HTML::script('assets/' . $path . '/js/jquery.cslider.js')}}

    <!-- Owl Carousel Assets -->
    {{HTML::style('assets/' . $path . '/css/owl.carousel.css')}}

    <!-- Owl Carousel Assets -->
    <!-- Prettify -->
    {{HTML::script('assets/' . $path . '/js/owl.carousel.js')}}

    <!-- //Owl Carousel Assets -->
    <!-- start top_js_button -->
    {{HTML::script('assets/' . $path . '/js/move-top.js')}}
    {{HTML::script('assets/' . $path . '/js/easing.js')}}
    {{HTML::script('assets/' . $path . '/js/responsive.menu.js')}}

</head>
<body>
    <!-- start header -->
    @include('frontend.' . $path . '.includes.header')
    <!----start-cursual---->
    @yield('content', 'Default content')
    <!-- start footer -->
    @include('frontend.' . $path . '.includes.footer')
</body>
</html>
