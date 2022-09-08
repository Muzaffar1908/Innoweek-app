<?php

use Illuminate\Support\Facades\URL;

?>
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
                        {{__('SETTINGS')}}
                    </a>
                </h2>

            </div>
        </div>
    </div>
    <!-- End Section-title Area -->

    <div class="bg-color-ffff">
        <div class="px-4">
            <div class="section-title left-title pt-30">
                <h2>{{__('SelectTheLanguage')}}</h2>
            </div>



            <div class="radio-wrap pb-30">
                <label class="single-radio"> {{__('UZ')}}
                    <input type="radio" @if(\Illuminate\Support\Facades\Lang::getLocale()=='uz') checked
                           @endif name="radio" id="uz" value="uz">
                    <span class="checkmark"></span>
                </label>
                <label class="single-radio">{{__('RU')}}
                    <input type="radio" @if(\Illuminate\Support\Facades\Lang::getLocale()=='ru') checked
                           @endif name="radio" id="ru" value="ru">
                    <span class="checkmark"></span>
                </label>
                <label class="single-radio">{{__('EN')}}
                    <input type="radio" @if(\Illuminate\Support\Facades\Lang::getLocale()=='en') checked
                           @endif name="radio" id="en" value="en">
                    <span class="checkmark"></span>
                </label>

            </div>
        </div>
        <!-- Start Dark Mode Area -->
        <div class="dark-mode-area pb-30">
            <div class="container">
                <div class="bg-color-ffffff">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="dark-btn d-flex align-items-center">
                                <label class="switch">
                                    <input type="checkbox" id="darkSwitch">
                                    <span class="slider round"></span>
                                </label>
                                <div class="dark-content">
                                    <h3 style="font-size: 15px; margin: 0 0 0 10px ;">{{__('DarkMode')}}</h3>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="button-area ptb-30">
            <div class="container">
                <ul class="btn-list">
                    <li>
                        <button type="button" class="btn btn-primary rounded-0"
                                onclick="Myfunction()">{{__('SAVE')}}</button>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <script>

        function Myfunction() {
            var checked_gender = document.querySelector('input[name = "radio"]:checked');
            if (checked_gender != null) {
                location.href = '/locale/' + checked_gender.value
            }
        }

    </script>

@endsection
