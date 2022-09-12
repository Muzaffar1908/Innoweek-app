@extends('layouts.mobile')
@section('styles')
@endsection
@section('content')
<!-- Start Section-title Area -->
<div class="section-title mb-0 bg-color ptb-30">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-0">
                <a href="{{ route('m-home') }}">
                    <i class="ri-arrow-left-s-line"></i>
                    {{__('ABOUT')}}
                </a>
            </h2>
        </div>
    </div>
</div>
<!-- End Section-title Area -->

<div class="bg-color-fff ">
    <!-- Start Login Area -->
    <div class="login-area ptb-30">
        <div class="container">
            <div class="section-title left-title">
                <h2 class="p-2 text-center">{{__('Weekofinnovativeideas')}}</h2>
            </div>
            <p class="p-2" style="font-size: 16px;">{{__('Innoweekabout')}}</p>
        </div>
    </div>
</div>
@endsection
