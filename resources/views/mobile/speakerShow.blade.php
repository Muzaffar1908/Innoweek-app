@extends('layouts.mobile')

@section('content')
    <!-- Start Section-title Area -->
    <div class="section-title mb-0 bg-color ptb-30">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">
                    <a href="{{route('m-home')}}">
                        <i class="ri-arrow-left-s-line"></i>
                        So'zlovchilar
                    </a>
                </h2>

            </div>
        </div>
    </div>
    <!-- End Section-title Area -->

    <div class="cards-area pt-30">
        <div class="container">
            <div class="section-title left-title">
                <h2 style="text-align: center; margin: 10px 0;">{{$speakerShow->full_name}}</h2>
            </div>
            <div class="single-card-item p-0 bg-transparent">
                <img style="
                height: 250px;
    object-fit: contain;
    border-radius: 5px;
    display: flex;
    margin: 0 auto 1rem auto;
                " src="{{asset('uploads/speaker/' .$speakerShow->image.'-d.png')}}" alt="Images">
                <ul class="d-flex align-items-center justify-content-between">
                    <li class="d-flex align-items-center">
                        <i style="font-size: 18px;" class="fa-solid fa-calendar-days"></i>
                        <p>{{$speakerShow->created_at->format('Y:m:d')}}</p>
                    </li>

                </ul>
                <p>{!! $speakerShow->description_uz !!}</p>
            </div>
        </div>
    </div>

    <div class="socials">
        <div class="container">
            <ul class="social-icon-link">
                <li>
                    <a href="https://www.facebook.com/">
                        <img src="/assets/images/icon/face.png" alt="Images">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/">
                        <img src="/assets/images/icon/Instagram_icon.png.webp" alt="Images">
                    </a>
                </li>
                <li>
                    <a href="https://telegram.org/">
                        <img src="/assets/images/icon/telegram.png" alt="Images">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/">
                        <img src="/assets/images/icon/twitter.png" alt="Images">
                    </a>
                </li>
            </ul>
        </div>





    </div>
    </div>


@endsection
