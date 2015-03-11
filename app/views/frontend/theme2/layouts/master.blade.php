<!--A Design by W3layouts 
    Author: W3layout
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
	{{HTML::style('assets/theme2/css/bootstrap.css')}}    
	<!--theme-style-->
	{{HTML::style('assets/theme2/css/style.css')}}    
	{{HTML::style('assets/theme2/css/etalage.css')}}    
	{{HTML::style('assets/theme2/css/form.css')}}    
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	{{HTML::script('assets/theme2/js/jquery.min.js')}}
	<!--script-->
</head>
<body>
	<!--header-->
    @include('frontend.theme2.includes.inc-header')
	
	<!---->
	<div class="container">

        @yield('content', 'Default content')
		
        @section('header')
            <!-- Header page -->
        @show

		<div class="clearfix"> </div>
	</div>
	<!---->
    @include('frontend.theme2.includes.inc-footer')
	
	{{HTML::script('assets/theme2/js/jquery.etalage.min.js')}}
	{{HTML::script('assets/theme2/js/jquery.flexisel.js')}}
	{{HTML::script('assets/theme2/js/jquery.wmuSlider.js')}}
	<script>
	$('.example1').wmuSlider();         
	</script> 
	<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo1").flexisel({
			visibleItems: 5,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:480,
					visibleItems: 1
				}, 
				landscape: { 
					changePoint:640,
					visibleItems: 2
				},
				tablet: { 
					changePoint:768,
					visibleItems: 3
				}
			}
		});

	});
	jQuery(document).ready(function($){

		$('#etalage').etalage({
			thumb_image_width: 300,
			thumb_image_height: 400,
			source_image_width: 900,
			source_image_height: 1200,
			show_hint: true,
			click_callback: function(image_anchor, instance_id){
				alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
			}
		});

	});
	</script>
</body>
</html>
