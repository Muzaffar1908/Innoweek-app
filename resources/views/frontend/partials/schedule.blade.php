<div class="container">
    <div class="section-heading style-five">
        <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">Schedule</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="schedule-slider-main-wrap">
                <div class="schedule-slider-thumbnail-style-1 swiper-container schedule-box-layout3 schedule-nav">
                    <div class="swiper-wrapper">

                        @if(isset($condate))
                            @foreach($condate as $con)
                                <div class="swiper-slide">
                                    {{--                                S4: Mon, Mar 28th--}}
                                    {{\Carbon\Carbon::parse($con->date)->format('D, M dS')}}

                                </div>
                            @endforeach
                        @endif
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
                    @foreach($condate as $conda)

                        {{--{{\Carbon\Carbon::parse($dd->started_at)->format('Y-m-d')}}--}}
                        <div class="swiper-slide">

                            @foreach($condate_data as $dd)
                                @if($conda->date==\Carbon\Carbon::parse($dd->started_at)->format('Y-m-d'))

                                    <div class="panel-group"
                                         id="accordionExample{{\Carbon\Carbon::parse($conda->date)->format('Ymd')}}">
                                        <div class="panel panel-default wow fadeInUp animated" data-wow-delay="0.3s"
                                             data-wow-duration="1s">

                                            <div class="panel-heading"
                                                 id="headingOne{{\Carbon\Carbon::parse($conda->date)->format('Ymd')}}">
                                                <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                     data-bs-target="#collapseOne{{\Carbon\Carbon::parse($conda->date)->format('Ymd')}}"
                                                     aria-expanded="true"
                                                     aria-controls="collapseOne{{\Carbon\Carbon::parse($conda->date)->format('Ymd')}}"
                                                     role="button">
                                                    <div class="date-time-wrap">
                                                        <div
                                                            class="date">{{\Carbon\Carbon::parse($dd->started_at)->format('d')}}</div>
                                                        <div>
                                                            <div
                                                                class="month">{{\Carbon\Carbon::parse($dd->started_at)->format('F')}}</div>
                                                            <div
                                                                class="time">{{\Carbon\Carbon::parse($dd->started_at)->format('g:i')}}
                                                                - {{\Carbon\Carbon::parse($dd->stoped_at)->format('g:i A')}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="content-box-wrap">
                                                        <div class="figure-box">
                                                            <img
                                                                src="{{asset('/upload/conference/'.$dd->user_image.'-d.png')}}"
                                                                alt="Speaker"
                                                                width="60" height="60">
                                                        </div>
                                                        <div class="inner-box">
                                                            <h3 class="title">Developer VR Programming</h3>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="collapseOne{{\Carbon\Carbon::parse($conda->date)->format('Ymd')}}"
                                                 class="accordion-collapse collapse"
                                                 aria-labelledby="headingOne{{\Carbon\Carbon::parse($conda->date)->format('Ymd')}}"
                                                 data-bs-parent="#accordionExample{{\Carbon\Carbon::parse($conda->date)->format('Ymd')}}">
                                                <div class="panel-body">
                                                    <p class="description">Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipiscing elit ut aliquam
                                                        purus sit amet luctus venenatis lectus magna the
                                                        fringilla urna
                                                        porttitor more ready now. Lorem ipsum dolor sit amet
                                                        consectetur
                                                        adipiscing elit ut aliquam
                                                        purus sit amet luctus venenatis lectus magna the
                                                        fringilla urna
                                                        porttitor more ready now.</p>
                                                    <div class="address-wrap">
                                                        <div class="icon-box">
                                                            <svg width="14" height="19" viewBox="0 0 14 19" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M6.04688 17.8984C6.36328 18.3906 7.10156 18.3906 7.41797 17.8984C12.5508 10.5156 13.5 9.74219 13.5 7C13.5 3.27344 10.4766 0.25 6.75 0.25C2.98828 0.25 0 3.27344 0 7C0 9.74219 0.914062 10.5156 6.04688 17.8984ZM6.75 9.8125C5.16797 9.8125 3.9375 8.58203 3.9375 7C3.9375 5.45312 5.16797 4.1875 6.75 4.1875C8.29688 4.1875 9.5625 5.45312 9.5625 7C9.5625 8.58203 8.29688 9.8125 6.75 9.8125Z"/>
                                                            </svg>
                                                        </div>
                                                        <div class="address-text">Hall 1, Building A ,
                                                            Golden
                                                            Street ,
                                                            Southafrica
                                                        </div>
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
