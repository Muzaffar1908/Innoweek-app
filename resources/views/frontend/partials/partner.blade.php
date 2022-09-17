<section id="partner" class="testimonials-wrap-layout2">
  <!-- <div class="container"> -->
    <div class="section-heading style-four">
      <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('Partners')}}</h2>
    </div>
    <div class="sliderPartnerOne swiper-container mb-5">
          <div class="swiper-wrapper align-items-center">
            @foreach($partners as $item)
            <div class="swiper-slide">
              <div class="col">
                <div class="brand-box-layout4">
                  <a href="{{$item->image_url}}" target="_blank"><img src="{{asset('/upload/partners/'.$item->image.'-d.png')}}" class="mt-4" alt="Brand" width="130" height="112"></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
    </div>
  <!-- </div> -->
</section>