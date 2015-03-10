@extends('admin.layouts.master')

@section('header')
    @include('frontend.theme2.includes.inc-side')
@stop


@section('content')
<div class="shoes-grid">
	<a href="single.html">
		<div class="wrap-in">
			<div class="wmuSlider example1 slide-grid">
				<div class="wmuSliderWrapper">
					<article style="position: absolute; width: 100%; opacity: 0;">
						<div class="banner-matter">
							<div class="col-md-5 banner-bag">
								{{ HTML::image("assets/theme2/images/bag.jpg", "Logo", array('class' => "img-responsive")) }}
							</div>
							<div class="col-md-7 banner-off">
								<h2>FLAT 50% 0FF</h2>
								<label>FOR ALL PURCHASE <b>VALUE</b></label>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
								<span class="on-get">GET NOW</span>
							</div>
							<div class="clearfix"> </div>
						</div>
					</article>
					<article style="position: absolute; width: 100%; opacity: 0;">
						<div class="banner-matter">
							<div class="col-md-5 banner-bag">
								{{ HTML::image("assets/theme2/images/bag1.jpg", "Logo", array('class' => "img-responsive")) }}
							</div>
							<div class="col-md-7 banner-off">
								<h2>FLAT 50% 0FF</h2>
								<label>FOR ALL PURCHASE <b>VALUE</b></label>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
								<span class="on-get">GET NOW</span>
							</div>
							<div class="clearfix"> </div>
						</div>
					</article>
					<article style="position: absolute; width: 100%; opacity: 0;">
						<div class="banner-matter">
							<div class="col-md-5 banner-bag">
								{{ HTML::image("assets/theme2/images/bag.jpg", "Logo", array('class' => "img-responsive")) }}
							</div>
							<div class="col-md-7 banner-off">
								<h2>FLAT 50% 0FF</h2>
								<label>FOR ALL PURCHASE <b>VALUE</b></label>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
								<span class="on-get">GET NOW</span>
							</div>
							<div class="clearfix"> </div>
						</div>
					</article>
				</div>

				<ul class="wmuSliderPagination">
					<li><a href="#" class="">0</a></li>
					<li><a href="#" class="">1</a></li>
					<li><a href="#" class="">2</a></li>
				</ul>

			</div>
		</div>
	</a>
	<!---->
	<div class="shoes-grid-left">
		<a href="single.html">
			<div class="col-md-6 con-sed-grid">
				<div class=" elit-grid">
					<h4>consectetur  elit</h4>
					<label>FOR ALL PURCHASE VALUE</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
					<span class="on-get">GET NOW</span>						
				</div>
				{{ HTML::image("assets/theme2/images/sh.jpg", "Logo", array('class' => "img-responsive shoe-left")) }}
				<div class="clearfix"> </div>
			</div>
		</a>
		<a href="single.html">
			<div class="col-md-6 con-sed-grid sed-left-top">
				<div class=" elit-grid">
					<h4>consectetur  elit</h4>
					<label>FOR ALL PURCHASE VALUE</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
					<span class="on-get">GET NOW</span>
				</div>
				{{ HTML::image("assets/theme2/images/wa.jpg", "Logo", array('class' => "img-responsive shoe-left")) }}
				<div class="clearfix"> </div>
			</div>
		</a>
	</div>
	<div class="products">
		<h5 class="latest-product">LATEST PRODUCTS</h5>
		<a class="view-all" href="product.html">VIEW ALL<span> </span></a> 		     
	</div>
	<div class="product-left">
		<div class="col-md-4 chain-grid">
			<a href="single.html">
				{{ HTML::image("assets/theme2/images/ch.jpg", "Logo", array('class' => "img-responsive chain")) }}
			</a>
			<span class="star"> </span>
			<div class="grid-chain-bottom">
				<h6><a href="single.html">Lorem ipsum dolor</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
						<span class="reducedfrom">400$</span>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"> </label>
						</span>
					</div>
					<a class="now-get get-cart" href="#">ADD TO CART</a> 
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 chain-grid">
			<a href="single.html">
				{{ HTML::image("assets/theme2/images/ba.jpg", "Logo", array('class' => "img-responsive chain")) }}
			</a>
			<span class="star"> </span>
			<div class="grid-chain-bottom">
				<h6><a href="single.html">Lorem ipsum dolor</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
						<span class="reducedfrom">400$</span>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"> </label>
						</span>
					</div>
					<a class="now-get get-cart" href="#">ADD TO CART</a> 
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 chain-grid grid-top-chain">
			<a href="single.html">
				{{ HTML::image("assets/theme2/images/bo.jpg", "Logo", array('class' => "img-responsive chain")) }}
			</a>
			<span class="star"> </span>
			<div class="grid-chain-bottom">
				<h6><a href="single.html">Lorem ipsum dolor</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
						<span class="reducedfrom">400$</span>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"> </label>
						</span>
					</div>
					<a class="now-get get-cart" href="#">ADD TO CART</a> 
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="products">
		<h5 class="latest-product">LATEST PRODUCTS</h5>
		<a class="view-all" href="product.html">VIEW ALL<span> </span></a> 		     
	</div>
	<div class="product-left">
		<div class="col-md-4 chain-grid">
			<a href="single.html">
				{{ HTML::image("assets/theme2/images/bott.jpg", "Logo", array('class' => "img-responsive chain")) }}
			</a>
			<span class="star"> </span>
			<div class="grid-chain-bottom">
				<h6><a href="single.html">Lorem ipsum dolor</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
						<span class="reducedfrom">400$</span>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"> </label>
						</span>
					</div>
					<a class="now-get get-cart" href="#">ADD TO CART</a> 
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 chain-grid">
			<a href="single.html">
				{{ HTML::image("assets/theme2/images/bottle.jpg", "Logo", array('class' => "img-responsive chain")) }}
			</a>
			<span class="star"> </span>
			<div class="grid-chain-bottom">
				<h6><a href="single.html">Lorem ipsum dolor</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
						<span class="reducedfrom">400$</span>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"> </label>
						</span>
					</div>
					<a class="now-get get-cart" href="#">ADD TO CART</a> 
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 chain-grid grid-top-chain">
			<a href="single.html">
				{{ HTML::image("assets/theme2/images/baa.jpg", "Logo", array('class' => "img-responsive chain")) }}
			</a>
			<span class="star"> </span>
			<div class="grid-chain-bottom">
				<h6><a href="single.html">Lorem ipsum dolor</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
						<span class="reducedfrom">400$</span>
						<span class="rating">
							<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
							<label for="rating-input-1-5" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
							<label for="rating-input-1-4" class="rating-star1"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
							<label for="rating-input-1-3" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
							<label for="rating-input-1-2" class="rating-star"> </label>
							<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
							<label for="rating-input-1-1" class="rating-star"> </label>
						</span>
					</div>
					<a class="now-get get-cart" href="#">ADD TO CART</a> 
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>
@stop
