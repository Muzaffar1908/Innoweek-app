<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
          .ui-datepicker-calendar {
            display: none;
        }
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
                                <li><a href="tel:{{ $eduhub->tell }}"><i
                                            class="far fa-phone"></i>{{ $eduhub->tell }}</a></li>
                                <li>
                                    <a href="mailto:{{ $eduhub->email }}?subject = Feedback&body = Message">
                                        <i class="far fa-envelope"></i> Email:
                                        <span class="__cf_email__"
                                            data-cfemail="1f767179705f7a677e726f737a317c7072">{{ __('till.h-email') }}</span></a>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-lang">
                            <form class="form" action="">
                                <i class="far fa-globe-americas"></i>
                                <Select class="lang" id="til">

                                    <option value="uz" {{ session()->get('lang') == 'uz' ? 'selected' : '' }}>
                                        Uzbek</option>
                                    <option value="en" {{ session()->get('lang') == 'en' ? 'selected' : '' }}>
                                        English</option>
                                    <option value="ru" {{ session()->get('lang') == 'ru' ? 'selected' : '' }}>
                                        Rus</option>
                                </Select>
                            </form>

                        </div>
                        <div class="header-top-social">
                            <span>{{ __('till.follow') }}:</span>
                            <a href="{{ $eduhub->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $eduhub->telegram }}"><i class="fab fa-telegram"></i></a>
                            <a href="{{ $eduhub->instagram }}"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $eduhub->you_tube }}"><i class="fab fa-youtube"></i></a>
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
                                @foreach ($category as $c)
                                    <li><a class="dropdown-item"
                                            href="/course-category/{{ $c->id }}">{{ $c->name }}</a></li>
                                @endforeach
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
                            @if ($card_count > 0 or isset(Auth::user()->id) and !Auth::user()->uroven == 'admin' or !isset(Auth::user()->id))
                                <div class="header-cart">
                                    <a href="/card/<?if(isset(Auth::user()->id)){echo(Auth::user()->id);}?>"
                                        style="margin-right: 6px"><i class="far fa-shopping-cart"></i>
                                        @if ($card_count > 0)
                                            <span>
                                                {{ $card_count }}</span>
                                        @endif
                                    </a>
                                </div>
                            @endif

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
                                            @if (Auth::user()->uroven === 'teacher')
                                                <li><a class="dropdown-item"
                                                        href="/instructor-single/{{ Auth::user()->id }}/{{ Auth::user()->id }}">Profil</a>
                                                </li>
                                            @endif

                                            @if (Auth::user()->uroven === 'student')
                                                <li><a class="dropdown-item"
                                                        href="/student-single/{{ Auth::user()->id }}/{{ Auth::user()->id }}">Profil</a>
                                                </li>
                                            @endif
                                            @if (Auth::user()->uroven === 'admin')
                                                <li><a class="dropdown-item" href="/adminpanel">Adminpanel</a>
                                                </li>
                                            @endif


                                            <li><a class="dropdown-item" href="/user/edit/{{ Auth::user()->id }}">Profile
                                                    Settings</a></li>

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
        <form action="/search" method="GET">
            @csrf
            <div class="form-group">
                <input type="search" name="search" placeholder="{{ __('till.search-plc') }}"  id="search" required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
            <ul class="search-ul"
                style="background-color:rgba(227, 224, 224, 0.845); position:absolute; width:100%;">

            </ul>
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
                                    <li><a href="tel:</i>{{ $eduhub->tell }}"><i
                                                class="far fa-phone"></i>{{ $eduhub->tell }}</a>
                                    </li>
                                    <li>
                                        <a href="mailto:{{ $eduhub->email }}?subject = Feedback&body = Message">
                                            <i class="far fa-envelope"></i> Email:
                                            <span class="__cf_email__"
                                                data-cfemail="1f767179705f7a677e726f737a317c7072">{{ __('till.h-email') }}</span></a>


                                    </li>
                                </ul>
                            </div>
                            <ul class="footer-social">
                                <li class="facebook-link"><a href="{{ $eduhub->facebook }}"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="pinterest-link"><a href="{{ $eduhub->telegram }}"><i
                                            class="fab fa-telegram-plane"></i></a>
                                </li>
                                <li class="twitter-link"><a href="{{ $eduhub->instagram }}"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li class="linkedin-link"><a href="{{ $eduhub->you_tube }}"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">{{ __('till.quick-links') }}</h4>
                            <ul class="footer-list">
                                <li><a href="/">{{ __('till.home') }}</a></li>
                                <li><a href="/courses">{{ __('till.course') }}</a></li>
                                <li><a href="/instructor">{{ __('till.instructors') }}</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box">
                            <h4 class="footer-widget-title">{{ __('till.support') }}</h4>
                            <ul class="footer-list">
                                <li><a href="/contact">{{ __('till.contact') }}</a></li>

                                <li><a href="/teams">{{ __('till.terms') }}</a></li>
                                <li><a href="/police">{{ __('till.privacy') }}</a></li>
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
                                <a href="{{ $eduhub->google_play }}"> <img
                                        src="{{ asset('storage/download-icon/google-play.png') }}" alt="">
                                </a>
                                <a href="{{ $eduhub->app_story }}"> <img
                                        src="{{ asset('storage/download-icon/app-store.png') }}" alt="">
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
                            &copy;{{ __('till.footer1') }} <span id="date"></span> <a href="/eduhub">
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

        $(document).ready(function() {


            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({

                    url: "{{ route('employee.search') }}",

                    type: "GET",

                    data: {
                        'country': query
                    },

                    success: function(data) {

                        $('.search-ul').html(data);
                    }
                })
                // end of ajax call
            });


            $(document).on('click', 'li', function() {

                var value = $(this).text();
                $('#country').val(value);
                $('#country_list').html("");
            });
        });
        $(document).on('click', function() {

$('.search-ul').html("");
});

        $(function() {
            var url = "eduhub";
            $('#til').change(function() {
                a = $(this).val();
                window.location.href = url + "/" + a;
            })
        })
    </script>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/counter-up.js')}}"></script>
    <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
