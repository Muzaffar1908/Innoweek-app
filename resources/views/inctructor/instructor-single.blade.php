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
                    <li class="active">Instructor-single</li>
                </ul>
            </div>
        </div>
        <div class="instructor-single py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="instructor-single-content">
                            <div class="instructor-single-img">
                                <img src="assets/img/instructor/02.jpg" alt="">
                            </div>
                            <div class="instructor-single-info">
                                <h4 class="instructor-single-name">Karin M. Chumley</h4>
                                <p class="instructor-single-tagline">Senior Developer</p>
                                <div class="instructor-single-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                            <div class="instructor-more-info">
                                <div class="instructor-more-info-course">
                                    <i class="far fa-book-open"></i>
                                    <h6>150</h6>
                                    <p>Courses</p>
                                </div>
                                <div class="instructor-more-info-student">
                                    <i class="far fa-user-friends"></i>
                                    <h6>2,568</h6>
                                    <p>Students Enrolled</p>
                                </div>
                                <div class="instructor-more-info-rating">
                                    <i class="far fa-star"></i>
                                    <h6>5.0</h6>
                                    <p>Rating</p>
                                </div>
                            </div>
                            <div class="instructor-single-about">
                                <h5>About Me</h5>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="instructor-single-wrapper">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="instructor-tab1" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Courses</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instructor-tab2" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Review</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instructor-tab3" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Experience</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="instructor-tab4" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="false">Education</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="instructor-tab1">
                                    <div class="instructor-tab-wrapper">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="course-item">
                                                    <span class="course-tag course-tag-1">Beginer</span>
                                                    <div class="course-img">
                                                        <a href="#"><img src="assets/img/course/01.jpg" alt=""></a>
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
                                                        <a href="#">
                                                            <h4 class="course-title">Full Web Designing Course With 20 Web Template Designing</h4>
                                                        </a>
                                                        <div class="course-info">
                                                            <ul>
                                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
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
                                            <div class="col-md-6 col-lg-6">
                                                <div class="course-item">
                                                    <span class="course-tag course-tag-2">Advance</span>
                                                    <div class="course-img">
                                                        <a href="#"><img src="assets/img/course/02.jpg" alt=""></a>
                                                    </div>
                                                    <div class="course-content">
                                                        <div class="course-meta">
                                                            <span class="course-category course-category-2">Art &
Design</span>
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
                                                            <h4 class="course-title">Full Web Designing Course With 20 Web Template Designing</h4>
                                                        </a>
                                                        <div class="course-info">
                                                            <ul>
                                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
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
                                            <div class="col-md-6 col-lg-6">
                                                <div class="course-item">
                                                    <span class="course-tag course-tag-1">Beginer</span>
                                                    <div class="course-img">
                                                        <a href="#"><img src="assets/img/course/03.jpg" alt=""></a>
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
                                                            <h4 class="course-title">Full Web Designing Course With 20 Web Template Designing</h4>
                                                        </a>
                                                        <div class="course-info">
                                                            <ul>
                                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
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
                                            <div class="col-md-6 col-lg-6">
                                                <div class="course-item">
                                                    <span class="course-tag course-tag-2">Advance</span>
                                                    <div class="course-img">
                                                        <a href="#"><img src="assets/img/course/04.jpg" alt=""></a>
                                                    </div>
                                                    <div class="course-content">
                                                        <div class="course-meta">
                                                            <span class="course-category course-category-4">IT &
