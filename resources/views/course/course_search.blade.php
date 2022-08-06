@extends('layauts.app')
@section('links')
    <title>Eduhub - Education And LMS HTML5 Template</title>

    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style2.css">
@endsection("links")

@section('content')
    <main class="main">

        <div class="site-breadcrumb row">
            <div class="hero-shape-area">
                <img class="hero-shape-1" src="{{ asset('storage/img/shape/shape-1.png') }}" alt="">
                <img class="hero-shape-2" src="{{ asset('storage/img/shape/shape-2.png') }}" alt="">
                <img class="hero-shape-3" src="{{ asset('storage/img/shape/shape-3.png') }}" alt="">
                <img class="hero-shape-4" src="{{ asset('storage/img/shape/shape-4.png') }}" alt="">
            </div>
            <div class="container">
                <h2 class="breadcrumb-title">Search</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Search</li>
                </ul>
            </div>
            <div class="hero-search col-6">
                <form action="/search" method="get">
                    @csrf
                    <div class="form-group">
                        <i class="far fa-search"></i>
                        <input type="text" required name="search" class="form-control " value="{{ $search }}"
                            placeholder="{{ __('till.h-t-plhc') }}">
                        <button type="submit">{{ __('till.search') }}</button>
                    </div>
                </form>
            </div>
        </div>


        @if (count($cources) > 0)
        <div class="course-area bg py-120">
            <div class="container">
                <div class="row" style="display: flex; flex-direction:row; justify-content:space-between">
                    <div class="col-6">
                        <div class="site-heading  mb-3">
                            <h4 class="site-title mb-4">Search results from<span>Courses</span></h4>
                        </div>
                    </div>


                    <div class="course-sort-box col-2" style="margin-bottom: -10px">
                        <select class="form-select">
                            <option value="1">Sort By Default</option>
                            <option value="5">Sort By Featured</option>
                            <option value="2">Sort By Latest</option>
                            <option value="3">Sort By Low Price</option>
                            <option value="4">Sort By High Price</option>
                        </select>
                    </div>


                </div>

                <div class="row filter-box">

                    @foreach ($cources as $cource)
                        <div class="col-md-6 col-lg-6 col-xl-4 filter-item">
                            <div class="course-item">
                                <span class="course-tag course-tag-1">{{ $cource->uroven }}</span>
                                <div class="course-img">
                                    <a href="/course-single/{{ $cource->id }}" style="width:100%">

                                        <img src="{{ asset('storage/course/' . $cource->img) }}" alt=""
                                            style="width:100%;height:230px"></a>
                                </div>
                                <div class="course-content">
                                    <div class="course-meta">
                                        <span class="course-category course-category-1">
                                            @if (app()->getLocale('lang') === 'en')
                                                {{ $cource->category_en->name }}
                                            @elseif (app()->getLocale('lang') === 'ru')
                                                {{ $cource->category_ru->name }}
                                            @else
                                                {{ $cource->category_uz->name }}
                                            @endif


                                        </span>
                                        <div class="course-rate">

                                            @for ($i = 0; round($cource->sharxlar_avg_reyting) > $i; $i++)
                                                <i class="fas fa-star"></i>
                                            @endfor
                                            @for ($i = 0; 5 - round($cource->sharxlar_avg_reyting) > $i; $i++)
                                                <i class="far fa-star"></i>
                                            @endfor


                                            <span>({{ $cource->sharxlar_count }})</span>
                                        </div>
                                    </div>
                                    <a href="/course-single/{{ $cource->id }}">
                                        <h4 class="course-title">
                                            {{ substr($cource->name, 0, 52) }}
                                            @if (strlen($cource->name) > 52)
                                                ...
                                            @endif
                                        </h4>
                                    </a>
                                    <div class="course-info">
                                        <ul>
                                            <li class="course-lecture"><i class="fad fa-book-open"></i>{{ $cource->count }}
                                                Lectures</li>
                                            <li class="course-duration"><i class="fad fa-clock"></i>{{ $cource->lenght }}
                                                Hours</li>
                                            <li class="course-enrolled"><i
                                                    class="fad fa-user-friends"></i>{{ $cource->students_count }}
                                                Enrolled
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="course-bottom">
                                        <a href="/instructor-single/{{ $cource->user->id }}/{{ $cource->user->id }}">
                                            <div class="course-instructor">
                                                <img src="{{ asset('storage/user/' . $cource->user->img) }}"
                                                    alt="">
                                                <h6>{{ $cource->teacher->name }}
                                                    {{ $cource->teacher->sname }}</h6>
                                            </div>
                                        </a>
                                        <div class="course-price">
                                            <del>
                                                @if ($cource->eski_narx > $cource->narx)
                                                    $
                                                    {{ $cource->eski_narx }}
                                                @endif
                                            </del> <span>${{ $cource->narx }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="text-center">
                    <a href="#" class="theme-btn mt-5"><span class="fad fa-sync-alt"></span> Load More Courses</a>
                </div>
            </div>

        </div>
@endif
@if (count($teacher) ==0 and count($cources) ==0)
<div class="instructor-area py-120">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-lg-6">
                <div class="text-center site-heading">
                    <h2 class="site-title">no results
                        <span>found</span>
                    </h2>
                    <p>
                        {{ __('till.instructor-h-t') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">



        </div>
    </div>
</div>
@endif
@if (count($teacher) > 0)
<div class="instructor-area py-120">
    <div class="container">
        <div class="row" style="display: flex; flex-direction:row; justify-content:space-between">
            <div class="col-6">
                <div class="site-heading  mb-3">
                    <h4 class="site-title mb-4">Search results from<span>Teacher</span></h4>
                </div>
            </div>


            <div class="course-sort-box col-2" style="margin-bottom: -10px">
                <select class="form-select">
                    <option value="1">Sort By Default</option>
                    <option value="5">Sort By Featured</option>
                    <option value="2">Sort By Latest</option>
                    <option value="3">Sort By Low Price</option>
                    <option value="4">Sort By High Price</option>
                </select>
            </div>


        </div>
        <div class="row">
            @foreach ($teacher as $teach)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="instructor-item">
                        <div class="instructor-img">
                            <a href="#"><img src="{{ asset('storage/user/' . $teach->img) }}"
                                    alt="img"></a>
                        </div>
                        <div class="instructor-content">
                            <span class="instructor-tag">Developer</span>
                            <a href="#" class="d-block">
                                <h5 class="instructor-name">{{ $teach->name }}</h5>
                            </a>
                            <div class="instructor-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>({{ $teach->ins_sharx_count }} {{ __('till.istructor-sharx') }})</span>
                            </div>
                            <span class="instructor-enroll"><i class="far fa-user-friends"></i>
                                {{ $teach->students_count }}{{ __('till.instructor-count') }}</span>
                            <div class="instructor-social">
                                @foreach ($teach->link as $url)
                                    @if (isset($url->telegram))
                                        <a href="{{ $url->telegram }}"><i class="fab fa-telegram"></i></a>
                                    @endif
                                    @if (isset($url->facebook))
                                        <a href="{{ $url->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                    @endif
                                    @if (isset($url->instagram))
                                        <a href="{{ $url->instagram }}"><i class="fab fa-instagram"></i></a>
                                    @endif

                                    @if (isset($url->youtube))
                                        <a href="{{ $url->youtube }}"><i class="fab fa-youtube"></i></a>
                                    @endif
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="text-center">
            <a href="#" class="theme-btn mt-5"><span class="fad fa-sync-alt"></span> Load More Courses</a>
        </div>
    </div>
</div>
@endif

        <div class="filter">
            <div class="course-sidebar">

                <div class="course-widget">
                    <div class="course-search-form">
                        <h4 class="course-widget-title">Search Courses</h4>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="search"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="course-widget">
                    <h4 class="course-widget-title">Course Level</h4>
                    <ul>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="lev1">
                                <label class="form-check-label" for="lev1"> Beginer (14)</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" checked type="checkbox" id="lev2">
                                <label class="form-check-label" for="lev2"> Intermediate (28)</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="lev3">
                                <label class="form-check-label" for="lev3"> Advanced (35)</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" checked type="checkbox" id="lev4">
                                <label class="form-check-label" for="lev4"> Expert (20)</label>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="course-widget">
                    <h4 class="course-widget-title">Price Range</h4>
                    <div class="price-range-box">
                        <div class="price-range-input">
                            <input type="text" readonly id="price-amount">
                        </div>
                        <div class="price-range"></div>
                    </div>
                </div>


                <div class="course-widget">
                    <h4 class="course-widget-title">Course Rating</h4>
                    <ul class="course-rating-filter">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" checked type="checkbox" id="rat1">
                                <label class="form-check-label" for="rat1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(15)</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rat2">
                                <label class="form-check-label" for="rat2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(13)</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rat3">
                                <label class="form-check-label" for="rat3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(39)</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" checked id="rat4">
                                <label class="form-check-label" for="rat4">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>(22)</span>
                                </label>
                            </div>
                        </li>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rat5">
                            <label class="form-check-label" for="rat5">
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(18)</span>
                            </label>
                        </div>
                    </ul>
                </div>


                <div class="widget-banner mt-30 mb-50"
                    style="background-image:url({{ asset('storage/img/widget/banner.jpg') }})">
                    <div class="banner-content">
                        <h3>Get <span>35% Off</span> On All Type Of Courses</h3>
                        <a href="#" class="theme-btn"> Enroll Now <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </main>
    <div>
        <a href="#" id="scroll-top" class="scroll-top2" style="bottom: 80px"><i
                class="far fa-angle-double-up"></i></a>
        <button id="filter-btn"><i class="fal fa-abacus"></i></button>
    </div>
@endsection("content")

@section('scripts')
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
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/main3.js"></script>
    <script src="assets/js/cslider1.js"></script>
@endsection("scripts")
