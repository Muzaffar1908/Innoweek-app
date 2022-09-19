@extends('layouts.main')
@section('sticky')
sticky
@endsection
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
              <img src="{{asset('upload/speaker/' .$speakers->image.'-d.png')}}" alt="img" with="100px" height="60px">
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-12">
          <div class="speaker-single-box">
            <div class="content-box wow fadeInRight animated" data-wow-delay="0.3s" data-wow-duration="1s">
              <div>
                <h2 class="title">{!!$speakers->{'full_name_'.App::getLocale()}!!}</h2>
                <div class="sub-title">{!!$speakers->{'job_'.App::getLocale()}!!}</div>
                <p class="description">{!!$speakers->{'description_'.App::getLocale()}!!}
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
@section('scripts')
<script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection