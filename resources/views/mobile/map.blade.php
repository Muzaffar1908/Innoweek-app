@extends('layouts.mobile')

@section('content')
    <!-- Start Section-title Area -->
    <div class="section-title mb-0 bg-color ptb-30">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">
                    <a href="{{route('m-home')}}">
                        <i class="ri-arrow-left-s-line"></i>
                        Harita
                    </a>
                </h2>

            </div>
        </div>
    </div>

    <!-- End Section-title Area -->

    <div class="qrcode d-flex align-items-center justify-content-center px-3" style="padding-top:200px;">
        <div class="alert alert-primary custom custom-bg-ed1c24 mb-0" role="alert">
            <p style="font-size: 18px;">Hozirda texnik ishlar olib borilyapti!</p>
        </div>
        
    </div>
@endsection