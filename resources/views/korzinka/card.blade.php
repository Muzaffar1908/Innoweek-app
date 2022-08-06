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

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?$summa=0?>
                       @foreach ($card as $c)
                       <tr>
                        <td>
                            <div class="cart-img">
                                <img src="{{ asset('storage/course/'. $c->cources->img) }}" alt="">
                            </div>
                        </td>
                        <td>
                            <h5> {{$c->cources->name}}</h5>
                        </td>
                        <td>
                            <div class="cart-price">
                                <span>${{$c->cources->narx}}</span>
                            </div>
                        </td>

                        <td>
                            <a href="/card/delete/{{$c->id}}" class="cart-remove"><i class="far fa-times"></i></a>
                        </td>
                        <?$summa=$summa+$c->cources->narx?>
                    </tr>

                       @endforeach

                    </tbody>
                </table>
            </div>
            <div class="cart-footer">
                <div class="row" >

                    <div class="col-md-12 col-lg-12 flex-end" style="display:flex; flex-direction:row; justify-content:flex-end">
                        <div class="cart-summary">
                            <ul>
                                <li><strong>Sub Total:</strong> <span>${{$summa}}</span></li>
                                <li><strong>Vat:</strong> <span>${{$summa*0.12}}</span></li>
                                <li class="cart-total"><strong>Total:</strong> <span>${{$summa+$summa*0.12}}</span></li>
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
