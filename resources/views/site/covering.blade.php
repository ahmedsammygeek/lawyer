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
    <section class="banner" style="background:url({{ Storage::url('settings/'.$data['settings']->covering_banner ) }}) center / cover no-repeat fixed;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span> @lang('site.See Our products covering Photos') </span>
                        <h2> @lang('site.Products covering') </h2>
                        <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <li>
                            <a href="{{ route('index') }}"> @lang('site.home') </a>
                            <i class="bi bi-arrow-right"></i>
                            <a href="{{ route('covering.index') }}"> @lang('site.covering products') </a>
                        </li>
                    </div>
                </div>
            </div>
            <img src="{{ asset('site_assets/img/shape-layer2.png') }}" alt="shape-layer2" class="shape">
        </div>
    </section>
    <!-- end the banner section -->

    <!-- start the covering section -->
    <section class="covering">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2> @lang('site.products covering') </h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, adipisci.</p>
                    <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer" class="img-sec">
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                   <div class="col-lg-3 col-md-6">
                    <div class="covering-box">
                        <a href="{{ Storage::url('services/'.$service->image) }}" data-lightbox="models">
                            <div class="cover-img">
                                <img src="{{ Storage::url('services/'.$service->image) }}" alt="">
                            </div>
                            <div class="cover-title">
                                <h3>{{ $service->name }}</h3>
                            </div>
                        </a> 
                    </div>
                </div>
                @endforeach        
            </div>
      
        </div>
    </section>
    <!-- end the covering section -->



@endsection