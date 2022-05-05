@extends("layauts.app")
@section("links")
<title>Eduhub - Education And LMS HTML5 Template</title>

<link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
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
                <h2 class="breadcrumb-title">Courses</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Courses</li>
                </ul>
            </div>
        </div>


        <div class="course-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
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
                                style="background-image:url({{asset('storage/img/widget/banner.jpg')}})">
                                <div class="banner-content">
                                    <h3>Get <span>35% Off</span> On All Type Of Courses</h3>
                                    <a href="#" class="theme-btn"> Enroll Now <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="col-md-12">
                            <div class="course-sort">
                                <h5>Showing 1-10 of 50 Results</h5>
                                <div class="course-sort-box">
                                    <select class="form-select">
                                        <option value="1">Sort By Default</option>
                                        <option value="5">Sort By Featured</option>
                                        <option value="2">Sort By Latest</option>
                                        <option value="3">Sort By Low Price</option>
                                        <option value="4">Sort By High Price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="course-item">
                                    <span class="course-tag course-tag-1">Beginer</span>
                                    <div class="course-img">
                                        <a href="/course-single"><img src="{{asset("storage/img/course/01.jpg")}}" alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-meta">
                                            <span class="course-category course-category-1">Development</span>
                                            <div class="course-rate">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>(40)</span>
                                            </div>
                                        </div>
                                        <a href="/course-single">
                                            <h4 class="course-title">Advance PHP Knowledge and learn Laravel
                                                framework
                                            </h4>
                                        </a>
                                        <div class="course-info">
                                            <ul>
                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures
                                                </li>
                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours
                                                </li>
                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k
                                                    Enrolled</li>
                                            </ul>
                                        </div>
                                        <div class="course-bottom">
                                            <a href="#">
                                                <div class="course-instructor">
                                                    <img src="{{asset("storage/img/course/ins-1.jpg")}}" alt="">
                                                    <h6>Sara Wood</h6>
                                                </div>
                                            </a>
                                            <div class="course-price">
                                                <span>$69</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="course-item">
                                    <span class="course-tag course-tag-2">Advance</span>
                                    <div class="course-img">
                                        <a href="#"><img src="{{asset("storage/img/course/02.jpg")}}" alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-meta">
                                            <span class="course-category course-category-2">Art & Design</span>
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
                                            <h4 class="course-title">Full Web Designing Course With 20 Web Template
                                                Designing</h4>
                                        </a>
                                        <div class="course-info">
                                            <ul>
                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures
                                                </li>
                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours
                                                </li>
                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k
                                                    Enrolled</li>
                                            </ul>
                                        </div>
                                        <div class="course-bottom">
                                            <a href="#">
                                                <div class="course-instructor">
                                                    <img src="{{asset("storage/img/course/ins-2.jpg")}}" alt="">
                                                    <h6>Johnny Michell</h6>
                                                </div>
                                            </a>
                                            <div class="course-price">
                                                <del>$180</del> <span>$150</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="course-item">
                                    <span class="course-tag course-tag-1">Beginer</span>
                                    <div class="course-img">
                                        <a href="#"><img src="{{asset("storage/img/course/03.jpg")}}" alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-meta">
                                            <span class="course-category course-category-3">Business</span>
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
                                            <h4 class="course-title">Basic Knowledge About the UI/UX Design Pattern
                                            </h4>
                                        </a>
                                        <div class="course-info">
                                            <ul>
                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures
                                                </li>
                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours
                                                </li>
                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k
                                                    Enrolled</li>
                                            </ul>
                                        </div>
                                        <div class="course-bottom">
                                            <a href="#">
                                                <div class="course-instructor">
                                                    <img src="{{asset("storage/img/course/ins-3.jpg")}}" alt="">
                                                    <h6>Joey D. Glines</h6>
                                                </div>
                                            </a>
                                            <div class="course-price">
                                                <span>$179</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="course-item">
                                    <span class="course-tag course-tag-2">Advance</span>
                                    <div class="course-img">
                                        <a href="#"><img src="{{asset("storage/img/course/04.jpg")}}" alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-meta">
                                            <span class="course-category course-category-4">IT & Software</span>
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
                                            <h4 class="course-title">The Complete Business Plan Course Includes 50
                                                Templates</h4>
                                        </a>
                                        <div class="course-info">
                                            <ul>
                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures
                                                </li>
                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours
                                                </li>
                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k
                                                    Enrolled</li>
                                            </ul>
                                        </div>
                                        <div class="course-bottom">
                                            <a href="#">
                                                <div class="course-instructor">
                                                    <img src="{{asset("storage/img/course/ins-4.jpg")}}" alt="">
                                                    <h6>Nancy Alarcon</h6>
                                                </div>
                                            </a>
                                            <div class="course-price">
                                                <del>$210</del> <span>$150</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="course-item">
                                    <span class="course-tag course-tag-1">Beginer</span>
                                    <div class="course-img">
                                        <a href="#"><img src="{{asset("storage/img/course/05.jpg")}}" alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-meta">
                                            <span class="course-category course-category-5">Lifestyle</span>
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
                                            <h4 class="course-title">Become a product Manager learn the skills & job
                                            </h4>
                                        </a>
                                        <div class="course-info">
                                            <ul>
                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures
                                                </li>
                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours
                                                </li>
                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k
                                                    Enrolled</li>
                                            </ul>
                                        </div>
                                        <div class="course-bottom">
                                            <a href="#">
                                                <div class="course-instructor">
                                                    <img src="{{asset("storage/img/course/ins-5.jpg")}}" alt="">
                                                    <h6>Tina L. Heiner</h6>
                                                </div>
                                            </a>
                                            <div class="course-price">
                                                <span>$159</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="course-item">
                                    <span class="course-tag course-tag-2">Advance</span>
                                    <div class="course-img">
                                        <a href="#"><img src="{{asset("storage/img/course/06.jpg")}}" alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <div class="course-meta">
                                            <span class="course-category course-category-6">Marketing</span>
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
                                            <h4 class="course-title">The Complete Digital Marketing Course - 12
                                                Courses
                                                in 1</h4>
                                        </a>
                                        <div class="course-info">
                                            <ul>
                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures
                                                </li>
                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours
                                                </li>
                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k
                                                    Enrolled</li>
                                            </ul>
                                        </div>
                                        <div class="course-bottom">
                                            <a href="#">
                                                <div class="course-instructor">
                                                    <img src="{{asset("storage/img/course/ins-6.jpg")}}" alt="">
                                                    <h6>Leo Hender</h6>
                                                </div>
                                            </a>
                                            <div class="course-price">
                                                <span>Free</span>
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
                                            <span aria-hidden="true"><i class="far fa-arrow-left"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="far fa-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
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
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection("scripts")
