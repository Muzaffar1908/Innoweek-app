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
                        {{__('Live Broadcast Lists')}}

                    </a>
                </h2>

            </div>
        </div>
    </div>
    <!-- End Section-title Area -->


    <div class="container my-4">

        <ul class="site-menu" style="padding: 0;text-decoration: none !important;">
            @foreach($conferences as $con)
                <a additive-symbols class="shadowing d-flex align-items-center justify-content-between" href="{{route('m-youtobe', $con->id)}}">
                    <img width="50px" src="{{asset('assets/images/icon/YouTube.webp')}}" alt="Images">
                    <p class="m-0 px-3">{{$con->title_uz}}</p><br><br><br><br>
                    <span style="color: red;">LIVE</span>
                </a>
            @endforeach
        </ul>
    </div>

@endsection
