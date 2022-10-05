@extends('layouts.main2')
@section('sticky')
    sticky
@endsection
@section('content')
<div class="pavilion" data-bg-image="{{asset('/frontend/image/pavilion.jpg')}}"
    style="background-image: url({{asset('frontend/image/pavilion.jpg')}});">
        <a class="top-left" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_1}}" target="_blank"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
        <a class="top-right" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_2}}" target="_blank"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
        <a class="bottom-left" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_3}}" target="_blank"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
        <a class="bottom-right" href="{{'https://www.youtube.com/watch?v='.$live360s->youtobe_id_4}}" target="_blank"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection
