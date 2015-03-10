@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
                Dashboard
            </div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="active">Dashboard</li>
        </ol>
        <div class="clearfix">
        </div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
    @stop

    @section('content')
    <div class="col-lg-12">
        <br>
        
        @if (Session::has('result'))
        <div class="alert {{ Session::get('result')['status'] }}">
            {{ Session::get('result')['message'] }}
        </div>
        @endif
        <div class="panel panel-grey">
            <div class="panel-heading">
                <h2><span class="glyphicon glyphicon-th-list"></span> Products list</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{ URL::to('supplier/create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> New data</a>
                            <a href="{{ URL::to('supplier') }}" class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
                            <button id="delete-selected-row" class="btn btn-danger" data-toggle="modal" data-target="#delete-selected-popup"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                        </div> 
                    </div>
                    <div class="col-md-3 col-md-offset-4">
                        {{ Form::open(array('url' => 'supplier/search', 'class' => '', 'method' => 'get')) }}
                            <div class="input-group">
                                <input type="text" name="query" class="form-control" aria-label="..." placeholder="Search name">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
                                </div>
                            </div><!-- /input-group -->
                        {{ Form::close() }}
                    </div>
                </div>
                <br>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <th><input type="checkbox" id="checkall" /></th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @if ($listData['suppliers']->count())
                            @foreach ($listData['suppliers'] as $supplier)
                            <tr id="row-{{ $supplier->id }}">
                                <td><input type="checkbox" name="selected-rows[]" class="checkthis" value="{{ $supplier->id }}"></td>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->description }}</td>
                                <td>{{ $supplier->address }}</td>
                                <td>
                                    {{ Form::open(array('url' => 'supplier/'. $supplier->id . '/edit', 'class' => 'inline')) }}
                                    {{ Form::hidden('_method', 'GET') }}
                                    {{ Form::button('<span class="glyphicon glyphicon-pencil"></span> Edit', array('type' => 'submit', 'class' => 'btn btn-warning btn-xs')) }}
                                    {{ Form::close() }}
                                    <span class="inline"> | </span>
                                    {{ Form::open(array('url' => 'supplier/' . $supplier->id, 'class' => 'inline delete-row',)) }} 
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Delete', array('type' => 'button', 'class' => 'btn btn-danger btn-xs', 'data-title' => 'Delete', 'data-toggle' => 'modal', 'data-target' => '#delete-popup')) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                    <ul class="pagination pull-right">
                        @if(isset($listData['query']))
                        {{ $listData['suppliers']->appends(array('query' => $listData['query']))->links() }}
                        @else
                        {{ $listData['suppliers']->links() }}
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
</div>
<!-- /.row -->