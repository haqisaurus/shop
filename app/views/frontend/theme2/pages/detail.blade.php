@extends('admin.layouts.master')

@section('header')
@include('frontend.theme2.includes.inc-side')
@stop


@section('content')

<div class=" single_top">
	<div class="single_grid">
		<div class="grid images_3_of_2">
			<?php 
			// echo '<pre>'.print_r($data['product_detail']->media()->get(),1).'</pre>';
			 ?>
			<ul id="etalage">
				<li>
					<a href="optionallink.html">
						{{ HTML::image(asset($data['product_detail']->media()->where('default',1)->get()->first()->url), "Logo", array('class' => "img-responsive etalage_thumb_image")) }}
						{{ HTML::image(asset($data['product_detail']->media()->where('default',1)->get()->first()->url), "Logo", array('class' => "img-responsive etalage_source_image")) }}
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
				<div class="left-n ">{{ $data['product_detail']->price }}</div>
				<a class="now-get get-cart-in" href="#">ADD TO CART</a> 
				<div class="clearfix"></div>
			</div>
			<h6>{{ $data['product_detail']->stock }} items in stock</h6>
			<p>{{ $data['product_detail']->description }}</p>
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

		<li>{{ HTML::image("assets/theme2/images/pi.jpg", "Logo", array('class' => "grid-flex")) }}<div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
		<li>{{ HTML::image("assets/theme2/images/pi1.jpg", "Logo", array('class' => "grid-flex")) }}<div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
		<li>{{ HTML::image("assets/theme2/images/pi2.jpg", "Logo", array('class' => "grid-flex")) }}<div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
		<li>{{ HTML::image("assets/theme2/images/pi3.jpg", "Logo", array('class' => "grid-flex")) }}<div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
		<li>{{ HTML::image("assets/theme2/images/pi4.jpg", "Logo", array('class' => "grid-flex")) }}<div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
	</ul>

	<div class="toogle">
		<h3 class="m_3">Product Details</h3>
		<p class="m_text">{{ $data['product_detail']->description }}</p>
	</div>	
</div>

@stop