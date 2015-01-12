@extends('frontend.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1>
            <div class="account-wall">
                {{ HTML::image('https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120', 'a picture', array('class' => 'profile-img')) }}
                
                {{ Form::open(array('action' => 'UserController@doLogin', 'class' => 'form-signin')) }}

                    {{ Form::text('email', '',array('class' => 'form-control', 'placeholder' => 'Email', 'autofocus' => 'autofocus', 'required' => 'required' )) }}

                    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required' )) }}

                    {{  Form::submit('Sign in', array('class' => 'btn btn-lg btn-primary btn-block', )) }}

                    <label class="checkbox pull-left">
                        {{ Form::checkbox('remember-me', 'remember-me') }}
                        Remember me
                    </label>

                    {{ HTML::link('#', 'Need help?', array('id' => 'linkid', 'class' => 'pull-right need-help')) }}
                    <span class="clearfix"></span>
                {{ Form::close() }}
            </div>
            {{ HTML::link('#', 'Create an account', array('id' => '', 'class' => 'text-center new-account')) }}
        </div>
    </div>
</div>

@stop