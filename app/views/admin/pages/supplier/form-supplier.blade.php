@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <div class="col-lg-12">
        <h1 class="page-header">
            Supplier
            <small>Form supplier</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li>
                <i class="fa fa-file"></i> Supplier
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Form Supplier
            </li>
        </ol>
    </div>

    @stop

    @section('content')
    <div class="col-lg-12">
        <div class="alert alert-danger">
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add supplier</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Supplier ame</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id" placeholder="Name">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" placeholder="Description"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Logo</label>
                        <div class="col-sm-4">
                            <img src="http://placehold.it/100x100" class="img-responsive img-rounded" alt="Responsive image">
                            <br>
                            <input type="file" class="form-control" id="inputPassword3" placeholder="logo">
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