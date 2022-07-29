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

                                    @if (Auth::user()->id === $user->id  and $edit==1)
                                    <a href="/instructor-single/{{$user->id}}/{{$user->id-1}}" style="width: 100%" class="btn btn-success">Edit profil</a>
                                @endif
                                @if (Auth::user()->id === $user->id and !$edit==1)
                                <a href="/instructor-single/{{$user->id}}/{{$user->id}}" class="btn btn-dark"  style="width: 100%" >Save and back</a>
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
                                    <h6>{{ $user->cources_count }}</h6>
                                    <p>Tugallangan kurslar</p>
                                </div>
                            </div>
                            <div class="instructor-single-about">
                                <h5>About Me</h5>

                                <p> {{ $user->ins_about->text }} </p>

                                @if (Auth::user()->id === $user->id and !isset($about->text ) and !$edit==1)
                                    <h6 class="alert alert-info">O'zingiz haqida malumot qo'shing.</h6>
                                    <a href="/teacher/about/add/{{ $user->id }}" class="btn btn-primary"
                                        style=" font-size:15px;"><i class="far fa-plus"></i></a>
                                @endif

                                @if (isset($about->text) and Auth::user()->id === $user->id  and !$edit==1)
                                    <a href="/teacher/about/edit/{{ $about->id }}" class="btn btn-success"
                                        style=" font-size:15px;"><i class="far fa-edit"></i></a>
                                @endif
                                @if (isset($about->text) and Auth::user()->id === $user->id  and !$edit==1)
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

                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                    aria-labelledby="instructor-tab1">
                                    <div class="instructor-tab-wrapper">
                                        <div class="row">

                                            <div class="col-md-6 col-lg-6">
                                                <div class="course-item">
                                                    <span class="course-tag course-tag-2">Advance</span>
                                                    <div class="course-img">
                                                        <a href="#"><img src="assets/img/course/06.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="course-content">
                                                        <div class="course-meta">
                                                            <span
                                                                class="course-category course-category-6">Marketing</span>
                                                            <div class="course-rate">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <span>(40)</span>
                                                            </div>
                                                        </div>
                                                        <a href="#">
                                                            <h4 class="course-title">Full Web Designing Course With 20 Web
                                                                Template Designing</h4>
                                                        </a>
                                                        <div class="course-info">
                                                            <ul>
                                                                <li class="course-lecture"><i
                                                                        class="fad fa-book-open"></i>64 Lectures</li>
                                                                <li class="course-duration"><i class="fad fa-clock"></i>30
                                                                    Hours</li>
                                                                <li class="course-enrolled"><i
                                                                        class="fad fa-user-friends"></i>40.7k Enrolled
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="course-bottom">
                                                            <a href="#">
                                                                <div class="course-instructor">
                                                                    <img src="assets/img/course/ins-2.jpg" alt="">
                                                                    <h6>Karin M. Chumley</h6>
                                                                </div>
                                                            </a>
                                                            <div class="course-price">
                                                                <del>$180</del> <span>$150</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pagination-area">
                                            <div aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true"><i
                                                                    class="far fa-angle-double-left"></i></span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link"
                                                            href="#">1</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true"><i
                                                                    class="far fa-angle-double-right"></i></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
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
