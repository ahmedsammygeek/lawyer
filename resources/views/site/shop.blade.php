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
<section class="banner" style="background:url({{ Storage::url('settings/'.$data['settings']->shop_banner ) }}) center / cover no-repeat fixed;">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span> @lang('site.buy the best products from our shop') </span>
                    <h2> @lang('site.our products') </h2>
                    <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <li>
                        <a href="{{ route('index') }}"> @lang('site.home') </a>
                        <i class="bi bi-arrow-left"></i>
                        <a href="{{ route('shop.index') }}"> @lang('site.shop') </a>
                    </li>
                </div>
            </div>
        </div>
        <img src="{{ asset('site_assets/img/shape-layer2.png') }}" alt="shape-layer2" class="shape">
    </div>
</section>

<section class="shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 first-col4">
                <div class="side-shop">
                    <div class="side-shop-title">
                        <h2> @lang('site.categories') </h2>
                    </div>
                    <ul>
                       <li>
                        <a href="{{ route('shop.index') }}">
                            <i class="bi bi-arrow-right-short"></i>
                            <span> @lang('site.all categories') ({{ $total }}) </span>
                        </a>
                    </li>
                    @foreach ($categories as $category)
                    <li>
                        <a href="{{ route('shop.index' , ['category' => $category->id ] ) }}">
                            <i class="bi bi-arrow-right-short"></i>
                            <span> {{ $category->title }} ({{ $category->products_count }})</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="popular">
                <div class="popular-text">
                    <h2> @lang('site.popular products') </h2>
                </div>
                <div class="popular-items">

                    @foreach ($popular_products as $popular_product)
                    <div class="popular-item">
                        <div class="img">
                            <img src="{{ Storage::url('products/'.$popular_product->image) }}" alt="product">
                        </div>
                        <div class="text">
                            <a href="{{ route('products.show' , $popular_product ) }}">{{ $popular_product->name }}</a>
                            <li>
                                @if ($popular_product->discount)
                                <span> {{ $popular_product->discount }} جنيه </span> 
                                <del> {{ $popular_product->price }} جنيه </del>
                                @else
                                <span> {{ $popular_product->getPrice() }} </span> 
                                @endif
                            </li>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8">
                    <h3> @lang('site.Showing') 1–{{ $total }} of {{ $total }} @lang('site.results') </h3>
                </div>
                <div class="col-lg-4">
                    <form action="{{ route('shop.index') }}">
                        <select name='sort' onchange="javascript:this.form.submit()">
                            <option value='date' @selected(request()->sort == 'date' )  > @lang('site.sort by latest') </option>
                            <option value='low'  @selected(request()->sort == 'low' ) > @lang('site.sort by price : low to high') </option>
                            <option value='high'  @selected(request()->sort == 'high' ) > @lang('site.sort by price : high to low') </option>
                        </select>
                    </form>
                </div>
            </div>


            <div class="row">
                @foreach ($products as $product)
                <div class="col-lg-4">
                    <div class="box wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <div class="img-box">
                            <img src="{{ Storage::url('products/'.$product->image) }}" alt="item">
                            <button><a href="{{ route('products.show' , $product ) }}"> @lang('site.quick view') </a></button>
                        </div>
                        <div class="text-box">
                            <a href="{{ route('products.show' , $product ) }}">{{ $product->name }}</a>
                            <li>
                                @if ($product->discount)
                                <span> {{ $product->discount }} جنيه </span> 
                                <del> {{ $product->price }} جنيه </del>
                                @else
                                <span> {{ $product->getPrice() }} </span> 
                                @endif
                            </li>
                            <div class="rate">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="offer">@lang('site.new')</span>
                        </div>
                        <span id="one"></span>
                        <span id="two"></span>
                        <span id="three"></span>
                        <span id="four"></span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-4 last-col4">
            <div class="side-shop">
                <div class="side-shop-title">
                    <h2> @lang('site.categories') </h2>
                </div>
                <ul>
                    @foreach ($categories as $category)
                    <li>
                        <a href="shop.html">
                            <i class="bi bi-arrow-right-short"></i>
                            <span> {{ $category->title }} ({{ $category->products_count }})</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="popular">
                <div class="popular-text">
                    <h2> @lang('site.popular products') </h2>
                </div>
                <div class="popular-items">
                    @foreach ($popular_products as $popular_product)
                    <div class="popular-item">
                        <div class="img">
                            <img src="{{ Storage::url('products/'.$popular_product->image) }}" alt="product">
                        </div>
                        <div class="text">
                            <a href="{{ route('products.show' , $popular_product ) }}">{{ $popular_product->name }}</a>
                            <li>
                                @if ($popular_product->discount)
                                <span> {{ $popular_product->discount }} @lang('site.le') </span> 
                                <del> {{ $popular_product->price }} @lang('site.le') </del>
                                @else
                                <span> {{ $popular_product->getPrice() }} </span> 
                                @endif
                            </li>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection