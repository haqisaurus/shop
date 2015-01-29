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
            <p>This is my body content.</p>
        </div>
    @stop
</div>
<!-- /.row -->