<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend/partials/head')
</head>

<body>

  <div class="wrapper" id="wrapper">
    <div id="main_content">

      <header id="home" class="header header1 sticky-on trheader">
       @include('frontend.partials.header')
      </header>

      <div class="rt-header-menu mean-container" id="meanmenu">
        <div class="mean-bar">
          <a href="index.html">
            <img src="{{asset('frontend/image/min.webp')}}" alt="Logo" width="30">
            <img src="{{asset('frontend/image/logo.webp')}}" alt="Logo" width="80">
          </a>
          <span class="sidebarBtn">
            <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
          </span>
        </div>
        <div class="rt-slide-nav Down">
          <div class="offscreen-navigation">
            <nav class="menu-main-primary-container">
              <ul class="menu">
                <li class="list active-link">
                  <a class="animation" href="index.html">HOME</a>
                </li>
                <li class="list">
                  <a class="animation" href="event.html">EVENTS</a>
                </li>
                <li class="list">
                  <a class="animation" href="news.html">NEWS</a>
                </li>
                <li class="list">
                  <a class="animation" href="speaker.html">SPEAKERS</a>
                </li>
                <li class="list">
                  <a class="animation" href="#schedule">SCHEDULE</a>
                </li>
                <li class="list">
                  <a class="animation" href="#gallery">GALLERY</a>
                </li>
                <li class="list">
                  <a class="animation" href="#contact">CONTACTS</a>
                </li>
                <li class="list">
                  <a class="animation scliked" href="{{asset('frontend/pdf/inno.pdf')}}" target="_blank">Innoweek 2022 Invitation</a>
                </li>
                <li class="list">
                  <a class="animation scliked" href="{{asset('frontend/pdf/Innoen.pdf')}}" target="_blank">Innoweek 2022 Presentation</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <section class="rt-header-menu hero-wrap-layout1" data-bg-image="{{asset('frontend/image/back.png')}}">
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
      
      <section id="partner" class="testimonials-wrap-layout2">
        @include('frontend.partials.partner')
      </section>

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