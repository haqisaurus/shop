@extends('admin.layouts.master')

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
                    <li role="presentation" class="active"><a href="#main" aria-controls="main" role="tab" data-toggle="tab">Main data</a></li>
                    <li role="presentation" class="disabled"><a href="#images" aria-controls="" role="tab" data-toggle="">Images</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="main">
                        <br>
                        {{ Form::open(array('url' => 'product', 'class' => 'form-horizontal', 'files' => true)) }}
                        <div class="form-group @if ($errors->has('name')) has-error @endif">
                            <label for="name" class="col-sm-2 control-label">Product name</label>
                            <div class="col-sm-10">
                                {{ Form::text('name', Input::old('name'), array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Name')) }}
                            </div>
                        </div>

                        <div class="form-group @if ($errors->has('image')) has-error @endif">
                            <label for="image" class="col-sm-2 control-label">Product image</label>
                            <div class="col-sm-10">
                                {{ Form::file('image', array('id' => 'image', 'class' => '')) }}
                            </div>
                        </div>

                        <div class="form-group @if ($errors->has('status')) has-error @endif">
                            <label for="status" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-4">
                                {{ Form::select('status', $depend['status'], Input::old('status'), array('id' => 'status', 'class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="form-group @if ($errors->has('description')) has-error @endif">
                            <label for="description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                {{ Form::textarea('description', Input::old('description'), array('id' => 'description', 'class' => 'form-control', 'placeholder' => 'Description')) }}
                            </div>
                        </div>

                        <div class="form-group @if ($errors->has('category')) has-error @endif">
                            <label for="category" class="col-sm-2 control-label">Category</label>
                            <div class="col-sm-4">
                                {{ Form::select('category', $depend['categories'], Input::old('category'), array('id' => 'category', 'class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="form-group @if ($errors->has('price')) has-error @endif">
                            <label for="price" class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-3">
                                {{ Form::text('price', Input::old('price'), array('id' => 'price', 'class' => 'form-control', 'placeholder' => 'Price')) }}
                            </div>
                        </div>

                        <div class="form-group @if ($errors->has('price')) has-error @endif">
                            <label for="promo" class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-3">
                                {{ Form::text('promo', Input::old('promo'), array('id' => 'promo', 'class' => 'form-control', 'placeholder' => 'Price promo')) }}
                            </div>
                        </div>

                        <div class="form-group @if ($errors->has('quantity')) has-error @endif">
                            <label for="quantity" class="col-sm-2 control-label">Quantity</label>
                            <div class="col-sm-3">
                                {{ Form::text('quantity', Input::old('quantity'), array('id' => 'quantity', 'class' => 'form-control', 'placeholder' => 'Quantity')) }}
                            </div>
                        </div>


                        <div class="form-group @if ($errors->has('supplier')) has-error @endif">
                            <label for="supplier" class="col-sm-2 control-label">Supplier</label>
                            <div class="col-sm-4">
                                {{ Form::select('supplier', $depend['suppliers'], Input::old('supplier'), array('id' => 'supplier', 'class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="form-group @if ($errors->has('discount')) has-error @endif">
                            <label for="discount" class="col-sm-2 control-label">Discount</label>
                            <div class="col-sm-2">
                                {{ Form::text('discount', Input::old('discount'), array('id' => 'discount', 'class' => 'form-control', 'placeholder' => 'Discount')) }}
                            </div>
                        </div>

                        <div class="form-group @if ($errors->has('featured')) has-error @endif">
                            <label for="featured" class="col-sm-2 control-label">featured</label>
                            <div class="col-sm-3">
                                {{ Form::checkbox('featured', true) }}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primay">Save and next</button>
                            </div>
                        </div>

                        {{ Form::close() }}
                    </div>

                    <div role="tabpanel" class="tab-pane" id="images">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop