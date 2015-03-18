@extends('admin.layouts.master')

@section('header')
@include('frontend.theme2.includes.inc-side')
@stop


@section('content')
<div class="account_grid">
	<div class=" login-right">
		<h3>REGISTERED CUSTOMERS</h3>
		<p>If you have an account with us, please log in.</p>
		{{ Form::open(array('url' => 'login', 'class' => '')) }}
		<form>
			<div>
				<span>Email Address<label>*</label></span>
	            {{ Form::text('email', Input::old('email'), array('id' => 'email', 'class' => '', 'placeholder' => 'Email')) }}
	            @if ($errors->has() && $errors->has('email'))
					<p class="help-block error-block">{{ $errors->first('email') }}</p>
				@endif
			</div>
			<div>
				<span>Password<label>*</label></span>
				{{ Form::password('password', '', array('id' => 'password', 'class' => '', 'placeholder' => 'Password')) }}
				@if ($errors->has() && $errors->has('password'))
					<p class="help-block error-block">{{ $errors->first('password') }}</p>
				@endif
				@if(Session::has('msg'))
					<p class="help-block error-block">{{ Session::get('msg') }}</p>
				@endif
			</div>
			<a class="forgot" href="{{ URL::to('forget') }}">Forgot Your Password?</a>
			<input type="submit" value="Login">
		{{ Form::close() }}
		
	</div>	
	<div class=" login-left">
		<h3>NEW CUSTOMERS</h3>
		<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
		<a class="acount-btn" href="{{ URL::to('register') }}">Create an Account</a>
	</div>
	<div class="clearfix"> </div>
</div>
@stop