@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <div class="col-lg-12">
        <h1 class="page-header">
            Order detail
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li>
                <i class="fa fa-file"></i> Order
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Order detail
            </li>
        </ol>
    </div>

    @stop

    @section('content')
    <div class="col-lg-12">

        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('orders') }}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>
            </div>
        </div>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Order detail</h3>
            </div>
            <div class="panel-body">
                <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#main" aria-controls="main" role="tab" data-toggle="tab">Main data</a></li>
                        <li role="presentation"><a href="#products" aria-controls="products" role="tab" data-toggle="tab">Ordered products</a></li>
                        <li role="presentation"><a href="#confirmation" aria-controls="confirmation" role="tab" data-toggle="tab">Payment confirmation</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="main">
                            <br>
                            <div class="tab-pane active" id="tab-order">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Order ID:</td>
                                            <td>#1048</td>
                                        </tr>
                                        <tr>
                                            <td>Invoice No.:</td>
                                            <td>                  
                                                <button id="button-invoice" class="btn btn-success btn-xs"><i class="fa fa-cog"></i> Generate</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Store Name:</td>
                                            <td>Your Store</td>
                                        </tr>
                                        <tr>
                                            <td>Store Url:</td>
                                            <td><a href="http://demo.opencart.com/" target="_blank">http://demo.opencart.com/</a></td>
                                        </tr>
                                        <tr>
                                            <td>Customer:</td>
                                            <td><a href="http://demo.opencart.com/admin/index.php?route=sale/customer/edit&amp;token=f76fa5a8f5556a51f75c9f48906683e5&amp;customer_id=1308" target="_blank">bharat pradhan</a></td>
                                        </tr>
                                        <tr>
                                            <td>Customer Group:</td>
                                            <td>Default</td>
                                        </tr>
                                        <tr>
                                            <td>E-Mail:</td>
                                            <td><a href="mailto:bharat.vssd@gmail.com">bharat.vssd@gmail.com</a></td>
                                        </tr>
                                        <tr>
                                            <td>Telephone:</td>
                                            <td>0987654343</td>
                                        </tr>
                                        <tr>
                                            <td>Total:</td>
                                            <td>$105.00</td>
                                        </tr>
                                        <tr>
                                            <td>Reward Points:</td>
                                            <td>300 
                                                <button id="button-reward-add" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i> Add Reward Points</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Order Status:</td>
                                            <td id="order-status">Pending</td>
                                        </tr>
                                        <tr>
                                            <td>IP Address:</td>
                                            <td>14.98.228.50</td>
                                        </tr>
                                        <tr>
                                            <td>User Agent:</td>
                                            <td>Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0</td>
                                        </tr>
                                        <tr>
                                            <td>Accept Language:</td>
                                            <td>en-US,en;q=0.5</td>
                                        </tr>
                                        <tr>
                                            <td>Date Added:</td>
                                            <td>17/01/2015</td>
                                        </tr>
                                        <tr>
                                            <td>Date Modified:</td>
                                            <td>17/01/2015</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="products">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td class="text-left">Product</td>
                                        <td class="text-left">Model</td>
                                        <td class="text-right">Quantity</td>
                                        <td class="text-right">Unit Price</td>
                                        <td class="text-right">Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left"><a href="http://demo.opencart.com/admin/index.php?route=catalog/product/edit&amp;token=f76fa5a8f5556a51f75c9f48906683e5&amp;product_id=47">HP LP3065</a>
                                            <br>
                                            &nbsp;<small> - Delivery Date: 2011-04-22</small>
                                        </td>
                                        <td class="text-left">Product 21</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$100.00</td>
                                        <td class="text-right">$100.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Sub-Total:</td>
                                        <td class="text-right">$100.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Flat Shipping Rate:</td>
                                        <td class="text-right">$5.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Total:</td>
                                        <td class="text-right">$105.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="confirmation">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Order ID:</td>
                                        <td>#1048</td>
                                    </tr>
                                    <tr>
                                        <td>Invoice No.:</td>
                                        <td>                  
                                            <button id="button-invoice" class="btn btn-success btn-xs"><i class="fa fa-cog"></i> Generate</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Store Name:</td>
                                        <td>Your Store</td>
                                    </tr>
                                    <tr>
                                        <td>Store Url:</td>
                                        <td><a href="http://demo.opencart.com/" target="_blank">http://demo.opencart.com/</a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer:</td>
                                        <td><a href="http://demo.opencart.com/admin/index.php?route=sale/customer/edit&amp;token=f76fa5a8f5556a51f75c9f48906683e5&amp;customer_id=1308" target="_blank">bharat pradhan</a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer Group:</td>
                                        <td>Default</td>
                                    </tr>
                                    <tr>
                                        <td>E-Mail:</td>
                                        <td><a href="mailto:bharat.vssd@gmail.com">bharat.vssd@gmail.com</a></td>
                                    </tr>
                                    <tr>
                                        <td>Telephone:</td>
                                        <td>0987654343</td>
                                    </tr>
                                    <tr>
                                        <td>Total:</td>
                                        <td>$105.00</td>
                                    </tr>
                                    <tr>
                                        <td>Reward Points:</td>
                                        <td>300 
                                            <button id="button-reward-add" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i> Add Reward Points</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Order Status:</td>
                                        <td id="order-status">Pending</td>
                                    </tr>
                                    <tr>
                                        <td>IP Address:</td>
                                        <td>14.98.228.50</td>
                                    </tr>
                                    <tr>
                                        <td>User Agent:</td>
                                        <td>Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0</td>
                                    </tr>
                                    <tr>
                                        <td>Accept Language:</td>
                                        <td>en-US,en;q=0.5</td>
                                    </tr>
                                    <tr>
                                        <td>Date Added:</td>
                                        <td>17/01/2015</td>
                                    </tr>
                                    <tr>
                                        <td>Date Modified:</td>
                                        <td>17/01/2015</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
</div>
<!-- /.row -->