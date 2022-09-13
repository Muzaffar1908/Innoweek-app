@extends('layouts.mobile')

@section('content')

    <!-- End Preloader Area -->

    <!-- Start Section-title Area -->
    <div class="section-title mb-0 bg-color ptb-30">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">
                    <a href="{{route('m-home')}}">
                        <i class="ri-arrow-left-s-line"></i>
                       {{__('CONFERENCE')}}
                    </a>
                </h2>

            </div>
        </div>
    </div>
    <!-- End Section-title Area -->

    <div class="cards-area ptb-30">
        <div class="container">
            <div class="section-title left-title">
                <h2 style="text-align: center; margin: 10px 0;">{!! $conferensShow->{'title_'.App::getLocale()} !!}</h2>
            </div>
            <div class="single-card-item p-0 bg-transparent">
                <img src="{{asset('upload/conference/' .$conferensShow->user_image.'-d.png')}}" alt="Images">
                <ul class="d-flex align-items-center justify-content-between">
                    <li class="d-flex align-items-center">
                        <i style="font-size: 18px;" class="fa-solid fa-calendar-days"></i>
                        <p> {{$conferensShow->created_at->format('Y:m:d')}}</p>
                    </li>

                </ul>
                <p>{!! $conferensShow->{'description_'.App::getLocale()} !!}</p>
            </div>
        </div>
    </div>

@endsection
