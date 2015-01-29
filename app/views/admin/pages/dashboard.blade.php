@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')
        
        <div class="col-lg-12">
            <h1 class="page-header">
                Dashboard
                <small>this month</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Month report
                </li>
            </ol>
        </div>

    @stop

    @section('content')
        <div class="col-lg-12">
            <!-- Flot Charts -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Flot Charts</h2>
                    <p class="lead">.</p>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Line Graph Example with Tooltips</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-chart"></div>
                            <div class="text-right">
                                <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                            <div class="text-right">
                                <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @stop
</div>
<!-- /.row -->
