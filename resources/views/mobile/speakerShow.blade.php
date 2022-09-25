@extends('layouts.mobile')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('content')
    <!-- Start Section-title Area -->
    <div class="section-title mb-0 bg-color ptb-30">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">
                    <a href="{{route('m-home')}}">
                        <i class="ri-arrow-left-s-line"></i>
                        {{__('SPEAKERS')}}
                    </a>
                </h2>

            </div>
        </div>
    </div>
    <!-- End Section-title Area -->

    <div class="cards-area pt-30">
        <div class="container">
            <div class="section-title left-title">
                <h2 style="text-align: center; margin: 10px 0;">{{$speakerShow->name}}</h2>
            </div>
            <div class="single-card-item p-0 bg-transparent">
                <img style="
                height: 250px;
                object-fit: contain;
                border-radius: 5px;
                display: flex;
                margin: 0 auto 1rem auto;
                " src="{{asset('upload/speaker/' .$speakerShow->image.'_thumbnail_267.png')}}" alt="Images">
                <ul class="d-flex align-items-center justify-content-between">
                    <li class="icon d-flex align-items-center">
                        <i style="font-size: 18px;" class="fa-solid fa-calendar-days"></i>
                        <p>{{$speakerShow->created_at->format('Y:m:d')}}</p>
                    </li>

                </ul>
                <p>{{strip_tags($speakerShow->text)}}</p>
            </div>
        </div>
    </div>

    <div class="socials">
        <div class="container">
            <ul class="social-icon-link">
                <li>
                    <a href="{{$speakerShow->facebook_ur}}">
                        <img src="{{asset('frontend/img/facebook.png')}}" alt="Images">
                    </a>
                </li>
                <li>
                    <a href="{{$speakerShow->twitter_url}}">
                        <img src="{{asset('frontend/img/twitter.png')}}" alt="Images">
                    </a>
                </li>
                <li>
                    <a href="{{$speakerShow->youtube_url}}">
                        <img src="{{asset('frontend/img/youtube.png')}}" alt="Images">
                    </a>
                </li>
                <li>
                    <a href="{{$speakerShow->linkedin_url}}">
                        <img src="{{asset('frontend/img/linkedin.png')}}" alt="Images">
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
