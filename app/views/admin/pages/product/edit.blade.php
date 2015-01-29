@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <div class="col-lg-12">
        <h1 class="page-header">
            Product
            <small>Edit product</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('dashboard') }}">Dashboard</a>
            </li>
            <li>
                <i class="fa fa-code-fork"></i> <a href="{{ URL::to('product') }}"> Products</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Form edit product
            </li>
        </ol>
    </div>

    @stop

    @section('content')
    <div class="col-lg-12">
        
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('product') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
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
                <h3 class="panel-title">Edit product</h3>
            </div>
            <div class="panel-body">
                {{ Form::model($editData['product'], array('route' => array('product.update', $editData['product']->id), 'method' => 'PUT', 'files'=>true, 'class' => 'form-horizontal')) }}
                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        <label for="name" class="col-sm-2 control-label">Product name</label>
                        <div class="col-sm-10">
                            {{ Form::text('name', null, array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Name')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('desctiption')) has-error @endif">
                        <label for="description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            {{ Form::textarea('description', null, array('id' => 'description', 'class' => 'form-control', 'placeholder' => 'Description')) }}
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('parent')) has-error @endif">
                        <label for="address" class="col-sm-2 control-label">Adress</label>
                        <div class="col-sm-10">
                            {{ Form::textarea('address', null, array('id' => 'address', 'class' => 'form-control', 'placeholder' => 'Address')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Logo</label>
                        <div class="col-sm-4">
                            {{ HTML::image($editData['product']->path, "Logo", array('class' => "img-responsive img-rounded")) }}
                            <br>
                            {{ Form::file('logo', null, array('id' => 'logo', 'class' => 'form-control', 'placeholder' => 'Logo')) }}
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