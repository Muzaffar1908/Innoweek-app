@extends('layouts.main')
@section('content')

    <section class="rt-header-menu hero-wrap-layout1" data-bg-image="{{asset('/frontend/image/back.png')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="hero-box-layout1 has-animation">
                        <h1 class="title mt-5 wow fadeInUp animated" data-wow-delay="0.8s">
                            {{__('INTERNATIONAL WEEK OF')}} <span>{{__('INNOVATIVE')}}</span> {{__('IDEAS 2022')}}
                        </h1>
                        <p class="description wow fadeInUp animated" data-wow-delay="1s">
                           “{{__('Green innovations for sustainable development')}}” <br>{{__('October 17-21')}}
                        <ul>
                            <li class="d-flex justify-content-center align-items-center wow fadeInUp animated"
                                data-wow-delay="1.2s">
                                <a href="#promo" class="play-btn-primary wh-down">
                                    <i class="fa fa-arrow-down"></i>
                                </a>
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-wrap-layout1">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 order-lg-2">
                <div class="about-box-layout1 content-box">
                <div>
                    <h2 class="title text-center mb-5 wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('ABOUT INNOWEEK')}}</h2>
                    <h3 class="sub-description text-dark text-center wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1s">{{__('INNOWEEK/2022..')}}</h3>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section id="event" class="event-wrap-layout1 mb-5">
        <?php
          use Carbon\Carbon;
        ?>
        <div class="container-fluid mb-4">
            <div class="section-heading style-four">
               <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('Events')}}</h2>
            </div>
            <div class="sliderEventOne swiper-container">
            <div class="swiper-wrapper large">
                @foreach ($news_event as $item)
                <div class="swiper-slide">
                    <div class="event-box-layout1">
                        <div class="figure-box">
                            <a href="{{route('eventshowx',['id'=>$item->id])}}"><img style="object-fit: cover;" src="{{asset('/upload/news/'. $item->user_image.'_big_720.png')}}" alt="Event"></a>
                        </div>
                        <div class="content-box">
                            <div class="me-3">
                                <div class="sub-title">
                                    <h3 class="title"><a href="#">{{$item->title}}</a></h3>
                                    {{ strip_tags($item->text) }}
                                </div>
                            </div>
                            <a href="{{route('eventshowx',['id'=>$item->id])}}" class="btn-icon">
                                <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.0322 7.04186L6.23594 11.3482C6.19912 11.381 6.15215 11.3994 6.10264 11.3994H4.9791C4.88516 11.3994 4.84199 11.2786 4.91309 11.2156L9.35898 7.22309H1.92969C1.87383 7.22309 1.82812 7.17581 1.82812 7.11803V6.33004C1.82812 6.27226 1.87383 6.22498 1.92969 6.22498H9.35771L4.91182 2.23252C4.84072 2.16817 4.88389 2.04866 4.97783 2.04866H6.13945C6.16357 2.04866 6.1877 2.05785 6.20547 2.07493L11.0322 6.40622C11.0762 6.44575 11.1114 6.49458 11.1356 6.54941C11.1597 6.60424 11.1722 6.66379 11.1722 6.72404C11.1722 6.78429 11.1597 6.84384 11.1356 6.89866C11.1114 6.95349 11.0762 7.00232 11.0322 7.04186Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="promo" class="process-wrap-layout1" data-bg-image="{{asset('frontend/image/image.jpg')}}">
        <div class="section-heading style-four">
            <h2 class="title text-white wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('Promo')}}</h2>
        </div>
        <div class="process-inner-wrap">
            <div class="container-fluid">
            <div class="process-heading-content">
                <a href="https://www.youtube.com/watch?v=X7C9wAhH8_4" class="play-btn play-btn-primary">
                <i class="fas fa-play"></i>
                </a>
                <h2 class="title wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">{{__('Video about Innoweek 2021')}}</h2>
            </div>
            <div class="row">
                @foreach ($promo as $item)
                <div class="col-xl-3 col-md-6 wow fadeInLeft animated" data-wow-delay="0.1s" data-wow-duration="1s">
                    <div class="process-box-layout1 color-one">
                    <a href="{{'https://www.youtube.com/watch?v='.$item->url}}" class="icon-box-link play-btn">
                        <div class="icon-box">

                        <img src="https://img.youtube.com/vi/{{$item->url}}/hqdefault.jpg" alt="img" with="100px" height="60px">
                        {{-- <img src="{{asset('/upload/conference/' .$item->user_image.'-d.png')}}" alt="img" with="100px" height="60px"> --}}

                        <div class="player"></div>
                        </div>
                    </a>
                    <h3 class="title">
                        <p> <a href="{{$item->url}}" class="icon-box-link play-btn">INNOWEEK {{$item->archiveTable->year}} </a></p>
                    </h3>
                    </div>
                </div>

                @endforeach
            </div>
            </div>
        </div>
    </section>

    <section id="new" class="blog-wrap-layout1">
        <div class="container">
            <div class="section-heading style-four">
            <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('News')}}</h2>
            </div>
            <div class="row">
            @foreach ($news as $item)
                <div class="col-sm-12 col-lg-4 wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1s">
                <div class="blog-box-layout1">
                    <div class="figure-box figure-top">
                    <a href="{{route('newsshowx',['id'=>$item->id])}}" class="link-wrap"><img width="728" height="480" src="{{asset('/upload/news/' . $item->user_image.'_big_720.png')}}" alt="blog" width="720" height="450"></a>
                    <div class="entry-date-wrap">
                        <svg width="90" height="68" viewBox="0 0 90 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M90 68C90 67.888 90 67.7573 90 67.6266C90 67.4959 90 67.3839 90 67.2718L90 34.5228L90 33.4585L90 0.728172C90 0.616145 90 0.485448 90 0.373421C90 0.242724 90 0.112026 90 0C89.0048 0.504119 88.1786 0.858868 87.6153 1.08292C83.5781 2.68863 80.1231 3.04338 78.4707 3.02471C77.7571 3.02471 77.0624 3.02471 76.3488 3.02471L0.131431 3.02471C3.66158 6.53487 5.91487 10.0264 9.42625 13.5365L-1.0569e-06 24.179L8.61881 34L-1.91548e-06 43.821L9.42624 54.4635C5.89609 57.9736 3.6428 61.4651 0.131429 64.9753L76.3676 64.9753C77.0812 64.9753 77.7759 64.9753 78.4895 64.9753C80.1419 64.9753 83.5969 65.3114 87.634 66.9171C88.1974 67.1411 89.0236 67.4959 90 68Z" fill="#EE0034" />
                        </svg>
                        <div class="entry-date">{{Carbon::parse($item->created_at)->format('d  M')}}</div>
                    </div>
                    </div>
                    <div class="content-box">
                    <h3 class="entry-title"><a>{{$item->title}}</a></h3>
                    <a href="{{route('newsshowx',['id'=>$item->id])}}" class="btn-text style-one">{{__('READ MORE')}}</a>
                    </div>
                </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>

    <section id="speaker" class="speaker-wrap-layout3">
        <div class="container">
            <div class="section-heading style-four">
            <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('Speakers')}}</h2>
            </div>
            <div class="row g-0 child-items-wrap">
            @foreach ($speakers as $spek)
                <div class="col-xl-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                <div class="speaker-box-layout3 animated-bg-wrap">
                    <span class="animated-bg"></span>
                    <div class="figure-box">
                    <a href="{{route('speakershowx', ['id'=>$spek->id])}}"><img src="{{asset('upload/speaker/' .$spek->image.'_thumbnail_267.png')}}" alt="Speaker" width="267" height="267"></a>
                    </div>
                    <div class="content-box">
                    <h3 class="title"><a href="{{route('speakershowx', ['id'=>$spek->id])}}">{{$spek->fullname}}</a></h3>
                    <div class="sub-title">{{strip_tags($spek->job)}}</div>
                    <div class="speaker-social">
                        <ul>
                        <li><a target="_blank" href="{{$spek->facebook_ur}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="{{$spek->twitter_url}}"><i class="fab fa-twitter"></i></a></li>
                        <li><a target="_blank" href="{{$spek->linkedin_url}}"><i class="fab fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="{{$spek->youtube_url}}"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>

    <section id="schedule" class="schedule-wrap-layout5">
        <div class="container">
        <div class="section-heading style-five">
            <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('Schedule')}}</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
            <div class="schedule-slider-main-wrap">
                <div class="schedule-slider-thumbnail-style-1 swiper-container schedule-box-layout3 schedule-nav">
                <div class="swiper-wrapper">
                    @foreach ($ConfSchedules as $con)
                    <div class="swiper-slide">
                        {{-- S4: Mon, Mar 28th --}}
                        {{Carbon::parse($con->date)->format('D ,M dS')}}
                    </div>
                    @endforeach
                </div>
                </div>
                <span class="slider-btn slider-btn-prev">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="slider-btn slider-btn-next">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </div>
            <div class="shcedule-slider-style-1 swiper-container schedule-box-layout3 schedule-content">
                <div class="swiper-wrapper">
                    @foreach ($ConfSchedules as $i => $cons)
                        <div class="swiper-slide scroll-div">
                            @foreach($condate_data as $k => $dd)
                                @if(Carbon::parse($cons->date)->format('Y-m-d') == Carbon::parse($dd->started_at)->format('Y-m-d'))
                                    <div class="panel-group" id="accordionExample{{$i + $k }}">
                                        <div class="panel panel-default wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                                            <div class="panel-heading" id="headingOne{{ $i + $k }}">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $i + $k }}" aria-expanded="true" aria-controls="collapseOne" role="button">
                                                    <div class="date-time-wrap">
                                                        <div class="date">{{Carbon::parse($dd->started_at)->format('d')}}</div>
                                                        <div>
                                                            <div class="month">{{Carbon::parse($dd->started_at)->format('F')}}</div>
                                                            <div class="time">{{Carbon::parse($dd->started_at)->format('H:i')}} -{{Carbon::parse($dd->stoped_at)->format('H:i')}} </div>
                                                        </div>
                                                    </div>
                                                    <div class="content-box-wrap">
                                                        <div class="figure-box">
                                                            <img src="{{asset('upload/conference/' .$dd->user_image.'_thumbnail_267.png')}}" alt="img" with="100px" height="60px">
                                                        </div>
                                                        <div class="inner-box">
                                                        <h3 class="title">{{strip_tags($dd->title)}}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="collapseOne{{ $i + $k }}" class="accordion-collapse collapse" aria-labelledby="headingOne{{ $i + $k }}" data-bs-parent="#accordionExample{{ $i + $k }}">
                                                <div class="panel-body">
                                                  <div class="d-flex justify-content-between schedule-flex">
                                                        <span class="d-flex flex-column">
                                                           @isset($dd->live_url)
                                                               {{-- <a href="{{'https://www.youtube.com/watch?v='.$dd->live_url}}" class="icon-box-link play-btn"> --}}
                                                                <a href="{{'https://www.youtube.com/watch?v='.$dd->live_url}}" class="icon-box-link play-btn">
                                                                    <img src="https://img.youtube.com/vi/{{$dd->live_url}}/hqdefault.jpg" class="d-flex mt-4" width="150"
                                                                        height="120" alt="">
                                                                </a>
                                                                <h4 class="text-center text-white">ONLINE</h4>
                                                           @endisset
                                                        </span>
                                                        <span>
                                                            <p class="description mx-5 mt-4 ">{{strip_tags($dd->text)}}</p>
                                                        </span>
                                                  </div>
                                                  <div class="address-wrap">
                                                    <div class="icon-box">
                                                      <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.04688 17.8984C6.36328 18.3906 7.10156 18.3906 7.41797 17.8984C12.5508 10.5156 13.5 9.74219 13.5 7C13.5 3.27344 10.4766 0.25 6.75 0.25C2.98828 0.25 0 3.27344 0 7C0 9.74219 0.914062 10.5156 6.04688 17.8984ZM6.75 9.8125C5.16797 9.8125 3.9375 8.58203 3.9375 7C3.9375 5.45312 5.16797 4.1875 6.75 4.1875C8.29688 4.1875 9.5625 5.45312 9.5625 7C9.5625 8.58203 8.29688 9.8125 6.75 9.8125Z" />
                                                      </svg>
                                                    </div>
                                                    <div class="address-text">{{strip_tags($dd->address)}}</div>
                                                  </div>
                                                </div>
                                            </div>
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
        </div>
    </section>

    <section class="about-wrap-layout1">
        <div class="container">
          <div class="section-heading style-four">
            <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('INNOWEEK.UZ MOBILE APPLICATION')}}</h2>
          </div>
          <div class="row">
            <div class="col-lg-9 order-lg-2">
              <div class="about-box-layout1 content-box">
                <div class="boxess">
                    <form class="reg-boxess">
                        <img  src="{{asset('frontend/image/qr.png')}}" class="mx-auto d-block img"  alt="">
                        <div class="d-flex py-3 align-items-center justify-content-between">
                            <a href="https://play.google.com/store/apps/details?id=com.mimaxgroup.innomobileapp"><img class="downloads playMM" width="200" src="{{asset('frontend/image/icon/playmarket.png')}}" alt=""></a>
                            <a href="https://play.google.com/store/apps/details?id=com.mimaxgroup.innomobileapp"><img class="downloads playSS" width="200" src="{{asset('frontend/image/icon/appstoree.png')}}" alt=""></a>
                        </div>
                        
                    </form>
                  </div>
                <div class="accordion accordion-flush container" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed acc-title" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <img width="50" src="{{asset('frontend/image/icon/1.registration.png')}}" alt="">{{__('Online registration')}}
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <p class="accordion-body">{{__('Online_regist_desc')}}</p>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <img width="50" src="{{asset('frontend/image/icon/2.pass.png')}}" alt="">{{__('Generation of electronic tickets')}}
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <p class="accordion-body">{{__('Electronic_tickets_desc')}}</p>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <img width="50" src="{{asset('frontend/image/icon/3.360-degree.png')}}" alt="">{{__('Online 360 events')}}
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <p class="accordion-body">{{__('Online_360_desc')}}</p>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                        <img width="50" src="{{asset('frontend/image/icon/4.notifications.png')}}" alt="">{{__('Push notifications')}}
                      </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <p class="accordion-body">{{__('Push_notifications_desc')}}</p>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                        <img width="50" src="{{asset('frontend/image/icon/5.app-store.png')}}" alt="">{{__('For Android and iOS devices')}}
                      </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive data-bs-parent="#accordionFlushExample">
                      <p class="accordion-body">{{__('Android_and_IOS_desc')}}</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 order-lg-2">
                <div class="accordion-pone">
                  <img width="280" src="{{asset('/frontend/image/mobile-black.png')}}" alt="">
                </div>
            </div>
              
          </div>
        </div>
    </section>

    <div id="gallery" class="gallery-wrap-layout3">
        <div class="section-heading style-four">
          <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('Gallery')}}</h2>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active btn-lg px-4 py-2 galery-btn" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{__('Fotos')}}</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn-lg px-4 py-2 galery-btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{{__('Videos')}}</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="container-fluid ps-0 pe-0">
                <div class="row mt-5">
                    @foreach ($galleries as $item)
                       @isset ($item->image)
                        <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                                <div class="gallery-box-layout3 has-animation">
                                    <a href="{{asset('/upload/gallery/' . $item->image.'_big_1920.png')}}" class="rt-mfp-gallery-item"><img class="galery-img" src="{{asset('/upload/gallery/' . $item->image.'_thumbnail_450.png')}}" alt="Gallery"></a>
                                </div>
                        </div>
                       @endisset
                    @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row mt-5">
                @foreach($galleries as $item)
                   @isset($item->youtobe_id)
                        <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                            <div class="gallery-box-layout3 has-animation">
                                <a href="{{'https://www.youtube.com/watch?v='. $item->youtobe_id}}" class="icon-box-link play-btn">
                                    <img src="https://img.youtube.com/vi/{{$item->youtobe_id}}/hqdefault.jpg" alt="img">
                                    <div class="player"></div>
                                </a>
                            </div>
                        </div>
                    @endisset
                @endforeach
            </div>
          </div>
        </div>
    </div>

    <section id="partner" class="testimonials-wrap-layout2">
        <section id="partner" class="testimonials-wrap-layout2">
            <!-- <div class="container"> -->
            <div class="section-heading style-four">
                <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('Partners')}}</h2>
            </div>
            <div class="sliderPartnerOne swiper-container">
                    <div class="swiper-wrapper align-items-center">
                    @foreach($partners as $item)
                    <div class="swiper-slide">
                        <div class="col">
                        <div class="brand-box-layout4">
                            <a href="{{$item->image_url}}" target="_blank"><img src="{{asset('upload/partners/' .$item->image.'_thumbnail_130.png')}}" class="mt-4" alt="Brand" width="130" height="112"></a>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
            </div>
            <!-- </div> -->
        </section>
    </section>

    <section id="contact" class="location-wrap-layout1">
        <div class="section-heading style-four">
            <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('Contacts')}}</h2>
        </div>
        <div class="container">

            <section class="contact-wrap-layout2">
            <div class="container">
                <div class="row">


                <div class="col-lg-4 wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-duration="1s">
                    <div class="contact-box-layout2">
                    <div class="address-box color-two">
                        <div class="icon-box">
                        <svg width="72" height="54" viewBox="0 0 72 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M67.5 0H4.5C3.30653 0 2.16193 0.474106 1.31802 1.31802C0.474106 2.16193 0 3.30653 0 4.5V49.5C0 50.6935 0.474106 51.8381 1.31802 52.682C2.16193 53.5259 3.30653 54 4.5 54H67.5C68.6935 54 69.8381 53.5259 70.682 52.682C71.5259 51.8381 72 50.6935 72 49.5V4.5C72 3.30653 71.5259 2.16193 70.682 1.31802C69.8381 0.474106 68.6935 0 67.5 0ZM64.035 49.5H8.235L23.985 33.21L20.745 30.0825L4.5 46.89V7.92L32.4675 35.7525C33.3106 36.5906 34.4512 37.0611 35.64 37.0611C36.8288 37.0611 37.9694 36.5906 38.8125 35.7525L67.5 7.2225V46.5975L50.94 30.0375L47.7675 33.21L64.035 49.5ZM7.4475 4.5H63.855L35.64 32.5575L7.4475 4.5Z" />
                        </svg>
                        </div>
                        <h3 class="title">{{__('Email Address')}}</h3>
                        <ul class="address-details">
                        <li><a href="mailto:{{$innoweeks->email}}">{{$innoweeks->email}}</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1s">
                    <div class="contact-box-layout2">
                    <div class="address-box color-one">
                        <div class="icon-box">
                        <svg width="55" height="63" viewBox="0 0 55 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M38.8756 27.2136C38.8756 30.3066 37.6469 33.273 35.4598 35.4602C33.2727 37.6473 30.3063 38.876 27.2132 38.876C24.1201 38.876 21.1538 37.6473 18.9666 35.4602C16.7795 33.273 15.5508 30.3066 15.5508 27.2136C15.5508 24.1205 16.7795 21.1541 18.9666 18.967C21.1538 16.7799 24.1201 15.5511 27.2132 15.5511C30.3063 15.5511 33.2727 16.7799 35.4598 18.967C37.6469 21.1541 38.8756 24.1205 38.8756 27.2136ZM34.9882 27.2136C34.9882 25.1515 34.169 23.1739 32.7109 21.7159C31.2528 20.2578 29.2753 19.4386 27.2132 19.4386C25.1512 19.4386 23.1736 20.2578 21.7155 21.7159C20.2574 23.1739 19.4383 25.1515 19.4383 27.2136C19.4383 29.2756 20.2574 31.2532 21.7155 32.7113C23.1736 34.1694 25.1512 34.9885 27.2132 34.9885C29.2753 34.9885 31.2528 34.1694 32.7109 32.7113C34.169 31.2532 34.9882 29.2756 34.9882 27.2136Z" />
                            <path d="M46.457 46.4761C51.5609 41.3695 54.428 34.4452 54.428 27.2253C54.428 20.0054 51.5609 13.081 46.457 7.97451C43.9306 5.44639 40.9308 3.44088 37.629 2.07258C34.3272 0.704273 30.7881 0 27.214 0C23.6399 0 20.1009 0.704273 16.799 2.07258C13.4972 3.44088 10.4974 5.44639 7.97101 7.97451C2.86712 13.081 0 20.0054 0 27.2253C0 34.4452 2.86712 41.3695 7.97101 46.4761L13.8839 52.3034L21.826 60.02L22.343 60.4787C25.3558 62.9201 29.7681 62.7646 32.6059 60.02L42.0719 50.8067L46.457 46.4761ZM10.7117 10.7152C12.8785 8.54744 15.4511 6.82785 18.2826 5.65462C21.1141 4.4814 24.1491 3.87754 27.214 3.87754C30.279 3.87754 33.3139 4.4814 36.1454 5.65462C38.9769 6.82785 41.5496 8.54744 43.7163 10.7152C47.972 14.9737 50.4189 20.7111 50.5464 26.7302C50.6738 32.7493 48.4721 38.5852 44.4005 43.0201L43.7163 43.7354L38.581 48.8047L29.9119 57.2327L29.5465 57.5437C28.8744 58.0502 28.0556 58.3241 27.214 58.3241C26.3724 58.3241 25.5537 58.0502 24.8815 57.5437L24.52 57.2327L12.9353 45.9396L10.7117 43.7354L10.0275 43.024C5.95593 38.5891 3.75419 32.7532 3.88167 26.7341C4.00915 20.715 6.456 14.9776 10.7117 10.7191V10.7152Z" />
                        </svg>
                        </div>
                        <h3 class="title">{{__('Address')}}</h3>
                        <ul class="address-details">
                        <li>{{$innoweeks->address}}</li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInLeft animated" data-wow-delay="0.7s" data-wow-duration="1s">
                    <div class="contact-box-layout2">
                    <div class="address-box color-three">
                        <div class="icon-box">
                        <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.05 15.3001C30.0789 15.3001 32.0247 16.1061 33.4594 17.5407C34.894 18.9754 35.7 20.9212 35.7 22.9501C35.7 23.6264 35.9687 24.275 36.4469 24.7532C36.9251 25.2314 37.5737 25.5001 38.25 25.5001C38.9263 25.5001 39.5749 25.2314 40.0531 24.7532C40.5313 24.275 40.8 23.6264 40.8 22.9501C40.8 19.5686 39.4567 16.3255 37.0656 13.9345C34.6745 11.5434 31.4315 10.2001 28.05 10.2001C27.3737 10.2001 26.7251 10.4687 26.2469 10.947C25.7687 11.4252 25.5 12.0738 25.5 12.7501C25.5 13.4264 25.7687 14.075 26.2469 14.5532C26.7251 15.0314 27.3737 15.3001 28.05 15.3001Z" />
                            <path d="M28.05 5.1C32.7841 5.1 37.3243 6.98062 40.6718 10.3281C44.0194 13.6757 45.9 18.2159 45.9 22.95C45.9 23.6263 46.1686 24.2749 46.6469 24.7531C47.1251 25.2313 47.7737 25.5 48.45 25.5C49.1263 25.5 49.7749 25.2313 50.2531 24.7531C50.7313 24.2749 51 23.6263 51 22.95C51 16.8633 48.5821 11.0259 44.2781 6.7219C39.9741 2.41794 34.1367 0 28.05 0C27.3737 0 26.7251 0.26866 26.2469 0.746877C25.7687 1.2251 25.5 1.8737 25.5 2.55C25.5 3.2263 25.7687 3.8749 26.2469 4.35312C26.7251 4.83134 27.3737 5.1 28.05 5.1ZM50.3625 35.4705C50.2222 35.0611 49.9801 34.6942 49.6589 34.4042C49.3377 34.1143 48.948 33.9108 48.5265 33.813L33.2265 30.3195C32.8112 30.2253 32.3789 30.2367 31.9691 30.3525C31.5593 30.4683 31.1851 30.6849 30.8805 30.9825C30.5235 31.314 30.498 31.3395 28.8405 34.5015C23.3407 31.9672 18.9337 27.5422 16.422 22.032C19.6605 20.4 19.686 20.4 20.0175 20.0175C20.3151 19.7129 20.5317 19.3387 20.6475 18.9289C20.7633 18.5191 20.7747 18.0868 20.6805 17.6715L17.187 2.55C17.0892 2.12847 16.8857 1.73877 16.5958 1.41757C16.3058 1.09638 15.9389 0.854256 15.5295 0.714C14.934 0.501303 14.319 0.347566 13.6935 0.255C13.049 0.105558 12.3913 0.0201433 11.73 0C8.61901 0 5.63544 1.23584 3.43564 3.43564C1.23584 5.63544 0 8.61901 0 11.73C0.0134944 22.1409 4.15519 32.1215 11.5168 39.4832C18.8784 46.8448 28.8591 50.9865 39.27 51C40.8104 51 42.3357 50.6966 43.7589 50.1071C45.182 49.5176 46.4751 48.6536 47.5644 47.5644C48.6536 46.4751 49.5176 45.182 50.1071 43.7589C50.6966 42.3357 51 40.8104 51 39.27C51.0008 38.6209 50.9496 37.9729 50.847 37.332C50.7398 36.6986 50.5777 36.0758 50.3625 35.4705ZM39.27 45.9C30.2096 45.8932 21.5223 42.291 15.1156 35.8844C8.70896 29.4777 5.10675 20.7904 5.1 11.73C5.10672 9.97368 5.80739 8.29121 7.0493 7.0493C8.29121 5.80739 9.97368 5.10672 11.73 5.1H12.5715L15.3 16.932L13.923 17.646C11.73 18.7935 9.996 19.7115 10.914 21.7005C12.4089 25.9324 14.8277 29.7782 17.9947 32.9584C21.1617 36.1387 24.9973 38.5735 29.223 40.086C31.365 40.953 32.2065 39.3465 33.354 37.128L34.0935 35.7255L45.9 38.4285V39.27C45.8933 41.0263 45.1926 42.7088 43.9507 43.9507C42.7088 45.1926 41.0263 45.8933 39.27 45.9Z" />
                        </svg>
                        </div>
                        <h3 class="title">{{__('Phone')}}</h3>
                        <ul class="address-details">
                        <li><a href="tel:+998712033200">{{$innoweeks->phone}}</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>

            <div class="location-box-layout1 has-animation">
            <iframe class="map" style="height: 600px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6078.272327453513!2d69.2113345533416!3d41.352176589801374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8d755132b921%3A0x3d2c94a22bdea876!2sMinistry%20of%20Innovative%20Development%20of%20the%20Republic%20of%20Uzbekistan!5e0!3m2!1sen!2s!4v1662747000746!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" width="600" height="450">
            </iframe>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script src="{{ asset('/frontend/js/app.js') }}"></script>
@endsection
