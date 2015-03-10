@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <div class="col-lg-12">
        <h1 class="page-header">
            Blank Page
            <small>Subheading</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Blank Page
            </li>
        </ol>
    </div>

    @stop

    @section('content')
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">User information</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 text-center">
                        @if(isset($user->photo))
                            {{ HTML::image($user->photo, "Photo", array('class' => "img-responsive img-rounded")) }}
                        @else
                            {{ HTML::image("https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100", "Photo", array('class' => "img-responsive img-rounded")) }}
                        @endif
                    </div>
                    <div class=" col-md-9 col-lg-9">
                        <strong>{{ ucfirst($user->firstname) }}</strong><br>
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <td class="col-md-3">User level:</td>
                                    <td>{{ $user->role->level }}</td>
                                </tr>
                                <tr>
                                    <td class="col-md-3">Registered since:</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                                <tr>
                                    <td class="col-md-3">First name</td>
                                    <td>{{ $user->firstname }}</td>
                                </tr>
                                <tr>
                                    <td class="col-md-3">Last name</td>
                                    <td>{{ $user->lastname }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                {{ Form::open(array('url' => 'user/' . $user->id, 'id' => 'delete-view', 'data-id' => $user->id, 'class' => 'inline delete-row',)) }} 
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::button('<span class="glyphicon glyphicon-trash"></span>', array('type' => 'button', 'class' => 'btn btn-danger btn-sm', 'data-title' => 'Delete', 'data-toggle' => 'modal', 'data-target' => '#delete-popup')) }}
                {{ Form::close() }}

                <span class="pull-right">
                    <a class="btn btn-sm btn-primary" href="{{ url('user') }}"
                    data-toggle="tooltip"
                    data-original-title="Send message to user"><i class="glyphicon glyphicon-envelope"></i></a>
                    <a class="btn btn-sm btn-danger" href="{{ url('user') }}"
                    data-original-title="Cancel" 
                    ><i class="glyphicon glyphicon-remove"></i></a>
                </span>
            </div>
        </div>
    </div>
    @stop
</div>
<!-- /.row -->