@extends('layouts.mobile')
@section('styles')
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

        <div class="qrcode pt-5">
            <h2 style="text-align: center;">Sizning QR kodingiz</h2>
            <div class="qr-image mt-4" style="display: flex;
            align-items: center;
            justify-content: center;">
            <img width="70%" style="box-shadow: 2px 5px 13px 0 #171d4114;
            padding: 10px;
            border-radius: 5px;" src="{{asset('./assets/images/qrcode.png')}}" alt="">
        </div>
        <h2 style="text-align: center; margin-top: 1rem;">Muzaffar Jalolov</h2>

@endsection


