<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login admin</title>

    <!-- Bootstrap Core CSS -->
    {{HTML::style('assets/admin/css/bootstrap.min.css')}}

    <!-- Custom CSS -->
    {{HTML::style('assets/admin/css/admin-login.css')}}

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
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">                                
                        <div class="row-fluid user-row">
                            {{ HTML::image('http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png', 'Conxole Admin', array('class' => 'img-responsive')) }}
                        </div>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(array('action' => 'UserController@doLoginAdmin', 'class' => 'form-signin', 'accept-charset' => 'UTF-8', 'role' => 'form')) }}
                            <fieldset>
                                <label class="panel-login">
                                    <div class="login_result"></div>
                                </label>

                                {{ Form::text('email', '',array('class' => 'form-control', 'placeholder' => 'Email', 'autofocus' => 'autofocus', 'required' => 'required' )) }}

                                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required' )) }}

                                <br>
                                {{  Form::submit('Login »', array('class' => 'btn btn-lg btn-primary btn-block', )) }}
                            </fieldset>

                            <span class="clearfix"></span>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    {{HTML::script('assets/admin/js/jquery.js')}}

    <!-- Bootstrap Core JavaScript -->
    {{HTML::script('assets/admin/js/bootstrap.min.js')}}

    {{HTML::script('http://mymaplist.com/js/vendor/TweenLite.min.js')}}

    <script type="text/javascript">
    /**
     * parallax.js
     * @Author original @msurguy (tw) -> http://bootsnipp.com/snippets/featured/parallax-login-form
     * @Tested on FF && CH
     * @Reworked by @kaptenn_com (tw)
     * @package PARALLAX LOGIN.
     */

    $(document).ready(function() {
        $(document).mousemove(function(event) {
            TweenLite.to($("body"), 
            .5, {
                css: {
                    backgroundPosition: "" + parseInt(event.pageX / 8) + "px " + parseInt(event.pageY / '12') + "px, " + parseInt(event.pageX / '15') + "px " + parseInt(event.pageY / '15') + "px, " + parseInt(event.pageX / '30') + "px " + parseInt(event.pageY / '30') + "px",
                    "background-position": parseInt(event.pageX / 8) + "px " + parseInt(event.pageY / 12) + "px, " + parseInt(event.pageX / 15) + "px " + parseInt(event.pageY / 15) + "px, " + parseInt(event.pageX / 30) + "px " + parseInt(event.pageY / 30) + "px"
                }
            })
        })
    })
    </script>

</body>

</html>
