
@extends('site.layouts.master')

@section('page_content')


<!-- start the banner section -->
<section class="banner" style="background:url({{ Storage::url('settings/'.$data['settings']->about_banner ) }}) center / cover no-repeat fixed;" >
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span> @lang('site.Nurturing the Earth, Feeding the World') </span>
                    <h2> @lang('site.about us') </h2>
                    <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <li>
                        <a href="{{ route('index') }}"> @lang('site.home') </a>
                        <i class="bi bi-arrow-right"></i>
                        <a href="{{ route('about') }}"> @lang('site.about us') </a>
                    </li>
                </div>
            </div>
        </div>
        <img src="{{ asset('site_assets/img/shape-layer2.png') }}" alt="shape-layer2" class="shape">
    </div>
</section>
<!-- end the banner section -->


<!-- start the about section -->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                {!! $data['settings']->about  !!}
                <div class="about-img wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                    <img src="{{ Storage::url('settings/'.$data['settings']->about_image ) }}" alt="about us">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-box wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                    <div class="about-text">
                        <div class="about-text-header">
                            <div class="header-left">
                                <span>@lang('site.Trust By Clients') </span>
                                <h2>18,653+</h2>
                            </div>
                            <div class="icon">
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                        <p> @lang('site.Trust By Clients more than 18000 client in egypt')</p>
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
                                <h4> @lang('site.highly qualified and experience') </h4>
                            </div>
                        </div>
                        <div class="adv-item wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                            <div class="icon">
                                <i class="bi bi-basket"></i>
                            </div>
                            <div class="text">
                                <h4> @lang('site.fresh and qualified vegetables') </h4>
                            </div>
                        </div>
                        <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="layer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end the about section -->



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


<!-- start the why-us section -->
<section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2> @lang('site.why choose us') </h2>
                <p> @lang('site.Our products are 100% natural and of high quality.') </p>
                <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="why-us-box">
                    <div class="inner-box">
                        <div class="row">
                            @foreach ($goals as $goal)
                               <div class="col-lg-4">
                                <div class="why-item">
                                    <div class="icon">
                                        <img src="{{ Storage::url('goals/'.$goal->image) }}" alt="organic">
                                    </div>
                                    <div class="text">
                                        <h3> {{ $goal->title }} </h3>
                                        <p>{{ $goal->content }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end the why-us section -->

@endsection