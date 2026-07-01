@extends('site.layouts.master')
@php
$lang =  LaravelLocalization::getCurrentLocale();
$dir = 'rtl';
if ($lang == 'ar') {
    $dir = 'rtl';
}else {
    $dir ='ltr';
}
@endphp
@section('page_content')
<!-- start the banner section -->
<section class="banner" style="background:url({{ Storage::url('products/'.$product->banner ) }}) center / cover no-repeat fixed;">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span> @lang('site.Buy Health Foods At Our Store') </span>
                    <h2> @lang('site.Products Details') </h2>
                    <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <li>
                        <a href="{{ route('index') }}"> @lang('site.home') </a>
                        <i class="bi bi-arrow-right"></i>
                        <a href="{{ route('shop.index') }}"> @lang('site.shop products') </a>
                        <i class="bi bi-arrow-right"></i>
                        <a href="{{ route('products.show' , $product ) }}"> {{ $product->name }} </a>
                    </li>
                </div>
            </div>
        </div>
        <img src="{{ asset('site_assets/img/shape-layer2.png') }}" alt="shape-layer2" class="shape">
    </div>
</section>
<!-- end the banner section -->


<!-- start the product-details section -->
<section class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="product-img">
                    <img src="{{ Storage::url('products/'.$product->image) }}" alt="{{ $product->name }}">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <span><a href="{{ route('shop.index') }}"> @lang('site.back to shop') </a></span>
                <h2>{{ $product->name }}</h2>
                <div class="rate">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <li>
                    @if ($product->discount)
                    <span> {{ $product->discount }} @lang('site.le') </span> 
                    <del> {{ $product->price }} @lang('site.le') </del>
                    @else
                    <span> {{ $product->getPrice() }} </span> 
                    @endif
                </li>
                <p>
                    {{ $product->content }}
                </p>
                <button name="button">
                    <a href="{{ route('products.order' , $product ) }}">
                        @lang('site.order now')
                        <div class="icon">
                            <i class="bi bi-cart"></i>
                        </div>
                    </a>
                </button>
                <li class="cat-type"> @lang('site.category') : <span> {{ $product->category?->title }} </span> </li>
            </div>
        </div>
    </div>
    <img src="{{ asset('site_assets/img/zaitoun.png') }}" alt="zaitoun" class="zaitoun">
</section>
<!-- end the product-details section -->


<!-- start the related-products section  -->
<section class="related-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2> @lang('site.Related Products') </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="offers">
                    @foreach ($related_products as $related_product)
                    <div class="box wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <div class="img-box">
                            <img src="{{ Storage::url('products/'.$related_product->image) }}" alt="item">
                            <button><a href="{{ route('products.show' , $related_product ) }}"> @lang('site.quick view') </a></button>
                        </div>
                        <div class="text-box">
                            <a href="{{ route('products.show' , $related_product ) }}">{{ $related_product->name }}</a>
                            <li>
                               @if ($related_product->discount)
                                <span> {{ $related_product->discount }} @lang('site.le') </span> 
                                <del> {{ $related_product->price }} @lang('site.le') </del>
                                @else
                                <span> {{ $related_product->getPrice() }} </span> 
                                @endif
                            </li>
                            <div class="rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="offer"> @lang('site.new') </span>
                        </div>
                        <span id="one"></span>
                        <span id="two"></span>
                        <span id="three"></span>
                        <span id="four"></span>
                    </div>
                    @endforeach
                    

                </div>
            </div>    
        </div>
    </div>
</section>
<!-- end the related-products section -->

@endsection