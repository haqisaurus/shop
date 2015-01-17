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
        @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
        {{ Session::get('result')}}
        
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add category</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ url('add-category') }}" method="POST">
                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        <label for="name" class="col-sm-2 control-label">Category name</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id"  name="id" value="{{ Input::old('id') }}">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ Input::old('name') }}">
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('desctiption')) has-error @endif">
                        <label for="description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" placeholder="Description">{{ Input::old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group @if ($errors->has('parent')) has-error @endif">
                        <label for="parent" class="col-sm-2 control-label">Parent category</label>
                        <div class="col-sm-10">
                            <select id="parent" name="parent" class="form-control" value="{{ Input::old('parent') }}">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @stop
</div>
<!-- /.row -->