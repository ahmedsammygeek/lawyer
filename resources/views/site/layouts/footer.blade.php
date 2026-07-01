    <div class="scroll">
        <i class="bi bi-arrow-up-short"></i>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('index') }}">
                        <img src="{{ Storage::url('settings/'.$data['settings']->logo ) }}" alt="logo" class=" wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h2 class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> {{ $data['settings']->site_name }} </h2>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="social wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <ul>
                            <li><a target="_blank" href="{{ $data['settings']->facebook }}"><i class="bi bi-facebook"></i></a></li>
                            <li><a target="_blank" href="{{ $data['settings']->youtube }}"><i class="bi bi-youtube"></i></a></li>
                            <li><a target="_blank" href="{{ $data['settings']->instagram }}"><i class="bi bi-instagram"></i></a></li>
                            <li><a target="_blank" href="{{ $data['settings']->twitter }}"><i class="bi bi-linkedin"></i></a></li>
                            <li><a target="_blank" href="https://wa.me/{{ $data['settings']->whatsapp }}"><i class="bi bi-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h3 class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> @lang('site.contact us') </h3>
                    <ul class="adv wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <li>
                            <i class="bi bi-geo-alt"></i>
                            {{ $data['settings']->address }}
                        </li>
                        <li>
                            <i class="bi bi-telephone"></i>
                            {{ $data['settings']->mobile }}
                        </li>

                        <li>
                            
                            <a href="https://wa.me/{{ $data['settings']->whatsapp }}"> <i class="bi bi-whatsapp"></i> {{ $data['settings']->whatsapp }} </a>
                        </li>

                        <li>
                            
                            <a href="https://wa.me/{{ $data['settings']->another_whatsapp }}"> <i class="bi bi-whatsapp"></i> {{ $data['settings']->another_whatsapp }} </a>
                        </li>


                        <li>
                            <i class="bi bi-envelope"></i>
                            {{ $data['settings']->email }}
                        </li>
                        <li>
                            <i class="bi bi-clock"></i>
                            {{ $data['settings']->working_hours }}
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3 class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> @lang('site.site map') </h3>
                    <ul class="links wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <li class="active"><a href="{{ route('index') }}"> @lang('site.home') </a></li>
                        <li><a href="{{ route('about') }}"> @lang('site.about us') </a></li>
                        <li><a href="{{ route('shop.index') }}"> @lang('site.shop') </a></li>
                        <li><a href="{{ route('covering.index') }}"> @lang('site.covering') </a></li>
                        <li><a href="{{ route('contact') }}"> @lang('site.contact us') </a></li>
                        <li><a href="{{ route('privacy') }}"> @lang('site.policy') </a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">  @lang('site.newsletter') </h3>
                    <form class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <input type="email" placeholder="@lang('site.email') ">
                        <button type="submit">
                            @lang('site.subscribe now')
                            <div class="icon">
                                <i class="bi bi-send"></i>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <span class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s"> @lang('site.copy rights') </span>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a href="https://wa.me/+201099171659" target="-blank" class="wow slideInUp" data-wow-duration="2s" data-wow-delay=".7s">
                        <i class="bi bi-code-slash"></i> @lang('site.developed by') <span> @lang('site.developer') </span>
                    </a> 
                </div>
            </div>
        </div>
        <img src="{{ asset('site_assets/img/ft-shap-layer1.webp') }}" alt="ft-shap-layer1" class="ft-shap">
    </footer>