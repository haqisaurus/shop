@extends('admin.layouts.master')

@section('header')
@include('frontend.theme2.includes.inc-side')
@stop


@section('content')
@if (Session::has('cart_message'))
<br>
<div class="container">
   <div class="alert alert-success" style="overflow:hidden">
        <p class="pull-left">{{ Session::get('cart_message') }}</p>
        <a href="{{ URL::to('cart') }}" class="btn btn-sm btn-default pull-right">Checkout</a>
    </div>
</div>
@endif
<div class=" single_top">
	<div class="single_grid">
		<div class="grid images_3_of_2">
			<ul id="etalage">
				<li>
					<a href="optionallink.html">
						{{ HTML::image(asset($data['product_detail']->media()->where('default',1)->first()->url), "Logo", array('class' => "img-responsive etalage_thumb_image")) }}
						{{ HTML::image(asset($data['product_detail']->media()->where('default',1)->first()->url), "Logo", array('class' => "img-responsive etalage_source_image")) }}
					</a>
				</li>
				@if ($data['product_detail']->media()->get()->count()) 
					@foreach ($data['product_detail']->media()->get() as $media)
					<li>
						{{ HTML::image(asset($media->url), "Logo", array('class' => "img-responsive etalage_thumb_image")) }}
						{{ HTML::image(asset($media->url), "Logo", array('class' => "img-responsive etalage_source_image")) }}
					</li>
					@endforeach
				@endif
			</ul>
			<div class="clearfix"> </div>		
		</div> 
		<div class="desc1 span_3_of_2">


			<h4>{{ $data['product_detail']->name }}</h4>
			<div class="cart-b">
				<div class="left-n "><span style="color:black">Rp. </span> {{ number_format($data['product_detail']->price,2,',','.') }} <span style="color:black">x</span></div>
				{{ Form::open(array('url' => 'addToCart', 'class' => 'now-get get-cart-in')) }}
                {{ Form::hidden('_method', 'POST') }}

                {{ Form::hidden('productID', $data['product_detail']->id) }}
                {{ Form::number('quantity', 1, array('class' => 'form-control inline')) }}
                <br>
                {{ Form::button('ADD TO CART', array('type' => 'submit', 'class' => 'btn btn-primary now-get get-cart-in')) }}
                {{ Form::close() }}
				<div class="clearfix"></div>
			</div>
			<h6>{{ $data['product_detail']->stock }} items in stock</h6>
			<p>{{ Str::words($data['product_detail']->description, 70) }}</p>
			<div class="share">
				<h5>Share Product :</h5>
				<ul class="share_nav">
					<li><a href="#">{{ HTML::image("assets/theme2/images/facebook.png", "Logo", array('title' => "facebook")) }}</a></li>
					<li><a href="#">{{ HTML::image("assets/theme2/images/twitter.png", "Logo", array('title' => "twitter")) }}</a></li>
					<li><a href="#">{{ HTML::image("assets/theme2/images/rss.png", "Logo", array('title' => "rss")) }}</a></li>
					<li><a href="#">{{ HTML::image("assets/theme2/images/gpluse.png", "Logo", array('title' => "gpluse")) }}</a></li>
				</ul>
			</div>


		</div>
		<div class="clearfix"> </div>
	</div>
	<ul id="flexiselDemo1">
		@if($data['product_in_category']->count())
			@foreach($data['product_in_category'] as $incategory)
				<li>{{ HTML::image(asset($incategory->media()->where('default',1)->first()->url), "Image slider", array('class' => "grid-flex")) }}<div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			@endforeach
		@endif
	</ul>

	<div class="toogle">
		<h3 class="m_3">Product Details</h3>
		<p class="m_text">{{ $data['product_detail']->description }}</p>
	</div>	
</div>

@stop