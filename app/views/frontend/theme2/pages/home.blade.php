@extends('admin.layouts.master')

@section('header')
    @include('frontend.theme2.includes.inc-side')
@stop


@section('content')

<div class="shoes-grid">
    <a href="single.html"></a>
    <div class="wrap-in">
        <div class="wmuSlider example1 slide-grid">
            <div class="wmuSliderWrapper">
                @if ($data['featured_product']->count()) @foreach
                ($data['featured_product'] as $featuredProduct)
                <div class="banner-matter">
                    <div class="col-md-5 banner-bag">
                        {{
                        HTML::image(asset($featuredProduct->media()->where('default',
                        1)->get()->first()->url), "Logo",
                        array('class' => "img-responsive")) }}
                    </div>
                    <div class="col-md-7 banner-off">
                        <h2>
                            FLAT 50% 0FF
                        </h2>
                        <label>FOR ALL PURCHASE
                        <strong>{{$featuredProduct->name}}</strong></label>
                        <p>
                            {{$featuredProduct->description}}
                        </p>
                        <span class="on-get">GET NOW</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                @endforeach @endif
            </div>
        </div>
    </div>
    <!---->
    <!-- <div class="shoes-grid-left">
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
        </div> -->
    <div class="products">
        <h5 class="latest-product">
            LATEST PRODUCTS
        </h5>
        <a class="view-all" href=
            "{{%20URL::to('products')%20}}">VIEW ALL</a>
    </div>
    <div class="product-left">
        @if ($data['new_products']->count()) 
        @foreach ($data['new_products'] as $product)
        <div class="col-md-4 chain-grid">
            <a href="single.html">{{
            HTML::image(asset($product->media()->where('default',1)->get()->first()->url), "Logo", array('class' => "img-responsive chain")) }}</a>
            <div class="grid-chain-bottom">
                <h6>
                    <a href="single.html">{{ $product->name }}</a>
                </h6>
                <div class="star-price">
                    <div class="dolor-grid">
                        <span class="actual">300$</span> <span class=
                            "reducedfrom">400$</span> <span class=
                            "rating"><input type="radio" class="rating-input" id=
                            "rating-input-1-5" name="rating-input-1" />
                        <input type="radio" class="rating-input" id=
                            "rating-input-1-4" name="rating-input-1" />
                        <input type="radio" class="rating-input" id=
                            "rating-input-1-3" name="rating-input-1" />
                        <input type="radio" class="rating-input" id=
                            "rating-input-1-2" name="rating-input-1" />
                        <input type="radio" class="rating-input" id=
                            "rating-input-1-1" name="rating-input-1" /></span>
                    </div>
                    <a class="now-get get-cart" href="#">ADD TO
                    CART</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        @endforeach 
        @endif
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
  
@stop
