@extends('admin.layouts.master')

@section('header')
@include('frontend.theme2.includes.inc-side')
@stop


@section('content')
<div class="women-product">
    <div class="w_content">
        <div class="women">
            <a href="#"></a>
            <h4>
                <a href="#">Enthecwear - <span>4449 itemms</span></a>
            </h4>
            <a href="#"></a>
            <ul class="w_nav">
                <li>Sort :
                </li>
                <li>
                    <a class="active" href="#">popular</a>
                </li>
                <li style="list-style: none">|
                </li>
                <li>
                    <a href="#">new</a>
                </li>
                <li style="list-style: none">|
                </li>
                <li>
                    <a href="#">discount</a>
                </li>
                <li style="list-style: none">|
                </li>
                <li>
                    <a href="#">price: Low High</a>
                </li>
                <li style="list-style: none; display: inline">
                    <div class="clearfix"></div>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- grids_of_4 -->
    <div class="grid-product">
    	@if ($data['new_products']->count()) 
        @foreach ($data['new_products'] as $product)
        <div class=" product-grid">
            <div class="content_box">
                <a href="{{ URL::to('detail/' . $product->id) }}">
                    <div class="left-grid-view grid-view-left">
                        {{ HTML::image(asset($product->media()->where('default',1)->get()->first()->url), "Product", array('class' => "img-responsive watch-right")) }}
                        <div class="mask">
                            <div class="info">
                                Quick View
                            </div>
                        </div>
                    </div>
                </a>
                <h4>
                    <a href="{{ URL::to('detail/' . $product->id) }}">{{ $product->name }}</a>
                </h4>
                <p>
                    {{ Str::words($product->description, 12) }}
                </p>
                Rp. {{ $product->price }}
            </div>
        </div>
        @endforeach 
        @endif
        <div class=" product-grid">
            <div class="content_box">
                <a href="single.html"></a>
                <div class="left-grid-view grid-view-left">
                    {{ HTML::image("assets/theme2/images/pic2.jpg", "Logo",
                    array('class' => "img-responsive watch-right")) }}
                    <div class="mask">
                        <div class="info">
                            Quick View
                        </div>
                    </div>
                </div>
                <h4>
                    <a href="">Duis autem</a>
                </h4>
                <p>
                    It is a long established fact that a reader
                </p>
                Rs. 499
            </div>
        </div>
        <div class=" product-grid">
            <div class="content_box">
                <a href="single.html"></a>
                <div class="left-grid-view grid-view-left">
                    {{ HTML::image("assets/theme2/images/pic3.jpg", "Logo",
                    array('class' => "img-responsive watch-right")) }}
                    <div class="mask">
                        <div class="info">
                            Quick View
                        </div>
                    </div>
                </div>
                <h4>
                    <a href="#">Duis autem</a>
                </h4>
                <p>
                    It is a long established fact that a reader
                </p>
                Rs. 499
            </div>
        </div>
        <div class=" product-grid">
            <div class="content_box">
                <a href="single.html"></a>
                <div class="left-grid-view grid-view-left">
                    {{ HTML::image("assets/theme2/images/pic4.jpg", "Logo",
                    array('class' => "img-responsive watch-right")) }}
                    <div class="mask">
                        <div class="info">
                            Quick View
                        </div>
                    </div>
                </div>
                <h4>
                    <a href="#">Duis autem</a>
                </h4>
                <p>
                    It is a long established fact that a reader
                </p>
                Rs. 499
            </div>
        </div>
        <div class=" product-grid">
            <div class="content_box">
                <a href="single.html"></a>
                <div class="left-grid-view grid-view-left">
                    {{ HTML::image("assets/theme2/images/pic6.jpg", "Logo",
                    array('class' => "img-responsive watch-right")) }}
                    <div class="mask">
                        <div class="info">
                            Quick View
                        </div>
                    </div>
                </div>
                <h4>
                    <a href="#">Duis autem</a>
                </h4>
                <p>
                    It is a long established fact that a reader
                </p>
                Rs. 499
            </div>
        </div>
        <div class=" product-grid">
            <div class="content_box">
                <a href="single.html"></a>
                <div class="left-grid-view grid-view-left">
                    {{ HTML::image("assets/theme2/images/pic7.jpg", "Logo",
                    array('class' => "img-responsive watch-right")) }}
                    <div class="mask">
                        <div class="info">
                            Quick View
                        </div>
                    </div>
                </div>
                <h4>
                    <a href="#">Duis autem</a>
                </h4>
                <p>
                    It is a long established fact that a reader
                </p>
                Rs. 499
            </div>
        </div>
        <div class=" product-grid">
            <div class="content_box">
                <a href="single.html"></a>
                <div class="left-grid-view grid-view-left">
                    {{ HTML::image("assets/theme2/images/pic8.jpg", "Logo",
                    array('class' => "img-responsive watch-right")) }}
                    <div class="mask">
                        <div class="info">
                            Quick View
                        </div>
                    </div>
                </div>
                <h4>
                    <a href="#">Duis autem</a>
                </h4>
                <p>
                    It is a long established fact that a reader
                </p>
                Rs. 499
            </div>
        </div>
        <div class=" product-grid">
            <div class="content_box">
                <a href="single.html"></a>
                <div class="left-grid-view grid-view-left">
                    {{ HTML::image("assets/theme2/images/pic11.jpg", "Logo",
                    array('class' => "img-responsive watch-right")) }}
                    <div class="mask">
                        <div class="info">
                            Quick View
                        </div>
                    </div>
                </div>
                <h4>
                    <a href="#">Duis autem</a>
                </h4>
                <p>
                    It is a long established fact that a reader
                </p>
                Rs. 499
            </div>
        </div>
        <div class=" product-grid">
            <div class="content_box">
                <a href="single.html"></a>
                <div class="left-grid-view grid-view-left">
                    {{ HTML::image("assets/theme2/images/pic12.jpg", "Logo",
                    array('class' => "img-responsive watch-right")) }}
                    <div class="mask">
                        <div class="info">
                            Quick View
                        </div>
                    </div>
                </div>
                <h4>
                    <a href="#">Duis autem</a>
                </h4>
                <p>
                    It is a long established fact that a reader
                </p>
                Rs. 499
            </div>
        </div>
        <div class="clearfix"></div>
        {{ $data['new_products']->links() }}

    </div>
</div>

@stop