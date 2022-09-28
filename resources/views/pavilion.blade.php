@extends('layouts.main')
@section('sticky')
    sticky
@endsection
@section('content')

<div class="pavilion" data-bg-image="{{asset('frontend/image/pavilion.jpg')}}" style="background-image: url({{asset('frontend/image/pavilion.jpg')}}./image/pavilion\ top\ view.jpg);" >

</div>

@endsection
@section('scripts')
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
@endsection
