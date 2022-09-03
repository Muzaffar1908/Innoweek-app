@extends('layouts.mobile')
@section('styles')
<link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Dancing+Script:wght@400;500;600;700&family=Poppins&family=Roboto:ital,wght@1,100;1,400&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
@endsection

@section('content')

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col">
                <div class="brand-wrap">
                    <button style="display: none;" class="ma5menu__toggle" type="button">
                        <span class="ma5menu__icon-toggle"></span>
                        <span class="ma5menu__sr-only">Menu</span>
                    </button>
                    <h2>
                        <a href="index.html">
                            <img style="padding-bottom: 6px;" width="73px" src="{{ asset('/assets/images/logo.webp') }}"
                                alt="">
                        </a>

                    </h2>
                </div>

                <ul class="site-menu">
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-1.png') }}" alt="Images">
                        @if (auth()->check())
                        <a href="{{ route('m-login') }}">
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                        </a>
                        @else
                        <a href="{{ route('m-login') }}">
                            TIZIMGA KIRISH
                        </a>
                        @endif
                    </li>
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-2.png') }}" alt="Images">
                        <a href="{{ route('m-about') }}">
                            HAQIDA
                        </a>
                    </li>
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-2.png') }}" alt="Images">
                        <a href="{{route('m-map')}}">
                            HARITA
                        </a>
                    </li>
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-2.png') }}" alt="Images">
                        <a href="./taqvim.html">
                            TAQVIM
                        </a>
                    </li>
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-2.png') }}" alt="Images">
                        <a href="qrkod.html">
                            QR KOD
                        </a>
                    </li>
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-2.png') }}" alt="Images">
                        <a href="setting.html">
                            SOZLAMALAR
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col">
                <div class="others-option">
                    <div class="option-item for-mobile-devices">
                        <i class="search-btn ri-search-line px-1"></i>
                        <i class="close-btn ri-close-line"></i>
                        <div class="search-overlay search-popup">
                            <div class='search-box'>
                                <form class="search-form">
                                    <input class="search-input" name="search" placeholder="Search" type="text">
                                    <button class="search-button" type="submit">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Start Features News -->
<div class="features-area ptb-10">
    <div class="section-title">
        <h2 style="margin: 4rem 0 2rem 0;">Yangiliklar</h2>
    </div>
    <div class="features-slide owl-carousel owl-theme">
        <div class="single-features card-bg-a1dbd2">
            <a href="./news-1.html">
                <img style="object-fit: cover; width: 100%; height: 230px;"
                    src="{{ asset('/assets/images/image/img1.jpg') }}" alt="">
            </a>
            <div class="features-content">
                <h3>Italiyalik biznes hamkorlar bilan INNO Texnoparkda uchrashuv o’tkazildi</h3>
                <p>"InnoWeek-2022" regional exhibition of innovative ideas was held in ...
                </p>
            </div>
        </div>
        <div class="single-features card-bg-a1dbd2">
            <a href="./news-2.html">
                <img style="object-fit: cover; width: 100%; height: 230px;"
                    src="{{ asset('/assets/images/image/img2.jpg') }}" alt="">
            </a>
            <div class="features-content">
                <h3>Italiyalik biznes hamkorlar bilan INNO Texnoparkda uchrashuv o’tkazildi</h3>
                <p>"InnoWeek-2022" regional exhibition of innovative ideas was held in ...
                </p>
            </div>
        </div>
        <div class="single-features card-bg-a1dbd2">
            <a href="./news-3.html">
                <img style="object-fit: cover; width: 100%; height: 230px;"
                    src="{{ asset('/assets/images/image/img3.jpg') }}" alt="">
            </a>
            <div class="features-content">
                <h3>Italiyalik biznes hamkorlar bilan INNO Texnoparkda uchrashuv o’tkazildi</h3>
                <p>"InnoWeek-2022" regional exhibition of innovative ideas was held in ...
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End Features News -->

<!-- Start Speakers Area -->
<div class="components-area">
    <div class="container">
        <div class="section-title mt-3">
            <h2 style="margin-bottom: 2rem;">Tadbirlar</h2>
        </div>
        <a href="./tadbir.html">
            <div class="components-support d-flex align-items-center mb-4">
                <img src="{{ asset('/assets/images/image/1.webp') }}" alt="Images">
                <div class="components-content">
                    <h6>“InnoWeek-2022” innovatsion g’oyalar hududiy ko’rgazmasi Namangan viloyatida bo'lib o'tdi</h6>

                    <div class="icon d-flex align-items-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>2022-08-09</p>
                    </div>

                </div>
            </div>
        </a>

        <a href="./tadbir.html">
            <div class="components-support d-flex align-items-center mb-4">
                <img src="{{ asset('/assets/images/image/2.webp') }}" alt="Images">
                <div class="components-content">
                    <h6>“InnoWeek-2022” innovatsion g’oyalar hududiy ko’rgazmasi Namangan viloyatida bo'lib o'tdi</h6>

                    <div class="icon d-flex align-items-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>2022-08-09</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="./tadbir.html">
            <div class="components-support d-flex align-items-center mb-4">
                <img src="{{ asset('/assets/images/image/6.webp') }}" alt="Images">
                <div class="components-content">
                    <h6>“InnoWeek-2022” innovatsion g’oyalar hududiy ko’rgazmasi Namangan viloyatida bo'lib o'tdi</h6>

                    <div class="icon d-flex align-items-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>2022-08-09</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="./tadbir.html">
            <div class="components-support d-flex align-items-center">
                <img src="{{ asset('assets/images/image/7.webp') }}" alt="Images">
                <div class="components-content">
                    <h6>“InnoWeek-2022” innovatsion g’oyalar hududiy ko’rgazmasi Namangan viloyatida bo'lib o'tdi</h6>

                    <div class="icon d-flex align-items-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>2022-08-09</p>
                    </div>
                </div>
            </div>
        </a>


    </div>
