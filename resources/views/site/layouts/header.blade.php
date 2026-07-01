   @if  (request()->segment(2) == null )
      <header>
   @endif
    
        <!-- start the nav -->
        <nav class=" {{ request()->segment(2) == null ?   'nav-slider' : '' }}    ">
            <div class="logo">
                <a href="{{ route('index') }}"><img src="{{ Storage::url('settings/'.$data['settings']->logo ) }}" alt="logo"></a>
            </div>
            <div class="menu">
                <ul>
                    <li class="{{ request()->segment(2) == null ? 'active' : '' }}" ><a href="{{ route('index') }}"> @lang('site.home') </a></li>
                    <li class="{{ request()->segment(2) == 'about' ? 'active' : '' }}" ><a href="{{ route('about') }}"> @lang('site.about us') </a></li>
                    <li class="{{ request()->segment(2) == 'shop' ? 'active' : '' }}" ><a href="{{ route('shop.index') }}"> @lang('site.shop') </a></li>
                    <li class="{{ request()->segment(2) == 'covering' ? 'active' : '' }}" ><a href="{{ route('covering.index') }}"> @lang('site.covering') </a></li>
                    <li class="{{ request()->segment(2) == 'contact' ? 'active' : '' }}" ><a href="{{ route('contact') }}"> @lang('site.contact us') </a></li>
                </ul>
            </div>
            <div class="nav-icons">
                <div class="search">
                    <i class="bi bi-search"></i></i>
                </div>
                <div class="lang">
                   @if ($lang == 'ar')
                   <a href="{{ LaravelLocalization::getLocalizedURL('en') }}"> <img src="{{ asset('site_assets/img/Flag_of_the_United_States.svg.png') }}" alt="flag" width="30px" height="20px"></a>
                   @else
                   <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}"><img src="{{ asset('site_assets/img/flag.png') }}" alt="flag" width="30px" height="20px"></a>
                   @endif

                   {{-- <a href="{{ route('index') }}"><img src="{{ asset('site_assets/img/Flag_of_the_United_States.svg.png') }}" alt="flag"></a> --}}
               </div>
               <div class="mobile-icon">
                <i class="bi bi-list"></i></i>
            </div>
        </div>
    </nav>
    <!-- end the nav -->
    <!-- start the slider  -->
    @if (request()->segment(2) == null )
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
         @foreach ($data['slides'] as $slide)
         <div class="carousel-item active">
            <img src="{{ Storage::url('slides/'.$slide->image) }}" class="d-block w-100" alt="slide1">
            <div class="overlay">
                <div class="text">
                    <span>{{ $slide->subtitle }}</span>
                    <h2>{{ $slide->title }}</h2>
                    <button><a href="{{ route('about') }}"> @lang('site.about us') </a></button>
                    <button><a href="{{ route('shop.index') }}"> @lang('site.shop') </a></button>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endif
<!-- end the slider  -->


   @if ( request()->segment(2) == null )
 </header>
   @endif


<!-- start the search-modal -->
<div class="search-modal">
    <form method="GET" action="{{ route('shop.index') }}" >
        <input type="text" name='search' placeholder=" @lang('site.search here') ..... ">
        <button><i class="bi bi-search"></i></i></button>
    </form>
    <div class="close-search">
        <i class="bi bi-x-lg"></i>
    </div>
</div>

<div class="mobile-nav">
    <div class="mobile-logo">
        <a href="{{ route('index') }}"><img src="{{ asset('site_assets/img/logo.png') }}" alt="logo"></a>
    </div>
    <div class="close-nav">
        <i class="bi bi-x-lg"></i>
    </div>
    <div class="mobile-menu">
        <ul>
            <li class="active"><a href="{{ route('index') }}"> @lang('site.home') </a></li>
            <li><a href="{{ route('about') }}"> @lang('site.about us') </a></li>
            <li><a href="{{ route('shop.index') }}"> @lang('site.shop') </a></li>
            <li><a href="{{ route('covering.index') }}"> @lang('site.covering') </a></li>
            <li><a href="{{ route('contact') }}"> @lang('site.contact us') </a></li>

            @if ($lang == 'ar')
            <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}"> en <img src="{{ asset('site_assets/img/Flag_of_the_United_States.svg.png') }}" alt="flag" width="30px" height="20px"></a></li>
            @else
            <li><a href="{{ LaravelLocalization::getLocalizedURL('ar') }}"> en <img src="{{ asset('site_assets/img/flag.png') }}" alt="flag" width="30px" height="20px"></a></li>
            @endif
        </ul>
    </div>
</div>
