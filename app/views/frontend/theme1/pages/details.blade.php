@extends('frontend.theme1.layouts.master')
<?php $path = "theme1" ?>

@section('content')
<!-- start main -->
<div class="main_bg">
	<div class="wrap">	
		<div class="main">
			<!-- start content -->
			<div class="single">
				<!-- start span1_of_1 -->
				<div class="left_content">
					<div class="span1_of_1">
						<!-- start product_slider -->
						<div class="product-view">
							<div class="product-essential">
								<div class="product-img-box">
									<div class="more-views" style="float:left;">
										<div class="more-views-container">
											<ul>
												<li>
													<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
														<img src="" src_main=""  title="" alt="" /></a>            
													</li>
													<li>
														<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
															<img src="" src_main=""  title="" alt="" /></a>
														</li>
														<li>
															<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
																<img src="" src_main=""  title="" alt="" /></a> 
															</li>
															<li>
																<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
																	<img src="" src_main="" title="" alt="" /></a>  
																</li>
																<li>
																	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
																		<img src="" src_main="" title="" alt="" /></a>
																	</li>
																</ul>
															</div>
														</div>
														<div class="product-image"> 
															<a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="web/images/0001-2.jpg" title="Women Shorts" alt="Women Shorts">
            													{{ HTML::image('assets/' . $path . '/images/0001-2.jpg', "image") }}
															</a>
														</div>
														<script type="text/javascript">
														var prodGallery = jQblvg.parseJSON('{"prod_1":{"main":{"orig":"web/images/0001-2.jpg","main":"web/images/large/0001-2.jpg","thumb":"web/images/small/0001-2.jpg","label":""},"gallery":{"item_0":{"orig":"web/images/0001-2.jpg","main":"web/images/large/0001-2.jpg","thumb":"web/images/small/0001-2.jpg","label":""},"item_1":{"orig":"web/images/0001-1.jpg","main":"web/images/large/0001-1.jpg","thumb":"web/images/small/0001-1.jpg","label":""},"item_2":{"orig":"web/images/0001-5.jpg","main":"web/images/large/0001-5.jpg","thumb":"web/images/small/0001-5.jpg","label":""},"item_3":{"orig":"web/images/0001-3.jpg","main":"web/images/large/0001-3.jpg","thumb":"web/images/small/0001-3.jpg","label":""},"item_4":{"orig":"web/images/0001-4.jpg","main":"web/images/large/0001-4.jpg","thumb":"web/images/small/0001-4.jpg","label":""}},"type":"simple","video":false}}'),
														gallery_elmnt = jQblvg('.product-img-box'),
														galleryObj = new Object(),
														gallery_conf = new Object();
														gallery_conf.moreviewitem = '<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt=""><img src="" src_main="" width="64" height="85" title="" alt="" /></a>';
														gallery_conf.animspeed = 200;
														jQblvg(document).ready(function() {
															galleryObj[1] = new prodViewGalleryForm(prodGallery, 'prod_1', gallery_elmnt, gallery_conf, '.product-image', '.more-views', 'http:');
															jQblvg('.product-image .cs-fancybox-thumbs').absoluteClick();
															jQblvg('.cs-fancybox-thumbs').fancybox({ prevEffect : 'none', 
																nextEffect : 'none',
																closeBtn : true,
																arrows : true,
																nextClick : true, 
																helpers: {
																	thumbs : {
																		width: 64,
																		height: 85,
																		position: 'bottom'
																	}
																}
															});
															jQblvg('#wrap').css('z-index', '100');
															jQblvg('.more-views-container').elScroll({type: 'vertical', elqty: 4, btn_pos: 'border', scroll_speed: 400 });

														});

														function initGallery(a,b,element) {
															galleryObj[a] = new prodViewGalleryForm(prods, b, gallery_elmnt, gallery_conf, '.product-image', '.more-views', '');
														};
														</script>
													</div>
												</div>
											</div>
											<!-- end product_slider -->
										</div>
										<!-- start span1_of_1 -->
										<div class="span1_of_1_des">
											<div class="desc1">
												<h3>Lorem Ipsum is simply dummy text </h3>
												<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
												<h5>Rs. 399 <a href="#">click for offer</a></h5>
												<div class="available">
													<h4>Available Options :</h4>
													<ul>
														<li>Color:
															<select>
																<option>Silver</option>
																<option>Black</option>
																<option>Dark Black</option>
																<option>Red</option>
															</select></li>
															<li>Size:
																<select>
																	<option>L</option>
																	<option>XL</option>
																	<option>S</option>
																	<option>M</option>
																</select>
															</li>
															<li>Quality:
																<select>
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																</select>
															</li>
														</ul>
														<div class="btn_form">
															<form>
																<input type="submit" value="add to cart" title="" />
															</form>
														</div>
														<span class="span_right"><a href="#">login to save in wishlist </a></span>
														<div class="clear"></div>
													</div>
													<div class="share-desc">
														<div class="share">
															<h4>Share Product :</h4>
															<ul class="share_nav">
            													
																<li><a href="#">{{ HTML::image('assets/' . $path . '/images/facebook.png', "image") }}</a></li>
																<li><a href="#">{{ HTML::image('assets/' . $path . '/images/twitter.png', "image") }}</a></li>
																<li><a href="#">{{ HTML::image('assets/' . $path . '/images/rss.png', "image") }}</a></li>
																<li><a href="#">{{ HTML::image('assets/' . $path . '/images/gpluse.png', "image") }}</a></li>
															</ul>
														</div>
														<div class="clear"></div>
													</div>
												</div>
											</div>
											<div class="clear"></div>
											<!-- start tabs -->
											<section class="tabs">
												<input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
												<label for="tab-1" class="tab-label-1">overview</label>

												<input id="tab-2" type="radio" name="radio-set" class="tab-selector-2">
												<label for="tab-2" class="tab-label-2">consumer electronics</label>

												<input id="tab-3" type="radio" name="radio-set" class="tab-selector-3">
												<label for="tab-3" class="tab-label-3">semiconductor</label>

												<div class="clear-shadow"></div>

												<div class="content">
													<div class="content-1">
														<p class="para top"><span>LOREM IPSUM</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
														<ul>
															<li>Research</li>
															<li>Design and Development</li>
															<li>Porting and Optimization</li>
															<li>System integration</li>
															<li>Verification, Validation and Testing</li>
															<li>Maintenance and Support</li>
														</ul>
														<div class="clear"></div>
													</div>
													<div class="content-2">
														<p class="para"><span>WELCOME </span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
														<ul class="qua_nav">
															<li>Multimedia Systems</li>
															<li>Digital media adapters</li>
															<li>Set top boxes for HDTV and IPTV Player applications on various Operating Systems and Hardware Platforms</li>
														</ul>
													</div>
													<div class="content-3">
														<p class="para top"><span>LOREM IPSUM</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
														<ul>
															<li>Research</li>
															<li>Design and Development</li>
															<li>Porting and Optimization</li>
															<li>System integration</li>
															<li>Verification, Validation and Testing</li>
															<li>Maintenance and Support</li>
														</ul>
														<div class="clear"></div>
													</div>
												</div>
											</section>
											<!-- end tabs -->
										</div>
										<!-- start sidebar -->
										<div class="left_sidebar">
											<div class="sellers">
												<h4>Best Sellers</h4>
												<div class="single-nav">
													<ul>
														<li><a href="#">Always free from repetition</a></li>
														<li><a href="#">Always free from repetition</a></li>
														<li><a href="#">The standard chunk of Lorem Ipsum</a></li>
														<li><a href="#">The standard chunk of Lorem Ipsum</a></li>
														<li><a href="#">Always free from repetition</a></li>
														<li><a href="#">The standard chunk of Lorem Ipsum</a></li>
														<li><a href="#">Always free from repetition</a></li>
														<li><a href="#">Always free from repetition</a></li>
														<li><a href="#">Always free from repetition</a></li>
														<li><a href="#">The standard chunk of Lorem Ipsum</a></li>
														<li><a href="#">Always free from repetition</a></li>
														<li><a href="#">Always free from repetition</a></li>
														<li><a href="#">Always free from repetition</a></li>			                    
													</ul>
												</div>
												<div class="banner-wrap bottom_banner color_link">
													<a href="#" class="main_link">
														<figure>{{ HTML::image('assets/' . $path . '/images/delivery.png', "image") }}</figure>
														<h5><span>Free Shipping</span><br> on orders over $99.</h5><p>This offer is valid on all our store items.</p></a>
													</div>
													<div class="brands">
														<h1>Brands</h1>
														<div class="field">
															<select class="select1">
																<option>Please Select</option>
																<option>Lorem ipsum dolor sit amet</option>
																<option>Lorem ipsum dolor sit amet</option>
																<option>Lorem ipsum dolor sit amet</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<!-- end sidebar -->
											<div class="clear"></div>
										</div>	
										<!-- end content -->
									</div>
								</div>
							</div>	
						</div>	
					</div>	
				</div>	
			</div>	
		</div>	
	</div>	
</div>	
@stop