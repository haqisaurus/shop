@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <div class="col-lg-12">
        <h1 class="page-header">
            Users
            <small>user list</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('dashboard') }}">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-code-fork"></i> Users
            </li>
        </ol>
    </div>
    @stop

    @section('content')
    <div class="col-lg-12">
        <h2><span class="glyphicon glyphicon-th-list"></span> Supplier list</h2>
        <br>
        
        @if (Session::has('result'))
        <div class="alert {{ Session::get('result')['status'] }}">
            {{ Session::get('result')['message'] }}
        </div>
        @endif

        <div class="row">
            <div class="col-md-5">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="{{ URL::to('user/create') }}" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New data</a>
                    <a href="{{ URL::to('user') }}" class="btn btn-info"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
                    <button id="delete-selected-row" class="btn btn-danger" data-toggle="modal" data-target="#delete-selected-popup"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                </div> 
            </div>
            <div class="col-md-3 col-md-offset-4">
                {{ Form::open(array('url' => 'user/search', 'class' => '', 'method' => 'get')) }}
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
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @if ($listData['users']->count())
                    @foreach ($listData['users'] as $user)
                    <tr id="row-{{ $user->id }}">
                        <td><input type="checkbox" name="selected-rows[]" class="checkthis" value="{{ $user->id }}"></td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->level }}</td>
                        <td>
                            {{ Form::open(array('url' => 'user/'. $user->id , 'class' => 'inline')) }}
                            {{ Form::hidden('_method', 'GET') }}
                            {{ Form::button('<span class="glyphicon glyphicon-eye-open"></span> View', array('type' => 'submit', 'class' => 'btn btn-info btn-xs')) }}
                            {{ Form::close() }}
                            <span class="inline"> | </span>
                            {{ Form::open(array('url' => 'user/'. $user->id . '/edit', 'class' => 'inline')) }}
                            {{ Form::hidden('_method', 'GET') }}
                            {{ Form::button('<span class="glyphicon glyphicon-pencil"></span> Edit', array('type' => 'submit', 'class' => 'btn btn-warning btn-xs')) }}
                            {{ Form::close() }}
                            <span class="inline"> | </span>
                            {{ Form::open(array('url' => 'user/' . $user->id, 'class' => 'inline delete-row',)) }} 
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
                {{ $listData['users']->appends(array('query' => $listData['query']))->links() }}
                @else
                {{ $listData['users']->links() }}
                @endif
            </ul>
        </div>
    </div>
</div>
@stop
</div>
<!-- /.row -->