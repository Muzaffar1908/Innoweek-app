@extends('layauts.app')
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

    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>

    <main class="main">

        <div class="site-breadcrumb">
            <div class="hero-shape-area">
                <img class="hero-shape-1" src="assets/img/shape/shape-1.png" alt="">
                <img class="hero-shape-2" src="assets/img/shape/shape-3.png" alt="">
                <img class="hero-shape-3" src="assets/img/shape/shape-6.png" alt="">
                <img class="hero-shape-4" src="assets/img/shape/shape-4.png" alt="">
            </div>
            <div class="container">
                <h2 class="breadcrumb-title">Profil</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Profil</li>
                </ul>
            </div>
        </div>


        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-5 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <img src="{{ asset('storage/img/logo/logo.png') }}" alt="">

                            <p>Your user profil</p>
                        </div>
                        <form enctype="multipart/form-data" method="POST" action="/user/update/{{ $nu->id }}">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control " placeholder="Your Name" name="name"
                                    value="{{ $nu->name }}" required autocomplete="name" autofocus>

                            </div>
                            <div class="form-group">
                                <label>SName</label>
                                <input type="text" class="form-control " placeholder="Your SName" name="sname"
                                    value="{{ $nu->sname }}" autocomplete="sname" autofocus>

                            </div>
                            <div class="form-group">
                                <label>Tell</label>
                                <input type="number" class="form-control " placeholder="Your phone number" name="tell"
                                    value="{{ $nu->tell }}" autocomplete="tell" autofocus>

                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input id="email" type="email" class="form-control " name="email"
                                    value="{{ $nu->email }}" required autocomplete="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label>Telegram</label>
                                <input type="url" class="form-control " name="telegram"
                                @if (isset($url->telegram))
                                value="{{ $url->telegram }}"
                            @endif

                                    autocomplete="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="url" class="form-control " name="instagram"
                                 @if (isset($url->instagram))
                                value="{{ $url->instagram }}"
                            @endif
                                 autocomplete="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label >Facebook</label>
                                <input type="url" class="form-control " name="facebook"
                                @if (isset($url->facebook))
                                value="{{ $url->facebook }}"
                            @endif
                                    placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label >You-tube</label>
                                <input type="url" class="form-control " name="youtube"
                                @if (isset($url->youtube))
                                value="{{ $url->youtube }}"
                            @endif
                                   placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" class="form-control" placeholder="Images upload" name="img">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control " name="oldpassword"
                                    autocomplete="oldpassword" placeholder="Your Password">

                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input id="newpassword" type="password" class="form-control " name="newpassword"
                                    autocomplete="new-password" placeholder="Your New Password">

                            </div>

                            <div class="form-group">
                                <label>{{ __('Confirm Password') }}</label>
                                <input type="password" class="form-control" placeholder="Confirm Password"
                                    name="resetpassword" autocomplete="new-password">

                            </div>


                            <div class="d-flex align-items-center">
                                <button type="submit" class="login-btn"><i class="far fa-paper-plane"></i>Save</button>
                            </div>
                        </form>

                        <div class="login-footer">
                            <p>Already have an account? <a href="/signin">Sign In.</a></p>
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
@endsection('scripts')
