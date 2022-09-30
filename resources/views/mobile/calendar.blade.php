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
                        {{__('Schedule')}}
                    </a>
                </h2>
            </div>
        </div>
    </div>
    <!-- End Section-title Area -->

    <?php
          use Carbon\Carbon;
    ?>

    <div class="row mt-4">
        <div class="col-lg-12 order-lg-2">
            <div class="about-box-layout1 content-box">
            <div class="accordion accordion-flush container" id="accordionFlushExample">
                @foreach($ConfSchedules as $i => $con_data)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed acc-title" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $i }}" aria-expanded="false" aria-controls="flush-collapse{{ $i }}">
                                {{Carbon::parse($con_data->date)->format('D ,M dS')}}
                            </button>
                        </h2>
                        @foreach($conferences as $k => $con)
                          @if(Carbon::parse($con_data->date)->format('Y-m-d') == Carbon::parse($con->started_at)->format('Y-m-d'))
                                <div id="flush-collapse{{ $i }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="mt-2 p-0">
                                        <ul class="site-menu" style="padding: 0; text-decoration: none !important;">
                                            <a class="d-flex align-items-center justify-content-between bgColor" href="{{route('m-youtobe', $con->id)}}">
                                                <img width="50px" src="{{asset('assets/images/icon/YouTube.webp')}}" alt="Images">
                                                
                                                <p class="m-0 px-3">{{$con->title}}</p>
                                                <span style="color: red;">{{Carbon::parse($con->started_at)->format('H:i')}} -{{Carbon::parse($con->stoped_at)->format('H:i')}}</span>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            @endif   
                        @endforeach
                    </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>

    {{-- <div class="bg-color-fff">
        <!-- Start Calendar Area -->
        <div class="event-calendar-area ptb-30">
            <div class="container">
                <div class="section-title left-title">
                    <h2 class="text-center">{{__('CALENDAR')}}</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="calendar calendar-first" id="calendar_first">
                        <div class="calendar_header">
                            <button class="switch-month switch-left">
                                <i class="ri-arrow-left-s-line"></i>
                            </button>
                            <h2></h2>
                            <button class="switch-month switch-right">
                                <i class="ri-arrow-right-s-line"></i>
                            </button>
                        </div>
                        <div class="calendar_weekdays"></div>
                        <div class="calendar_content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Calendar Area -->
    </div> --}}

   

    

@endsection
