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
<section class="banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span> @lang('site.Buy Health Foods At Our Store') </span>
                    <h2> @lang('site.Product order') </h2>
                    <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <li>
                        <a href="index.html">@lang('site.home')</a>
                        <i class="bi bi-arrow-right"></i>
                        <a href="{{ route('products.show' , $product ) }}">{{ $product->name }}</a>
                        <i class="bi bi-arrow-right"></i>
                        <a href="#"> @lang('site.product order') </a>
                    </li>
                </div>
            </div>
        </div>
        <img src="{{ asset('site_assets/img/shape-layer2.png') }}" alt="shape-layer2" class="shape">
    </div>
</section>
<!-- end the banner section -->


<!-- start the order section -->
<section class="order">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="order-img">
                    <img src="{{ Storage::url('products/'.$product->image) }}" alt="{{ $product->name }}">
                </div>
            </div>
            <div class="col-lg-8">
                <span class="title"> @lang('site.Let\'s Cooperate Together') </span>
                <h2> @lang('site.Contact Us Today to make your order!') </h2>
                <span class="sec-title"> @lang('site.We will reply you within 24 hours via email, thank you for contacting') </span>
                <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer" class="layer">
                <form method="POST" action="{{ route('products.order.store' , $product ) }}" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <input type="text" name="name" placeholder="@lang('site.name')*">
                            @error('name')
                            <p class='text-danger'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input type="email" name="email" placeholder="@lang('site.email')*">
                            @error('email')
                            <p class='text-danger'> {{ $message }} </p>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <input type="text" name="phone" placeholder="@lang('site.phone number')*">
                            @error('phone')
                            <p class='text-danger'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" name="quantity" placeholder="@lang('site.quantity number')">
                            @error('quantity')
                            <p class='text-danger'> {{ $message }} </p>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea name="message" placeholder="@lang('site.message')..."></textarea>
                            @error('message')
                            <p class='text-danger'> {{ $message }} </p>
                            @enderror
                        </div>
                    </div>
                    <button name="button" type="submit" class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> 
                        @lang('site.send order')
                        <div class="icon">
                            <i class="bi bi-arrow-right"></i>
                        </div> 
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end the order section -->


@endsection