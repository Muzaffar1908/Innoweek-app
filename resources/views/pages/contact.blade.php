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
@section('content')


    <main class="main">

        <div class="site-breadcrumb">
            <div class="hero-shape-area">
                <img class="hero-shape-1" src="{{ asset('storage/img/shape/shape-1.png') }}" alt="">
                <img class="hero-shape-2" src="{{ asset('storage/img/shape/shape-2.png') }}" alt="">
                <img class="hero-shape-3" src="{{ asset('storage/img/shape/shape-3.png') }}" alt="">
                <img class="hero-shape-4" src="{{ asset('storage/img/shape/shape-4.png') }}" alt="">
            </div>
            <div class="container">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>


        <div class="contact-area py-120">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-lg-7 align-self-center">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                    <h2>Get In Touch</h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. </p>
                                </div>
                                @if (session('success'))
                                <div class="alert alert-success text-center" style="width: 100%; font-size:20px;color:rgb(255, 6, 6);font-weight:bold;">
                                    {{ session('success') }}
                                </div>
                            @endif
                                <form method="post" action="/taklifs/<?if(isset(Auth::user()->id)){echo(Auth::user()->id); }else{echo("0");}?>" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="mavzu" placeholder="Your Subject"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="text" cols="30" rows="5" class="form-control" placeholder="Write Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="theme-btn"> <i class="far fa-paper-plane"></i>
                                        Send
                                        Message</button>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-messege text-success"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="contact-content">
                                <div class="contact-info">
                                    <div class="contact-info-icon contact-info-icon-1">
                                        <i class="far fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Office Address</h5>
                                        <p>{{$eduhub->adress}}</p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon contact-info-icon-2">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Call Us</h5>
                                        <p>{{$eduhub->tell}}</p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon contact-info-icon-3">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Email Us</h5>
                                        <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="61080f070e210419000c110d044f020e0c">{{$eduhub->email}}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-info-icon contact-info-icon-4">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Office Open</h5>
                                        <p>Sun - Fri ({{$eduhub->office_open}}AM - {{$eduhub->office_close}}AM)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-map">
                    <iframe
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=kokand%20turkiston%2024+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>


                </div>
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
    <script src="assets/js/contact-form.js"></script>
    <script src="assets/js/main.js"></script>
@endsection("scripts")
