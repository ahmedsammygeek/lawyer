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



<!-- start teh certificate section -->   
<div class="certificates">
    <div class="certi-boxes">
        @foreach ($certificates as $certificate)
        <div class="box">
            <span>{{ $certificate->content }}</span>
        </div>
        @endforeach
    </div>
    <div class="certi-boxes">
        @foreach ($certificates as $certificate)
        <div class="box">
            <span>{{ $certificate->content }}</span>
        </div>
        @endforeach
    </div>

</div>
<!-- end the certificate section -->



<!-- start the about section -->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

               {!! $data['settings']->about !!} 

               <button name="button" class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> 
                <a href="{{ route('about') }}"> 
                    @lang('site.about us')
                    <div class="icon">
                        <i class="bi bi-arrow-left"></i>
                    </div> 
                </a> 
            </button>
            <div class="about-img wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                <img src="{{ Storage::url('settings/'.$data['settings']->about_image) }}" alt="about us">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="about-box wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                <div class="about-text">
                    <div class="about-text-header">
                        <div class="header-left">
                            <span> @lang('site.Trust By Clients') </span>
                            <h2>18,653+</h2>
                        </div>
                        <div class="icon">
                            <i class="bi bi-arrow-left"></i>
                        </div>
                    </div>
                    <p> @lang('site.Trust By Clients more than 18000 client in egypt') </p>
                </div>
            </div>
            <div class="about-adv">
                <div class="adv-box">
                    <ul>
                        @foreach ($goals as $goal)
                            <li class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                            <i class="bi bi-check-circle-fill"></i>
                            {{ $goal->title }}
                        </li>
                        @endforeach
                      
                    </ul>
                    <span class="line"></span>
                    <div class="adv-item wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <div class="icon">
                            <i class="bi bi-person-raised-hand"></i>
                        </div>
                        <div class="text">
                            <h4>highly qualified and experience</h4>
                        </div>
                    </div>
                    <div class="adv-item wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <div class="icon">
                            <i class="bi bi-basket"></i>
                        </div>
                        <div class="text">
                            <h4>fresh and qualified vegetables</h4>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> @lang('site.read more') </a>
                    <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="layer">
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- end the about section -->


<!-- start the category section -->
<section class="category">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> @lang('site.categories') </h2>
                <p class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                @lang('site.You can browse the various factory categories that suit all tastes.')
            </p>
                <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer" class="img-sec" class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> 
            </div>
        </div>
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-lg-4">
                <div class="category-box wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                    <div class="img">
                        <img src="{{ Storage::url('categories/'.$category->image) }}" alt="{{ $category->title }}">
                    </div>
                    <div class="category-title">
                        <h3>{{ $category->title }}</h3>
                    </div>
                    <div class="category-text">
                        <div class="icon">
                            <img src="{{ Storage::url('categories/'.$category->icon) }}" alt="{{ $category->title }}">
                        </div>
                        <h3>{{ $category->title }}</h3>
                        <span></span>
                        <p>{{ $category->subtitle }}</p>
                        <button><a href="{{ route('shop.index' , ['category' => $category->id] ) }}"> @lang('site.our shop') </a></button>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</section>



<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> @lang('site.our products') </h2>
                <p class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> @lang('site.Check out the wonderful selection of products that we offer with high quality') </p>
                <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer" class="img-sec"> 
            </div>
        </div>
        <div class="row">
           @foreach ($products as $product)
           <div class="col-lg-3 col-md-6">
            <div class="box wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                <div class="img-box">
                    <img src="{{ Storage::url('products/'.$product->image) }}" alt="item">
                    <button><a href="{{ route('products.show' , $product ) }}"> @lang('site.quick view') </a></button>
                </div>
                <div class="text-box">
                    <a href="{{ route('products.show' , $product ) }}">{{ $product->name }}</a>
                    @if ($product->price)
                    <span>{{ $product->getPrice() }} @lang('site.le') </span>
                    @endif
                    <span class="offer"> @lang('site.new') </span>
                </div>
                <span id="one"></span>
                <span id="two"></span>
                <span id="three"></span>
                <span id="four"></span>
            </div>
        </div>
        @endforeach
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <button class="last-btn wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                <a href="{{ route('shop.index') }}"> 
                    @lang('site.all products')
                    <div class="icon">
                        <i class="bi bi-arrow-left"></i>
                    </div> 
                </a> 
            </button>
        </div>
    </div>
</div>
<img src="{{ asset('site_assets/img/Leaf-1.png') }}" alt="feature-arrow-1" class="feature">
<img src="{{ asset('site_assets/img/zaitoun.png') }}" alt="zaitoun" class="zaitoun">
</section>

<section class="our-offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <span class="offer-banner wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> @lang('site.our offers') </span>
                <h2 class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> @lang('site.our latest offers') </h2>
                <p class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                   @lang('site.We have a collection of the best offers on our products that suit everyone')
                </p>
                <button class="last-btn wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> 
                    <a href="{{ route('shop.index') }}"> 
                        @lang('site.all products')
                        <div class="icon">
                            <i class="bi bi-arrow-left"></i>
                        </div> 
                    </a> 
                </button>
            </div>
            <div class="col-lg-9">
                <div class="offers">
                    @foreach ($offers as $offer)
                    <div class="box wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <div class="img-box">
                            <img src="{{ Storage::url('products/'.$product->image) }}" alt="item">
                            <button><a href="{{ route('products.show' , $offer ) }}"> @lang('site.quick view') </a></button>
                        </div>
                        <div class="text-box">
                            <a href="{{ route('products.show' , $offer ) }}">{{ $offer->name }}</a>
                           @if ($offer->price)
                               <span> {{ $offer->getPrice() }} @lang('site.le') </span>
                           @endif
                            <span class="offer">new</span>
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


<div class="certificates">
   <div class="certi-boxes">
    @foreach ($certificates as $certificate)
    <div class="box">
        <span>{{ $certificate->content }}</span>
    </div>
    @endforeach
</div>
<div class="certi-boxes">
    @foreach ($certificates as $certificate)
    <div class="box">
        <span>{{ $certificate->content }}</span>
    </div>
    @endforeach
</div>

</div>



@endsection