</div>
<!-- End Speakers Area -->

<!-- Button trigger modal -->

<!-- Start Customer Area -->
<div class="customer-area">
    <h2 style="text-align: center; margin: .5rem 0 2rem 0;">So'zlovchilar</h2>
    <div class="owl-carousel-wrap">
        <div class="slide-style-four owl-carousel owl-theme">
            <div class="slide-item">
                <a href="./speaker.html">
                    <img style="margin-right: 0; margin-top: 10px; width: 100%;
					height: 180px;
					object-fit: cover; border-radius: 5px;" src="{{ asset('/assets/images/image/speak1.jpg') }}" alt="Images">
                </a>
                <div class="customer-content d-flex flex-column align-items-center">
                    <h4 style="margin-top: 10px; text-align: center; font-size: 15px;">Muhammad Ali Eshonqulov</h4>
                    <span>Rag'bar</span>
                </div>
            </div>
            <div class="slide-item">
                <a href="./speaker.html">
                    <img style="margin-right: 0; border-radius: 5px; margin-top: 10px; width: 100%;
					height: 180px;
					object-fit: cover;" src="{{ asset('/assets/images/image/speak2.jpg') }}" alt="Images">
                </a>
                <div class="customer-content d-flex flex-column align-items-center">
                    <h4 style="margin-top: 10px; text-align: center; font-size: 15px;">Midkhat Shagiakhmetov</h4>
                    <span>Dasturchi</span>
                </div>
            </div>
            <div class="slide-item">
                <a href="./speaker.html">
                    <img style="margin-right: 0; border-radius: 5px; margin-top: 10px; width: 100%;
					height: 180px;
					object-fit: cover;" src="{{ asset('/assets/images/image/speak3.jpg') }}" alt="Images">
                </a>
                <div class="customer-content d-flex flex-column align-items-center">
                    <h4 style="margin-top: 10px; text-align: center; font-size: 15px;">Muzaffar Jalolov</h4>
                    <span>Tadbirkor</span>
                </div>
            </div>
            <div class="slide-item">
                <a href="./speaker.html">
                    <img style="margin-right: 0; border-radius: 5px; margin-top: 10px; width: 100%;
					height: 180px;
					object-fit: cover;" src="{{ asset('/assets/images/image/speak4.jpg') }}" alt="Images">
                </a>
                <div class="customer-content d-flex flex-column align-items-center">
                    <h4 style="margin-top: 10px; text-align: center; font-size: 15px;">Alexander Borisov</h4>
                    <span>Enjiner</span>
                </div>
            </div>
            <div class="slide-item">
                <a href="./speaker.html">
                    <img style="margin-right: 0; border-radius: 5px; margin-top: 10px; width: 100%;
					height: 180px;
					object-fit: cover;" src="{{ asset('/assets/images/image/speak5.jpg') }}" alt="Images">
                </a>
                <div class="customer-content d-flex flex-column align-items-center">
                    <h4 style="margin-top: 10px; text-align: center; font-size: 15px;">Mixail Abramskiy</h4>
                    <span>Muttaxasist</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Customer Area -->


<!-- Start App Navbar Area -->
<div class="app-navbar-area">
    <div class="container">
        <ul class="d-flex justify-content-between align-items-end">
            <li>
                <a href="./you-tube-list.html">
                    <div class="icon">
                        <img src="{{ asset('/assets/images/page.png') }}" alt="Images" style="height: 20px;">
                    </div>
                    <span>Jonli efir</span>
                </a>
            </li>
            <li>
                <a href="{{ route('m-home') }}" class="active">
                    <div class="icon">
                        <img src="{{ asset('/assets/images/home.png') }}" style="height: 30px;" alt="Images">
                    </div>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <div class="icon ma5menu__toggle">
                    <img width="20px" src="{{ asset('/assets/images/icon/hamburger-men.png') }}" alt="Images">
                    <span>Menu</span>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- End App Navbar Area -->
@endsection
@section('script')
<script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
@endsection