<header id="home" class="header header1 sticky-on trheader @yield('sticky')">
    <div id="navbar-wrap" class="navbar-wrap">
        <div class="header-menu">
            <div class="header-width">
                <div class="container-fluid">
                    <div class="inner-wrap">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="site-branding">
                                <a href="{{route('index')}}" class="logo logo-light wow fadeInUp animated"
                                    data-wow-delay="0.20s"><img src="{{asset('frontend/image/min.webp')}}" alt="Logo"
                                        width="50"></a>
                                <a href="{{route('index')}}" class="logo logo-light wow fadeInUp animated"
                                    data-wow-delay="0.30s"><img src="{{asset('frontend/image/logo.webp')}}" alt="Logo"
                                        width="120"></a>
                                <a href="{{route('index')}}" class="logo logo-dark"><img
                                        src="{{asset('frontend/image/min.webp')}}" alt="Logo" width="50"></a>
                                <a href="{{route('index')}}" class="logo logo-dark"><img
                                        src="{{asset('frontend/image/logo.webp')}}" alt="Logo" width="120"></a>
                            </div>
                            <nav id="dropdown" class="template-main-menu menu-text-light">
                                <ul class="menu">
                                    <li class="menu-item {{ (request()->is('/')) ? 'active' : '' }} menu-item-has-children wow fadeInUp animated"
                                        data-wow-delay="0.1s">
                                        <a href="{{ url('/') }}">{{__('HOME')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children mega-menu mega-menu-col-2 wow fadeInUp animated {{ (request()->is('events')) ? 'active' : '' }}"
                                        data-wow-delay="0.2s">
                                        <a href="/events">{{__('EVENTS')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children wow fadeInUp animated {{ (request()->is('news')) ? 'active' : '' }}"
                                        data-wow-delay="0.3s">
                                        <a href="/news">{{__('NEWS')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children wow fadeInUp animated {{ (request()->is('speakers')) ? 'active' : '' }}"
                                        data-wow-delay="0.4s">
                                        <a href="/speakers">{{__('SPEAKERS')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children wow fadeInUp animated {{ (request()->is('/#schedule')) ? 'active' : '' }}"
                                        data-wow-delay="0.5s">
                                        <a href="{{ url('/') }}#schedule">{{__('SCHEDULE')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children wow fadeInUp animated"
                                        data-wow-delay="0.6s">
                                        <a href="{{ url('/statistic') }}">{{__('STATISTICS')}}</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children wow fadeInUp animated {{ (request()->is('live360')) ? 'active' : '' }}"
                                        data-wow-delay="0.7s">
                                        <a href="/live360">{{__('LIVE 360')}}</a>
                                    </li>
                                    {{-- <li class="menu-item menu-item-has-children wow fadeInUp animated {{ (request()->is('/#gallery')) ? 'active' : '' }}"
                                        data-wow-delay="0.8s">
                                        <a href="{{ url('/') }}#gallery">{{__('GALLERY')}}</a>
                                    </li> --}}
                                    <li class="menu-item menu-item-has-children wow fadeInUp animated"
                                        data-wow-delay="0.8s">
                                        <a class="inno-cursor">INNOWEEK 2022</a>
                                        <ul class="sub-menu menu-w">
                                            <li class="menu-item"><a href="{{__('Invitation_pdf')}}" target="_blank">{{__('Innoweek 2022 Invitation')}}</a>
                                            </li>
                                            <li class="menu-item"><a href="{{__('Presentation_pdf')}}" target="_blank">{{__('Innoweek 2022 Presentation')}}</a>
                                            </li>
                                            <li class="menu-item"><a href="{{__('Program_pdf')}}" target="_blank">{{__('Innoweek 2022 Program')}}</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <nav id="dropdown"
                                class="template-main-menu menu-text-light d-flex align-items-center justify-content-center">
                                @php $locale = session()->get('locale'); @endphp
                                <ul class="menu">
                                    @switch($locale)
                                    @case('')
                                    <li class="menu-item menu-item-has-children wow fadeInUp animated"
                                        data-wow-delay="0.9s">
                                        <a href="{{ URL::to('locale/en') }}"
                                            class="d-flex align-items-center justify-content-center inno-cursor">
                                            <img class="mx-2" width="30" src="{{asset('frontend/image/en.png')}}"
                                                alt="English">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu menu-color">
                                            <li class="menu-item text-center"><a href="{{ URL::to('locale/ru') }}"><img
                                                        class="mx-2" width="30" src="{{asset('frontend/image/ru.png')}}"
                                                        alt="Russian"></a>
                                            </li>
                                            <li class="menu-item text-center"><a href="{{ URL::to('locale/uz') }}"><img
                                                        class="mx-2" width="30" src="{{asset('frontend/image/uz.png')}}"
                                                        alt="Uzbek"></a>
                                            </li>
                                        </ul>
                                    </li>
                                    @break
                                    @case('uz')
                                    <li class="menu-item menu-item-has-children wow fadeInUp animated"
                                        data-wow-delay="0.9s">
                                        <a href="{{ URL::to('locale/uz') }}"
                                            class="d-flex align-items-center justify-content-center inno-cursor">
                                            <img class="mx-2" width="30" src="{{asset('frontend/image/uz.png')}}"
                                                alt="Uzbek">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu menu-color">
                                            <li class="menu-item text-center"><a href="{{ URL::to('locale/ru') }}"><img
                                                        class="mx-2" width="30" src="{{asset('frontend/image/ru.png')}}"
                                                        alt="Russian"></a>
                                            </li>
                                            <li class="menu-item text-center"><a href="{{ URL::to('locale/en') }}"><img
                                                        class="mx-2" width="30" src="{{asset('frontend/image/en.png')}}"
                                                        alt="English"></a>
                                            </li>
                                        </ul>
                                    </li>
                                    @break
                                    @case('ru')
                                    <li class="menu-item menu-item-has-children wow fadeInUp animated"
                                        data-wow-delay="0.9s">
                                        <a href="{{ URL::to('locale/ru') }}"
                                            class="d-flex align-items-center justify-content-center inno-cursor">
                                            <img class="mx-2" width="30" src="{{asset('frontend/image/ru.png')}}"
                                                alt="Russian">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu menu-color">
                                            <li class="menu-item text-center"><a href="{{ URL::to('locale/en') }}"><img
                                                        class="mx-2" width="30" src="{{asset('frontend/image/en.png')}}"
                                                        alt="English"></a>
                                            </li>
                                            <li class="menu-item text-center"><a href="{{ URL::to('locale/uz') }}"><img
                                                        class="mx-2" width="30" src="{{asset('frontend/image/uz.png')}}"
                                                        alt="Uzbek"></a>
                                            </li>
                                        </ul>
                                    </li>
                                    @break
                                    @case('en')
                                    <li class="menu-item menu-item-has-children wow fadeInUp animated"
                                        data-wow-delay="0.9s">
                                        <a href="{{ URL::to('locale/en') }}"
                                            class="d-flex align-items-center justify-content-center inno-cursor">
                                            <img class="mx-2" width="30" src="{{asset('frontend/image/en.png')}}"
                                                alt="English">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu menu-color">
                                            <li class="menu-item text-center"><a href="{{ URL::to('locale/uz') }}"><img
                                                        class="mx-2" width="30" src="{{asset('frontend/image/uz.png')}}"
                                                        alt="Uzbek"></a>
                                            </li>
                                            <li class="menu-item text-center"><a href="{{ URL::to('locale/ru') }}"><img
                                                        class="mx-2" width="30" src="{{asset('frontend/image/ru.png')}}"
                                                        alt="Russian"></a>
                                            </li>
                                        </ul>
                                    </li>
                                    @break
                                    @default

                                    @endswitch
                                </ul>
                                <ul class="header-action-items">
                                    <li class="header-action-item d-none d-xl-block wow fadeInUp animated"
                                        data-wow-delay="1s">
                                        <button type="button"
                                            class="item-btn btn-fill style-one offcanvas-menu-btn style-one menu-status-open">
                                            {{__('REGISTRATION')}}
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <a class="animation" href="index.html">{{__('HOME')}}</a>
                    </li>
                    <li class="list">
                        <a class="animation" href="event.html">{{__('EVENTS')}}</a>
                    </li>
                    <li class="list">
                        <a class="animation" href="news.html">{{__('NEWS')}}</a>
                    </li>
                    <li class="list">
                        <a class="animation" href="speaker.html">{{__('SPEAKERS')}}</a>
                    </li>
                    <li class="list">
                        <a class="animation" href="#schedule">{{__('SCHEDULE')}}</a>
                    </li>
                    {{-- <li class="list">
                        <a class="animation" href="#gallery">{{__('GALLERY')}}</a>
                    </li> --}}
                    <li class="list">
                        <a class="animation" href="#contact">{{__('STATISTICS')}}</a>
                    </li>
                    <li class="list">
                        <a class="animation" href="#contact">{{__('LIVE 360')}}</a>
                    </li>
                    <li class="list">
                        <a class="animation scliked" href="{{asset('frontend/pdf/inno.pdf')}}"
                            target="_blank">{{__('Innoweek 2022 Invitation')}}</a>
                    </li>
                    <li class="list">
                        <a class="animation scliked" href="{{asset('frontend/pdf/Innoen.pdf')}}"
                            target="_blank">{{__('Innoweek 2022 Presentation')}}</a>
                    </li>
                    <li class="list">
                        <a class="animation scliked" href="{{__('Program_pdf')}}" target="_blank">{{__('Innoweek 2022 Program')}}
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
