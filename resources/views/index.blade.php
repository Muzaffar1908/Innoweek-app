@extends('layauts.app')
@section('links')
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endsection("links")
@section('content')
    <main class="home-3 main">

        <div class="hero-section">
            <div class="hero-single">
                <div class="hero-shape-area">
                    <img class="hero-shape-1" src="{{ asset('storage/img/shape/shape-1.png') }}" alt="">
                    <img class="hero-shape-2" src="{{ asset('storage/img/shape/shape-2.png') }}" alt="">
                    <img class="hero-shape-3" src="{{ asset('storage/img/shape/shape-3.png') }}" alt="">
                    <img class="hero-shape-4" src="{{ asset('storage/img/shape/shape-4.png') }}" alt="">
                </div>
                @foreach ($head as $h)
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-8 col-lg-6">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title wow animate__animated animate__fadeInUp"
                                        data-wow-duration="1s" data-wow-delay=".25s">{{ $h->title2 }}</h6>
                                    <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                                        data-wow-delay=".50s">
                                        {{ $h->title }}</h1>
                                    <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                                        data-wow-delay=".75s">
                                        {{ $h->text }} </p>
                                    <div class="hero-search">
                                        <form action="#">
                                            <div class="form-group">
                                                <i class="far fa-search"></i>
                                                <input type="text" class="form-control"
                                                    placeholder="{{ __('till.h-t-plhc') }}">
                                                <button type="submit">{{ __('till.search') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="hero-img"
                                    style="background-image: url({{ asset('storage/header/' . $h->img) }})"></div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>


        <div class="category-area py-120">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-lg-6">
                        <div class="mb-4 text-center site-heading">
                            <h2 class="site-title">{{ __('till.cat-h2-1') }} <span>{{ __('till.cat-h2-2') }}</span></h2>
                        </div>
                    </div>
                </div>
                <div class="category-slider owl-carousel owl-theme">
                    <?$color=1?>
                    @foreach ($category as $cat)
                        <div class="mt-4">
                            <a href="#" class="d-block">
                                <div class="category-item category-color-{{ $color }}">
                                    <div class="category-item-icon">
                                        <i class="fad fa-laptop-code"></i>
                                    </div>
                                    <div class="category-item-content">
                                        <h6>{{ $cat->name }}</h6>
                                        <span>2,579 {{ __('till.course-cat') }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?$color=$color+1;
                                    if($color==8){
                                        $color=1;
                                    }
                                    ?>
                    @endforeach


                </div>
            </div>
        </div>


        <div class="course-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-lg-6">
                        <div class="text-center site-heading">
                            <h2 class="mb-2 site-title">{{ __('till.courses-h2-1') }} <span>
                                    {{ __('till.courses-h2-2') }}</span></h2>
                            <p>{{ __('till.courses-h-t') }}</p>
                        </div>
                    </div>
                </div>
                <div class="row courc_ajax">
                    @foreach ($cources as $cource)
<div class="col-md-6 col-lg-6 col-xl-4">
    <div class="course-item">
        <span class="course-tag course-tag-1">{{ $cource->uroven }}</span>
        <div class="course-img">
            <a href="/course-single/{{ $cource->id }}" style="width:100%">

                <img
                    src="{{ asset('storage/course/' . $cource->img) }}"
                    alt="" style="width:100%;height:230px"></a>
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
                    <li class="course-lecture"><i
                            class="fad fa-book-open"></i>{{ $cource->count }}
                        Lectures</li>
                    <li class="course-duration"><i
                            class="fad fa-clock"></i>{{ $cource->lenght }}
                        Hours</li>
                    <li class="course-enrolled"><i
                            class="fad fa-user-friends"></i>{{ $cource->students_count }}
                        Enrolled
                    </li>
                </ul>
            </div>
            <div class="course-bottom">
                <a
                    href="/instructor-single/{{ $cource->user->id }}/{{ $cource->user->id }}">
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
                <div class="ajax_load text-center">
                    <p><img src="{{ asset('assets/img/loader/1.webp') }}" style="width:150px;margin-top:30px;display:none"
                            alt=""></p>
                </div>
                <form action="" method="get">
                    @csrf
                    <div class="text-center">
                        <div class="mt-5 theme-btn " id="load-more">
                            <span class="fad fa-sync-alt"></span>
                            {{ __('till.course-cat-btn') }}
                        </div>
                    </div>
                </form>

            </div>
        </div>


        <div class="feature-area2 py-120">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-lg-6">
                        <div class="text-center site-heading">
                            <h2 class="mb-2 site-title">Why You Learn <span>With Eduhub</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?$n_color=1?>

                    @foreach ($nega as $n)
                        <div class="col-md-6 col-lg-3">

                            <div class="feature-item feature-item-bg-{{ $n_color }}" style="height: 100%">
                                <div class="feature-icon">
                                    <i class="{{ $n->icon }}"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>{{ $n->title }}</h4>
                                    <p>{{ $n->text }}</p>
                                </div>
                            </div>
                        </div>
                        <?$n_color=$n_color+1;?>
                    @endforeach

                </div>
            </div>
        </div>


        <div class="step-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        @foreach ($steps as $step)
                            <div class="step-content">
                                <div class="site-heading">
                                    <h2 class="mb-10 site-title">Eduhub Learning <span>Steps For You</span></h2>
                                    <p>
                                        {{ $step->title }}
                                    </p>
                                </div>

                                <div class="step-content-wrapper">
                                    <div class="step-item">
                                        <div class="step-count">
                                            <span>01.</span>
                                        </div>
                                        <div class="step-item-info">
                                            <h3>{{ $step->title1 }}</h3>
                                            <p>{{ $step->text1 }}</p>
                                        </div>
                                    </div>
                                    <div class="step-item">
                                        <div class="step-count">
                                            <span>02.</span>
                                        </div>
                                        <div class="step-item-info">
                                            <h3>{{ $step->title2 }}</h3>
                                            <p>{{ $step->text2 }}</p>
                                        </div>
                                    </div>
                                    <div class="step-item">
                                        <div class="step-count">
                                            <span>03.</span>
                                        </div>
                                        <div class="step-item-info">
                                            <h3>{{ $step->title3 }}</h3>
                                            <p>{{ $step->text3 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="step-img"
                            style="background-image: url('{{ asset('storage/steps/' . $step->img) }}')">
                            <div class="video-wrapper">
                                <a class="play-btn popup-youtube" href="{{ $step->link_youtube }}">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>


        <div class="instructor-area py-120">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-lg-6">
                        <div class="text-center site-heading">
                            <h2 class="site-title">{{ __('till.instructor-h2-1') }}
                                <span>{{ __('till.instructor-h2-2') }}</span>
                            </h2>
                            <p>
                                {{ __('till.instructor-h-t') }}
                            </p>
                        </div>
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
            </div>
        </div>


        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-lg-6">
                        <div class="text-center site-heading">
                            <h2 class="site-title">{{ __('till.students-h2-1') }} <span>
                                    {{ __('till.students-h2-2') }}</span></h2>
                            <p>
                                {{ __('till.student-h-t') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                            <p>
                                "There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going to use a passage."
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{ asset('storage/img/testimonial/01.png') }}" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Sylvia H Green</h4>
                                <p>Student</p>
                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                            <p>
                                "There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going to use a passage."
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/02.png" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Gordon D Novak</h4>
                                <p>Student</p>
                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                            <p>
                                "There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going to use a passage."
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/03.png" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Reid E Butt</h4>
                                <p>Student</p>
                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-right"></i></span>
                            <p>
                                "There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. If you are going to use a passage."
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/04.png" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Parker Jimenez</h4>
                                <p>Student</p>
                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>




    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>



    <script type="text/javascript">
        function LoadMore(page) {
            $.ajax({
                    url: "?page=" + page,
                    datatype: "html",
                    type: "get",
                  beforeSend: function() {
                        $('.ajax_load').show();
                    }

                })
                .done(function(data) {
                    if (data.html == ' ') {
                        $('.ajax_load').html("NO more records found...");
                        return;
                    }
                    $('.ajax_load').hide();
                    $("#courc_ajax").append(data.html);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }

        var page = 1;

        $(document).on('click', '#load-more', function(e) {
            e.preventDefault();

            LoadMore(page)
            page++;


        });
    </script>








    <a href="#" id="scroll-top"><i class="far fa-angle-double-up"></i></a>
@endsection("content")
@section('scripts')
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
@endsection("scripts")
