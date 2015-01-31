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
                <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('dashboard') }}"> Dashboard</a>
            </li>
            <li>
                <i class="fa fa-code-fork"></i> <a href="{{ URL::to('category') }}"> category</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Form add category
            </li>
        </ol>
    </div>

    @stop

    @section('content')
    <div class="col-lg-12">
        
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('category') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
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
                <h3 class="panel-title">Add category</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('url' => 'category', 'class' => 'form-horizontal')) }}
                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        <label for="name" class="col-sm-2 control-label">Category name</label>
                        <div class="col-sm-10">
                            {{ Form::text('name', Input::old('name'), array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Name')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('desctiption')) has-error @endif">
                        <label for="description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            {{ Form::textarea('description', Input::old('description'), array('id' => 'description', 'class' => 'form-control', 'placeholder' => 'Description')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('parent_id')) has-error @endif">
                        <label for="parent_id" class="col-sm-2 control-label">Parent category</label>
                        <div class="col-sm-10">
                            {{ Form::select('parent_id', $options, Input::old('parent_id'), array('id' => 'parent_id', 'class' => 'form-control')) }}
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