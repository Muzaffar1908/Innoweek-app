<div class="container">
    <div class="section-heading style-four">
      <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">Speakers</h2>
    </div>
    <div class="row g-0 child-items-wrap">
      @foreach ($speakers as $spek)
        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
          <div class="speaker-box-layout3 animated-bg-wrap">
            <span class="animated-bg"></span>
            <div class="figure-box">
              <a href="speaker.html"><img src="{{asset('/upload/speaker/' . $spek->image.'-d.png')}}" alt="Speaker" width="267" height="267"></a>
            </div>
            <div class="content-box">
              <h3 class="title"><a href="speaker.html">{!! substr($spek->{'full_name_'.App::getLocale()},0,90).'...' !!}</a></h3>
              <div class="sub-title">{!! substr($spek->{'description_'.App::getLocale()},0,90).'...' !!}</div>
              <div class="speaker-social">
                <ul>
                  <li><a target="_blank" href="{{$spek->facebook_url}}"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a target="_blank" href="{{$spek->instagram_url}}"><i class="fab fa-instagram"></i></a></li>
                  <li><a target="_blank" href="{{$spek->linkedin_url}}"><i class="fab fa-linkedin"></i></a></li>
                  <li><a target="_blank" href="{{$spek->youtobe_url}}"><i class="fab fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>  
      @endforeach
    </div>
</div>