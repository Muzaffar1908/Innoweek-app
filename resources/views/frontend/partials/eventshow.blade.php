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
      
      <section class="event-single-wrap">
        <div class="container">
          <div class="section-heading style-four">
            <h2 class="title wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1s">{{__('Event')}}</h2>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="event-single-box">
                <div class="figure-box wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1s">
                  <img src="{{asset('frontend/image/image.jpg')}}" alt="Event">
                </div>
                <div class="content-box">
                  <div class="sub-title wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
                    2022-08-29 10:13:44</div>
                  <h2 class="title wow fadeInUp animated" data-wow-delay="0.4s" data-wow-duration="1s">Jizzax viloyatida “Innoweek-2022” innovatsion g’oyalar ko’rgazmasi o`z ishini boshladi.</h2>
                  <p class="description wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1s">Bugun 25-avgust kuni “Innoweek-2022” innovatsion g’oyalar ko’rgazmasining ochilish marosimi bo`lib o`tdi. Unda Innovatsiyalar milliy ofisi Bosh direktor o’rinbosari Rustam Kuchkarbayev, Jizzax viloyati hokimining o‘rinbosari Nodir Nurmatov so’zga chiqishdi va  ko`rgazmani rasman ochib berishdi.  
                    <br><br>
                    Ko`rgazmada Jizzax viloyatining  barcha hududlaridan kelgan OTM muassasalari, ilmiy-innovatsion markazlar va tashkilotlar, yosh startap egalari va tadbirkorlar ishtirok etishmoqda. 
                    <br><br>
                    📌Ko`rgazma Jizzax viloyat yoshlar innovatsion markazida 2 kun davomida o’tkaziladi.
                    
                    </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 template-sidebar wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1s">
              <div class="widget widget-border">
                <div class="widget-heading">
                  <h3 class="title">Recent News</h3>
                </div>
                <div class="widget-recent-post">
                  <div class="single-post">
                    <div class="figure-box">
                      <a href="#" class="link-item"><img width="150" src="{{asset('frontend/image/image.jpg')}}" alt="Post"></a>
                    </div>
                    <div class="content-box">
                      <h3 class="entry-title"><a href="#">“Mirzo Ulug`bek vorislari” Respublika tanloviga arizalar qabuli yakunlandi.</a></h3>
                      <div class="entry-date">2022-06-10 13:44:23</div>
                    </div>
                  </div>
                  <div class="single-post">
                    <div class="figure-box">
                      <a href="#" class="link-item"><img width="150" src="{{asset('frontend/image/image.jpg')}}" alt="Post"></a>
                    </div>
                    <div class="content-box">
                      <h3 class="entry-title"><a href="#">“INNO texnopark” hamda “Chemist” MCHJ o‘rtasida hamkorlik memorandumi imzolandi</a></h3>
                      <div class="entry-date">2022-06-10 13:44:23</div>
                    </div>
                  </div>
                  <div class="single-post">
                    <div class="figure-box">
                      <a href="#" class="link-item"><img width="150" src="{{asset('frontend/image/image.jpg')}}" alt="Post"></a>
                    </div>
                    <div class="content-box">
                      <h3 class="entry-title"><a href="#">“Mirzo Ulug`bek vorislari” Respublika tanloviga arizalar qabuli yakunlandi.</a></h3>
                      <div class="entry-date">2022-06-10 13:44:23</div>
                    </div>
                  </div>
                  <div class="single-post">
                    <div class="figure-box">
                      <a href="#" class="link-item"><img width="150" src="{{asset('frontend/image/image.jpg')}}" alt="Post"></a>
                    </div>
                    <div class="content-box">
                      <h3 class="entry-title"><a href="#">“INNO texnopark” hamda “Chemist” MCHJ o‘rtasida hamkorlik memorandumi imzolandi</a></h3>
                      <div class="entry-date">2022-06-10 13:44:23</div>
                    </div>
                  </div>
                  <div class="single-post">
                    <div class="figure-box">
                      <a href="#" class="link-item"><img width="150" src="{{asset('frontend/image/image.jpg')}}" alt="Post"></a>
                    </div>
                    <div class="content-box">
                      <h3 class="entry-title"><a href="#">“Mirzo Ulug`bek vorislari” Respublika tanloviga arizalar qabuli yakunlandi.</a></h3>
                      <div class="entry-date">2022-06-10 13:44:23</div>
                    </div>
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