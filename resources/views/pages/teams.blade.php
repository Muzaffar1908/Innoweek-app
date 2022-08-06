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
                <h2 class="breadcrumb-title">Terms Of Service</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Terms Of Service</li>
                </ul>
            </div>
        </div>
        <div class="py-120">
            <div class="container">
                <div class="row">
                    <div class="col">
                        @foreach ($teams as $t )
                        <div class="terms-content">
                            <h3>{{$t->title}}</h3>
                            <p>  {{$t->text}}
                                </p>
                        </div>
                        @endforeach


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
