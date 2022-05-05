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
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="instructor-item">
                            <div class="instructor-img">
                                <a href="/instructor-single"><img src="{{asset("storage/img/instructor/01.jpg")}}" alt="img"></a>
                            </div>
                            <div class="instructor-content">
                                <span class="instructor-tag">Developer</span>
                                <a href="/instructor-single" class="d-block">
                                    <h5 class="instructor-name">Hector S. Nickel</h5>
                                </a>
                                <div class="instructor-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(22 Reviews)</span>
                                </div>
                                <span class="instructor-enroll"><i class="far fa-user-friends"></i> 7.9k Students
                                    Enrolled</span>
                                <div class="instructor-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="instructor-item">
                            <div class="instructor-img">
                                <a href="#"><img src="{{asset("storage/img/instructor/02.jpg")}}" alt="img"></a>
                            </div>
                            <div class="instructor-content">
                                <span class="instructor-tag">Designer</span>
                                <a href="/instructor-single" class="d-block">
                                    <h5 class="instructor-name">Mary D. Musser</h5>
                                </a>
                                <div class="instructor-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(22 Reviews)</span>
                                </div>
                                <span class="instructor-enroll"><i class="far fa-user-friends"></i> 1.5k Students
                                    Enrolled</span>
                                <div class="instructor-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="instructor-item">
                            <div class="instructor-img">
                                <a href="#"><img src="{{asset("storage/img/instructor/03.jpg")}}" alt="img"></a>
                            </div>
                            <div class="instructor-content">
                                <span class="instructor-tag">Marketer</span>
                                <a href="#" class="d-block">
                                    <h5 class="instructor-name">Jean K. Avendano</h5>
                                </a>
                                <div class="instructor-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(22 Reviews)</span>
                                </div>
                                <span class="instructor-enroll"><i class="far fa-user-friends"></i> 5.6k Students
                                    Enrolled</span>
                                <div class="instructor-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="instructor-item">
                            <div class="instructor-img">
                                <a href="#"><img src="{{asset("storage/img/instructor/04.jpg")}}" alt="img"></a>
                            </div>
                            <div class="instructor-content">
                                <span class="instructor-tag">Adobe</span>
                                <a href="#" class="d-block">
                                    <h5 class="instructor-name">Karin M. Chumley</h5>
                                </a>
                                <div class="instructor-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(22 Reviews)</span>
                                </div>
                                <span class="instructor-enroll"><i class="far fa-user-friends"></i> 2.5k Students
                                    Enrolled</span>
                                <div class="instructor-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="instructor-item">
                            <div class="instructor-img">
                                <a href="#"><img src="assets/img/instructor/01.jpg" alt="img"></a>
                            </div>
                            <div class="instructor-content">
                                <span class="instructor-tag">Developer</span>
                                <a href="#" class="d-block">
                                    <h5 class="instructor-name">Hector S. Nickel</h5>
                                </a>
                                <div class="instructor-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(22 Reviews)</span>
                                </div>
                                <span class="instructor-enroll"><i class="far fa-user-friends"></i> 7.9k Students
                                    Enrolled</span>
                                <div class="instructor-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="instructor-item">
                            <div class="instructor-img">
                                <a href="#"><img src="assets/img/instructor/02.jpg" alt="img"></a>
                            </div>
                            <div class="instructor-content">
                                <span class="instructor-tag">Designer</span>
                                <a href="#" class="d-block">
                                    <h5 class="instructor-name">Mary D. Musser</h5>
                                </a>
                                <div class="instructor-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(22 Reviews)</span>
                                </div>
                                <span class="instructor-enroll"><i class="far fa-user-friends"></i> 1.5k Students
                                    Enrolled</span>
                                <div class="instructor-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="instructor-item">
                            <div class="instructor-img">
                                <a href="#"><img src="assets/img/instructor/03.jpg" alt="img"></a>
                            </div>
                            <div class="instructor-content">
                                <span class="instructor-tag">Marketer</span>
                                <a href="#" class="d-block">
                                    <h5 class="instructor-name">Jean K. Avendano</h5>
                                </a>
                                <div class="instructor-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(22 Reviews)</span>
                                </div>
                                <span class="instructor-enroll"><i class="far fa-user-friends"></i> 5.6k Students
                                    Enrolled</span>
                                <div class="instructor-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="instructor-item">
                            <div class="instructor-img">
                                <a href="#"><img src="assets/img/instructor/04.jpg" alt="img"></a>
                            </div>
                            <div class="instructor-content">
                                <span class="instructor-tag">Adobe</span>
                                <a href="#" class="d-block">
                                    <h5 class="instructor-name">Karin M. Chumley</h5>
                                </a>
                                <div class="instructor-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(22 Reviews)</span>
                                </div>
                                <span class="instructor-enroll"><i class="far fa-user-friends"></i> 2.5k Students
                                    Enrolled</span>
                                <div class="instructor-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
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
