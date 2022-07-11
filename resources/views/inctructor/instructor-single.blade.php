@extends('layauts.app')
@section('links')
    <title>
        Eduhub - Education And LMS HTML5 Template</title>

    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style3.css">
    <style>
        .stars-wrapper,
        .stars-display {
            display: grid;
            grid: 2rem / repeat(5, 1fr);
        }

        .stars-wrapper {
            max-width: 10rem;
        }

        .stars-display {
            grid-row: 1;
            grid-column: 1 / -1;
            fill: lightgrey;
            pointer-events: none;
            place-items: center;
        }

        #my-form-2 input,
        #my-form-2 label,
        #my-form-2 label::selection {
            appearance: none;
            color: rgba(255, 255, 255, 0);
            background: rgba(255, 255, 255, 0);
        }

        #one-star-rating-2,
        label[for="one-star-rating-2"] {
            grid-row: 1;
            grid-column: 1;
        }

        #two-star-rating-2,
        label[for="two-star-rating-2"] {
            grid-row: 1;
            grid-column: 2;
        }

        #three-star-rating-2,
        label[for="three-star-rating-2"] {
            grid-row: 1;
            grid-column: 3;
        }

        #four-star-rating-2,
        label[for="four-star-rating-2"] {
            grid-row: 1;
            grid-column: 4;
        }

        #five-star-rating-2,
        label[for="five-star-rating-2"] {
            grid-row: 1;
            grid-column: 5;
        }

        /* Fill stars up to and including selected star */
        #one-star-rating-2:checked~.stars-display svg:nth-child(-n + 1) {
            fill: orange;
        }

        #two-star-rating-2:checked~.stars-display svg:nth-child(-n + 2) {
            fill: orange;
        }

        #three-star-rating-2:checked~.stars-display svg:nth-child(-n + 3) {
            fill: orange;
        }

        #four-star-rating-2:checked~.stars-display svg:nth-child(-n + 4) {
            fill: orange;
        }

        #five-star-rating-2:checked~.stars-display svg:nth-child(-n + 5) {
            fill: orange;
        }

        /* Fill stars that are being hovered (overrides the fill up to selected rating) */
        #one-star-rating-2:hover~.stars-display svg:nth-child(-n + 1) {
            fill: rgb(255, 0, 0);
        }

        #two-star-rating-2:hover~.stars-display svg:nth-child(-n + 2) {
            fill: rgb(255, 0, 0);
        }

        #three-star-rating-2:hover~.stars-display svg:nth-child(-n + 3) {
            fill: rgb(255, 0, 0);
        }

        #four-star-rating-2:hover~.stars-display svg:nth-child(-n + 4) {
            fill: rgb(255, 0, 0);
        }

        #five-star-rating-2:hover~.stars-display svg:nth-child(-n + 5) {
            fill: rgb(255, 0, 0);
        }

        /* Fill stars that are being hovered (overrides the fill up to selected rating) */
        #one-star-rating-2:hover:checked~.stars-display svg:nth-child(-n + 1) {
            fill: orange;
        }

        #two-star-rating-2:hover:checked~.stars-display svg:nth-child(-n + 2) {
            fill: orange;
        }

        #three-star-rating-2:hover:checked~.stars-display svg:nth-child(-n + 3) {
            fill: orange;
        }

        #four-star-rating-2:hover:checked~.stars-display svg:nth-child(-n + 4) {
            fill: orange;
        }

        #five-star-rating-2:hover:checked~.stars-display svg:nth-child(-n + 5) {
            fill: orange;
        }
    </style>
@endsection("links")

