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
        <h2><span class="glyphicon glyphicon-th-list"></span> Category list</h2>
        <br>
        <div class="row">
            <div class="col-md-5">
                <div class="btn-group" role="group" aria-label="...">
                    <a href="{{ url('add-category') }}" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> New data</a>
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
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>/index.html</td>
                        <td>1265</td>
                        <td><a href="{{ url('edit-user') }}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span> Edit</a> | <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>/about.html</td>
                        <td>261</td>
                        <td>$234.12</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>/sales.html</td>
                        <td>665</td>
                        <td>$16.34</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>/blog.html</td>
                        <td>9516</td>
                        <td>$1644.43</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>/404.html</td>
                        <td>23</td>
                        <td>$23.52</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>/services.html</td>
                        <td>421</td>
                        <td>$724.32</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>/blog/post.html</td>
                        <td>1233</td>
                        <td>$126.34</td>
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