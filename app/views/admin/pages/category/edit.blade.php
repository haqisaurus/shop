@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <div class="col-lg-12">
        <h1 class="page-header">
            Category
            <small>Add category</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li>
                <i class="fa fa-file"></i> Category
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Form category
            </li>
        </ol>
    </div>

    @stop

    @section('content')
    <div class="col-lg-12">
        
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('categories') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
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

        @if (Session::has('result'))
        <div class="alert {{ Session::get('result')['status'] }}">
            {{ Session::get('result')['message'] }}
        </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add category</h3>
            </div>
            <div class="panel-body">
                {{ Form::model($editData['category'], array('route' => array('categories.update', $editData['category']->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        <label for="name" class="col-sm-2 control-label">Category name</label>
                        <div class="col-sm-10">
                            {{ Form::text('name', null, array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Name')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('desctiption')) has-error @endif">
                        <label for="description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            {{ Form::text('description', null, array('id' => 'description', 'class' => 'form-control', 'placeholder' => 'Description')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('parent')) has-error @endif">
                        <label for="parent_id" class="col-sm-2 control-label">Parent category</label>
                        <div class="col-sm-10">
                            {{ Form::select('parent_id', $editData['options'], null, array('id' => 'parent_id', 'class' => 'form-control')) }}
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