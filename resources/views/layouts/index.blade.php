<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>International Week of Innovative Ideas
    </title>
    <!-- Favicons -->
    <link href="{{asset('frontend/image/favicon.ico')}}" rel="icon">
    <link href="{{asset('frontend/image/apple-touch-icon.ico')}}" rel="apple-touch-icon">
  
    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{asset('frontend/assets/wow/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/magnific-popup/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/swiper/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/app.css')}}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">  
</head>

<body>

    <div class="wrapper" id="wrapper">
       <div class="main_content">
          <header id="home" class="header header1 sticky-on trheader">
            <div id="navbar-wrap" class="navbar-wrap">
                <div class="header-menu">
                    <div class="header-width">
                        <div class="container-fluid">
                        <div class="inner-wrap">
                            <div class="d-flex align-items-center justify-content-between">
                            <div class="site-branding">
                                <a href="{{route('index')}}" class="logo logo-light wow fadeInUp animated" data-wow-delay="0.20s"><img src="{{asset('frontend/image/min.webp')}}" alt="Logo" width="50"></a>
                                <a href="{{route('index')}}" class="logo logo-light wow fadeInUp animated" data-wow-delay="0.40s"><img src="{{asset('frontend/image/logo.webp')}}" alt="Logo" width="120"></a>
                                <a href="{{route('index')}}" class="logo logo-dark"><img src="{{asset('frontend/image/min.webp')}}" alt="Logo" width="50"></a>
                                <a href="{{route('index')}}" class="logo logo-dark"><img src="{{asset('frontend/image/logo.webp')}}" alt="Logo" width="120"></a>
                            </div>
                            <nav id="dropdown" class="template-main-menu menu-text-light">
                                <ul class="menu">
                                <li class="menu-item active menu-item-has-children wow fadeInUp animated" data-wow-delay="0.1s">
                                    <a href="{{route('index')}}">{{__('HOME')}}</a>
                                </li>
                                <li class="menu-item menu-item-has-children mega-menu mega-menu-col-2 wow fadeInUp animated" data-wow-delay="0.2s">
                                    <a href="event.html">{{__('EVENTS')}}</a>
                                </li>
                                <li class="menu-item menu-item-has-children wow fadeInUp animated" data-wow-delay="0.3s">
                                    <a href="news.html">{{__('NEWS')}}</a>
                                </li>
                                <li class="menu-item menu-item-has-children wow fadeInUp animated" data-wow-delay="0.4s">
                                    <a href="speaker.html">{{__('SPEAKERS')}}</a>
                                </li>
                                <li class="menu-item menu-item-has-children wow fadeInUp animated" data-wow-delay="0.5s">
                                    <a href="#schedule">{{__('SCHEDULE')}}</a>
                                </li>
                                <li class="menu-item menu-item-has-children wow fadeInUp animated" data-wow-delay="0.6s">
                                    <a href="#gallery">{{__('GALLERY')}}</a>
                                </li>
                                <li class="menu-item menu-item-has-children wow fadeInUp animated" data-wow-delay="0.7s">
                                    <a href="#contact">{{__('GALLERY')}}</a>
                                </li>
                                <li class="menu-item menu-item-has-children wow fadeInUp animated" data-wow-delay="0.8s">
                                    <a class="inno-cursor">INNOWEEK 2022</a>
                                    <ul class="sub-menu menu-w">
                                    <li class="menu-item"><a href="{{asset('frontend/pdf/inno.pdf')}}" target="_blank">{{__('Innoweek 2022 Invitation')}}</a>
                                    </li>
                                    <li class="menu-item"><a href="{{asset('frontend/pdf/Innoen.pdf')}}" target="_blank">{{__('Innoweek 2022 Presentation')}}</a>
                                    </li>
                                    </ul>
                                </li>
                                </ul>
                            </nav>
                            <nav id="dropdown" class="template-main-menu menu-text-light d-flex align-items-center justify-content-center">
                                @php $locale = session()->get('locale'); @endphp
                                <ul class="menu">
                                @switch($locale)
                                    @case('')
                                        <li class="menu-item menu-item-has-children wow fadeInUp animated" data-wow-delay="0.9s">
                                        <a href="locale/en" class="d-flex align-items-center justify-content-center inno-cursor">
                                            <img class="mx-2" width="30" src="{{asset('frontend/image/en.png')}}" alt="English">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu menu-color">
                                            <li class="menu-item text-center"><a href="locale/ru"><img class="mx-2" width="30" src="{{asset('frontend/image/ru.png')}}" alt="Russian"></a>
                                            </li>
                                            <li class="menu-item text-center"><a href="locale/uz"><img class="mx-2" width="30" src="{{asset('frontend/image/uz.png')}}" alt="Uzbek"></a>
                                            </li>
                                        </ul>
                                        </li>
                                    @break
                                    @case('uz')
                                        <li class="menu-item menu-item-has-children wow fadeInUp animated" data-wow-delay="0.9s">
                                        <a href="locale/uz" class="d-flex align-items-center justify-content-center inno-cursor">
                                            <img class="mx-2" width="30" src="{{asset('frontend/image/uz.png')}}" alt="Uzbek">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu menu-color">
                                            <li class="menu-item text-center"><a href="locale/ru"><img class="mx-2" width="30" src="{{asset('frontend/image/ru.png')}}" alt="Russian"></a>
                                            </li>
                                            <li class="menu-item text-center"><a href="locale/en"><img class="mx-2" width="30" src="{{asset('frontend/image/en.png')}}" alt="English"></a>
                                            </li>
                                        </ul>
                                        </li>
                                    @break
                                    @case('ru')
                                        <li class="menu-item menu-item-has-children wow fadeInUp animated" data-wow-delay="0.9s">
                                        <a href="locale/ru" class="d-flex align-items-center justify-content-center inno-cursor">
                                            <img class="mx-2" width="30" src="{{asset('frontend/image/ru.png')}}" alt="Russian">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu menu-color">
                                            <li class="menu-item text-center"><a href="locale/en"><img class="mx-2" width="30" src="{{asset('frontend/image/en.png')}}" alt="English"></a>
                                            </li>
                                            <li class="menu-item text-center"><a href="locale/uz"><img class="mx-2" width="30" src="{{asset('frontend/image/uz.png')}}" alt="Uzbek"></a>
                                            </li>
                                        </ul>
                                        </li>
                                    @break
                                    @case('en')
                                        <li class="menu-item menu-item-has-children wow fadeInUp animated" data-wow-delay="0.9s">
                                        <a href="locale/en" class="d-flex align-items-center justify-content-center inno-cursor">
                                            <img class="mx-2" width="30" src="{{asset('frontend/image/en.png')}}" alt="English">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu menu-color">
                                            <li class="menu-item text-center"><a href="locale/uz"><img class="mx-2" width="30" src="{{asset('frontend/image/uz.png')}}" alt="Uzbek"></a>
                                            </li>
                                            <li class="menu-item text-center"><a href="locale/ru"><img class="mx-2" width="30" src="{{asset('frontend/image/ru.png')}}" alt="Russian"></a>
                                            </li>
                                        </ul>
                                        </li>
                                    @break
                                    @default
                                        
                                @endswitch
                                </ul>
                                <ul class="header-action-items">
                                <li class="header-action-item d-none d-xl-block wow fadeInUp animated" data-wow-delay="1s">
                                    <button type="button" class="item-btn btn-fill style-one offcanvas-menu-btn style-one menu-status-open">
                                    {{__('REGISTRATION')}}
                                    </button>
                                </li>
                                </ul>
                            </nav>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
          </header>

          <div class="rt-header-menu mean-container" id="meanmenu">
            <div class="mean-bar">
            <a href="index.html">
                <img src="{{asset('frontend/image/min.webp')}}" alt="Logo" width="30">
                <img src="{{asset('frontend/image/logo.webp')}}" alt="Logo" width="80">
            </a>
            <span class="sidebarBtn">
                <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            </span>
            </div>
            <div class="rt-slide-nav Down">
            <div class="offscreen-navigation">
                <nav class="menu-main-primary-container">
                <ul class="menu">
                    <li class="list active-link">
                    <a class="animation" href="index.html">{{__('HOME')}}</a>
                    </li>
                    <li class="list">
                    <a class="animation" href="event.html">{{__('EVENTS')}}</a>
                    </li>
                    <li class="list">
                    <a class="animation" href="news.html">{{__('NEWS')}}</a>
                    </li>
                    <li class="list">
                    <a class="animation" href="speaker.html">{{__('SPEAKERS')}}</a>
                    </li>
                    <li class="list">
                    <a class="animation" href="#schedule">{{__('SCHEDULE')}}</a>
                    </li>
                    <li class="list">
                    <a class="animation" href="#gallery">{{__('GALLERY')}}</a>
                    </li>
                    <li class="list">
                    <a class="animation" href="#contact">{{__('CONTACTS')}}</a>
                    </li>
                    <li class="list">
                    <a class="animation scliked" href="{{asset('frontend/pdf/inno.pdf')}}" target="_blank">{{__('Innoweek 2022 Invitation')}}</a>
                    </li>
                    <li class="list">
                    <a class="animation scliked" href="{{asset('frontend/pdf/Innoen.pdf')}}" target="_blank">{{__('Innoweek 2022 Presentation')}}</a>
                    </li>
                </ul>
                </nav>
            </div>
            </div>
          </div>

          @yield('content')

          <footer class="footer-wrap-layout1">
            <div class="footer1 footer-top">
                <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.1s" data-wow-duration="1s">
                    <div class="footer-widgets">
                        <a href="#home" class="logo logo-light"><img src="{{asset('frontend/image/min.webp')}}" alt="Logo" width="50"></a>
                            <a href="#home" class="logo logo-light"><img src="{{asset('frontend/image/logo.webp')}}" alt="Logo" width="120"></a>
                        <p class="description mt-2 wow fadeInLeft animated" data-wow-delay="0.2s" data-wow-duration="1s">{!! substr($innoweeks->{'description_'.App::getLocale()},0,90).'...' !!}</p>
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
                    <div class="col-lg-3 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1s">
                    <div class="footer-widgets">
                        <h3 class="widget-title wow fadeInLeft animated" data-wow-delay="0.4s" data-wow-duration="1s">{{__('Useful Links')}}</h3>
                        <div class="footer-menu">
                        <ul>
                            <li class=" wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-duration="1s">
                            <a href="#home"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                </svg>{{__('Home')}}</a>
                            </li>
                            <li class=" wow fadeInLeft animated" data-wow-delay="0.6s" data-wow-duration="1s"><a href="#"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                </svg>{{__('Technoways')}}</a></li>
                            
                        </ul>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-duration="1s">
                    <div class="footer-widgets">
                        <h3 class="widget-title wow fadeInLeft animated" data-wow-delay="0.6s" data-wow-duration="1s">Contacts</h3>
                        <div class="footer-menu">
                        <ul>
                            <li class="wow fadeInLeft animated" data-wow-delay="0.7s" data-wow-duration="1s"><a class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                </svg>{{__('Address')}}:</a>
                                <p class="description">{{$innoweeks->address}}</p>
                            </li>
                            <li class="wow fadeInLeft animated" data-wow-delay="0.8s" data-wow-duration="1s"><a class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                </svg>{{__('Phone')}}: 
                                <p class="description"><a href="tel:+998712033200">{{$innoweeks->phone}}</p>
                            </a>
                            </li>    
                            <li class="wow fadeInLeft animated" data-wow-delay="0.9s" data-wow-duration="1s"><a class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                            </svg>{{$innoweeks->email}}:</a>
                            <p class="description"> <a href="mailto:innoweekuz2021@gmail.com">{{$innoweeks->email}}</a></p>
                            </li>                   
                        </ul>
                        </div>
                    </div>
                    </div>
                    
                </div>
                </div>
            </div>
            <div class="footer1 footer-bottom">
                <div class="copyright-text wow fadeInLeftBig animated p-xl-1" data-wow-delay="1s" data-wow-duration="1s">&copy; <span id="currentYear"></span>  {{__('INNOWEEK All Rights Reserved. Developed by')}}</div>
                <span class="wow fadeInLeftBig animated" data-wow-delay="1.3s" data-wow-duration="2s"> <a href="http://www.mimaxgroup.com/" class="link-text">"MIMAX SOFTWARE GROUP".</a></span>
            </div>
          </footer>
        </div>
    </div>


  <!-- Dependency Scripts -->
  <script src="{{asset('frontend/assets/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/assets/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/magnific-popup/js/magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/assets/countdown/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('frontend/assets/wow/wow.min.js')}}"></script>
  <script src="{{asset('frontend/assets/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/swiper/js/swiper.min.js')}}"></script>
  <script src="{{asset('frontend/assets/validator/validator.min.js')}}"></script>
  <!-- Custom Script -->
  <script src="{{asset('frontend/js/app.js')}}"></script>
</body>

</html>