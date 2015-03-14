@extends('admin.layouts.master')

@section('header')
@include('frontend.theme2.includes.inc-side')
@stop


@section('content')
<div class=" single_top">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5>
									Shopping Cart
								</h5>
							</div>
							<div class="col-xs-6">
								<a href="{{ URL::to('products') }}" class="btn btn-primary btn-sm btn-block">Continue shopping</a>
							</div>
						</div>
					</div>
				</div>
				
				{{ Form::open(array('url' => 'addToCart', 'class' => '')) }}
				{{ Form::hidden('_method', 'POST') }}
				
				<div class="panel-body">
					@if(count($data['data_checkout']))
					@foreach ($data['data_checkout'] as $key => $productCart)
					<div class="row">
						<div class="col-xs-3">
							{{ HTML::image(asset(Media::where('product_id', $productCart->id)->where('default', 1)->first()->url), "Logo", array('class' => "img-responsive")) }}
						</div>
						<div class="col-xs-4">
							<h4 class="product-name">
								<strong>{{ $productCart->name }}</strong>
							</h4>
							<h4>
								<small>{{ Str::words($productCart->description, 10) }}</small>
							</h4>
						</div>
						<div class="col-xs-5">
							<div class="col-xs-5 text-right">
								<h6>
									<strong>{{ $productCart->price }}
										<span class="text-muted">x</span>
									</strong>
								</h6>
							</div>
							<div class="col-xs-5">
								{{ Form::number('quantity', $productCart->cart_quantity, array('id' => 'quantity', 'class' => 'form-control input-sm', 'placeholder' => 'quantity')) }}
								{{ Form::hidden('productID', $productCart->id) }}
							</div>
							<div class="col-xs-2">
								<a href="{{ URL::to('removeCart/' . $productCart->id) }}" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash" style="font-size: 2em;"> </span>
								</a>
							</div>
						</div>
					</div>
					<hr/>
					@endforeach
					@else
					<div class="alert alert-warning text-center">
						{{'Keranjang anda kosong'}}
					</div>
					@endif
					<div class="row form-group">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">
									Added items?
								</h6>
							</div>
							<div class="col-xs-3">
								<button type="submit" class="btn btn-default btn-sm btn-block">Update cart</button>
							</div>
						</div>
					</div>
					<div class="row form-group" >
						<div class="col-xs-6">
							<select name="kota" id="kota" class="form-control">
								<option value="jakarta">jakarta</option>
								<option value="surabaya">surabaya</option>
							</select>
						</div>
						<div class="col-xs-3">
							<h6 class="text-right">
								Total haraga barang
							</h6>
						</div>
						<div class="col-xs-3">
							<div class="text-center">
								<strong>{{ $data['total'] }}</strong>
							</div>
						</div>
					</div>
					<div class="row form-group" >
						<div class="col-xs-6">
							<select name="kota" id="kota" class="form-control">
								<option value="jakarta">jakarta</option>
								<option value="surabaya">surabaya</option>
							</select>
						</div>
						<div class="col-xs-3">
							<h6 class="text-right">
								Total haraga barang
							</h6>
						</div>
						<div class="col-xs-3">
							<div class="text-center">
								<strong>{{ $data['total'] }}</strong>
							</div>
						</div>
					</div>
					<div class="row form-group" >
						<div class="col-xs-6">
							<select name="kota" id="kota" class="form-control">
								<option value="jakarta">jakarta</option>
								<option value="surabaya">surabaya</option>
							</select>
						</div>
						<div class="col-xs-6">
							<hr>
						</div>
						
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">
								Total <strong>{{ $data['total'] }}</strong>
							</h4>
						</div>
						<div class="col-xs-3">
							<a href="button" class="btn btn-success btn-block">Checkout</a>
						</div>
					</div>
				</div>
				{{ Form::close() }}

			</div>
		</div>
	</div>
</div>
@stop