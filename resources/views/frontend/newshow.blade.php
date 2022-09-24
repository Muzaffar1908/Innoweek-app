@extends('layouts.main')
@section('sticky')
sticky
@endsection
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
              <img src="{{asset('/upload/news/' . $news->user_image.'_big_728.png')}}" width="100%" alt="Speaker" width="267" height="267">
            </div>
            <div class="content-box">
              <div class="sub-title wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                </div>
              <h2 class="title wow fadeInUp animated" data-wow-delay="0.4s" data-wow-duration="1s">{{$news->title}}</h2>
              <p class="description wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1s">
                {{strip_tags($news->text)}}
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
              @foreach($newsresent as $item)
                <div class="single-post">
                  <div class="figure-box">
                    <a href="{{route('newsshowx', ['id' =>$item->id])}}" class="link-item"><img src="{{asset('/upload/news/' . $item->user_image.'_thumbnail_450.png')}}" alt="Speaker" width="267" height="267"></a>
                  </div>
                  <div class="content-box">
                    <h3 class="entry-title"><a href="{{route('newsshowx', ['id' => $item->id])}}"></a>{{$item->title}}</h3>
                    <div class="entry-date">{{$item->created_at}}</div>
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
@section('scripts')
<script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection
