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
                <li class="list">
                  <a class="animation" href="index.html">HOME</a>
                </li>
                <li class="list">
                  <a class="animation" href="event.html">EVENTS</a>
                </li>
                <li class="list active-link">
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

      <section class="speaker-single-wrap">
        <div class="container">
          <div class="section-heading style-four">
            <h2 class="title wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1s">{{__('Speaker')}}</h2>
          </div>
          <div class="row">
            <div class="col-lg-2 col-12">
              <div class="speaker-single-box">
                <div class="figure-box wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1s">
                  <img src="{{asset('frontend/image/speaker/speak.jpg')}}" alt="Speaker">
                </div>
              </div>
            </div>
            <div class="col-lg-10 col-12">
              <div class="speaker-single-box">
                <div class="content-box wow fadeInRight animated" data-wow-delay="0.3s" data-wow-duration="1s">
                  <div>
                    <h2 class="title">{!! substr($speakers->{'full_name_'.App::getLocale()},0,90).'...' !!}</h2>
                    <div class="sub-title">{!! substr($speakers->{'job_'.App::getLocale()},0,90).'...' !!}</div>
                    <p class="description">{!! substr($speakers->{'description_'.App::getLocale()},0,90).'...' !!}
                    </p>
                    <ul class="social">
                      <li>
                        <a target="_blank" href="{{$innoweeks->facebook}}" class="facebook"><i
                                            class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a target="_blank" href="{{$innoweeks->twitter}}" class="twitter"><i
                                            class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a target="_blank" href="{{$innoweeks->linkedin}}" class="linkedin"><i
                                            class="fab fa-linkedin"></i></a>
                      </li>
                      <li>
                        <a target="_blank" href="{{$innoweeks->instagram}}" class="instagram"><i
                                            class="fab fa-instagram"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      <footer class="footer-wrap-layout1">
        <div class="footer1 footer-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.1s" data-wow-duration="1s">
                <div class="footer-widgets">
                  <a href="#home" class="logo logo-light"><img src="{{asset('frontend/image/min.webp')}}" alt="Logo" width="50"></a>
                      <a href="#home" class="logo logo-light"><img src="{{asset('frontend/image/logo.webp')}}" alt="Logo" width="120"></a>
                  <p class="description mt-2 wow fadeInLeft animated" data-wow-delay="0.2s" data-wow-duration="1s">{!! substr($innoweeks->{'description_'.App::getLocale()},0,90).'...' !!}</p>
                  <ul class="footer-social wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1s">
                    <li class="wow fadeInLeft animated" data-wow-delay="0.7s" data-wow-duration="1s">
                      <a target="_blank" href="{{$innoweeks->facebook}}" class="facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="wow fadeInLeft animated" data-wow-delay="0.6s" data-wow-duration="1s">
                      <a target="_blank" href="{{$innoweeks->instagram}}" class="twitter"><i
                                        class="fab fa-instagram"></i></a>
                    </li>
                    <li class="wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-duration="1s">
                      <a target="_blank" href="{{$innoweeks->linkedin}}" class="linkedin"><i
                                        class="fab fa-telegram"></i></a>
                    </li>
                    <li class="wow fadeInLeft animated" data-wow-delay="0.4s" data-wow-duration="1s">
                      <a target="_blank" href="{{$innoweeks->youtobe}}" class="instagram"><i
                                        class="fab fa-youtube"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-1"></div>
              <div class="col-lg-3 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1s">
                <div class="footer-widgets">
                  <h3 class="widget-title wow fadeInLeft animated" data-wow-delay="0.4s" data-wow-duration="1s">{{__('Useful Links')}}</h3>
                  <div class="footer-menu">
                    <ul>
                      <li class=" wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-duration="1s">
                        <a href="#home"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                          </svg>{{__('Home')}}</a>
                      </li>
                      <li class=" wow fadeInLeft animated" data-wow-delay="0.6s" data-wow-duration="1s"><a href="#"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                          </svg>{{__('Technoways')}}</a></li>
                      
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-duration="1s">
                <div class="footer-widgets">
                  <h3 class="widget-title wow fadeInLeft animated" data-wow-delay="0.6s" data-wow-duration="1s">Contacts</h3>
                  <div class="footer-menu">
                    <ul>
                      <li class="wow fadeInLeft animated" data-wow-delay="0.7s" data-wow-duration="1s"><a class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                          </svg>{{__('Address')}}:</a>
                          <p class="description">{{$innoweeks->address}}</p>
                        </li>
                      <li class="wow fadeInLeft animated" data-wow-delay="0.8s" data-wow-duration="1s"><a class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                          </svg>{{__('Phone')}}: 
                          <p class="description"><a href="tel:+998712033200">{{$innoweeks->phone}}</p>
                        </a>
                        </li>    
                        <li class="wow fadeInLeft animated" data-wow-delay="0.9s" data-wow-duration="1s"><a class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                        </svg>{{$innoweeks->email}}:</a>
                        <p class="description"> <a href="mailto:innoweekuz2021@gmail.com">{{$innoweeks->email}}</a></p>
                      </li>                   
                    </ul>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="footer1 footer-bottom">
          <div class="copyright-text wow fadeInLeftBig animated p-xl-1" data-wow-delay="1s" data-wow-duration="1s">&copy; <span id="currentYear"></span> INNOWEEK All
            Rights Reserved. Developed by </div>
            <span class="wow fadeInLeftBig animated" data-wow-delay="1.3s" data-wow-duration="2s"> <a href="http://www.mimaxgroup.com/" class="link-text">"MIMAX SOFTWARE GROUP".</a></span>
        </div>
      </footer>

    </div>
    
    <div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="right">
      <div class="offcanvas-header">
        <span class="header-text">Close</span>
        <button type="button" class="offcanvas-menu-btn menu-status-close offcanvas-close">
          <span class="menu-btn-icon">
							<span></span>
          <span></span>
          <span></span>
          </span>
        </button>
      </div>

      <div class="offcanvas-content">
        <form class="box " action="./sign-in.html">
          <h5 class="top-content">Tizimda ro'yxatdan o'tish uchun quyida ko'rsatilgan maydonlarni to'ldiring</h5>
          <div class="input-names">
              <input class="name" type="text" placeholder="Ism" autocomplete="off" required>
              <input class="surname" type="text" placeholder="Familya" autocomplete="off" required>
          </div>
          <input id="emailOrNumber" type="text" name="email" placeholder="Email yoki telefon "
          autocomplete="off" required>
          
          <input id="datepicker" type="text" autocomplete="off" required placeholder="kun/oy/yil"/>
          
          
          <div class="input-radio">
              <label for="gender">Jinsi:</label>
              <div class="d-flex-radio">
                  <input type="radio" name="Gender" id="gender"><label>Ayol</label>
                  <input type="radio" name="Gender" id="gender"><label>Erkak</label>
              </div>
          </div>
          <button type="submit" class="btnB btn-input">Ro'yxatdan o'tish</button>
      </form>
      </div>
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