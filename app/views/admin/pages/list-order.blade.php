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
        <h2><span class="glyphicon glyphicon-th-list"></span> Product list</h2>
        <br>
        <div class="row">
            <div class="col-md-5">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="{{ url('add-product') }}" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New data</a>
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
                        <th>Image</th>
                        <th>Product name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>/index.html</td>
                        <td>1265</td>
                        <td>1265</td>
                        <td>1265</td>
                        <td>1265</td>
                        <td>1265</td>
                        <td><a href="{{ url('detail-order') }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-eye-open"></span> View</a> | <a href="{{ url('edit-order') }}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Edit</a> | <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <nav class="pull-right">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    @stop
</div>
<!-- /.row -->