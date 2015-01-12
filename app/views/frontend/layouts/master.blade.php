<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Login page</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        {{HTML::style('assets/css/bootstrap.min.css')}}
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        {{ HTML::style('assets/css/style.css') }}
    </head>
    <body>

        @yield('content')

        {{HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js')}}
        {{HTML::script('assets/js/bootstrap.min.js')}}
    </body>
</html>