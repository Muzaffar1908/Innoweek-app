<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{__('International Week of Innovative Ideas')}}</title>
    <meta property="og:title" content="{{__('International Week of Innovative Ideas')}}" />
    <meta property="og:description" content="{{ strip_tags(substr($innoweeks->{'description_'.App::getLocale()},0,255).'...') }}">
    <meta property="og:type" content="article" />
    <meta property="og:keyword" content="innoweek, idea, wee, inno, ministry, innovative, week of innovation, innoweek 2018, 2018, 2019,2021,2022, innoweek 2022, starup, uzbekistan" />
    <meta property="og:url" content="https://innoweek.uz" />
    <meta property="og:image" content="{{ asset('/frontend/image/logo/innoweek 1.png') }}" />

    <!-- Favicons -->
    <link href="{{ asset('/frontend/image/favicon.ico') }}" rel="icon">
    <link href="{{ asset('/frontend/image/apple-touch-icon.ico') }}" rel="apple-touch-icon">
    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{ asset('/frontend/assets/wow/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/magnific-popup/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/assets/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/frontend/css/app.css') }}">
    @yield('style')
    <!-- flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper" id="wrapper">
        <div id="main_content">
            @livewire('components.navbar')
            @yield('content')
            <footer class="footer-wrap-layout1">
                <div class="footer1 footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.1s"
                                data-wow-duration="1s">
                                <div class="footer-widgets">
                                    <a href="#home" class="logo logo-light"><img src="{{asset('frontend/image/min.webp')}}"
                                            alt="Logo" width="50"></a>
                                    <a href="#home" class="logo logo-light"><img src="{{asset('frontend/image/logo.webp')}}"
                                            alt="Logo" width="120"></a>
                                    <p class="description mt-2 wow fadeInLeft animated" data-wow-delay="0.2s"
                                        data-wow-duration="1s">
                                        {{ strip_tags(substr($innoweeks->{'description_'.App::getLocale()},0,500).'...') }}
                                        </p>
                                    <ul class="footer-social wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1s">
                                        <li class="wow fadeInLeft animated" data-wow-delay="0.7s" data-wow-duration="1s">
                                            <a target="_blank" href="{{$innoweeks->facebook}}" class="facebook"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="wow fadeInLeft animated" data-wow-delay="0.6s" data-wow-duration="1s">
                                            <a target="_blank" href="{{$innoweeks->instagram}}" class="twitter"><i
                                                    class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-duration="1s">
                                            <a target="_blank" href="{{$innoweeks->linkedin}}" class="linkedin"><i
                                                    class="fab fa-telegram"></i></a>
                                        </li>
                                        <li class="wow fadeInLeft animated" data-wow-delay="0.4s" data-wow-duration="1s">
                                            <a target="_blank" href="{{$innoweeks->youtobe}}" class="instagram"><i
                                                    class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-3 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.3s"
                                data-wow-duration="1s">
                                <div class="footer-widgets">
                                    <h3 class="widget-title wow fadeInLeft animated" data-wow-delay="0.4s" data-wow-duration="1s">
                                        {{__('Useful Links')}}</h3>
                                    <div class="footer-menu">
                                        <ul>
                                            <li class=" wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-duration="1s">
                                                <a href="#home"><svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                                    </svg>{{__('Home')}}</a>
                                            </li>
                                            <li class=" wow fadeInLeft animated" data-wow-delay="0.6s" data-wow-duration="1s"><a
                                                    href="#"><svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                                    </svg>{{__('Technoways')}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.5s"
                                data-wow-duration="1s">
                                <div class="footer-widgets">
                                    <h3 class="widget-title wow fadeInLeft animated" data-wow-delay="0.6s" data-wow-duration="1s">
                                        {{__('Contacts')}}</h3>
                                    <div class="footer-menu">
                                        <ul>
                                            <li class="wow fadeInLeft animated" data-wow-delay="0.7s" data-wow-duration="1s"><a
                                                    class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                                    </svg>{{__('Address')}}:</a>
                                                <p class="description">{{$innoweeks->address}}</p>
                                            </li>
                                            <li class="wow fadeInLeft animated" data-wow-delay="0.8s" data-wow-duration="1s"><a
                                                    class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                                    </svg>{{__('Phone')}}:
                                                    <p class="description"><a href="tel:+998712033200">{{$innoweeks->phone}}</p>
                                                </a>
                                            </li>
                                            <li class="wow fadeInLeft animated" data-wow-delay="0.9s" data-wow-duration="1s"><a
                                                    class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                                    </svg>{{ __('Email')}}:</a>
                                                <p class="description"> <a
                                                        href="mailto:{{$innoweeks->email}}">{{$innoweeks->email}}</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="footer1 footer-bottom">
                    <div class="copyright-text wow fadeInLeftBig animated p-xl-1" data-wow-delay="1s" data-wow-duration="1s">&copy;
                        <span id="currentYear"></span> {{__('INNOWEEK All Rights Reserved. Developed by')}}</div>
                    <span class="wow fadeInLeftBig animated" data-wow-delay="1.3s" data-wow-duration="2s"> <a
                            href="http://www.mimaxgroup.com/" target="_blank" class="link-text">"MIMAX SOFTWARE GROUP".</a></span>
                </div>
            </footer> 
        </div>
        @livewire('components.register')
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <a href="#page-top"><i class="fas fa-chevron-up"></i></a>
    </button>

    <!-- Dependency Scripts -->
    <script src="{{ asset('/frontend/assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/magnific-popup/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/countdown/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/swiper/js/swiper.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/swiper/js/scoll-top.js') }}"></script>
    <script src="{{ asset('/frontend/assets/validator/validator.min.js') }}"></script>
    <!-- flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Custom Script -->
    @yield('scripts')
</body>
</html>