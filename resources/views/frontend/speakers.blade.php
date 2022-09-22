@extends('layouts.main')
@section('sticky')
sticky
@endsection
@section('content')
    <section class="speaker-single-wrap">
        <div class="container">
            <div class="section-heading style-four">
                <h2 class="title wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1s">{{__('SPEAKERS')}}</h2>
            </div>

            <div class="row g-0 child-items-wrap">
                @foreach( $speaker as $speak)
                    <div class="col-xl-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                        <div class="speaker-box-layout3 animated-bg-wrap">
                            <span class="animated-bg"></span>
                            <div class="figure-box">
                                <a href="{{route('speakershowx',['id'=>$speak->id])}}"><img src="{{asset('upload/speaker/'.$speak->image.'-d.png')}}" alt="Speaker" width="267" height="267"></a>
                            </div>
                            <div class="content-box">
                                <h3 class="title"><a href="{{route('speakershowx',['id'=>$speak->id])}}">{{$speak->name}}</a></h3>
                                <div class="sub-title">{{$speak->job}}</div>
                                <div class="speaker-social">
                                    <ul>
                                        <li><a target="_blank" href="{{$speak->facebook_ur}}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a target="_blank" href="{{$speak->linkedin_url}}"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a target="_blank" href="{{$speak->twitter_url}}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a target="_blank" href="{{$speak->youtube_url}}"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                {{-- {{$speaker->links()}} --}}
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection
