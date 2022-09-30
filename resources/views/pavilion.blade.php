@extends('layouts.main')
@section('sticky')
    sticky
@endsection
@section('content')
<div class="pavilion" data-bg-image="{{asset('/frontend/image/pavilion.jpg')}}"
    style="background-image: url(./image/pavilion\ top\ view.jpg);">
    <a class="top-left" href="#" target="_blank"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
    <a class="top-right" href="#" target="_blank"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
    <a class="bottom-left" href="#" target="_blank"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
    <a class="bottom-right" href="#" target="_blank"><img src="{{ asset('/frontend/image/pov_icon.png') }}" alt=""></a>
</div>
@endsection
@section('scripts')
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection
