@extends('layouts.index')
<style>
    .header-menu{
        background-color: #0e1c41;

}</style>
@section('content')

  <section class="event-single-wrap">
    <div class="container">
      <div class="section-heading style-four">
        <h2 class="title wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1s">{{__('News')}}</h2>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="event-single-box">
            <div class="figure-box wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">
              <img src="{{asset('frontend/image/image.jpg')}}" alt="Event">
            </div>
            <div class="content-box">
              <div class="sub-title wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                {{$news->started_at}}</div>
              <h2 class="title wow fadeInUp animated" data-wow-delay="0.4s" data-wow-duration="1s">{!! substr($news->{'title_'.App::getLocale()},0,90).'...' !!}</h2>
              <p class="description wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1s">
                {!! substr($news->{'description_'.App::getLocale()},0,90).'...' !!}
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 template-sidebar wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
          <div class="widget widget-border">
            <div class="widget-heading">
              <h3 class="title">{{__('Recent News')}}</h3>
            </div>
            <div class="widget-recent-post">
              @foreach($newsx as $item)
                <div class="single-post">
                  <div class="figure-box">
                    <a href="{{route('newsshowx', ['id' => $item])}}" class="link-item"><img width="150" src="{{asset('frontend/image/image.jpg')}}" alt="Post"></a>
                  </div>
                  <div class="content-box">
                    <h3 class="entry-title"><a href="{{route('newsshowx', ['id' => $item])}}"></a>{!! substr($item->{'title_'.App::getLocale()},0,90).'...' !!}</h3>
                    <div class="entry-date">{{$item->started_at}}</div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
