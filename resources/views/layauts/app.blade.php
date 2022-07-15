<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>Eduhub - Education And LMS HTML5 Template</title>

    @yield('links')

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        .form {
            width: 100px;
            display: flex;
            flex-direction: row;
            align-items: center;
            color: #fff;
            font-size: 20px
        }

        .lang {
            background-color: rgba(255, 255, 255, 0);
            border: none;
            height: 30px;
            color: #fff;
            font-size: 16px;
            margin-left: 8px
        }

        .lang option {
            background-color: rgb(13, 9, 81);
            padding: 10px;
        }

        .user_name {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .user_name .img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            color: #00af92;
            font-size: 26px;
            border: 2px solid #00af92;
            margin-top: -5px;
            margin-right: 5px;
        }

        .user_name .img i {
            margin-top: -10px;
        }

        .user_drop {}

        .user_drop h5 {
            text-align: center;
        }
    </style>
</head>

<body>


    <header class="home-3 header">

        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+2 123 654 7898</a></li>
                                <li><a href="/cdn-cgi/l/email-protection#046d6a626b44617c65697468612a676b69"><i
                                            class="far fa-envelope"></i><span class="__cf_email__"
                                            data-cfemail="036a6d656c43667b626e736f662d606c6e">{{ __('till.h-email') }}</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-lang">
                            <form class="form" action="">
                                <i class="far fa-globe-americas"></i>
                                <Select class="lang" id="til">

                                    <option value="uz"
                                        {{ session()->get('lang') == 'uz' ? 'selected' : '' }}>
                                        Uzbek</option>
                                    <option value="en"
                                        {{ session()->get('lang') == 'en' ? 'selected' : '' }}>
                                        English</option>
                                    <option value="ru"
                                        {{ session()->get('lang') == 'ru' ? 'selected' : '' }}>
                                        Rus</option>
                                </Select>
                            </form>

                        </div>
                        <div class="header-top-social">
                            <span>{{ __('till.follow') }}:</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('storage/img/logo/logo.png') }}" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="nav-category">
                        <div class="dropdown">
                            <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-grip-vertical"></i>{{ __('till.category') }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/course-category">Software Development</a></li>
                                <li><a class="dropdown-item" href="#">Web Development</a></li>
                                <li><a class="dropdown-item" href="#">Graphics Design</a></li>
                                <li><a class="dropdown-item" href="#">Motion Graphics</a></li>
                                <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                                <li><a class="dropdown-item" href="#">Video Edition</a></li>
                                <li><a class="dropdown-item" href="#">Logo Design</a></li>
                                <li><a class="dropdown-item" href="#">English Learning</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link active" href="/">{{ __('till.home') }}</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link " href="/courses">{{ __('till.course') }}</a>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="/instructor">{{ __('till.instructors') }}</a>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="/contact">{{ __('till.contact') }}</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/about">{{ __('till.about') }}</a>
                            </li>

                        </ul>
                        <div class="header-nav-right">
                            <div class="header-nav-search">
                                <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>
                            </div>
                            <div class="header-cart">
                                <a href="/card" style="margin-right: 6px"><i class="far fa-shopping-cart"></i>
                                    <span>2</span> </a>
                            </div>
                            <div class="header-btn-area">

                                @guest

                                    @if (Route::has('register'))
                                        <a href="/signin" class="header-btn">{{ __('till.sign-in') }}</a>
                                    @endif
                                @else
                                    <div class="nav-item dropdown">

                                        <a class="nav-link user_name dropdown-toggle " href="#"
                                            data-bs-toggle="dropdown">
                                            <img class="img" src="{{ asset('storage/user/' . Auth::user()->img) }}">

                                            <h6>
                                                {{ Auth::user()->name }}
                                            </h6>
                                        </a>
                                        <ul class="dropdown-menu fade-up">

                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="/user/edit/{{ Auth::user()->id }}">Profile Settings</a></li>
                                            <li><a class="dropdown-item"
                                                    href="/instructor-single/{{ Auth::user()->id }}">Teacher Profil</a>
                                            </li>
                                            <li><a class="dropdown-item" href="index-3.html">Home Page 03</a></li>

                                        </ul>
                                    </div>


                                @endguest



                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="{{ __('till.search-plc') }}" required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    @yield('content')
    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="{{ asset('storage/img/logo/logo.png') }}" alt="">
                            </a>

                            <div>
                                <ul class="footer-contact">
                                    <li><a href="tel:+21236547898"><i class="far fa-phone"></i> Tel: +2 123 654
                                            7898</a>
                                    </li>
                                    <li><a href="/cdn-cgi/l/email-protection#177e79717857726f767a677b723974787a"><i
                                                class="far fa-envelope"></i> Email:
                                            <span class="__cf_email__"
                                                data-cfemail="1f767179705f7a677e726f737a317c7072">{{ __('till.h-email') }}</span></a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="footer-social">
                                <li class="facebook-link"><a href="c#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="pinterest-link"><a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li class="twitter-link"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="linkedin-link"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">{{ __('till.quick-links') }}</h4>
                            <ul class="footer-list">
                                <li><a href="#">{{ __('till.home') }}</a></li>
                                <li><a href="#">{{ __('till.course') }}</a></li>
                                <li><a href="#">{{ __('till.instructors') }}</a></li>
                                <li><a href="#">{{ __('till.sales') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box">
                            <h4 class="footer-widget-title">{{ __('till.support') }}</h4>
                            <ul class="footer-list">
                                <li><a href="#">{{ __('till.contact') }}</a></li>

                                <li><a href="#">{{ __('till.terms') }}</a></li>
                                <li><a href="#">{{ __('till.privacy') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">{{ __('till.newsletter') }}</h4>
                            <div class="footer-newsletter">
                                <p>{{ __('till.newsletter-text') }}</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control"
                                            placeholder="{{ __('till.home-email-plc') }}">
                                        <button type="submit"><span class="far fa-envelope"></span></button>
                                    </form>
                                </div>
                            </div>
                            <div class="footer-app-download">
                                <h5>{{ __('till.download') }}</h5>
                                <a href="#"> <img
                                        src="{{ asset('storage/img/download-icon/google-play.png') }}"
                                        alt="">
                                </a>
                                <a href="#"> <img
                                        src="{{ asset('storage/img/download-icon/app-store.png') }}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="copyright-text">
                            &copy;{{ __('till.footer1') }} <span id="date"></span> <a href="#">
                                {{ __('till.footer2') }}</a> {{ __('till.footer3') }}
                        </p>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <ul class="footer-menu">
                            <li><a href="/teams">{{ __('till.terms') }}</a></li>
                            <li><a href="/police">{{ __('till.privacy') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    @yield('scripts')
    <script>
        $(function() {
            var url = "eduhub";
            $('#til').change(function() {
                a = $(this).val();
                window.location.href = url + "/" + a;
            })
        })
    </script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
