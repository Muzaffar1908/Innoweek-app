@extends("layauts.app")
@section("links")
<title>Eduhub - Education And LMS HTML5 Template</title>

<link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/style.css">

@endsection("links")

@section("content")

    <main class="main">

        <div class="site-breadcrumb">
            <div class="hero-shape-area">
                <img class="hero-shape-1" src="{{asset("storage/img/shape/shape-1.png")}}" alt="">
                <img class="hero-shape-2" src="{{asset("storage/img/shape/shape-2.png")}}" alt="">
                <img class="hero-shape-3" src="{{asset("storage/img/shape/shape-3.png")}}" alt="">
                <img class="hero-shape-4" src="{{asset("storage/img/shape/shape-4.png")}}" alt="">
            </div>
            <div class="container">
                <h2 class="breadcrumb-title">Instructor</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Instructor</li>
                </ul>
            </div>
        </div>


        <div class="instructor-area py-120">
            <div class="container">
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

    </main>



    <a href="#" id="scroll-top"><i class="far fa-angle-double-up"></i></a>
@endsection("content")
@section("scripts")
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
