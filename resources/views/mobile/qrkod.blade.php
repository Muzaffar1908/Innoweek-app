@extends('layouts.mobile')
@section('styles')
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
@endsection
@section('content')
<!-- Start Section-title Area -->
<div class="section-title mb-0 bg-color ptb-30">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-0">
                <a href="{{route('m-home')}}">
                    <i class="ri-arrow-left-s-line"></i>
                    {{__('QRKOD')}}
                </a>
            </h2>
        </div>
    </div>
</div>
<!-- End Section-title Area -->
@if (auth()->check())
<div class="qrcode pt-2">
    <div class="qrimg d-flex justify-content-around">
        <img src="{{ asset('/assets/images/logo/minin 1.png') }}" alt="">
        <img src="{{ asset('/assets/images/logo/innoweek 1.png') }}" alt="">
        <img src="{{ asset('/assets/images/logo/MO123 1.png') }}" alt="">
    </div>
    <h1 class="mt-5"> {{ __('ELECTRONIC TICKET')}} </h1>
    <p class="mt-3 text-center"> {{ __('Ticket to enter Innoweek-2022')}} </p>
    <div class="d-flex justify-content-around userinf mt-3">
        <h1 class="d-flex align-items-center"> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </h1>
        {!! QrCode::size(170)->generate(url('/').'/check/ticket/'.$ticket->ticket_id) !!}
    </div>
    <div class="grid-container">
        <p class="d-flex align-items-center space-x-2">
            <img class="flex-shrink-0" src="{{ asset('/assets/images/icon/Group 3.png') }}" width="20px" alt="">
            <span>{{ __('Validity period:')}}</span>
            <span class="ml-autoi">{{ __('21.10.2022')}}</span>
        </p>

        <p class="d-flex align-items-center space-x-2">
            <img class="flex-shrink-0" src="{{ asset('/assets/images/icon/Group 1.png') }}" width="20px" alt="">
            <span>{{ __('Date and time of visit:')}} </span>
            <span class="ml-autoi">{{ __('17.10.2022 10:00') }}</span>

        </p>

        <p class="d-flex align-items-center space-x-2">
            <img class="flex-shrink-0" src="{{ asset('/assets/images/icon/Group 2.png') }}" width="20px" alt="">
            <span>{{ __('University Street, 7, Tashkent city') }}</span>
        </p>
    </div>
    <p class="footer"> {{ __("It is strictly forbidden for another person to use this pass.")}} </p>
</div>
<div class="investor">
    <p class="inveP">{{ Str::upper($ticket->profession_name) }}</p>
</div>
@else
<div class="qrcode pt-5">
    <h2 style="text-align: center;">{{__('QRCODE')}}</h2>
    <h2 style="text-align: center; margin-top: 1rem; color: red">
        {{__('HaliOTM')}}
    </h2>
</div>
@endif
@endsection