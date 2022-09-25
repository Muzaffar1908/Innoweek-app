@extends('layouts.main')
@section('sticky')
sticky
@endsection
@section('content')

    <div class="regpanel" data-bg-image="{{asset('frontend/image/back.png')}}" style="background-image:{{'frontend/image/back.png'}};" >
        <div class="boxes">
            <form class="reg-box" action="{{route('d-verified')}}" method="POST">
                @csrf
                <h3>{{__('Enter the secret password sent to the specified email or phone number')}}</h3>
                <input type="text" name="code" placeholder="{{ __('VERIFIY_CODE')}}" required> <br><br>
                <button class="reg-btn"> {{ __('Next')}} </button>
            </form>
        </div>
    </div>

@endsection
@section('scripts')
<script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection
