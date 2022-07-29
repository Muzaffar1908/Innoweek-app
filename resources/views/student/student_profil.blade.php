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
                <img class="hero-shape-1" src="assets/img/shape/shape-1.png" alt="">
                <img class="hero-shape-2" src="assets/img/shape/shape-3.png" alt="">
                <img class="hero-shape-3" src="assets/img/shape/shape-6.png" alt="">
                <img class="hero-shape-4" src="assets/img/shape/shape-4.png" alt="">
            </div>
            <div class="container">
                <h2 class="breadcrumb-title">Instructor Single</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Instructor Single</li>
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
                                <p class="instructor-single-tagline"></p>

                                <div class="instructor-single-social">
                                    @foreach ($user->link as $url)
                                        @if (!$url->telegram == null)
                                            <a href="{{ $url->telegram }}"><i class="fab fa-telegram"></i></a>
                                        @endif
                                        @if (!$url->facebook == null)
                                            <a href="{{ $url->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                        @if (!$url->instagram == null)
                                            <a href="{{ $url->instagram }}"><i class="fab fa-instagram"></i></a>
                                        @endif

                                        @if (!$url->youtube == null)
                                            <a href="{{ $url->youtube }}"><i class="fab fa-youtube"></i></a>
                                        @endif
                                    @endforeach


                                </div>

                                <div class="mt-3">

                                    @if (isset(Auth::user()->id) and Auth::user()->id === $user->id and $edit == 1)
                                        <a href="/student-single/{{ $user->id }}/{{ $user->id - 1 }}"
                                            style="width: 100%" class="btn btn-success">Edit profil</a>
                                    @endif
                                    @if (isset(Auth::user()->id)  and Auth::user()->id === $user->id and !$edit == 1)
                                        <a href="/student-single/{{ $user->id }}/{{ $user->id }}"
                                            class="btn btn-dark" style="width: 100%">Save and back</a>
                                    @endif

                                </div>
                            </div>
                            <div class="instructor-more-info">
                                <div class="instructor-more-info-course">
                                    <i class="far fa-book-open"></i>
                                    <h6>{{ $user->cources_count }}</h6>
                                    <p>Cources</p>
                                </div>

                                <div class="instructor-more-info-student">
                                    <i class="fas fa-books"></i>
                                    <?$co=0;?>
                                    <h6>
                                        @foreach ($cources as  $c )
                                        <?
                                        if($c->lesson_count===$c->watch_count){
                                            $co=$co+1;
                                            echo $co;
                                        }
                                        ?>
                                    @endforeach</h6>

                                    <p>Completed</p>
                                </div>
                            </div>
                            <div class="instructor-single-about">
                                <h5>About Me</h5>
                                @if(isset($user->ins_about->text))

                                <p> {{ $user->ins_about->text }} </p>
                                @endif

                                @if (isset(Auth::user()->id)  and Auth::user()->id === $user->id and !isset($about->text) and !$edit == 1)
                                    <h6 class="alert alert-info">O'zingiz haqida malumot qo'shing.</h6>
                                    <a href="/teacher/about/add/{{ $user->id }}" class="btn btn-primary"
                                        style=" font-size:15px;"><i class="far fa-plus"></i></a>
                                @endif

                                @if (isset(Auth::user()->id) and isset($about->text) and Auth::user()->id === $user->id and !$edit == 1)
                                    <a href="/teacher/about/edit/{{ $about->id }}" class="btn btn-success"
                                        style=" font-size:15px;"><i class="far fa-edit"></i></a>
                                @endif
                                @if (isset(Auth::user()->id) and isset($about->text) and Auth::user()->id === $user->id and !$edit == 1)
                                    <a href="/teacher/about/delete/{{ $about->id }}" class="btn btn-danger"
                                        style=" font-size:15px;"><i class="far fa-trash-alt"></i></a>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="instructor-single-wrapper">
                            <h3 style="font-family:sans-serif">Courses</h3>
                            <hr style="background-color:black;height:2px;">
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                    aria-labelledby="instructor-tab1">
                                    <div class="instructor-tab-wrapper">
                                        <div class="row">

                                            @foreach ($cources as $cource)
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="course-item">
                                                        <span
                                                            class="course-tag course-tag-1">{{ $cource->buy->uroven }}</span>
                                                        <div class="course-img">
                                                            <a style="width:100%"
                                                                href="/course-single/{{ $cource->buy->id }}/{{ $cource->buy->id }}"><img
                                                                    src="{{ asset('storage/course/' . $cource->buy->img) }}"
                                                                    alt="" style="width:100%;height:230px"></a>
                                                        </div>
                                                        <div class="course-content">
                                                            <div class="course-meta">
                                                                <span class="course-category course-category-1">
                                                                    @if (app()->getLocale('lang') === 'en')
                                                                        {{ $cource->buy->category_en->name }}
                                                                    @elseif (app()->getLocale('lang') === 'ru')
                                                                        {{ $cource->buy->category_ru->name }}
                                                                    @else
                                                                        {{ $cource->buy->category_uz->name }}
                                                                    @endif


                                                                </span>
                                                                <div class="course-rate">

                                                                    @for ($i = 0; round($cource->sharx_avg_reyting) > $i; $i++)
                                                                        <i class="fas fa-star"></i>
                                                                    @endfor
                                                                    @for ($i = 0; 5 - round($cource->sharx_avg_reyting) > $i; $i++)
                                                                        <i class="far fa-star"></i>
                                                                    @endfor


                                                                    <span>({{ $cource->sharx_count }})</span>
                                                                </div>
                                                            </div>
                                                            <a
                                                                href="/course-single/{{ $cource->buy->id }}/{{ $cource->buy->id }}">
                                                                <h4 class="course-title">
                                                                    {{ substr($cource->buy->name, 0, 52) }}
                                                                    @if (strlen($cource->buy->name) > 52)
                                                                        ...
                                                                    @endif
                                                                </h4>
                                                            </a>

                                                            <div class="row">
                                                                <div class="progress col-10" style=" height:11px; margin:15px 0px;">
                                                                    <div class="progress-bar bg-info" role="progressbar"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: @if (!$cource->lesson_count == 0) {{ ($cource->watch_count / $cource->lesson_count) * 100 }}%;" aria-valuenow="{{ ($cource->watch_count / $cource->lesson_count) * 100 }}" > {{ round(($cource->watch_count / $cource->lesson_count) * 100, 1) }} @endif
                                                                 @if ($cource->lesson_count == 0) 0%;" aria-valuenow="0" > 0% @endif
                                                                </div>
                                                              </div>
                                                              <div class="col-2" style=" font-size:16px; font-weight:bold ; margin-top:5px ">
                                                                    {{$cource->watch_count}}/{{$cource->lesson_count}}
                                                              </div>

                                                            </div>




                                                        <div class="course-bottom">
                                                                    <a href="#">
                                                                        <div class="course-instructor">
                                                                            <img src="{{ asset('storage/user/' . $user->img) }}"
                                                                                alt="">
                                                                            <h6>{{ $cource->buy->teacher->name }}
                                                                                {{ $cource->buy->teacher->sname }}</h6>
                                                                        </div>
                                                                    </a>
                                                                    <div class="course-price">
                                                                        <del>
                                                                            @if ($cource->buy->eski_narx > $cource->buy->narx)
                                                                                $
                                                                                {{ $cource->buy->eski_narx }}
                                                                            @endif
                                                                        </del> <span>${{ $cource->buy->narx }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach


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
