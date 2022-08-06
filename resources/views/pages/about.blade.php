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
@section('content')


    <main class="main">

        <div class="site-breadcrumb">
            <div class="hero-shape-area">
                <img class="hero-shape-1" src="{{asset("storage/img/shape/shape-1.png")}} alt="">
                <img class="hero-shape-2" src="assets/img/shape/shape-3.png" alt="">
                <img class="hero-shape-3" src="assets/img/shape/shape-6.png" alt="">
                <img class="hero-shape-4" src="assets/img/shape/shape-4.png" alt="">
            </div>
            <div class="container">
                <h2 class="breadcrumb-title">About Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>


        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">

                            @foreach ($about as $ab )
                            <div class="col-lg-6">
                                <div class="about-left">
                                    <div class="about-img">
                                        <img src="{{asset("storage/about/".$ab->img)}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-right">
                            <div class="site-heading mb-3">
                                <h2 class="site-title">
                                   <span> {{$ab->title}}</span>
                                </h2>
                            </div>
                            <p class="about-text">{{$ab->text}}</p>
                            @endforeach

                            <div class="about-list-wrapper">
                                <ul class="about-list list-unstyled">
                                    @foreach ($about_b as $abb )
                                    <li>
                                        <div class="icon"><i class="{{$abb->icon}}"></i></div>
                                        <div class="text">
                                            <h4>{{$abb->title}}</h4>
                                            <p>{{$abb->text}}</p>
                                        </div>
                                    </li>
                                    @endforeach


                                </ul>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="counter-area pt-70 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon counter-icon-1"><i class="fal fa-users"></i></div>
                            <div>
                                <span class="counter" data-count="+" data-to="{{$s_count}}" data-speed="3000">{{$s_count}}</span>
                                <h6 class="title">Students Enrolled</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon counter-icon-2"><i class="fal fa-book-open"></i></div>
                            <div>
                                <span class="counter" data-count="+" data-to="{{$cource_count}}" data-speed="3000">{{$cource_count}}</span>
                                <h6 class="title">Total Courses</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon counter-icon-3"><i class="fal fa-diploma"></i></div>
                            <div>
                                <span class="counter" data-count="+" data-to="{{$t_count}}" data-speed="3000">{{$t_count}}</span>
                                <h6 class="title">Active Experts</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon counter-icon-4"><i class="fal fa-award"></i></div>
                            <div>
                                <span class="counter" data-count="+" data-to="{{$eduhub->awards_count}}" data-speed="3000">{{$eduhub->awards_count}}</span>
                                <h6 class="title"> Win Awards</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="feature-area py-120">
            <div class="container">
                <div class="row">
                    <?$n_color=1?>

                    @foreach ($nega as $n)
                        <div class="col-md-6 col-lg-3" >

                            <div class="feature-item feature-item-bg-{{ $n_color }}" style="height: 100%">
                                <div class="feature-icon feature-icon-{{ $n_color }}" style="color: #fff">
                                    <i class="{{ $n->icon }}"></i>
                                </div>
                                <div class="feature-content" >
                                    <h4 style="color: #fff">{{ $n->title }}</h4>
                                    <p style="color: #fff">{{ $n->text }}</p>
                                </div>
                            </div>
                        </div>
                        <?$n_color=$n_color+1;?>
                    @endforeach

                </div>

            </div>
        </div>


        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title">What Our <span>Students Say's</span></h2>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable.
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
                                suffered alteration in some form, by injected humour, or randomised words which don't look
                                even slightly believable. If you are going to use a passage."
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{asset("storage/img/testimonial/01.png")}}" alt="">
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
                                suffered alteration in some form, by injected humour, or randomised words which don't look
                                even slightly believable. If you are going to use a passage."
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{asset("storage/img/testimonial/02.png")}}" alt="">
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
                                suffered alteration in some form, by injected humour, or randomised words which don't look
                                even slightly believable. If you are going to use a passage."
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{asset("assets/img/testimonial/03.png")}}" alt="">
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
                                suffered alteration in some form, by injected humour, or randomised words which don't look
                                even slightly believable. If you are going to use a passage."
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


        <div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title">Meet With <span>Our Team</span></h2>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($team as $tea)
                    <div class="col-md-6 col-lg-3">
                        <div class="team-item">
                            <img src="{{asset("storage/jamoa/".$tea->img)}}" alt="thumb">
                            <div class="team-social">
                                @if (isset($tea->telegram))
                                                <a href="{{ $tea->telegram }}"><i class="fab fa-telegram"></i></a>
                                            @endif
                                            @if (isset($tea->facebook))
                                                <a href="{{ $tea->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                            @endif
                                            @if (isset($tea->instagram))
                                                <a href="{{ $tea->instagram }}"><i class="fab fa-instagram"></i></a>
                                            @endif

                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5>{{$tea->name}}</h5>
                                    <span>{{$tea->uroven}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
            </div>
        </div>

    </main>



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
    </body>

    </html>
@endsection("scripts")