@section('content')
    <main class="main">

        <div class="site-breadcrumb">
            <div class="hero-shape-area">
                <img class="hero-shape-1" src="{{ asset('storage/img/shape/shape-1.png') }}" alt="">
                <img class="hero-shape-2" src="{{ asset('storage/img/shape/shape-2.png') }}" alt="">
                <img class="hero-shape-3" src="{{ asset('storage/img/shape/shape-3.png') }}" alt="">
                <img class="hero-shape-4" src="{{ asset('storage/img/shape/shape-4.png') }}" alt="">
            </div>
            <div class="container">
                <h2 class="breadcrumb-title">Instructor</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">{{ $user->name }}</li>
                </ul>
            </div>
        </div>
        <div class="instructor-single py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="instructor-single-content">
                            <div class="instructor-single-img">
                                <img src="{{ asset('storage/user/' . $user->img) }}" alt="">
                            </div>
                            <div class="instructor-single-info">{{ $user->name }} {{ $user->sname }}</h4>
                                <p class="instructor-single-tagline">Sineor cdsnjcldh</p>

                                <div class="instructor-single-social">
                                    @if (strlen($url->telegram) > 0)
                                        <a href="{{ $url->telegram }}"><i class="fab fa-telegram"></i></a>
                                    @endif
                                    @if (strlen($url->facebook) > 0)
                                        <a href="{{ $url->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                    @endif
                                    @if (strlen($url->instagram) > 0)
                                        <a href="{{ $url->instagram }}"><i class="fab fa-instagram"></i></a>
                                    @endif

                                    @if (strlen($url->youtube) > 0)
                                        <a href="{{ $url->youtube }}"><i class="fab fa-youtube"></i></a>
                                    @endif

                                </div>
                            </div>
                            <div class="instructor-more-info">
                                <div class="instructor-more-info-course">
                                    <i class="far fa-book-open"></i>
                                    <h6>{{ $c_count }}</h6>
                                    <p>Courses</p>
                                </div>
                                <div class="instructor-more-info-student">
                                    <i class="far fa-user-friends"></i>
                                    <h6>{{ $student }}</h6>
                                    <p>Students Enrolled</p>
                                </div>

                                <div class="instructor-more-info-rating">
                                    <i class="far fa-star"></i>
                                    <h6>{{ round($stars,1) }}</h6>
                                    <p>Rating</p>
                                </div>
                            </div>
                            <div class="instructor-single-about">
                                <h5>About Me</h5>

                                    <p> {{ $about->text}} </p>

                                @if (Auth::user()->id === $user->id and !isset($about->text))
                                <h6 class="alert alert-info">O'zingiz haqida malumot qo'shing.</h6>
                                <a href="/teacher/about/add/{{ $user->id }}" class="btn btn-primary"
                                    style=" font-size:15px;"><i class="far fa-plus"></i></a>
                            @endif

                                @if (isset($about->text) and Auth::user()->id === $user->id)
                                    <a href="/teacher/about/edit/{{ $about->id }}" class="btn btn-success"
                                        style=" font-size:15px;"><i class="far fa-edit"></i></a>
                                @endif
                                @if (isset($about->text) and Auth::user()->id === $user->id)
                                    <a href="/teacher/about/delete/{{ $about->id }}" class="btn btn-danger"
                                        style=" font-size:15px;"><i class="far fa-trash-alt"></i></a>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="instructor-single-wrapper">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="instructor-tab1" data-bs-toggle="tab"
                                        data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1"
                                        aria-selected="true">Courses</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instructor-tab2" data-bs-toggle="tab"
                                        data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2"
                                        aria-selected="false">Review</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instructor-tab3" data-bs-toggle="tab"
                                        data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3"
                                        aria-selected="false">Experience</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instructor-tab4" data-bs-toggle="tab"
                                        data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4"
                                        aria-selected="false">Education</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                    aria-labelledby="instructor-tab1">
                                    <div class="instructor-tab-wrapper">
                                        <div class="row">
                                            @foreach ($cources as $cource)
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="course-item">
                                                        <span
                                                            class="course-tag course-tag-1">{{ $cource->uroven }}</span>
                                                        <div class="course-img">
                                                            <a href="/cources/{{ $cource->id }}"><img
                                                                    src="{{ asset('storage/user/' . $user->img) }}"
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
                                                            <a href="#">
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
                                                                <a href="#">
                                                                    <div class="course-instructor">
                                                                        <img src="{{ asset('storage/user/' . $user->img) }}"
                                                                            alt="">
                                                                        <h6>{{ $cource->teacher->name }}
                                                                            {{ $cource->teacher->sname }}</h6>
                                                                    </div>
                                                                </a>
                                                                <div class="course-price">
                                                                    <del>
                                                                        @if (strlen($cource->eski_narx) > 0)
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
                                            {{ $cources->links() }}

                                            @if (Auth::user()->id === $user->id)
                                                <a href="/teacher/cources/add" class="btn btn-primary"
                                                    style=" font-size:15px; padding:15px  0px; margin-top:40px">Add new
                                                    Cource</a>
                                            @endif







                                        </div>


                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab2" role="tabpanel"
                                    aria-labelledby="instructor-tab2">
                                    <div class="instructor-tab-wrapper">
                                        <div class="instructor-review-rating">
                                            <div class="instructor-rating-count">
                                                <h2>{{ round($stars,1) }}</h2>
                                                @for ($i = 0; round($stars) > $i; $i++)
                                                    <i class="fas fa-star"></i>
                                                @endfor
                                                @for ($i = 0; 5 - round($stars) > $i; $i++)
                                                    <i class="far fa-star"></i>
                                                @endfor
                                                <p>{{ $sharx_count }} Students Review</p>
                                            </div>
                                            <div class="instructor-rating-range">
                                                <div class="instructor-rating-range-item">
                                                    <div class="instructor-rating-range-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="instructor-rating-range-bar">
                                                        <div class="instructor-progress">
                                                            <div class="instructor-progress-width"
                                                                style="width: {{ $stars5 }}%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-percentage">
                                                        <span>{{round($stars5,1)  }}%</span>
                                                    </div>
                                                </div>
                                                <div class="instructor-rating-range-item">
                                                    <div class="instructor-rating-range-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="instructor-rating-range-bar">
                                                        <div class="instructor-progress">
                                                            <div class="instructor-progress-width"
                                                                style="width: {{ $stars4 }}%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-percentage">
                                                        <span>{{ round($stars4,1) }}%</span>
                                                    </div>
                                                </div>
                                                <div class="instructor-rating-range-item">
                                                    <div class="instructor-rating-range-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="instructor-rating-range-bar">
                                                        <div class="instructor-progress">
                                                            <div class="instructor-progress-width"
                                                                style="width: {{ $stars3 }}%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-percentage">
                                                        <span>{{ round($stars3,1) }}%</span>
                                                    </div>
                                                </div>
                                                <div class="instructor-rating-range-item">
                                                    <div class="instructor-rating-range-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="instructor-rating-range-bar">
                                                        <div class="instructor-progress">
                                                            <div class="instructor-progress-width"
                                                                style="{{ $stars2 }}%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-percentage">
                                                        <span>{{ round($stars2,1)  }}%</span>
                                                    </div>
                                                </div>
                                                <div class="instructor-rating-range-item">
                                                    <div class="instructor-rating-range-star">
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="instructor-rating-range-bar">
                                                        <div class="instructor-progress">
                                                            <div class="instructor-progress-width"
                                                                style="width: {{ $stars1 }}%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-percentage">
                                                        <span>{{ round($stars1,1)  }}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="instructor-review">
                                            <h5>Reviews ({{ $sharx_count }})</h5>

                                            @foreach ($sharx as $sh)
                                                <div class="instructor-review-item " style="transition: 0.2s ease;">
                                                    <div class="instructor-review-author">
                                                        <img src="{{ asset('storage/user/' . $sh->user->img) }}"
                                                            alt="">
                                                        <div class="instructor-review-author-info">
                                                            <div>
                                                                <h6>{{ $sh->user->name }} {{ $sh->user->sname }}</h6>
                                                                <span><i class="far fa-clock"></i>
                                                                    <?
                                                                                date_default_timezone_set('Asia/Tashkent');
                                                                                $d1 = date('Y-m-d H:i:s');
                                                                                $date2=date_create($sh->created_at);
                                                                                $d2=date_format($date2, 'G:ia jS F Y');



                                                                                echo $d2?>
                                                                </span>
                                                            </div>
                                                            <div class="instructor-review-author-rating">
                                                                @for ($i = 0; round($sh->reyting) > $i; $i++)
                                                                    <i class="fas fa-star"></i>
                                                                @endfor
                                                                @for ($i = 0; 5 - round($sh->reyting) > $i; $i++)
                                                                    <i class="far fa-star"></i>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        {{ $sh->sharx }}
                                                    </p>
                                                </div>
                                            @endforeach

                                            {{ $sharx->links() }}


                                        </div>

                                        @if (!Auth::user()->id === $user->id)
                                            <div class="instructor-review-form">
                                                <h5>Leave A Review</h5>
                                                    <form action="/teacher/sharx/{{Auth::user()->id}}" class="" method="POST" id="my-form-2">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="hidden"  value="{{$user->id}}" name="user_id">
                                                            <label>Your Rating</label>

                                                            <div class="instructor-review-form-star stars-wrapper">
                                                                <input id="one-star-rating-2" type="radio"
                                                                    name="reviewRating" value="1">

                                                                <input id="two-star-rating-2" type="radio"
                                                                    name="reviewRating" value="2">

                                                                <input id="three-star-rating-2" type="radio"
                                                                    name="reviewRating" value="3">

                                                                <input id="four-star-rating-2" type="radio"
                                                                    name="reviewRating" value="4">

                                                                <input id="five-star-rating-2" type="radio"
                                                                    name="reviewRating" value="5">

                                                                <div class="stars-display" style="">
                                                                    <svg viewBox="0 0 20 20" width="25" height="25">
                                                                        <use href="#star-icon"></use>
                                                                    </svg>
                                                                    <svg viewBox="0 0 20 20" width="25" height="25">
                                                                        <use href="#star-icon"></use>
                                                                    </svg>
                                                                    <svg viewBox="0 0 20 20" width="25" height="25">
                                                                        <use href="#star-icon"></use>
                                                                    </svg>
                                                                    <svg viewBox="0 0 20 20" width="25" height="25">
                                                                        <use href="#star-icon"></use>
                                                                    </svg>
                                                                    <svg viewBox="0 0 20 20" width="25" height="25">
                                                                        <use href="#star-icon"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <svg id="svg-sprite" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 20 20" style="display: none;">
                                                                <symbol id="star-icon">
                                                                    <title>star</title>
                                                                    <path
                                                                        d="M20 7h-7L10 .5 7 7H0l5.46 5.47-1.64 7 6.18-3.7 6.18 3.73-1.63-7z" />
                                                                </symbol>
                                                            </svg>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Your Review</label>
                                                            <textarea class="form-control" cols="30" name="text" required rows="5" placeholder="Write your review"></textarea>
                                                        </div>
                                                        <input class="theme-btn btn" type="submit" value="Post Your Review" style="background-color: rgb(18, 174, 70); color:white;">

                                                    </form>

                                            </div>
                                        @endif

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab3" role="tabpanel"
                                    aria-labelledby="instructor-tab3">
                                    <div class="instructor-tab-wrapper">
                                        <div class="row">
                                            @foreach ($tajriba as $t)
                                                <div class="col-md-6">
                                                    <div class="instructor-info-card">
                                                        <div class="instructor-info-card-body">
                                                            <i class="far fa-book-reader"></i>
                                                            <div class="instructor-info-card-content">
                                                                <h6>{{ $t->name }}</h6>
                                                                <span>{{ $t->date1 }} -{{ $t->date2 }}</span>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            {{ $t->text }}
                                                        </p>
                                                        @if (Auth::user()->id === $user->id)
                                                            <a href="/teacher/tajriba/edit/{{ $t->id }}"
                                                                class="btn btn-success" style=" font-size:15px;"><i
                                                                    class="far fa-edit"></i></a>
                                                        @endif
                                                        @if (Auth::user()->id === $user->id)
                                                            <a href="/teacher/tajriba/delete/{{ $t->id }}"
                                                                class="btn btn-danger" style=" font-size:15px;"><i
                                                                    class="far fa-trash-alt"></i></a>
                                                        @endif
                                                    </div>

                                                </div>
                                            @endforeach




                                            @if (Auth::user()->id === $user->id)
                                                <a href="/teacher/tajriba/add/{{$user->id}}" class="btn btn-primary"
                                                    style=" font-size:16px; padding:15px 0;">Add new Experience</a>
                                            @endif


                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab4" role="tabpanel"
                                    aria-labelledby="instructor-tab4">
                                    <div class="instructor-tab-wrapper">
                                        <div class="row">
                                            @foreach ($edu as $e)
                                                <div class="col-md-6">
                                                    <div class="instructor-info-card">
                                                        <div class="instructor-info-card-body">
                                                            <i class="far fa-user-graduate"></i>
                                                            <div class="instructor-info-card-content">
                                                                <h6>{{ $e->name }}</h6>
                                                                <span>{{ $e->date1 }} - {{ $e->date2 }}</span>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            {{ $e->text }}
                                                        </p>
                                                        @if (Auth::user()->id === $user->id)
                                                            <a href="/teacher/edu/edit/{{ $t->id }}"
                                                                class="btn btn-success" style=" font-size:15px;"><i
                                                                    class="far fa-edit"></i></a>
                                                        @endif
                                                        @if (Auth::user()->id === $user->id)
                                                            <a href="/teacher/edu/delete/{{ $t->id }}"
                                                                class="btn btn-danger" style=" font-size:15px;"><i
                                                                    class="far fa-trash-alt"></i></a>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                            @if (Auth::user()->id === $user->id)
                                                <a href="/teacher/edu/add" class="btn btn-primary"
                                                    style=" font-size:16px; padding:15px 0;">Add new Experience</a>
                                            @endif




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        const form2 = document.getElementById("my-form-2");
        const outputDisplay2 = document.getElementById("form-data-display-2");





        form2.addEventListener(
            "submit",
            onSubmit({
                formElem: form2,
                displayElem: outputDisplay2
            })
        );
    </script>


    <a href="#" id="scroll-top"><i class="far fa-angle-double-up"></i></a>
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
    <script src="assets/js/main.js"></script>
@endsection("scripts")
