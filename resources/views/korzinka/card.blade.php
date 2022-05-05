@extends("layauts.app")
@section('links')

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
        <img class="hero-shape-1" src="assets/img/shape/shape-1.png" alt="">
        <img class="hero-shape-2" src="assets/img/shape/shape-3.png" alt="">
        <img class="hero-shape-3" src="assets/img/shape/shape-6.png" alt="">
        <img class="hero-shape-4" src="assets/img/shape/shape-4.png" alt="">
    </div>
    <div class="container">
        <h2 class="breadcrumb-title">Courses Cart</h2>
        <ul class="breadcrumb-menu">
            <li><a href="index.html">Home</a></li>
            <li class="active">Courses Cart</li>
        </ul>
    </div>
</div>


<div class="course-cart py-120">
    <div class="container">
        <div class="course-cart-wrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Course Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Sub Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="cart-img">
                                    <img src="assets/img/course/01.jpg" alt="">
                                </div>
                            </td>
                            <td>
                                <h5>The Complete Digital Marketing Course</h5>
                            </td>
                            <td>
                                <div class="cart-price">
                                    <span>$1,500</span>
                                </div>
                            </td>
                            <td>
                                <div class="cart-qty">
                                    <button class="minus-btn"><i class="fal fa-minus"></i></button>
                                    <input class="quantity" type="text" value="1" disabled="">
                                    <button class="plus-btn"><i class="fal fa-plus"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="cart-sub-total">
                                    <span>$1,500</span>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="cart-remove"><i class="far fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-img">
                                    <img src="assets/img/course/02.jpg" alt="">
                                </div>
                            </td>
                            <td>
                                <h5>The Complete Digital Marketing Course</h5>
                            </td>
                            <td>
                                <div class="cart-price">
                                    <span>$1,500</span>
                                </div>
                            </td>
                            <td>
                                <div class="cart-qty">
                                    <button class="minus-btn"><i class="fal fa-minus"></i></button>
                                    <input class="quantity" type="text" value="1" disabled="">
                                    <button class="plus-btn"><i class="fal fa-plus"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="cart-sub-total">
                                    <span>$1,500</span>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="cart-remove"><i class="far fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-img">
                                    <img src="assets/img/course/04.jpg" alt="">
                                </div>
                            </td>
                            <td>
                                <h5>The Complete Digital Marketing Course</h5>
                            </td>
                            <td>
                                <div class="cart-price">
                                    <span>$1,500</span>
                                </div>
                            </td>
                            <td>
                                <div class="cart-qty">
                                    <button class="minus-btn"><i class="fal fa-minus"></i></button>
                                    <input class="quantity" type="text" value="1" disabled="">
                                    <button class="plus-btn"><i class="fal fa-plus"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="cart-sub-total">
                                    <span>$1,500</span>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="cart-remove"><i class="far fa-times"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart-footer">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="cart-coupon">
                            <input type="text" class="form-control" placeholder="Your Coupon Code">
                            <button class="coupon-btn" type="submit">Apply</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="cart-summary">
                            <ul>
                                <li><strong>Sub Total:</strong> <span>$4,500.00</span></li>
                                <li><strong>Vat:</strong> <span>$25.00</span></li>
                                <li><strong>Discount:</strong> <span>$5.00</span></li>
                                <li class="cart-total"><strong>Total:</strong> <span>$4,520.00</span></li>
                            </ul>
                            <div class="text-end mt-40">
                                <a href="#" class="theme-btn">Checkout Now <i
                                        class="far fa-arrow-right"></i></a>
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
@endsection('content')
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
