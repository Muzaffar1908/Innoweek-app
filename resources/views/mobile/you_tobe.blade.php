@extends('layouts.mobile')
@section('styles')
@endsection

@section('content')

   <!-- Start Section-title Area -->
   <div class="section-title mb-0 bg-color ptb-30">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">
                    <a href="{{route('m-youtobe_list')}}">
                        <i class="ri-arrow-left-s-line"></i>
                        {{__('LIVE')}}
                    </a>
                </h2>

            </div>
        </div>
    </div>
    <!-- End Section-title Area -->

    <div class="container my-4">
        <div class="video-container">
            @isset($conferences->live_url)
                <a href="{{'https://www.youtube.com/watch?v='.$conferences->live_url}}" class="icon-box-link play-btn">
                    <div class="icon-box">

                    <img src="https://img.youtube.com/vi/{{$conferences->live_url}}/_thumbnail_267.png" alt="img" with="100px" height="60px">
                    {{-- <img src="{{asset('/upload/conference/' .$item->user_image.'-d.png')}}" alt="img" with="100px" height="60px"> --}}

                    <div class="player"></div>
                    </div>
                </a>
            @endisset    
                {{-- <iframe width="100%" height="350" src="https://www.youtube.com/watch?v=/{{$conferences->live_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
            <h3 class="mt-3">{{$conferences->title}}</h3>
        </div>
        
    </div>

@endsection
