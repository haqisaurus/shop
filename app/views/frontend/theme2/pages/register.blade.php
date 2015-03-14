@extends('admin.layouts.master')

@section('header')
@include('frontend.theme2.includes.inc-side')
@stop


@section('content')
<div class="register">
	{{ Form::open(array('url' => 'register', 'class' => '')) }}
	<div class="  register-top-grid">
		<h3>PERSONAL INFORMATION</h3>
		<div class="mation">
			<span>First Name<label>*</label></span>
            {{ Form::text('firstname', Input::old('firstname'), array('id' => 'firstname', 'class' => '', 'placeholder' => 'Frist name')) }}
			@if ($errors->has() && $errors->has('firstname'))
				<p class="help-block error-block">{{ $errors->first('firstname') }}</p>
			@endif

			<span>Last Name<label>*</label></span>
            {{ Form::text('lastname', Input::old('lastname'), array('id' => 'lastname', 'class' => '', 'placeholder' => 'Last name')) }}
			@if ($errors->has() && $errors->has('lastname'))
				<p class="help-block error-block">{{ $errors->first('lastname') }}</p>
			@endif

			<span>Email Address<label>*</label></span>
            {{ Form::text('email', Input::old('email'), array('id' => 'email', 'class' => '', 'placeholder' => 'Email')) }}
            @if ($errors->has() && $errors->has('email'))
				<p class="help-block error-block">{{ $errors->first('email') }}</p>
			@endif

		</div>
		<div class="clearfix"> </div>
		<a class="news-letter" href="#">
			<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
		</a>
	</div>
	<div class="  register-bottom-grid">
		<h3>LOGIN INFORMATION</h3>
		<div class="mation">
			<span>Password<label>*</label></span>
            {{ Form::password('password', '', array('id' => 'password', 'class' => '', 'placeholder' => 'Password')) }}
			@if ($errors->has() && $errors->has('password'))
				<p class="help-block error-block">{{ $errors->first('password') }}</p>
			@endif

			<span>Confirm Password<label>*</label></span>
            {{ Form::password('password_confirmation', '', array('id' => 'password_confirmation', 'class' => '', 'placeholder' => 'Password confirm' )) }}
            @if ($errors->has() && $errors->has('password_confirmation'))
				<p class="help-block error-block">{{ $errors->first('password_confirmation') }}</p>
			@endif
		</div>
	</div>
	<div class="clearfix"> </div>
	<div class="register-but">
		<input type="submit" value="submit">
		<div class="clearfix"> </div>
	</div>
	{{ Form::close() }}
</div>
@stop