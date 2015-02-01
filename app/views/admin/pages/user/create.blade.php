@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <div class="col-lg-12">
        <h1 class="page-header">
            User
            <small>Add user</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('dashboard') }}"> Dashboard</a>
            </li>
            <li>
                <i class="fa fa-code-fork"></i> <a href="{{ URL::to('user') }}"> Users</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Form add user
            </li>
        </ol>
    </div>

    @stop

    @section('content')
    <div class="col-lg-12">
        
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('user') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
            </div>
        </div>
        <br>

        @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add user</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('url' => 'user', 'class' => 'form-horizontal', 'files'=>true)) }}
                    <div class="form-group @if ($errors->has('firstname')) has-error @endif">
                        <label for="first-name" class="col-sm-2 control-label">First name</label>
                        <div class="col-sm-6">
                            {{ Form::text('firstname', Input::old('firstname'), array('id' => 'firstname', 'class' => 'form-control', 'placeholder' => 'First name')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('lastname')) has-error @endif">
                        <label for="lastname" class="col-sm-2 control-label">Last name</label>
                        <div class="col-sm-6">
                            {{ Form::text('lastname', Input::old('lastname'), array('id' => 'lastname', 'class' => 'form-control', 'placeholder' => 'Last name')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('email')) has-error @endif">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-5">
                            {{ Form::text('email', Input::old('email'), array('id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-5">
                            {{ Form::password('password', Input::old('password'), array('id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Photo</label>
                        <div class="col-sm-4">
                            <img src="http://placehold.it/100x100" class="img-responsive img-rounded" alt="Responsive image">
                            <br>
                            {{ Form::file('photo', Input::old('photo'), array('id' => 'photo', 'class' => 'form-control', 'placeholder' => 'Logo')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('role_id')) has-error @endif">
                        <label for="role_id" class="col-sm-2 control-label">Role</label>
                        <div class="col-sm-3">
                            {{ Form::select('role_id', $options, Input::old('role_id'), array('id' => 'role_id', 'class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                             {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    @stop
</div>
<!-- /.row -->