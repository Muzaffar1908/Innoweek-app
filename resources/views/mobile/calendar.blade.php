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
                        {{__('CALENDAR')}}
                    </a>
                </h2>
            </div>
        </div>
    </div>
    <!-- End Section-title Area -->

    <div class="bg-color-fff">
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
    </div>

@endsection
