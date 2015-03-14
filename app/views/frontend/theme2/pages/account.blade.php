@extends('admin.layouts.master')

@section('header')

@stop


@section('content')
<div class="container" style="padding-top: 30px;">
	<h1 class="page-header">Edit Profile</h1>
	<div class="row">
		<!-- left column -->
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="text-center">
				
				{{ HTML::image(asset($data['user']->id), "Avatar", array('class' => "avatar img-circle img-thumbnail")) }}
				<h6>Upload a different photo...</h6>
				<input type="file" class="text-center center-block well well-sm">
			</div>

		</div>
		<!-- edit form column -->
		<div class="col-md-8 col-sm-6 col-xs-12 personal-info">
			<h3>Personal info</h3>
            {{ Form::model($data['user'], array('route' => array('updateAccount',$data['user']->id), 'method' => 'POST', 'class' => 'form-horizontal')) }}
				<div class="form-group">
					<label class="col-lg-3 control-label">First name:</label>
					<div class="col-lg-8">
                        {{ Form::text('firstname', null, array('id' => 'firstname', 'class' => 'form-control', 'placeholder' => 'First name')) }}
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Last name:</label>
					<div class="col-lg-8">
                        {{ Form::text('lastname', null, array('id' => 'lastname', 'class' => 'form-control', 'placeholder' => 'Last name')) }}
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Email:</label>
					<div class="col-lg-8">
                        {{ Form::text('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email')) }}
					</div>
				</div>
				<hr>
				<div class="form-group">
					<label class="col-md-3 control-label">Password:</label>
					<div class="col-md-8">
                        {{ Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password')) }}
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label">Confirm password:</label>
					<div class="col-md-8">
                        {{ Form::password('password_confirmation', array('id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => 'Confirm password')) }}
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"></label>
					<div class="col-md-8">
						<input class="btn btn-primary" value="Save Changes" type="submit">
						<span></span>
						<input class="btn btn-default" value="Cancel" type="reset">
					</div>
				</div>
            {{ Form::close() }}
		</div>
	</div>
</div>
@stop