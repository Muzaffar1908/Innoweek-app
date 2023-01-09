@extends('layouts.main2')
@section('sticky')
    sticky
@endsection
@section('content')
<div class="pavilion" data-bg-image="{{asset('/frontend/image/pavilion.jpg')}}"
    style="background-image: url({{asset('frontend/image/pavilion.jpg')}});">
        <a id="top-left" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_1}}" class="icon-box-link play-btn"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
        <a id="top-right" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_2}}" class="icon-box-link play-btn"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
        <a id="bottom-left" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_3}}" class="icon-box-link play-btn"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
        <a id="bottom-right" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_4}}" class="icon-box-link play-btn"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
</div>

<div class="pavilionnn" data-bg-image="{{asset('/frontend/image/pavilion2.jpg')}}"
    style="background-image: url({{asset('frontend/image/pavilion.jpg')}});">
        <a id="top-left" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_1}}" ><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
        <a id="top-right" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_2}}" ><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
        <a id="bottom-left" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_3}}" ><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
        <a id="bottom-right" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_4}}" ><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection
