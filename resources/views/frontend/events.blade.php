@extends('layouts.main')
@section('sticky')
    sticky
@endsection
@section('content')
    <section class="event-single-wrap">
        <div class="container">
            <div class="section-heading style-four">
                <h2 class="title wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1s">{{__('CONFERENCE')}}</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-8">
                    @foreach($news as $new)
                    <div class="event-single-box">
                        <div class="figure-box wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">
                            <a href="{{route('newsshowx',['id'=>$new->id])}}"><img
                                    src="{{asset('upload/news/'.$new->user_image.'-d.png')}}" alt="Event"></a>
                        </div>
                        <div class="content-box">
                            <div class="sub-title wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                                {{$new->created_at}}
                            </div>
                            <a href="{{route('newsshowx',['id'=>$new->id])}}">
                                <h2 class="title wow fadeInUp animated" data-wow-delay="0.4s" data-wow-duration="1s">{{$new->title}}</h2>
                                    <p>{{strip_tags($new->text)}}</p>
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
                            @foreach($newsresent as $recent)
                            <div class="single-post">
                                <div class="figure-box">
                                    <a href="{{route('newsshowx',['id'=>$recent->id])}}" class="link-item"><img width="150"
                                            src="{{asset('upload/news/'.$recent->user_image.'-d.png')}}" alt="Post"></a>
                                </div>
                                <div class="content-box">
                                    <h3 class="entry-title"><a href="{{route('newsshowx',['id'=>$recent->id])}}">{{$recent->title}}</a></h3>
                                    <div class="entry-date"> {{$recent->created_at}}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
            
                    </div>
            
                </div>
            
            </div>
            
            
            <div class="text-center">
                {{-- {{$news->links()}} --}}
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection
