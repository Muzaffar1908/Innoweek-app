@extends('layouts.mobile')
@section('styles')
@endsection

@section('content')

    <div class="section-title mb-0 bg-color ptb-30">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">
                    <a href="{{route('m-home')}}">
                        <i class="ri-arrow-left-s-line"></i>
                        Yangiliklar
                    </a>
                </h2>
            </div>
        </div>
    </div>

    <div class="cards-area ptb-30">
        <div class="container">
            <div class="section-title left-title">
                <h2 style="text-align: center; margin: 10px 0;">Italiyalik biznes hamkorlar bilan INNO Texnoparkda uchrashuv o’tkazildi</h2>
            </div>
            <div class="single-card-item p-0 bg-transparent">
                <img src="{{asset('./assets/images/image/img3.jpg')}}" alt="Images">
                <ul class="d-flex align-items-center justify-content-between">
                    <li class="d-flex align-items-center">
                        <i style="font-size: 18px;" class="fa-solid fa-calendar-days"></i>
                        <p> 2022-08-09</p>
                    </li>
                </ul>
                <p>Ochilish marosimi Farg`ona politexnika instituti binosida o`tkazildi. Unda Farg`ona viloyat hokimi o`rinbosari I.Ergashev, Innovatsiyalar Milliy ofisi Bosh direktori o`rinbosari A.Sobirxonov so`zga chiqib, ushbu tadbirni o`tkazishdan maqsad va undan kutilayotgan natijalar bo`yicha ma`lumotlar berib o`tishdi. </p>
            </div>
        </div>
    </div>

    <div class=" imagess-area pt-2">
        <div class="container">   
            <div style="background-color: #fff;
                box-shadow: 2px 5px 13px 0 #171d4114;
                padding: 10px;
                border-radius: 5px;" class="d-flex align-items-center justify-content-center my-4">
                <div class="img-news">
                    <img width="300px" style=" height: 100px; object-fit: cover;" src="{{asset('./assets/images/image/img1.jpg')}}" alt="Image">
                </div>
                <div class="title-news ps-3">
                    <p>Ochilish marosimi Farg`ona politexnika instituti binosida o`tkazildi. </p>
                    <div class="icon d-flex align-items-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span style="font-size: 12px; padding-left: 7px;">2022-08-09</span>
                        
                    </div>
                </div>
            </div>
            
            <div style="background-color: #fff;
                box-shadow: 2px 5px 13px 0 #171d4114;
                padding: 10px;
                border-radius: 5px;" class="d-flex align-items-center justify-content-center my-4">
                <div class="img-news">
                    <img width="300px" style=" height: 100px; object-fit: cover;" src="{{asset('./assets/images/image/img3.jpg')}}" alt="Image">
                </div>
                <div class="title-news ps-3">
                    <p>Ochilish marosimi Farg`ona politexnika instituti binosida o`tkazildi. </p>
                    <div class="icon d-flex align-items-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span style="font-size: 12px; padding-left: 7px;">2022-08-09</span>
                    </div>
                </div> 
            </div>
            <div style="background-color: #fff;
                box-shadow: 2px 5px 13px 0 #171d4114;
                padding: 10px;
                border-radius: 5px;" class="d-flex align-items-center justify-content-center my-4">
                <div class="img-news">
                    <img width="300px" style=" height: 100px; object-fit: cover;" src="{{asset('./assets/images/image/img2.jpg')}}" alt="Image">
                </div>
                <div class="title-news ps-3">
                    <p>Ochilish marosimi Farg`ona politexnika instituti binosida o`tkazildi. </p>
                    
                    <div class="icon d-flex align-items-center">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span style="font-size: 12px; padding-left: 7px;">2022-08-09</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection