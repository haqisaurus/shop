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
                    <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                        <img class="img-circle"
                        src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                        alt="User Pic">
                    </div>
                    <div class="col-xs-2 col-sm-2 hidden-md hidden-lg">
                        <img class="img-circle"
                        src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=50"
                        alt="User Pic">
                    </div>
                    <div class="col-xs-10 col-sm-10 hidden-md hidden-lg">
                        <strong>Cyruxx</strong><br>
                        <dl>
                            <dt>User level:</dt>
                            <dd>Administrator</dd>
                            <dt>Registered since:</dt>
                            <dd>11/12/2013</dd>
                            <dt>Topics</dt>
                            <dd>15</dd>
                            <dt>Warnings</dt>
                            <dd>0</dd>
                        </dl>
                    </div>
                    <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                        <strong>Cyruxx</strong><br>
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <td class="col-md-3">User level:</td>
                                    <td>Administrator</td>
                                </tr>
                                <tr>
                                    <td class="col-md-3">Registered since:</td>
                                    <td>11/12/2013</td>
                                </tr>
                                <tr>
                                    <td class="col-md-3">Topics</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td class="col-md-3">Warnings</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-sm btn-primary" type="button"
                data-toggle="tooltip"
                data-original-title="Send message to user"><i class="glyphicon glyphicon-envelope"></i></button>
                <span class="pull-right">
                    <a class="btn btn-sm btn-warning"
                    data-original-title="Edit this user"
                    data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="glyphicon glyphicon-floppy-disk"></i></a>
                    <a class="btn btn-sm btn-danger" href="{{ url('users') }}"
                    data-toggle="tooltip"
                    data-original-title="Remove this user"><i class="glyphicon glyphicon-trash"></i></a>
                    <a class="btn btn-sm btn-danger" href="{{ url('users') }}"
                    data-original-title="Cancel"><i class="glyphicon glyphicon-remove"></i></a>
                </span>
            </div>
        </div>
    </div>
    @stop
</div>
<!-- /.row -->