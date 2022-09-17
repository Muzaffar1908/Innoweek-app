<div class="section-heading style-four">
    <h2 class="title text-white wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('Promo')}}</h2>
  </div>
  <div class="process-inner-wrap">
    <div class="container-fluid">
      <div class="process-heading-content">
        <a href="https://www.youtube.com/watch?v=X7C9wAhH8_4" class="play-btn play-btn-primary">
          <i class="fas fa-play"></i>
        </a>
        <h2 class="title wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">{{__('Video about Innoweek 2021')}}</h2>
      </div>
      <div class="row">
        @foreach ($promo as $item)
          <div class="col-xl-3 col-md-6 wow fadeInLeft animated" data-wow-delay="0.1s" data-wow-duration="1s">
            <div class="process-box-layout1 color-one">
              <a href="{{$item->live_url}}" class="icon-box-link play-btn">
                <div class="icon-box">
                  <img src="{{asset('upload/conference/' .$item->user_image.'-d.png')}}" alt="img" with="100px" height="60px">
                  <div class="player"></div>
                </div>
              </a>
              <h3 class="title">
                <p> <a href="{{$item->live_url}}" class="icon-box-link play-btn">{{$item->archiveTable->year}}</a></p>
              </h3>
            </div>
          </div>
        @endforeach
        
      </div>
    </div>
</div>