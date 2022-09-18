<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{__('International Week of Innovative Ideas')}}
    </title>
    <!-- Favicons -->
    <link href="{{asset('frontend/image/favicon.ico')}}" rel="icon">
    <link href="{{asset('frontend/image/apple-touch-icon.ico')}}" rel="apple-touch-icon">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{asset('frontend/assets/wow/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/magnific-popup/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/swiper/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/app.css')}}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="regpanel" data-bg-image="{{asset('frontend/image/back.png')}}" style="background-image:{{'frontend/image/back.png'}};" >
    <div class="boxes">
        <form class="reg-box">
            <h5> {{__('Download QR code')}} </h5>
            <img  src="{{asset('frontend/image/qr.png')}}" class="mx-auto d-block img"  alt="">
            <div class="d-flex py-3">
                <button> <img src="{{asset('frontend/image/icon/appstoree.png')}}" alt=""> </button>
                <button> <img src="{{asset('frontend/image/icon/googleplay.png')}}" alt=""> </button>
            </div>
        </form>
    </div>
</div>

 <!-- Dependency Scripts -->
<script src="{{asset('frontend/assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/magnific-popup/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/assets/countdown/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/assets/wow/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/swiper/js/swiper.min.js')}}"></script>
<script src="{{asset('frontend/assets/validator/validator.min.js')}}"></script>
<!-- Custom Script -->
<script src="{{asset('frontend/js/app.js')}}"></script>
</body>

</html>
