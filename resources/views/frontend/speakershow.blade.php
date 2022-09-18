@extends('layouts.index')
<style>
    .header-menu{
        background-color: #0e1c41;
}
.container-fluid{
        background-color: #0e1c41;
}
</style>
@section('content')

  <section class="speaker-single-wrap">
    <div class="container">
      <div class="section-heading style-four">
        <h2 class="title wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1s">{{__('Speaker')}}</h2>
      </div>
      <div class="row">
        <div class="col-lg-2 col-12">
          <div class="speaker-single-box">
            <div class="figure-box wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1s">
              <img src="{{asset('frontend/image/speaker/speak.jpg')}}" alt="Speaker">
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-12">
          <div class="speaker-single-box">
            <div class="content-box wow fadeInRight animated" data-wow-delay="0.3s" data-wow-duration="1s">
              <div>
                <h2 class="title">{!! substr($speakers->{'full_name_'.App::getLocale()},0,90).'...' !!}</h2>
                <div class="sub-title">{!! substr($speakers->{'job_'.App::getLocale()},0,90).'...' !!}</div>
                <p class="description">{!! substr($speakers->{'description_'.App::getLocale()},0,90).'...' !!}
                </p>
                <ul class="social">
                  <li>
                    <a target="_blank" href="{{$innoweeks->facebook}}" class="facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="{{$innoweeks->twitter}}" class="twitter"><i
                                        class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="{{$innoweeks->linkedin}}" class="linkedin"><i
                                        class="fab fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="{{$innoweeks->instagram}}" class="instagram"><i
                                        class="fab fa-instagram"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
