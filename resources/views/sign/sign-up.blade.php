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
            <h2 class="breadcrumb-title">Sign Up</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active">Sign Up</li>
            </ul>
        </div>
    </div>


    <div class="login-area py-120">
        <div class="container">
            <div class="col-md-5 mx-auto">
                <div class="login-form">
                    <div class="login-header">
                        <img src="{{asset('storage/img/logo/logo.png')}}" alt="">

                        <p>create your eduhub account</p>
                    </div>
                    <form method="POST" action="{{ route('register') }}"">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="uroven">Kim sifatida ro'yhatdan otmoqchisiz</label>
                            <select name="uroven" id="uroven" class="form-control  @error('uroven') is-invalid @enderror" name="uroven" value="{{ old('uroven') }}" required autocomplete="uroven" autofocus>
                                <option value="student">Student</option>
                                <option value="teacher">Teacher</option>
                            </select>
                            @error('uroven')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label a>Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Your Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-check form-group">
                            <input class="form-check-input" type="checkbox" value="" id="agree" required>
                            <label class="form-check-label" for="agree">
I agree with the <a href="#">Terms Of Service.</a>
</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <button type="submit" class="login-btn"><i class="far fa-paper-plane"></i> Sign Up</button>
                        </div>
                    </form>
                    <div class="other-login-signup my-4">
                        <div class="or-login-signup text-center">
                            <strong>Or Sign Up With</strong>
                        </div>
                    </div>
                    <div class="social-login">
                        <a href="#" class="btn-f"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="#" class="btn-g"><i class="fab fa-google"></i> Google</a>
                        <a href="#" class="btn-t"><i class="fab fa-twitter"></i> Twitter</a>
                    </div>
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
