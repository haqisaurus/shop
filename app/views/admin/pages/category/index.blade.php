@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')
    <div class="col-lg-12">
        <h1 class="page-header">
            Categories
            <small>category list</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Categories
            </li>
        </ol>
    </div>
    @stop

    @section('content')
    <div class="col-lg-12">
        <h2><span class="glyphicon glyphicon-th-list"></span> Category list</h2>
        <br>
        <div class="row">
            <div class="col-md-5">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="{{ URL::to('categories/create') }}" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New data</a>
                    <a href="#" class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
                    <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div> 
            </div>
            <div class="col-md-3 col-md-offset-4">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="..." placeholder="Search name">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
                        </div>
                    </div><!-- /input-group -->
                </form>
            </div>
        </div>
        <br>
        <div class="table-responsive">

            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th><input type="checkbox"></th>
                        <th>Category name</th>
                        <th>Parent</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($listData['categories']->count())
                    @foreach ($listData['categories'] as $category)
                    <tr>
                        <td><input type="checkbox" value="{{ $category->id }}"></td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->level }}</td>
                        <td>
                            {{ Form::open(array('url' => 'categories/'. $category->id . '/edit', 'class' => 'inline')) }}
                            {{ Form::hidden('_method', 'GET') }}
                            {{ Form::button('<span class="glyphicon glyphicon-pencil"></span> Edit', array('type' => 'submit', 'class' => 'btn btn-warning btn-xs')) }}
                            {{ Form::close() }}
                            <span class="inline"> | </span>
                            {{ Form::open(array('url' => 'categories/' . $category->id, 'class' => 'inline')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Delete', array('type' => 'submit', 'class' => 'btn btn-danger btn-xs')) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <nav class="pull-right">
            {{ $listData['categories']->links(); }}
        </nav>
    </div>
    @stop
</div>
<!-- /.row -->