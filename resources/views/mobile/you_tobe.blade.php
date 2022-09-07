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
                        Jonli Efir
                    </a>
                </h2>
                
            </div>
        </div>
    </div>
    <!-- End Section-title Area -->

    <div class="container my-4">
        
        <div class="video-container">
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/{{$conferences->live_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

@endsection