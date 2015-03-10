@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <div class="col-lg-12">
        <h1 class="page-header">
            Supplier
            <small>Edit user</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('dashboard') }}">Dashboard</a>
            </li>
            <li>
                <i class="fa fa-code-fork"></i> <a href="{{ URL::to('user') }}"> Suppliers</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Form edit user
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
                <h3 class="panel-title">Edit user</h3>
            </div>
            <div class="panel-body">
                {{ Form::model($editData['user'], array('route' => array('user.update', $editData['user']->id), 'method' => 'PUT', 'files'=>true, 'class' => 'form-horizontal')) }}
                    <div class="form-group @if ($errors->has('firstname')) has-error @endif">
                        <label for="first-name" class="col-sm-2 control-label">First name</label>
                        <div class="col-sm-6">
                            {{ Form::text('firstname', null, array('id' => 'firstname', 'class' => 'form-control', 'placeholder' => 'First name')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('lastname')) has-error @endif">
                        <label for="lastname" class="col-sm-2 control-label">Last name</label>
                        <div class="col-sm-6">
                            {{ Form::text('lastname', null, array('id' => 'lastname', 'class' => 'form-control', 'placeholder' => 'Last name')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('email')) has-error @endif">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-5">
                            {{ Form::text('email', null, array('id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-5">
                            {{ Form::password('password', null, array('id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Photo</label>
                        <div class="col-sm-4">
                            @if(isset($user->photo))
                                {{ HTML::image($user->photo, "Photo", array('class' => "img-responsive img-rounded")) }}
                            @else
                                {{ HTML::image("https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100", "Photo", array('class' => "img-responsive img-rounded")) }}
                            @endif
                            <br>
                            {{ Form::file('photo', null, array('id' => 'photo', 'class' => 'form-control', 'placeholder' => 'Logo')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('role_id')) has-error @endif">
                        <label for="role_id" class="col-sm-2 control-label">Role</label>
                        <div class="col-sm-3">
                            {{ Form::select('role_id', $editData['options'], null, array('id' => 'role_id', 'class' => 'form-control')) }}
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