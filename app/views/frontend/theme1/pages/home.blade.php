@extends('frontend.theme1.layouts.master')
<?php $path = "theme1" ?>

@section('content')
<!-- start slider -->
<div id="da-slider" class="da-slider">
    <div class="da-slide">
        <h2>welcome to aditii</h2>
        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
        <a href="{{ URL::to('/detail') }}" class="da-link">shop now</a>
        <div class="da-img">
            {{ HTML::image('assets/' . $path . '/images/slider1.png', "image") }}
        </div>
    </div>
    <div class="da-slide">
        <h2>Easy management</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <a href="{{ URL::to('/detail') }}" class="da-link">shop now</a>
        <div class="da-img">
            {{ HTML::image('assets/' . $path . '/images/slider2.png', "image") }}
        </div>
    </div>
    <div class="da-slide">
        <h2>Revolution</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <a href="{{ URL::to('/detail') }}" class="da-link">shop now</a>
        <div class="da-img">
            {{ HTML::image('assets/' . $path . '/images/slider3.png', "image") }}
        </div>
    </div>
    <div class="da-slide">
        <h2>Quality Control</h2>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        <a href="{{ URL::to('/detail') }}" class="da-link">shop now</a>
        <div class="da-img">
            {{ HTML::image('assets/' . $path . '/images/slider4.png', "image") }}
        </div>
    </div>
    <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>
</div>
<div class="wrap">
    <!----start-img-cursual---->
    <div id="owl-demo" class="owl-carousel">
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="{{ URL::to('assets/' . $path . '/images/c1.jpg') }}" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="{{ URL::to('/detail') }}">branded shoes</a></h4>
                <a href="{{ URL::to('/detail') }}" class="btn">shop</a>
            </div>
        </div>  
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="{{ URL::to('assets/' . $path . '/images/c2.jpg') }}" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="{{ URL::to('/detail') }}">branded tees</a></h4>
                <a href="{{ URL::to('/detail') }}" class="btn">shop</a>
            </div>
        </div>  
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="{{ URL::to('assets/' . $path . '/images/c3.jpg') }}" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="{{ URL::to('/detail') }}">branded jeens</a></h4>
                <a href="{{ URL::to('/detail') }}" class="btn">shop</a>
            </div>
        </div>  
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="{{ URL::to('assets/' . $path . '/images/c2.jpg') }}" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="{{ URL::to('/detail') }}">branded tees</a></h4>
                <a href="{{ URL::to('/detail') }}" class="btn">shop</a>
            </div>
        </div>  
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="{{ URL::to('assets/' . $path . '/images/c1.jpg') }}" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="{{ URL::to('/detail') }}">branded shoes</a></h4>
                <a href="{{ URL::to('/detail') }}" class="btn">shop</a>
            </div>
        </div>  
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="{{ URL::to('assets/' . $path . '/images/c2.jpg') }}" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="d{{ URL::to('/detail') }}">branded tees</a></h4>
                <a href="{{ URL::to('/detail') }}" class="btn">shop</a>
            </div>
        </div>  
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="{{ URL::to('assets/' . $path . '/images/c3.jpg') }}" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="{{ URL::to('/detail') }}">branded jeens</a></h4>
                <a href="{{ URL::to('/detail') }}" class="btn">shop</a>
            </div>
        </div>  
    </div>
    <!----//End-img-cursual---->
</div>
<!-- start main1 -->
<div class="main_bg1">
    <div class="wrap">  
        <div class="main1">
            <h2>featured products</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">  
        <div class="main">
            <!-- start grids_of_3 -->
            <div class="grids_of_3">
                <div class="grid1_of_3">
                    <a href="{{ URL::to('/detail') }}">
                        {{ HTML::image('assets/' . $path . '/images/pic1.jpg', "image") }}
                        <h3>branded shoes</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="{{ URL::to('/detail') }}">
                        {{ HTML::image('assets/' . $path . '/images/pic2.jpg', "image") }}
                        <h3>branded t-shirts</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="{{ URL::to('/detail') }}">
                        {{ HTML::image('assets/' . $path . '/images/pic3.jpg', "image") }}
                        <h3>branded tees</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="grids_of_3">
                <div class="grid1_of_3">
                    <a href="{{ URL::to('/detail') }}">
                        {{ HTML::image('assets/' . $path . '/images/pic4.jpg', "image") }}
                        <h3>branded bags</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="{{ URL::to('/detail') }}">
                        {{ HTML::image('assets/' . $path . '/images/pic5.jpg', "image") }}
                        <h3>ems women bag</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="grid1_of_3">
                    <a href="{{ URL::to('/detail') }}">
                        {{ HTML::image('assets/' . $path . '/images/pic6.jpg', "image") }}
                        <h3>branded cargos</h3>
                        <div class="price">
                            <h4>$300<span>indulge</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>  
            <!-- end grids_of_3 -->
        </div>
    </div>
</div>  
<script type="text/javascript">

$(document).ready(function() {

    $("#owl-demo").owlCarousel({
        items : 4,
        lazyLoad : true,
        autoPlay : true,
        navigation : true,
        navigationText : ["",""],
        rewindNav : false,
        scrollPerPage : false,
        pagination : false,
        paginationNumbers: false,
    });

    $('#da-slider').cslider();

    var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
        };

        $().UItoTop({ easingType: 'easeOutQuart' });

        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>
@stop