<div class="sub-cate">
	<div class=" top-nav rsidebar span_1_of_left">
		<h3 class="cate">CATEGORIES</h3>
		<ul class="menu">
			@if ($data['categories']->count())
			    @foreach ($data['categories'] as $category)
			    
				@if ($category->level == 0)
				<li class="item1">
					<a href="{{ URL::to('products') }}">
						@if ($category->childs->count() > 0)
							{{ HTML::image("assets/theme2/images/arrow1.png", "Logo", array('class' => "")) }}
						@endif

						{{ $category->name }}
					</a>
					@if ($category->childs->count() > 0)
					<ul class="cute">
			    		@foreach ($category->childs as $childCategory)
						<li class="subitem1"><a href="{{ URL::to('product/create') }}">{{ $childCategory->name }} </a></li>
						@endforeach
					</ul>
					@endif
				</li>
				@endif
			  @endforeach
			@endif
		</ul>
	</div>
	<!--initiate accordion-->
	<script type="text/javascript">
	$(function() {
		var menu_ul = $('.menu > li > ul'),
		menu_a  = $('.menu > li > a');
		menu_ul.hide();
		menu_a.click(function(e) {
			
			if($(this).siblings('.cute').length) e.preventDefault();
			
			if(!$(this).hasClass('active')) {
				menu_a.removeClass('active');
				menu_ul.filter(':visible').slideUp('normal');
				$(this).addClass('active').next().stop(true,true).slideDown('normal');
			} else {
				$(this).removeClass('active');
				$(this).next().stop(true,true).slideUp('normal');
			}
		});

	});
	</script>
	@if($data['random_product']->count())
	<div class=" chain-grid menu-chain">
		<a href="{{ URL::to('detail/' . $data['random_product']->id) }}">
			{{ HTML::image(asset($data['random_product']->media()->where('default',1)->first()->url), "Preview", array('class' => "img-responsive chain")) }}
		</a>	   		     		
		<div class="grid-chain-bottom chain-watch">
			<span class="actual dolor-left-grid">Rp. {{ $data['random_product']->price }}</span>
			<span class="reducedfrom">Rp. {{ $data['random_product']->price }}</span>  
			<h6><a href="{{ URL::to('detail/' . $data['random_product']->id) }}">{{ $data['random_product']->name }}</a></h6>
		</div>
	</div>
	@endif
	<a class="view-all all-product" href="{{ URL::to('products') }}">VIEW ALL PRODUCTS<span> </span></a> 	
</div>