@extends('layouts.index')

@section('content')

    <div class="regpanel" data-bg-image="{{asset('frontend/image/back.png')}}" style="background-image: url(./image/back.png);" >
        <div class="boxes">
            <form class="reg-box">
                <h5> {{__('Download the 'Innoweek 2022' application through this QR code')}} </h5>
                <img  src="{{frontend('frontend/image/qr.png')}}" class="mx-auto d-block img"  alt="">
                <div class="d-flex py-3">
                    <button> <img src="{{asset('frontend/image/icon/appstoree.png')}}" alt=""> </button>
                    <button> <img src="{{asset('frontend/image/icon/googleplay.png')}}" alt=""> </button>
                </div>
            </form>
        </div>
    </div>

@endsection