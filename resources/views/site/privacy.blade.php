
@extends('site.layouts.master')

@section('page_content')
<!-- start the banner section -->
<section class="banner" style="background:url({{ Storage::url('settings/'.$data['settings']->terms_banner ) }});">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span> @lang('site.our company privacy') </span>
                    <h2> @lang('site.privacy') </h2>
                    <img src="{{ asset('site_assets/img/pt-layer.webp') }}" alt="pt-layer">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <li>
                        <a href="{{ route('index') }}"> @lang('site.home') </a>
                        <i class="bi bi-arrow-right"></i>
                        <a href="{{ route('privacy') }}"> @lang('site.Privacy & Policy')  </a>
                    </li>
                </div>
            </div>
        </div>
        <img src="{{ asset('site_assets/img/shape-layer2.png') }}" alt="shape-layer2" class="shape">
    </div>
</section>
<!-- end the banner section -->

<!-- start the privacy section -->
<section class="privacy">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                {!! $data['settings']->terms !!}
            </div>
        </div>
    </div>
</section>
<!-- end the privacy section -->

@endsection