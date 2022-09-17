<div class="section-heading style-four">
    <h2 class="title wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">{{__('Gallery')}}</h2>
</div>
<div class="container-fluid ps-0 pe-0">
    <div class="row">
      @foreach ($galleries as $item)
        <div class="col-xl-3 col-md-4 col-sm-6 col-12">
          <div class="gallery-box-layout3 has-animation">
            <a href="" class="rt-mfp-gallery-item"><img src="{{asset('/upload/galeries/' . $item->image.'-d.png')}}" alt="Gallery" width="900" height="780"></a>
          </div>
        </div>
      @endforeach
    </div>
</div>