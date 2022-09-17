<?php
 use Carbon\Carbon;
  ?>
<div class="container">
    <div class="section-heading style-five">
      <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">Schedule</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="schedule-slider-main-wrap">
          <div class="schedule-slider-thumbnail-style-1 swiper-container schedule-box-layout3 schedule-nav">
            <div class="swiper-wrapper">

              @foreach ($condate as $con)
             
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

            @foreach ($condate as $cons)
              <div class="swiper-slide">
                @foreach( $condate_data as $dd)
                  @if($cons->date==Carbon::parse($dd->started_at)->format('Y-m-d'))
                    <div class="panel-group" id="accordionExample{{Carbon::parse($dd->started_at)->format('Ymd')}}">
                    <div class="panel panel-default wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                      <div class="panel-heading" id="headingOne{{Carbon::parse($dd->started_at)->format('Ymd')}}">
                        <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne{{Carbon::parse($dd->started_at)->format('Ymd')}}" aria-expanded="true" aria-controls="collapseOne" role="button">
                          <div class="date-time-wrap">
                            <div class="date">{{Carbon::parse($dd->started_at)->format('d')}}</div>
                            <div>
                              <div class="month">{{Carbon::parse($dd->started_at)->format('F')}}</div>
                              <div class="time">{{Carbon::parse($dd->started_at)->format('h:i')}} -{{Carbon::parse($dd->stoped_at)->format('h:i')}} </div>
                            </div>
                          </div>
                          <div class="content-box-wrap">
                            <div class="figure-box">
                              <img src="{{asset('frontend/image/speaker/37.jpg')}}" alt="Speaker" width="60" height="60">
                            </div>
                            <div class="inner-box">
                              <h3 class="title">{{($dd->{'title_'.App::getLocale()})}}</h3>
                              {{-- <div class="sub-title">By <span>Kathryn
                                                      Murphy</span> VP
                                Design Microsoft
                              </div> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="collapseOne{{Carbon::parse($dd->started_at)->format('Ymd')}}" class="accordion-collapse collapse" aria-labelledby="headingOne{{Carbon::parse($dd->started_at)->format('Ymd')}}" data-bs-parent="#accordionExample{{Carbon::parse($dd->started_at)->format('Ymd')}}">
                        <div class="panel-body">
                          <p class="description">{!! substr($dd->{'description_'.App::getLocale()},0,90).'...' !!}</p>
                          <div class="address-wrap">
                            <div class="icon-box">
                              <svg width="14" height="19" viewBox="0 0 14 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.04688 17.8984C6.36328 18.3906 7.10156 18.3906 7.41797 17.8984C12.5508 10.5156 13.5 9.74219 13.5 7C13.5 3.27344 10.4766 0.25 6.75 0.25C2.98828 0.25 0 3.27344 0 7C0 9.74219 0.914062 10.5156 6.04688 17.8984ZM6.75 9.8125C5.16797 9.8125 3.9375 8.58203 3.9375 7C3.9375 5.45312 5.16797 4.1875 6.75 4.1875C8.29688 4.1875 9.5625 5.45312 9.5625 7C9.5625 8.58203 8.29688 9.8125 6.75 9.8125Z" />
                              </svg>
                            </div>
                            <div class="address-text">{{$dd->address}}</div>
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