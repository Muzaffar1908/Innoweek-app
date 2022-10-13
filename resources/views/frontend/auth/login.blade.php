@extends('layouts.main')
@section('style')
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
@endsection
@section('sticky')
sticky
@endsection
@section('content')

{{-- <div class="regpanel d-flex justify-content-around" data-bg-image="{{ asset('/frontend//image/back.png') }}"
  style="background-image: url({{ asset('/frontend//image/back.png') }});">
  <div class="qrcode pt-2">
    <div class="d-flex justify-content-around">
      <img src="{{ asset('/frontend/image/logo/minin 1.png') }}" alt="">
      <img src="{{ asset('/frontend/image/logo/innoweek 1.png') }}" alt="">
      <img src="{{ asset('/frontend/image/logo/MO123 1.png') }}" alt="">
    </div>
    <h1 class="mt-3"> {{__('ELECTRONIC TICKET')}} </h1>
    <p class="text-center"> {{__('Ticket to enter Innoweek-2022')}} </p>
    <div class="d-flex justify-content-around userinf mt-3">
      <h1 class="d-flex align-items-center"> {{$ticket->first_name }} {{ $ticket->last_name }} </h1>
      {!! QrCode::size(170)->generate(url('/').'/check/ticket/'.$ticket->ticket_id) !!}
    </div>
    <div class="grid-container">
      <p class="d-flex align-items-center space-x-2">
        <img class="flex-shrink-0" src="{{ asset('/frontend/image/icon/Group 3.png') }}" width="20px" alt="">
        <span>{{__('Validity period')}}:</span>
        <span class="ml-autoi">21.10.2022</span>
      </p>

      <p class="d-flex align-items-center space-x-2">
        <img class="flex-shrink-0" src="{{ asset('/frontend/image/icon/Group 1.png') }}" width="20px" alt="">
        <span>{{__('Date and time of visit')}}: </span>
        <span class="ml-autoi">17.10.2022 10:00</span>
      </p>

      <p class="d-flex align-items-center space-x-2">
        <img class="flex-shrink-0" src="{{ asset('/frontend/image/icon/Group 2.png') }}" width="20px" alt="">
        <span>{{__('University Street, 7, Tashkent city')}}</span>
      </p>
    </div>

    <p class="footer"> {{__('It is strictly forbidden for another person to use this pass.')}} </p>
    <p class="investorr">{{ Str::upper($ticket->profession_name) }}</p>
  </div>




  <div class="boxes">
    <form class="reg-box">
      <div class="text-center">
        <button class="text-center"> {{__('Download electronic ticket')}} </button>
      </div>
      <h3>{{__('Download this app to access or use our system.')}}</h3>
      <img src="{{ asset('/frontend/image/qr.png') }}" class="mx-auto d-block img" alt="">
      <div class="d-flex py-3 align-items-center justify-content-between">
        <a href="https://play.google.com/store/apps?hl=ru&gl=US"><img class="downloads playM" width="200"
            src="{{ asset('/frontend/image/icon/googleplay.png') }}" alt=""></a>
        <a href="https://www.apple.com/uz/app-store/"><img class="downloads playS" width="200"
            src="{{ asset('/frontend/image/icon/appstore.png') }}" alt=""></a>
      </div>
    </form>
  </div>

</div> --}}

  <div class="regpanel" data-bg-image="{{ asset('/frontend//image/back.png') }}" style="background-image: url({{ asset('/frontend//image/back.png') }});" >
    <div class="qrcode pt-2">
        <div class="d-flex justify-content-around">
            <img src="{{ asset('/frontend/image/logo/minin 1.png') }}" alt="">
            <img src="{{ asset('/frontend/image/logo/innoweek 1.png') }}" alt="">
            <img src="{{ asset('/frontend/image/logo/MO123 1.png') }}" alt="">
        </div>
        <h1 class="mt-3"> {{__('ELECTRONIC TICKET')}} </h1>
        <p class="text-center"> {{__('Ticket to enter Innoweek-2022')}} </p>
        <div class="d-flex justify-content-around userinf mt-3">
          <h1 class="d-flex align-items-center">{{$ticket->first_name }} {{ $ticket->last_name }}</h1>
          {!! QrCode::size(170)->generate(url('https://innoweek.uz/ticket').'/check/ticket/'.$ticket->ticket_id) !!}
          {{-- <img src="./image/image 2.png" alt=""> --}}
        </div>
        <div class="grid-container">
          <p class="d-flex align-items-center space-x-2">
            <img class="flex-shrink-0" src="{{ asset('/frontend/image/icon/Group 3.png') }}" width="20px" alt=""> 
            <span>{{__('Validity period')}}:</span>
            <span class="ml-autoi">21.10.2022</span>
          </p>
    
          <p class="d-flex align-items-center space-x-2">
            <img class="flex-shrink-0" src="{{ asset('/frontend/image/icon/Group 1.png') }}" width="20px" alt=""> 
            <span>{{__('Date and time of visit')}}: </span>
            <span class="ml-autoi">17.10.2022 10:00</span>
    
          </p>
    
          <p class="d-flex align-items-center space-x-2">
            <img class="flex-shrink-0" src="{{ asset('/frontend/image/icon/Group 2.png') }}" width="20px" alt=""> 
            <span>{{__('University Street, 7, Tashkent city')}}</span>
          </p>
        </div>
        <p class="footer"> {{__('It is strictly forbidden for another person to use this pass.')}} </p>
        <p class="inveestor">{{ Str::upper($ticket->profession_name) }}</p>
    </div>

  <div class="boxes">
    <form class="reg-box">
      <div class="text-center">
        <button class="text-center"> {{__('Download electronic ticket')}} </button>
      </div>
      <h3>{{__('Download this app to access or use our system.')}}</h3>
      {{-- <img src="{{ asset('/frontend/image/qr.png') }}" class="mx-auto d-block img" alt=""> --}}
      <div class="qrsvg mx-auto d-block">
        {!! QrCode::size(170)->generate("https://play.google.com/store/apps/details?id=com.mimaxgroup.innomobileapp")
        !!}
      </div>
      <div class="d-flex py-3 align-items-center justify-content-between">
        <a href="https://play.google.com/store/apps/details?id=com.mimaxgroup.innomobileapp"><img
            class="downloads playM" width="200" src="{{ asset('/frontend/image/icon/googleplay.png') }}" alt=""></a>
        <a href="https://play.google.com/store/apps/details?id=com.mimaxgroup.innomobileapp"><img
            class="downloads playS" width="200" src="{{ asset('/frontend/image/icon/appstore.png') }}" alt=""></a>
      </div>

    </form>
  </div>
</div>



@endsection
@section('scripts')
<script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection