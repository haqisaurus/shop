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
            <a href="{{ url('supplier') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
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
            <h3 class="panel-title">Add supplier</h3>
        </div>
        <div class="panel-body">
            {{ Form::open(array('url' => 'supplier', 'class' => 'form-horizontal', 'files'=>true)) }}
            <div class="form-group @if ($errors->has('name')) has-error @endif">
                <label for="name" class="col-sm-2 control-label">Supplier name</label>
                <div class="col-sm-5">
                    {{ Form::text('name', Input::old('name'), array('id' => 'name', 'class' => 'form-control', 'placeholder' => 'Name')) }}
                </div>
            </div>

            <div class="form-group @if ($errors->has('description')) has-error @endif">
                <label for="description" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    {{ Form::textarea('description', Input::old('description'), array('id' => 'description', 'class' => 'form-control', 'placeholder' => 'Description')) }}
                </div>
            </div>

            <div class="form-group @if ($errors->has('address')) has-error @endif">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                    {{ Form::textarea('address', Input::old('address'), array('id' => 'address', 'class' => 'form-control', 'placeholder' => 'Address')) }}
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Logo</label>
                <div class="col-sm-4">
                    <img src="http://placehold.it/100x100" class="img-responsive img-rounded" alt="Responsive image">
                    <br>
                    {{ Form::file('logo', Input::old('logo'), array('id' => 'logo', 'class' => 'form-control', 'placeholder' => 'Logo')) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                   {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
               </div>
           </div>
           {{ Form::close() }}
       </div>
   </div>
</div>
@stop
