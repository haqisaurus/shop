@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
                Dashboard
            </div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
            <li class="active">Dashboard</li>
        </ol>
        <div class="clearfix">
        </div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->


    @stop

    @section('content')
    <div class="col-lg-12">
        
        <br>
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

        <div class="panel panel-grey">
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