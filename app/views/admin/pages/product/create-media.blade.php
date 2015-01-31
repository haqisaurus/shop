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
                        <li role="presentation" class="disabled"><a href="#main" aria-controls="" role="tab" data-toggle="">Main data</a></li>
                        <li role="presentation" class="active"><a href="#images" aria-controls="images" role="tab" data-toggle="">Images</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane " id="main">
                            
                        </div>

                        <div role="tabpanel" class="tab-pane active" id="images">
                            <br>
                                {{ Form::hidden('product_id', $productId, array('id' => 'product_id')) }}
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="fileupload" class="btn btn-success">
                                        <span class="glyphicon glyphicon-upload"></span>
                                        Add images
                                        <input id="fileupload" type="file" class="hidden" name="product-media" multiple accept="image/*">
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="media-progress" class="table table-condensed">
                                        <tr>
                                            <th>No</th>
                                            <th>Preview</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <a href="{{ URL::to('product') }}" class="btn btn-primary pull-right">Finish</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
</div>
<!-- /.row -->