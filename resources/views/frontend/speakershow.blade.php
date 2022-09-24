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
              <img src="{{asset('upload/speaker/' .$speakers->image.'_big_1920.png')}}" alt="img" with="267" height="267">
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-12">
          <div class="speaker-single-box">
            <div class="content-box wow fadeInRight animated" data-wow-delay="0.3s" data-wow-duration="1s">
              <div>
                <h2 class="title">{{$speakers->name}}</h2>
                <div class="sub-title">{{$speakers->job}}</div>
                <p class="description">
                    {{strip_tags($speakers->text)}}

                </p>
                <ul class="social">
                  <li>
                    <a target="_blank" href="{{$speakers->facebook_ur}}" class="facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="{{$speakers->twitter_url}}" class="twitter"><i
                                        class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="{{$speakers->linkedin_url}}" class="linkedin"><i
                                        class="fab fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="{{$speakers->youtube_url}}" class="youtube"><i
                                        class="fab fa-youtube"></i></a>
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
