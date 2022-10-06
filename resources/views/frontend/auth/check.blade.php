@extends('layouts.main')
@section('sticky')
sticky
@endsection
@section('content')

    <div class="regpanel" data-bg-image="{{asset('frontend/image/back.png')}}" style="background-image:{{'frontend/image/back.png'}};" >
        <div class="boxes m-0">
            <form class="reg-box" action="{{route('d-verified')}}" method="POST">
                @csrf
                <h3>{{__('Enter the secret password sent to the specified email or phone number')}}</h3>
                <input type="text" name="phone_or_email" placeholder="{{__('Email or Phone')}}" autocomplete="on" required autofocus>
                <button type="submit" class="reg-btn"> {{ __('Next')}} </button>
            </form>
        </div>
    </div>

@endsection
@section('scripts')
<script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection
