@extends('layouts.mobile')
@section('styles')
@endsection
@section('content')
    
  <!-- Start Section-title Area -->
  <div class="section-title mb-0 bg-color ptb-30">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-0">
          <a href="{{route('m-home')}}">
            <i class="ri-arrow-left-s-line"></i>
            Live 360
          </a>
        </h2>
      
      </div>
    </div>
  </div>
      <!-- End Section-title Area -->

      <div class="pavilion" data-bg-image="{{asset('frontend/image/pavilion2.jpg')}}" style="background-image: url({{asset('frontend/image/pavilion2.jpg')}});" ></div>
      

  

</body>
</html>


@endsection