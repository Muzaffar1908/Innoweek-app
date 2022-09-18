@extends('layouts.index')

@section('content')

  <section class="event-single-wrap">
    <div class="container">
      <div class="section-heading style-four">
        <h2 class="title wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1s">Event</h2>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="event-single-box">
            <div class="figure-box wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">
              <img src="{{asset('frontend/image/image.jpg')}}" alt="Event">
            </div>
            <div class="content-box">
              <div class="sub-title wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                2022-08-29 10:13:44</div>
              <h2 class="title wow fadeInUp animated" data-wow-delay="0.4s" data-wow-duration="1s">Jizzax viloyatida “Innoweek-2022” innovatsion g’oyalar ko’rgazmasi o`z ishini boshladi.</h2>
              <p class="description wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1s">Bugun 25-avgust kuni “Innoweek-2022” innovatsion g’oyalar ko’rgazmasining ochilish marosimi bo`lib o`tdi. Unda Innovatsiyalar milliy ofisi Bosh direktor o’rinbosari Rustam Kuchkarbayev, Jizzax viloyati hokimining o‘rinbosari Nodir Nurmatov so’zga chiqishdi va  ko`rgazmani rasman ochib berishdi.  
                <br><br>
                Ko`rgazmada Jizzax viloyatining  barcha hududlaridan kelgan OTM muassasalari, ilmiy-innovatsion markazlar va tashkilotlar, yosh startap egalari va tadbirkorlar ishtirok etishmoqda. 
                <br><br>
                📌Ko`rgazma Jizzax viloyat yoshlar innovatsion markazida 2 kun davomida o’tkaziladi.
                
                </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 template-sidebar wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
          <div class="widget widget-border">
            <div class="widget-heading">
              <h3 class="title">Recent News</h3>
            </div>
            <div class="widget-recent-post">
              <div class="single-post">
                <div class="figure-box">
                  <a href="#" class="link-item"><img width="150" src="{{asset('frontend/image/image.jpg')}}" alt="Post"></a>
                </div>
                <div class="content-box">
                  <h3 class="entry-title"><a href="#">“Mirzo Ulug`bek vorislari” Respublika tanloviga arizalar qabuli yakunlandi.</a></h3>
                  <div class="entry-date">2022-06-10 13:44:23</div>
                </div>
              </div>
              <div class="single-post">
                <div class="figure-box">
                  <a href="#" class="link-item"><img width="150" src="{{asset('frontend/image/image.jpg')}}" alt="Post"></a>
                </div>
                <div class="content-box">
                  <h3 class="entry-title"><a href="#">“INNO texnopark” hamda “Chemist” MCHJ o‘rtasida hamkorlik memorandumi imzolandi</a></h3>
                  <div class="entry-date">2022-06-10 13:44:23</div>
                </div>
              </div>
              <div class="single-post">
                <div class="figure-box">
                  <a href="#" class="link-item"><img width="150" src="{{asset('frontend/image/image.jpg')}}" alt="Post"></a>
                </div>
                <div class="content-box">
                  <h3 class="entry-title"><a href="#">“Mirzo Ulug`bek vorislari” Respublika tanloviga arizalar qabuli yakunlandi.</a></h3>
                  <div class="entry-date">2022-06-10 13:44:23</div>
                </div>
              </div>
              <div class="single-post">
                <div class="figure-box">
                  <a href="#" class="link-item"><img width="150" src="{{asset('frontend/image/image.jpg')}}" alt="Post"></a>
                </div>
                <div class="content-box">
                  <h3 class="entry-title"><a href="#">“INNO texnopark” hamda “Chemist” MCHJ o‘rtasida hamkorlik memorandumi imzolandi</a></h3>
                  <div class="entry-date">2022-06-10 13:44:23</div>
                </div>
              </div>
              <div class="single-post">
                <div class="figure-box">
                  <a href="#" class="link-item"><img width="150" src="{{asset('frontend/image/image.jpg')}}" alt="Post"></a>
                </div>
                <div class="content-box">
                  <h3 class="entry-title"><a href="#">“Mirzo Ulug`bek vorislari” Respublika tanloviga arizalar qabuli yakunlandi.</a></h3>
                  <div class="entry-date">2022-06-10 13:44:23</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection