<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard | Dashboard</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/icons/favicon.ico">
        <link rel="apple-touch-icon" href="images/icons/favicon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
        <!--Loading bootstrap css-->
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
        <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
        {{HTML::style('admin/styles/jquery-ui-1.10.4.custom.min.css')}}
        {{HTML::style('admin/styles/font-awesome.min.css')}}
        {{HTML::style('admin/styles/bootstrap.min.css')}}
        {{HTML::style('admin/styles/animate.css')}}
        {{HTML::style('admin/styles/all.css')}}
        {{HTML::style('admin/styles/main.css')}}
        {{HTML::style('admin/styles/style-responsive.css')}}
        {{HTML::style('admin/styles/zabuto_calendar.min.css')}}
        {{HTML::style('admin/styles/pace.css')}}
        {{HTML::style('admin/styles/jquery.news-ticker.css')}}    
        {{-- {{HTML::style('admin/styles/style.css')}} --}}

    </head>
    <body>
        <input type="hidden" id="SITE_URL" value="{{ URL::to('/') }}">
        <input type="hidden" id="BASE_URL" value="{{ asset('/') }}">
        <div>
            <!--BEGIN BACK TO TOP-->
            <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
            <!--END BACK TO TOP-->
            
            @include('admin.includes.inc-nav-top')
            
            <div id="wrapper">
                
                @include('admin.includes.inc-nav-side')

                @include('admin.includes.inc-chat')


                <!--BEGIN PAGE WRAPPER-->
                <div id="page-wrapper">
                    
                    @section('header')
                        <!-- Header page -->
                    @show
                    
                    @yield('content', 'Default content')

                    @include('admin.includes.inc-footer')
                    
                </div>
                <!--END PAGE WRAPPER-->
            </div>
        </div>

         <!-- popup -->
        @if(isset($popup))
            {{ $popup }}
        @endif
        <!-- /popup -->
        <!-- template -->
        @if(isset($template))
            {{ $template }}
        @endif
        <!-- /template -->

        {{HTML::script('admin/script/jquery-1.10.2.min.js')}}
        {{HTML::script('admin/script/jquery-migrate-1.2.1.min.js')}}
        {{HTML::script('admin/script/jquery-ui.js')}}
        {{HTML::script('admin/script/bootstrap.min.js')}}
        {{HTML::script('admin/script/bootstrap-hover-dropdown.js')}}
        {{HTML::script('admin/script/html5shiv.js')}}
        {{HTML::script('admin/script/respond.min.js')}}
        {{HTML::script('admin/script/jquery.metisMenu.js')}}
        {{HTML::script('admin/script/jquery.slimscroll.js')}}
        {{HTML::script('admin/script/jquery.cookie.js')}}
        {{HTML::script('admin/script/icheck.min.js')}}
        {{HTML::script('admin/script/custom.min.js')}}
        {{-- {{HTML::script('admin/script/jquery.news-ticker.js')}} --}}
        {{HTML::script('admin/script/jquery.menu.js')}}
        {{HTML::script('admin/script/pace.min.js')}}
        {{HTML::script('admin/script/holder.js')}}
        {{HTML::script('admin/script/responsive-tabs.js')}}
       {{--  {{HTML::script('admin/script/jquery.flot.js')}}
        {{HTML::script('admin/script/jquery.flot.categories.js')}}
        {{HTML::script('admin/script/jquery.flot.pie.js')}}
        {{HTML::script('admin/script/jquery.flot.tooltip.js')}}
        {{HTML::script('admin/script/jquery.flot.resize.js')}}
        {{HTML::script('admin/script/jquery.flot.fillbetween.js')}}
        {{HTML::script('admin/script/jquery.flot.stack.js')}}
        {{HTML::script('admin/script/jquery.flot.spline.js')}} --}}
        {{-- {{HTML::script('admin/script/zabuto_calendar.min.js')}} --}}
        {{-- {{HTML::script('admin/script/index.js')}} --}}
        <!--LOADING SCRIPTS FOR CHARTS-->
     {{--    {{HTML::script('admin/script/highcharts.js')}}
        {{HTML::script('admin/script/data.js')}}
        {{HTML::script('admin/script/drilldown.js')}}
        {{HTML::script('admin/script/exporting.js')}}
        {{HTML::script('admin/script/highcharts-more.js')}}
        {{HTML::script('admin/script/charts-highchart-pie.js')}}
        {{HTML::script('admin/script/charts-highchart-more.js')}} --}}
        <!--CORE JAVASCRIPT-->
        {{HTML::script('admin/script/main.js')}}
        {{HTML::script('admin/script/jquery.fileupload.js')}}
        {{HTML::script('admin/script/engine.js')}}
        <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-145464-12', 'auto');
            ga('send', 'pageview');
            
            
        </script>
    </body>
</html>
