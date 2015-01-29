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
        <div class="alert alert-danger">
            <strong>Oh snap!</strong> Change a few things up and try submitting again.
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('orders') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
            </div>
        </div>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Add product</h3>
            </div>
            <div class="panel-body">
                <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#main" aria-controls="main" role="tab" data-toggle="tab">Main data</a></li>
                        <li role="presentation"><a href="#images" aria-controls="images" role="tab" data-toggle="tab">Images</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="main">
                            <br>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Product ame</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control" id="id" placeholder="Name">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        <select id="status" name="status" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="description" placeholder="Description"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="parent" class="col-sm-2 control-label">Category</label>
                                    <div class="col-sm-10">
                                        <select id="parent" name="category" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
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
                                    <label for="price" class="col-sm-2 control-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="price" placeholder="Price">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="quantity" class="col-sm-2 control-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="quantity" placeholder="Quantity">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="manufacture" class="col-sm-2 control-label">Manufacture</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="manufacture" placeholder="Manufacture">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="discount" class="col-sm-2 control-label">Discount</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="discount" placeholder="Discount">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="images">...</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @stop
</div>
<!-- /.row -->