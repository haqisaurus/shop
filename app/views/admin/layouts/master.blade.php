<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    {{HTML::style('assets/admin/css/bootstrap.min.css')}}

    <!-- Custom CSS -->
    {{HTML::style('assets/admin/css/sb-admin.css')}}
    {{HTML::style('assets/admin/css/style.css')}}

    <!-- Custom Fonts -->
    {{HTML::style('assets/admin/font-awesome/css/font-awesome.min.css')}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.includes.inc-navi')
        
        <div id="page-wrapper">

            <div class="container-fluid">
                
                @section('header')
                    <!-- Header page -->
                @show

                @yield('content', 'Default content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- popup -->
    @if(isset($popup))
        {{ $popup }}
    @endif
    <!-- /popup -->

    <!-- jQuery -->
    {{HTML::script('assets/admin/js/jquery.js')}}

    <!-- Bootstrap Core JavaScript -->
    {{HTML::script('assets/admin/js/bootstrap.min.js')}}

    <!-- Morris Charts JavaScript -->
    {{HTML::script('assets/admin/js/engine.js')}}

</body>

</html>
