@extends('layouts.mobile')
@section('styles')
@endsection

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
                        {{__('NEWS')}}
                    </a>
                </h2>

            </div>
        </div>
    </div>
    <!-- End Section-title Area -->

    <div class="cards-area ptb-30">
        <div class="container">
            <div class="section-title left-title">
                <h2 style="text-align: center; margin: 10px 0;">{!! $newsShow->{'title_'.App::getLocale()} !!}</h2>
            </div>
            <div class="single-card-item p-0 bg-transparent">
                <a href="{{asset('upload/news/' .$newsShow->user_image.'-d.png')}}">
                    <img src="{{asset('upload/news/' .$newsShow->user_image.'-d.png')}}" alt="Images">
                </a>
                <ul class="d-flex align-items-center justify-content-between">
                    <li class="d-flex align-items-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>{{$newsShow->created_at->format('Y:m:d')}}</p>
                    </li>

                </ul>
                <p>{!! $newsShow->{'description_'.App::getLocale()} !!} </p>
            </div>
        </div>
    </div>

    <div class=" imagess-area pt-2">
        <div class="container">
            @foreach($news as $new)

                <div style="background-color: #fff;
                box-shadow: 2px 5px 13px 0 #171d4114;
                padding: 10px;
                border-radius: 5px;" class="d-flex align-items-center justify-content-center my-4">
                    <div class="img-news">
                        <a href="{{route('newsShow',['id'=>$new->id])}}">
                            <img width="300px" style=" height: 100px; object-fit: cover;"
                                 src="{{asset('upload/news/' .$new->user_image.'-d.png')}}" alt="Image">
                        </a>
                    </div>
                    <div class="title-news ps-3">
                        <p>{!! substr($new->{'title_'.App::getLocale()},0,50).'...' !!}</p>
                        <div class="icon d-flex align-items-center">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span
                                style="font-size: 12px; padding-left: 7px;">{{$new->created_at->format('Y:m:d')}}</span>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

@endsection
