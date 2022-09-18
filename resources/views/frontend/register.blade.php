@extends('layouts.index')

@section('content')

    <div class="regpanel" data-bg-image="{{asset('frontend/image/back.png')}}" style="background-image: url({{asset('frontend/image/back.png')}});" >
        <div class="boxes">
            <form class="reg-box" action="./qr.html">
                <h5> <h5>{{__("Enter the secret password sent to the specified email or phone number")}}</h5> </h5>
                <input type="password" placeholder="{{__('password')}}" required>
                <button class="reg-btn"> {{__('Next')}} </button>
            </form>
        </div>
    </div>

@endsection