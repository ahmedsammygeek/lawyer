
@php
$lang =  LaravelLocalization::getCurrentLocale();
$dir = 'rtl';

if ($lang == 'ar') {
    $dir = 'rtl';
}else {
    $dir ='ltr';
}
@endphp


<!DOCTYPE html>
<html lang="{{ $lang }}" dir="{{ $dir }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/xicon" href="{{ asset('site_assets/favicon-32x32.png') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title> {{ $data['settings']->site_name }} </title>
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('site_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site_assets/css/animate.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('site_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('site_assets/css/slick-theme.css') }}">

    <link rel="stylesheet" href="{{ asset('site_assets/css/lightbox.css') }}">

    <!-- main css file -->
    <link rel="stylesheet" href="{{ asset('site_assets/css/main.css') }}">  

    @if ($lang == 'ar')
        <link rel="stylesheet" href="{{ asset('site_assets/ar/css/main-ar.css') }}">  
    @endif

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
         @livewireStyles
</head>
<body>


    <!-- start the loader -->
    <div id="preloader">
        <div id="loader"></div>
    </div>
    <!-- end the loader -->
    
    <!-- start the header -->

    @include('site.layouts.header')
    <!-- end the header -->

    @yield('page_content')

    @include('site.layouts.footer')
    <!-- scripts -->
    <script src="{{ asset('site_assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('site_assets/js/jquery-2.2.2.min.js') }}"></script>
    <script src="{{ asset('site_assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('site_assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('site_assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('site_assets/js/lightbox.js') }}"></script>
    
    
    @if ($lang == 'ar')
        <script src="{{ asset('site_assets/ar/js/main-ar.js') }}"></script>
    @else
    <script src="{{ asset('site_assets/js/main.js') }}"></script>
    @endif

     @livewireScripts
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <x-livewire-alert::scripts />
</body>
</html>