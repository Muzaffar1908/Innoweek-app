<footer class="footer-wrap-layout1">
    <div class="footer1 footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.1s"
                    data-wow-duration="1s">
                    <div class="footer-widgets">
                        <a href="#home" class="logo logo-light"><img src="{{asset('frontend/image/min.webp')}}"
                                alt="Logo" width="50"></a>
                        <a href="#home" class="logo logo-light"><img src="{{asset('frontend/image/logo.webp')}}"
                                alt="Logo" width="120"></a>
                        <p class="description mt-2 wow fadeInLeft animated" style="color: #ffffff;" data-wow-delay="0.2s"
                            data-wow-duration="1s">{!! substr($innoweeks->{'description_'.App::getLocale()},0,90).'...'
                            !!}</p>
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
                                <a target="_blank" href="{{$innoweeks->telegram}}" class="linkedin"><i
                                        class="fab fa-telegram"></i></a>
                            </li>
                            <li class="wow fadeInLeft animated" data-wow-delay="0.4s" data-wow-duration="1s">
                                <a target="_blank" href="{{$innoweeks->you_tube}}" class="instagram"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.3s"
                    data-wow-duration="1s">
                    <div class="footer-widgets">
                        <h3 class="widget-title wow fadeInLeft animated" data-wow-delay="0.4s" data-wow-duration="1s">
                            {{__('Useful Links')}}</h3>
                        <div class="footer-menu">
                            <ul>
                                <li class=" wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-duration="1s">
                                    <a href="#home"><svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                        </svg>{{__('Home')}}</a>
                                </li>
                                <li class=" wow fadeInLeft animated" data-wow-delay="0.6s" data-wow-duration="1s"><a
                                        href="#"><svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                        </svg>{{__('Technoways')}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12 wow fadeInLeft animated" data-wow-delay="0.5s"
                    data-wow-duration="1s">
                    <div class="footer-widgets">
                        <h3 class="widget-title wow fadeInLeft animated" data-wow-delay="0.6s" data-wow-duration="1s">
                            Contacts\</h3>
                        <div class="footer-menu">
                            <ul>
                                <li class="wow fadeInLeft animated" data-wow-delay="0.7s" data-wow-duration="1s"><a
                                        class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                        </svg>{{__('Address')}}:</a>
                                    <p class="description">{{$innoweeks->address}}</p>
                                </li>
                                <li class="wow fadeInLeft animated" data-wow-delay="0.8s" data-wow-duration="1s"><a
                                        class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                        </svg>{{__('Phone')}}:
                                        <p class="description"><a href="tel:+998712033200">{{$innoweeks->phone}}</p>
                                    </a>
                                </li>
                                <li class="wow fadeInLeft animated" data-wow-delay="0.9s" data-wow-duration="1s"><a
                                        class="inno-cursor"><svg width="12" height="16" viewBox="0 0 12 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path -d="M0 15.875L5.625 12.5938L11.25 15.875V2.28125C11.25 1.51953 10.6055 0.875 9.84375 0.875H1.40625C0.615234 0.875 0 1.51953 0 2.28125V15.875Z" />
                                        </svg>{{ __('Email')}}:</a>
                                    <p class="description"><a
                                            href="mailto:innoweekuz2021@gmail.com">{{$innoweeks->email}}</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer1 footer-bottom">
        <div class="copyright-text wow fadeInLeftBig animated p-xl-1" data-wow-delay="1s" data-wow-duration="1s">&copy;
            <span id="currentYear"></span> {{__('INNOWEEK All Rights Reserved. Developed by')}}
        </div>
        <span class="wow fadeInLeftBig animated" data-wow-delay="1.3s" data-wow-duration="2s"> <a
                href="http://www.mimaxgroup.com/" target="_blank" class="link-text">"MIMAX SOFTWARE GROUP" LLC.</a></span>
    </div>
</footer>
