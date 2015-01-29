@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <div class="col-lg-12">
        <h1 class="page-header">
            Product
            <small>Add product</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{{ URL::to('dashboard') }}"> Dashboard</a>
            </li>
            <li>
                <i class="fa fa-code-fork"></i> <a href="{{ URL::to('product') }}"> product</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Form add product
            </li>
        </ol>
    </div>

    @stop

    @section('content')
    <div class="col-lg-12">

        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('product') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
            </div>
        </div>
        <br>

        @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }}<br>        
            @endforeach
        </div>
        @endif

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
                            {{ Form::open(array('url' => 'product', 'class' => 'form-horizontal')) }}
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Product ame</label>
                                <div class="col-sm-10">
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
                                <label for="parent" class="col-sm-2 control-label">Product</label>
                                <div class="col-sm-10">
                                    <select id="parent" name="product" class="form-control">
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
                            {{ Form::close() }}
                        </div>
                        <div role="tabpanel" class="tab-pane" id="images">
                            <form id="fileupload" action="upload" method="POST" enctype="multipart/form-data" class="">
                                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                <div class="row fileupload-buttonbar">
                                    <div class="col-lg-7">
                                        <!-- The fileinput-button span is used to style the file input field as button -->
                                        <span class="btn btn-success fileinput-button">
                                            <i class="glyphicon glyphicon-plus"></i>
                                            <span>Add files...</span>
                                            <input type="file" name="files[]" multiple="">
                                        </span>
                                        <button type="submit" class="btn btn-primary start">
                                            <i class="glyphicon glyphicon-upload"></i>
                                            <span>Start upload</span>
                                        </button>
                                        <button type="reset" class="btn btn-warning cancel">
                                            <i class="glyphicon glyphicon-ban-circle"></i>
                                            <span>Cancel upload</span>
                                        </button>
                                        <button type="button" class="btn btn-danger delete">
                                            <i class="glyphicon glyphicon-trash"></i>
                                            <span>Delete</span>
                                        </button>
                                        <input type="checkbox" class="toggle">
                                        <!-- The global file processing state -->
                                        <span class="fileupload-process"></span>
                                    </div>
                                    <!-- The global progress state -->
                                    <div class="col-lg-5 fileupload-progress fade">
                                        <!-- The global progress bar -->
                                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                        </div>
                                        <!-- The extended global progress state -->
                                        <div class="progress-extended">&nbsp;</div>
                                    </div>
                                </div>
                                <!-- The table listing the files available for upload/download -->
                                <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @stop
</div>
<!-- /.row -->