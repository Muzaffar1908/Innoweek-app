@extends('layouts.main')
@section('sticky')
    sticky
@endsection
@section('content')
    <section class="event-single-wrap">
        <div class="container">
            <div class="section-heading style-four">
                <h2 class="title wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1s">{{__('Events')}}</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-8">
                    @foreach($events as $event)
                    <div class="event-single-box">
                        <div class="figure-box wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">
                            <a href="{{route('newsshowx',['id'=>$event->id])}}"><img
                                    src="{{asset('/upload/news/' . $event->user_image.'_big_728.png')}}" alt="Event"></a>
                        </div>
                        <div class="content-box">
                            <div class="sub-title wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                                {{$event->created_at}}
                            </div>
                            <a href="{{route('newsshowx',['id'=>$event->id])}}">
                                <h2 class="title wow fadeInUp animated" data-wow-delay="0.4s" data-wow-duration="1s">{{$event->title}}</h2>
                                    <p>{{strip_tags($event->text)}}</p>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-4 template-sidebar wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                    <div class="widget widget-border">
                        <div class="widget-heading">
                            <h3 class="title">{{__('Recent News')}}</h3>
                        </div>
                        <div class="widget-recent-post">
                            @foreach($eventresent as $recent)
                            <div class="single-post">
                                <div class="figure-box">
                                    <a href="{{route('eventshowx',['id'=>$recent->id])}}" class="link-item"><img width="150"
                                            src="{{asset('/upload/news/' . $recent->user_image.'_thumbnail_450.png')}}" alt="Post"></a>
                                </div>
                                <div class="content-box">
                                    <h3 class="entry-title"><a href="{{route('eventshowx',['id'=>$recent->id])}}">{{$recent->title}}</a></h3>
                                    <div class="entry-date"> {{$recent->created_at}}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
            
                    </div>
            
                </div>
            
            </div>
             
            <div class="text-center">
                {{$events->links()}}
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection
