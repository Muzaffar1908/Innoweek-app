@extends('layouts.index')
@section('content')



<div class="regpanel" data-bg-image="{{asset('frontend/image/back.png')}}" style="background-image: {{'frontend/image/back.png'}};" >
    <div class="boxes">
        <form class="reg-box">
            <h3>{{__('Timizga kirish yoki foydalanish uchun ushbu ilovani yuklab oling.')}}</h3>
            <img  src="{{asset('frontend/image/qr.png')}}" class="mx-auto d-block img"  alt="">
            <div class="d-flex py-3 align-items-center justify-content-between">
                <a href="https://play.google.com/store/apps?hl=ru&gl=US"><img class="downloads playM" width="200" src="{{asset('frontend/image/icon/playmarket.png')}}" alt=""></a>

                <a href="https://www.apple.com/uz/app-store/"><img class="downloads playS" width="200" src="{{asset('frontend/image/icon/appstoree.png')}}" alt=""></a>

            </div>
        </form>
    </div>
</div>

@endsection