Software</span>
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
                                                            <h4 class="course-title">Full Web Designing Course With 20 Web Template Designing</h4>
                                                        </a>
                                                        <div class="course-info">
                                                            <ul>
                                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
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
                                            <div class="col-md-6 col-lg-6">
                                                <div class="course-item">
                                                    <span class="course-tag course-tag-1">Beginer</span>
                                                    <div class="course-img">
                                                        <a href="#"><img src="assets/img/course/05.jpg" alt=""></a>
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
                                                            <h4 class="course-title">Full Web Designing Course With 20 Web Template Designing</h4>
                                                        </a>
                                                        <div class="course-info">
                                                            <ul>
                                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
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
                                            <div class="col-md-6 col-lg-6">
                                                <div class="course-item">
                                                    <span class="course-tag course-tag-2">Advance</span>
                                                    <div class="course-img">
                                                        <a href="#"><img src="assets/img/course/06.jpg" alt=""></a>
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
                                                            <h4 class="course-title">Full Web Designing Course With 20 Web Template Designing</h4>
                                                        </a>
                                                        <div class="course-info">
                                                            <ul>
                                                                <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                                                <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                                                <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled
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
                                                            <span aria-hidden="true"><i class="far fa-angle-double-left"></i></span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true"><i class="far fa-angle-double-right"></i></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="instructor-tab2">
                                    <div class="instructor-tab-wrapper">
                                        <div class="instructor-review-rating">
                                            <div class="instructor-rating-count">
                                                <h2>4.5</h2>
                                                <div class="instructor-rating-star">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <p>15.5k Students Review</p>
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
                                                            <div class="instructor-progress-width" style="width: 90%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-percentage">
                                                        <span>90%</span>
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
                                                            <div class="instructor-progress-width" style="width: 80%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-percentage">
                                                        <span>80%</span>
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
                                                            <div class="instructor-progress-width" style="width: 59%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-percentage">
                                                        <span>59%</span>
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
                                                            <div class="instructor-progress-width" style="width: 70%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-percentage">
                                                        <span>70%</span>
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
                                                            <div class="instructor-progress-width" style="width: 49%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="instructor-rating-range-percentage">
                                                        <span>49%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="instructor-review">
                                            <h5>Reviews (1,500)</h5>
                                            <div class="instructor-review-item">
                                                <div class="instructor-review-author">
                                                    <img src="assets/img/instructor/rev-1.png" alt="">
                                                    <div class="instructor-review-author-info">
                                                        <div>
                                                            <h6>Erich T. Genao</h6>
                                                            <span><i class="far fa-clock"></i> 1 day ago</span>
                                                        </div>
                                                        <div class="instructor-review-author-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.
                                                </p>
                                            </div>
                                            <div class="instructor-review-item">
                                                <div class="instructor-review-author">
                                                    <img src="assets/img/instructor/rev-2.png" alt="">
                                                    <div class="instructor-review-author-info">
                                                        <div>
                                                            <h6>Erich T. Genao</h6>
                                                            <span><i class="far fa-clock"></i> 1 day ago</span>
                                                        </div>
                                                        <div class="instructor-review-author-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.
                                                </p>
                                            </div>
                                            <div class="instructor-review-item">
                                                <div class="instructor-review-author">
                                                    <img src="assets/img/instructor/rev-1.png" alt="">
                                                    <div class="instructor-review-author-info">
                                                        <div>
                                                            <h6>Erich T. Genao</h6>
                                                            <span><i class="far fa-clock"></i> 1 day ago</span>
                                                        </div>
                                                        <div class="instructor-review-author-rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.
                                                </p>
                                            </div>
                                            <div class="text-center mt-5">
                                                <a href="#" class="theme-btn"> <span class="far fa-sync-alt"></span> Load More</a>
                                            </div>
                                        </div>
                                        <div class="instructor-review-form">
                                            <h5>Leave A Review</h5>
                                            <form action="#">
                                                <div class="form-group">
                                                    <label>Your Rating</label>
                                                    <div class="instructor-review-form-star">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Your Review</label>
                                                    <textarea class="form-control" cols="30" rows="5" placeholder="Write your review"></textarea>
                                                </div>
                                                <button class="theme-btn" type="button">Post Your Review</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="instructor-tab3">
                                    <div class="instructor-tab-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="instructor-info-card">
                                                    <div class="instructor-info-card-body">
                                                        <i class="far fa-book-reader"></i>
                                                        <div class="instructor-info-card-content">
                                                            <h6>Web Development</h6>
                                                            <span>2016 - 2018</span>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="instructor-info-card">
                                                    <div class="instructor-info-card-body">
                                                        <i class="far fa-book-reader"></i>
                                                        <div class="instructor-info-card-content">
                                                            <h6>Web Design</h6>
                                                            <span>2014 - 2016</span>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="instructor-info-card">
                                                    <div class="instructor-info-card-body">
                                                        <i class="far fa-book-reader"></i>
                                                        <div class="instructor-info-card-content">
                                                            <h6>Digital Marketing</h6>
                                                            <span>2012 - 2014</span>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="instructor-info-card">
                                                    <div class="instructor-info-card-body">
                                                        <i class="far fa-book-reader"></i>
                                                        <div class="instructor-info-card-content">
                                                            <h6>Graphics Design</h6>
                                                            <span>2010 - 2012</span>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="instructor-tab4">
                                    <div class="instructor-tab-wrapper">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="instructor-info-card">
                                                    <div class="instructor-info-card-body">
                                                        <i class="far fa-user-graduate"></i>
                                                        <div class="instructor-info-card-content">
                                                            <h6>Bachelor Degree</h6>
                                                            <span>2016 - 2018</span>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        Redmiko Hadlle Technological States University.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="instructor-info-card">
                                                    <div class="instructor-info-card-body">
                                                        <i class="far fa-user-graduate"></i>
                                                        <div class="instructor-info-card-content">
                                                            <h6>Bachelor Of Design</h6>
                                                            <span>2014 - 2016</span>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        Redmiko Hadlle Technological States University.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="instructor-info-card">
                                                    <div class="instructor-info-card-body">
                                                        <i class="far fa-user-graduate"></i>
                                                        <div class="instructor-info-card-content">
                                                            <h6>Bachelor Of Marketing</h6>
                                                            <span>2012 - 2014</span>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        Redmiko Hadlle Technological States University.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="instructor-info-card">
                                                    <div class="instructor-info-card-body">
                                                        <i class="far fa-user-graduate"></i>
                                                        <div class="instructor-info-card-content">
                                                            <h6>Master Of Web Design</h6>
                                                            <span>2010 - 2012</span>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        Redmiko Hadlle Technological States University.
                                                    </p>
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
