@extends('admin.layouts.master')

@section('header')
@include('frontend.theme2.includes.inc-side')
@stop


@section('content')

<div class=" single_top">
	<div class="single_grid">
		<div class="grid images_3_of_2">
			<ul id="etalage">
				<li>
					<a href="optionallink.html">
						{{ HTML::image("assets/theme2/images/s4.jpg", "Logo", array('class' => "img-responsive etalage_thumb_image")) }}
						{{ HTML::image("assets/theme2/images/si4.jpg", "Logo", array('class' => "img-responsive etalage_source_image")) }}
					</a>
				</li>
				<li>
					{{ HTML::image("assets/theme2/images/s2.jpg", "Logo", array('class' => "img-responsive etalage_thumb_image")) }}
					{{ HTML::image("assets/theme2/images/si2.jpg", "Logo", array('class' => "img-responsive etalage_source_image")) }}
				</li>
				<li>
					{{ HTML::image("assets/theme2/images/s3.jpg", "Logo", array('class' => "img-responsive etalage_thumb_image")) }}
					{{ HTML::image("assets/theme2/images/si3.jpg", "Logo", array('class' => "img-responsive etalage_source_image")) }}
				</li>
				<li>
					{{ HTML::image("assets/theme2/images/s1.jpg", "Logo", array('class' => "img-responsive etalage_thumb_image")) }}
					{{ HTML::image("assets/theme2/images/si1.jpg", "Logo", array('class' => "img-responsive etalage_source_image")) }}
				</li>
			</ul>
			<div class="clearfix"> </div>		
		</div> 
		<div class="desc1 span_3_of_2">


			<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
			<div class="cart-b">
				<div class="left-n ">$329.58</div>
				<a class="now-get get-cart-in" href="#">ADD TO CART</a> 
				<div class="clearfix"></div>
			</div>
			<h6>100 items in stock</h6>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
		<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
	</div>	
</div>

@stop