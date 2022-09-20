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
                        {{__('QRKOD')}}
                    </a>
                </h2>
            </div>
        </div>
    </div>
    <!-- End Section-title Area -->

    <div class="qrcode pt-5">
        <h2 style="text-align: center;">{{__('QRCODE')}}
           </h2>
        @if (auth()->check())
            <h2 style="text-align: center; margin-top: 1rem;">
                @foreach(Auth::user()->userticket as $ticket)
                    @if(Auth::user()->id==$ticket->user_id)
                        {!! QrCode::size(300)->generate(url('/').'/check/ticket/'.$ticket->ticket_id) !!}
                    @endif
                @endforeach

            </h2>
            <h2 style="text-align: center; margin-top: 1rem;">

                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}

            </h2>
         @else
            <h2 style="text-align: center; margin-top: 1rem; color: red" >

               {{__('HaliOTM')}}

            </h2>
         @endif

@endsection


