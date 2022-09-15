<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.partials.head')
</head>

<body>

  <div class="wrapper" id="wrapper">
    <div id="main_content">

      <header id="home" class="header header1 sticky-on trheader">
        @include('frontend.partials.header')
      </header>

      <section class="hero-wrap-layout1" data-bg-image="{{asset('frontend/image/back.png')}}">
        @include('frontend.partials.section')
      </section>

      <section id="event" class="event-wrap-layout1 mb-5">
        @include('frontend.partials.event')
      </section>

      <section id="promo" class="process-wrap-layout1" data-bg-image="{{asset('frontend/image/image.jpg')}}">
        @include('frontend.partials.promo')
      </section>

      <section class="about-wrap-layout1">
        @include('frontend.partials.about')
      </section>

      <section id="new" class="blog-wrap-layout1">
        @include('frontend.partials.new')
      </section>

      <section id="speaker" class="speaker-wrap-layout3">
        @include('frontend.partials.speaker')
      </section>

      <section id="schedule" class="schedule-wrap-layout5">
        @include('frontend.partials.schedule')
      </section>

      <div id="gallery" class="gallery-wrap-layout3">
        @include('frontend.partials.gallery')
      </div>

      <div id="partner" class="brand-wrap-layout4">
        @include('frontend.partials.partner')
      </div>

      <section id="contact" class="location-wrap-layout1">
        @include('frontend.partials.contact')
      </section>
      
      <footer class="footer-wrap-layout1">
        @include('frontend.partials.footer')
      </footer>

    </div>


    <div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="right">
        @include('frontend.partials.register')
    </div>

    <div id="template-search" class="template-search">
      <button type="button" class="close">×</button>
      <form class="search-form">
        <input type="search" value="" placeholder="Search" />
        <button type="submit" class="search-btn btn-ghost style-1">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>
  </div>


  <!-- Dependency Scripts -->
  <script src="{{asset('frontend/assets/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/assets/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/magnific-popup/js/magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/assets/countdown/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('frontend/assets/wow/wow.min.js')}}"></script>
  <script src="{{asset('frontend/assets/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/swiper/js/swiper.min.js')}}"></script>
  <script src="{{asset('frontend/assets/validator/validator.min.js')}}"></script>
  <!-- Custom Script -->
  <script src="{{asset('frontend/js/app.js')}}"></script>
</body>

</html>