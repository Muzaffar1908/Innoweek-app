@extends('layouts.mobile')
@section('styles')
@endsection
@section('content')
<!-- Start Section-title Area -->
<div class="section-title mb-0 bg-color ptb-30">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-0">
                <a href="{{ route('m-home') }}">
                    <i class="ri-arrow-left-s-line"></i>
                    {{__('ABOUT')}}
                </a>
            </h2>
        </div>
    </div>
</div>
<!-- End Section-title Area -->

<div class="bg-color-fff ">
    <!-- Start Login Area -->
    <div class="login-area ptb-30">
        <div class="container">
            <div class="section-title left-title">
                <h2 class="p-2 text-center">{{__('Weekofinnovativeideas')}}</h2>
            </div>
            <p class="p-2" style="font-size: 16px;"> INNOWEEK.UZ – innovatsion g‘oyalar haftaligi 2018-yildan buyon har
                yili O‘zbekiston Respublikasi Innovatsion rivojlanish vazirligi tomonidan o‘tkazilib kelinmoqda. Unda
                mahalliy va xorijiy kompaniyalar, investorlar, xorijiy diplomatik vakolatxona vakillari, tadbirkorlar,
                shuningdek, vazirlik va idora vakillari faol ishtirok etib kelmoqda. Ko‘rgazmaning maqsadi mahalliy va
                xorijiy vakillardan turli xil biznes yo‘nalishlari uchun eng ilg‘or innovatsion texnologiyalar,
                mahsulotlar, loyihalar, prototiplar yoki modellarni namoyish etish va targ‘ib qilish uchun ishonchli
                platforma yaratishdir. So‘nggi ikki yil ichida haftalik doirasida hamkorlik maqsadida bir qator
                muvaffaqiyatli sarmoyaviy shartnomalar, memorandumlar imzolandi, ishbilarmon shaxslar doirasida aloqalar
                o‘rnatildi, iqtidorli yoshlar va boshlang‘ich tadbirkorlar potensial investorlar bilan tanishish
                imkoniyatiga ega bo‘lishdi. </p>
        </div>
    </div>
</div>
@endsection
