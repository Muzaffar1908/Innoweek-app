@extends('layouts.main')
@section('style')
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
@endsection
@section('sticky')
sticky
@endsection
@section('content')
<div class="regpanel" data-bg-image="{{ asset('/frontend//image/back.png') }}" style="background-image: url({{ asset('/frontend//image/back.png') }});">
    <div class="qrcode pt-2">
        <div class="d-flex justify-content-around">
            <img src="{{ asset('/frontend/image/logo/minin 1.png') }}" alt="">
            <img src="{{ asset('/frontend/image/logo/innoweek 1.png') }}" alt="">
            <img src="{{ asset('/frontend/image/logo/MO123 1.png') }}" alt="">
        </div>
        <h1 class="mt-3"> ELEKTRON CHIPTA </h1>
        <p class="text-center"> Innoweek-2022 ga kirish uchun chipta </p>
        <div class="d-flex justify-content-around userinf mt-3">
            <h1 class="d-flex align-items-center"> Muhammadali Eshonqulov </h1>
            <img src="{{ asset('/frontend/image/image 2.png') }}" alt="Electron ticket">
        </div>
        <div class="grid-container">
            <p class="d-flex align-items-center space-x-2">
                <img class="flex-shrink-0" src="{{ asset('/frontend/image/icon/Group 3.png') }}" width="20px" alt="">
                <span>Amal qilish muddati:</span>
                <span class="ml-autoi">21.10.2022</span>
            </p>

            <p class="d-flex align-items-center space-x-2">
                <img class="flex-shrink-0" src="{{ asset('/frontend/image/icon/Group 1.png') }}" width="20px" alt="">
                <span>Tashrif sanasi va vaqti: </span>
                <span class="ml-autoi">17.10.2022 10:00</span>

            </p>

            <p class="d-flex align-items-center space-x-2">
                <img class="flex-shrink-0" src="{{ asset('/frontend/image/icon/Group 2.png') }}" width="20px" alt="">
                <span>Toshkent sh, Universitet ko‘chasi, 7</span>
            </p>
        </div>
        <p class="footer"> Boshqa bir shaxs ushbu talondan foydalanishi qat'iyan man etiladi. </p>
    </div>

    <div class="boxes">
        <form class="reg-box">
            <div class="text-center">
                <button class="text-center"> Elektron chiptani yuklab olish </button>
            </div>
            <h3>Timizga kirish yoki foydalanish uchun ushbu ilovani yuklab oling.</h3>
            <img src="{{ asset('/frontend/image/qr.png') }}" class="mx-auto d-block img" alt="">
            <div class="d-flex py-3 align-items-center justify-content-between">
                <a href="https://play.google.com/store/apps?hl=ru&gl=US"><img class="downloads playM" width="200"
                        src="{{ asset('/frontend/image/icon/playmarket.png') }}" alt=""></a>
                <a href="https://www.apple.com/uz/app-store/"><img class="downloads playS" width="200"
                        src="{{ asset('/frontend/image/icon/appstoree.png') }}" alt=""></a>
            </div>

        </form>
    </div>
</div>

@endsection
@section('scripts')
<script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection