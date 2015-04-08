@extends('admin.layouts.master')

@section('header')
@include('frontend.theme2.includes.inc-side')
@stop


@section('content')
<div class="account_grid">
	<div class=" login-right">
		<h3>SEND ME AN EMAIL</h3>
		<p>Kita akan mengirimkan password anda ke alamat email yang anda masukan. segera ganti password demi kemanan akun anda.</p>
		{{ Form::open(array('url' => 'register', 'class' => '')) }}
		<form>
			<div>
				<span>Email Address<label>*</label></span>
	            {{ Form::text('email', Input::old('email'), array('id' => 'email', 'class' => '', 'placeholder' => 'Email')) }}
	            @if ($errors->has() && $errors->has('email'))
					<p class="help-block error-block">{{ $errors->first('email') }}</p>
				@endif
			</div>
			
			<input type="submit" value="Kirim">
		{{ Form::close() }}
		
	</div>	
	<div class="clearfix"> </div>
</div>
@stop