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
                        <span class="ma5menu__sr-only">{{__('MENU')}}</span>
                    </button>
                    <h2>
                        <a href="{{route('m-home')}}">
                            <img style="padding-bottom: 6px;" width="73px" src="{{ asset('/assets/images/logo.webp') }}"
                                alt="">
                        </a>

                    </h2>
                </div>

                <ul class="site-menu">
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-1.png') }}" alt="Images">
                        @if (auth()->check())
                        <a href="{{ route('m-profile') }}">
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                        </a>
                        @else
                        <a href="{{ route('m-login') }}">
                            {{__('LOGIN')}}
                        </a>
                        @endif
                    </li>
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-2.png') }}" alt="Images">
                        <a href="{{ route('m-about') }}">
                            {{__('ABOUT')}}
                        </a>
                    </li>
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-2.png') }}" alt="Images">
                        <a href="{{route('m-map')}}">
                            {{__('MAP')}}
                        </a>
                    </li>
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-2.png') }}" alt="Images">
                        <a href="{{route('m-calendar')}}">
                            {{__('CALENDAR')}}
                        </a>
                    </li>
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-2.png') }}" alt="Images">
                        <a href="{{route('m-qrkod')}}">
                            {{__('QRKOD')}}
                        </a>
                    </li>
                    <li>
                        <img src="{{ asset('/assets/images/menu-icon/icon-2.png') }}" alt="Images">
                        <a href="{{route('m-setting')}}">
                            {{__('SETTINGS')}}
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
        <h2 style="margin: 4rem 0 2rem 0;">{{__('NEWS')}}</h2>
    </div>
    <div class="features-slide owl-carousel owl-theme">
        @foreach($news as $new)
            <div class="single-features card-bg-a1dbd2">
                <a href="{{route('newsShow',['id'=>$new->id])}}">
                    <img style="object-fit: cover; width: 100%; height: 230px;"
                         src="{{ 'uploads/news/'.$new->user_image }}" alt="">
                </a>
                <div class="features-content">
                    <h3>{{$new->title_uz}}</h3>
                    <p>"InnoWeek-2022" regional exhibition of innovative ideas was held in ...
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- End Features News -->

<!-- Start Speakers Area -->
<div class="components-area">
    <div class="container">
        <div class="section-title mt-3">
            <h2 style="margin-bottom: 2rem;">{{__('CONFERENCE')}}</h2>
        </div>
        @foreach($conferens as $conf)
        <a href="{{route('conferensShow',['id'=>$conf->id])}}">
            <div class="components-support d-flex align-items-center mb-4">
                <img src="{{ asset('/uploads/conference/'.$conf->user_image) }}" alt="Images">
                <div class="components-content">
                    <h6>{!! $conf->{'title_'.App::getLocale()} !!}</h6>

                    <div class="icon d-flex align-items-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>{{$conf->started_at}}</p>
                    </div>

                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
<!-- End Speakers Area -->

<!-- Button trigger modal -->

<!-- Start Customer Area -->
<div class="customer-area">
    <h2 style="text-align: center; margin: .5rem 0 2rem 0;">{{__('SPEAKERS')}}</h2>
    <div class="owl-carousel-wrap">
        <div class="slide-style-four owl-carousel owl-theme">
            @foreach($speakers as $speaker)
            <div class="slide-item">
                <a href="{{route('speakerShow',['id'=>$speaker->id])}}">
                    <img style="margin-right: 0; margin-top: 10px; width: 100%;
					height: 180px;
					object-fit: cover; border-radius: 5px;" src="{{ asset('/uploads/speaker/'.$speaker->image) }}" alt="Images">
                </a>
                <div class="customer-content d-flex flex-column align-items-center">
                    <h4 style="margin-top: 10px; text-align: center; font-size: 15px;">{{$speaker->full_name}}</h4>
                    <span>{{$speaker->job}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Customer Area -->


<!-- Start App Navbar Area -->
<div class="app-navbar-area">
    <div class="container">
        <ul class="d-flex justify-content-between align-items-end">
            <li>
                <a href="{{route('m-youtobe_list')}}">
                    <div class="icon">
                        <img src="{{ asset('/assets/images/page.png') }}" alt="Images" style="height: 20px;">
                    </div>
                    <span>{{__('LIVE')}}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('m-home') }}" class="active">
                    <div class="icon">
                        <img src="{{ asset('/assets/images/home.png') }}" style="height: 30px;" alt="Images">
                    </div>
                    <span>{{__('HOME')}}</span>
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
