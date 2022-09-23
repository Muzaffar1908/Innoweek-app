@extends('layouts.main')
@section('sticky')
    sticky
@endsection
@section('content')
    <section class="event-single-wrap">
        <div class="container">
            <div class="section-heading style-four">
                <h2 class="title wow fadeInUp animated" data-wow-delay="0.1s"
                    data-wow-duration="1s">{{__('EVENTS')}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="event-single-box">
                        <div class="figure-box wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">
                            <img src="{{asset('/upload/news/'.$events->user_image.'-d.png')}}" alt="Event">
                        </div>
                        <div class="content-box">
                            <div class="sub-title wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                                {{$events->created_at}}</div>
                            <h2 class="title wow fadeInUp animated" data-wow-delay="0.4s"
                                data-wow-duration="1s">{{$events->title}}</h2>
                            <p class="description wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1s">
                                {{strip_tags($events->text)}}

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 template-sidebar wow fadeInUp animated" data-wow-delay="0.3s"
                     data-wow-duration="1s">
                    <div class="widget widget-border">
                        <div class="widget-heading">
                            <h3 class="title">{{__('Recent News')}}</h3>
                        </div>
                        <div class="widget-recent-post">
                            @foreach($eventresent as $item)
                                <div class="single-post">
                                    <div class="figure-box">
                                        <a href="{{route('eventshowx', ['id' => $item->id])}}" class="link-item"><img
                                                width="150" src="{{asset("upload/news/".$item->user_image.'-d.png')}}" alt="Post"></a>
                                    </div>
                                    <div class="content-box">
                                        <h3 class="entry-title"><a
                                                href="{{route('eventshowx', ['id' => $item->id])}}"></a>{{$item->title}}
                                        </h3>
                                        <div class="entry-date">{{$item->created_at}}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                {{-- {{$events->links()}} --}}
            </div>

        </div>
    </section>

@endsection
@section('scripts')
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection
