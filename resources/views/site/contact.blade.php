
@extends('site.layouts.master')

@section('page_content')
    <!-- start the banner section -->
    <section class="banner" style="background:url({{ Storage::url('settings/'.$data['settings']->contact_banner ) }}) center / cover no-repeat fixed;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span> @lang('site.Contact Us Today To Work Together') </span>
                        <h2> @lang('site.contact us') </h2>
                        <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <li>
                            <a href="{{ route('index') }}"> @lang('site.home') </a>
                            <i class="bi bi-arrow-right"></i>
                            <a href="{{ route('contact') }}"> @lang('site.contact us') </a>
                        </li>
                    </div>
                </div>
            </div>
            <img src="{{ asset('site_assets/img/shape-layer2.png') }}" alt="shape-layer2" class="shape">
        </div>
    </section>
    <!-- end the banner section -->

    <!-- start the contact section  -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-img">
                        <img src="{{ Storage::url('settings/'.$data['settings']->about_image) }}" alt="factory">
                    </div>
                    <div class="info">
                        <div class="info-box">
                            <div class="info-item">
                                <div class="icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="text">
                                    <h4> @lang('site.factory address') </h4>
                                    <span> {{ $data['settings']->address }} </span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="text">
                                    <h4> @lang('site.contact us') </h4>
                                    <span> {{ $data['settings']->email }} </span>
                                    <span> @lang('site.Call Us 24/7') :  {{ $data['settings']->mobile }} </span>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="icon">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="text">
                                    <h4> @lang('site.Working Hours') </h4>
                                    <span> {{ $data['settings']->working_hours }} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <span class="title"> @lang('site.Let\'s Cooperate Together') </span>
                    <h2> @lang('site.Contact Us Today!') </h2>
                    <span class="sec-title"> @lang('site.We will reply you within 24 hours via email, thank you for contacting') </span>
                    <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer" class="layer">
                    <form method="POST" action="{{ route('contact.send') }}" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" name="name" placeholder="@lang('site.name')">
                                @error('name')
                                <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="email" name="email" placeholder="@lang('site.email')">
                                @error('email')
                                <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <input type="text" name="phone" placeholder="@lang('site.phone number')">
                                @error('phone')
                                <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <textarea name="message" placeholder=" @lang('site.message') ..."></textarea>
                                @error('message')
                                <p class="text-danger"> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <button name="button" type="submit" class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> 
                            @lang('site.send message')
                            <div class="icon">
                                <i class="bi bi-arrow-right"></i>
                            </div> 
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <img src="{{ asset('site_assets/img/h1-img-cm-layer1.png') }}" alt="h1-img-cm-layer1" class="faq">
    </section>
    <!-- end the contact section  -->

    
@endsection