@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <div class="col-lg-12">
        <h1 class="page-header">
            Products
            <small>product list</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('dashboard') }}">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-code-fork"></i> Products
            </li>
        </ol>
    </div>
    @stop

    @section('content')
    <div class="col-lg-12">
        <h2><span class="glyphicon glyphicon-th-list"></span> Products list</h2>
        <br>
        
        @if (Session::has('result'))
        <div class="alert {{ Session::get('result')['status'] }}">
            {{ Session::get('result')['message'] }}
        </div>
        @endif

        <div class="row">
            <div class="col-md-5">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="{{ URL::to('product/create') }}" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New data</a>
                    <a href="{{ URL::to('product') }}" class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
                    <button id="delete-selected-row" class="btn btn-danger" data-toggle="modal" data-target="#delete-selected-popup"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                </div> 
            </div>
            <div class="col-md-3 col-md-offset-4">
                {{ Form::open(array('url' => 'product/search', 'class' => '', 'method' => 'get')) }}
                    <div class="input-group">
                        <input type="text" name="query" class="form-control" aria-label="..." placeholder="Search name">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
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
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Supplier</th>
                    <th>Discount</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @if ($listData['products']->count())
                    @foreach ($listData['products'] as $product)
                    <tr id="row-{{ $product->id }}">
                        <td><input type="checkbox" name="selected-rows[]" class="checkthis" value="{{ $product->id }}"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->status }}</td>
                        <td>{{ $product->supplier->name }}</td>
                        <td>{{ $product->discount }}</td>
                        <td>
                            {{ Form::open(array('url' => 'product/'. $product->id . '/edit', 'class' => 'inline')) }}
                            {{ Form::hidden('_method', 'GET') }}
                            {{ Form::button('<span class="glyphicon glyphicon-pencil"></span> Edit', array('type' => 'submit', 'class' => 'btn btn-warning btn-xs')) }}
                            {{ Form::close() }}
                            <span class="inline"> | </span>
                            {{ Form::open(array('url' => 'product/' . $product->id, 'class' => 'inline delete-row',)) }} 
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
                {{ $listData['products']->appends(array('query' => $listData['query']))->links() }}
                @else
                {{ $listData['products']->links() }}
                @endif
            </ul>
        </div>
    </div>
</div>
@stop
</div>
<!-- /.row -->