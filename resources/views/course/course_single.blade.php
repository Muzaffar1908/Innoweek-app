




@extends("layauts.app")
@section("links")
<title>Eduhub - Education And LMS HTML5 Template</title>

<link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
<link rel="stylesheet" href="assets/css/style2.css">
<link rel="stylesheet" href="assets/css/style.css">
<style>
    .stars-wrapper,
    .stars-display {
        display: grid;
        grid: 2rem / repeat(5, 1fr);
    }

    .stars-wrapper {
        max-width: 10rem;
    }

    .active {
        box-shadow: 0 0 2px #0ae106;
    }

    .stars-display {
        grid-row: 1;
        grid-column: 1 / -1;
        fill: lightgrey;
        pointer-events: none;
        place-items: center;
    }



    #my-form-2 input,
    #my-form-2 label,
    #my-form-2 label::selection {
        appearance: none;
        color: rgba(255, 255, 255, 0);
        background: rgba(255, 255, 255, 0);
    }

    #one-star-rating-2,
    label[for="one-star-rating-2"] {
        grid-row: 1;
        grid-column: 1;
    }

    #two-star-rating-2,
    label[for="two-star-rating-2"] {
        grid-row: 1;
        grid-column: 2;
    }

    #three-star-rating-2,
    label[for="three-star-rating-2"] {
        grid-row: 1;
        grid-column: 3;
    }

    #four-star-rating-2,
    label[for="four-star-rating-2"] {
        grid-row: 1;
        grid-column: 4;
    }

    #five-star-rating-2,
    label[for="five-star-rating-2"] {
        grid-row: 1;
        grid-column: 5;
    }

    /* Fill stars up to and including selected star */
    #one-star-rating-2:checked~.stars-display svg:nth-child(-n + 1) {
        fill: orange;
    }

    #two-star-rating-2:checked~.stars-display svg:nth-child(-n + 2) {
        fill: orange;
    }

    #three-star-rating-2:checked~.stars-display svg:nth-child(-n + 3) {
        fill: orange;
    }

    #four-star-rating-2:checked~.stars-display svg:nth-child(-n + 4) {
        fill: orange;
    }

    #five-star-rating-2:checked~.stars-display svg:nth-child(-n + 5) {
        fill: orange;
    }

    /* Fill stars that are being hovered (overrides the fill up to selected rating) */
    #one-star-rating-2:hover~.stars-display svg:nth-child(-n + 1) {
        fill: rgb(255, 0, 0);
    }

    #two-star-rating-2:hover~.stars-display svg:nth-child(-n + 2) {
        fill: rgb(255, 0, 0);
    }

    #three-star-rating-2:hover~.stars-display svg:nth-child(-n + 3) {
        fill: rgb(255, 0, 0);
    }

    #four-star-rating-2:hover~.stars-display svg:nth-child(-n + 4) {
        fill: rgb(255, 0, 0);
    }

    #five-star-rating-2:hover~.stars-display svg:nth-child(-n + 5) {
        fill: rgb(255, 0, 0);
    }

    /* Fill stars that are being hovered (overrides the fill up to selected rating) */
    #one-star-rating-2:hover:checked~.stars-display svg:nth-child(-n + 1) {
        fill: orange;
    }

    #two-star-rating-2:hover:checked~.stars-display svg:nth-child(-n + 2) {
        fill: orange;
    }

    #three-star-rating-2:hover:checked~.stars-display svg:nth-child(-n + 3) {
        fill: orange;
    }

    #four-star-rating-2:hover:checked~.stars-display svg:nth-child(-n + 4) {
        fill: orange;
    }

    #five-star-rating-2:hover:checked~.stars-display svg:nth-child(-n + 5) {
        fill: orange;
    }

    video::-webkit-media-controls-volume-slider {
        background-color: #f00;
        padding-top: 0;
        margin-top: 20px;

        padding-bottom: 0;
    }
</style>

@endsection("links")
@section('content')

    <main class="main">

        <div class="site-breadcrumb justify-content-start text-start">
            <div class="hero-shape-area">
                <img class="hero-shape-1" src="{{ asset('storage/img/shape/shape-1.png') }}" alt="">
                <img class="hero-shape-2" src="{{ asset('storage/img/shape/shape-2.png') }}" alt="">
                <img class="hero-shape-3" src="{{ asset('storage/img/shape/shape-3.png') }}" alt="">
                <img class="hero-shape-4" src="{{ asset('storage/img/shape/shape-4.png') }}" alt="">
            </div>
            @if (session('success'))
            <div class="alert alert-success text-center" style="width: 100%; font-size:20px;color:rgb(255, 6, 6);font-weight:bold;">
                {{ session('success') }}
            </div>
        @endif

            <div class="container">
                <div class="col-lg-6">
                    <div class="course-single-header">
                        <span class="course-category course-category-1">
                            @if (app()->getLocale('lang') === 'en')
                                {{ $cource->category_en->name }}
                            @elseif (app()->getLocale('lang') === 'ru')
                                {{ $cource->category_ru->name }}
                            @elseif(app()->getLocale('lang') === 'uz')
                                {{ $cource->category_uz->name }}
                            @endif
                        </span>
                        <h4 class="course-single-title">{{ $cource->name }}</h4>
                        <p>{{ $cource->text }}</p>
                        <div class="course-single-rating">
                            @for ($i = 0; round($cource->sharxlar_avg_reyting) > $i; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                            @for ($i = 0; 5 - round($cource->sharxlar_avg_reyting) > $i; $i++)
                                <i class="far fa-star"></i>
                            @endfor
                            <span class="course-single-rating-avg">{{ round($cource->sharxlar_avg_reyting, 1) }} </span>
                            <span>({{ $cource->sharxlar_count }}Reviews)</span>
                        </div>
                        <div class="course-single-meta">
                            <a href="/instructor-single/{{ $cource->teacher->id }}" class="course-single-instructor">
                                <img src="{{ asset('storage/user/' . $cource->teacher->img) }}" alt="">
                                <h6>{{ $cource->teacher->name }}
                                    {{ $cource->teacher->sname }}</h6>
                            </a>
                            <div class="course-single-update-date">
                                <h6><span>
                                        <?

                                                                                $date2=date_create($cource->teacher->created_at);
                                                                                $d2=date_format($date2, ' jS F Y');
                                                                                echo $d2
                                                                                ?>
                                    </span> dan buyon</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="course-single pt-50 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="course-single-wrapper">


                            <div class="video-area">



                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="video-wrapper" style="overflow: hidden;">
                                            <video controls data-setup='{}'
                                                poster="{{ asset('storage/course/' . $cource->img) }}" preload='auto'
                                                id="video" style="width:100%; height:450px">
                                                <source id="source" src="{{ asset('storage/video/1.mp4') }}"
                                                    type="video/mp4" />
                                            </video>
                                            <div class="play-btn popup-youtube" id="circle-play-b">
                                                <i class="fas fa-play"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="course-single-tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="course-single-tab1" data-bs-toggle="tab"
                                            data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1"
                                            aria-selected="true">Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="course-single-tab2" data-bs-toggle="tab"
                                            data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2"
                                            aria-selected="true">Curriculum</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="course-single-tab3" data-bs-toggle="tab"
                                            data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3"
                                            aria-selected="true">Instructor</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="course-single-tab4" data-bs-toggle="tab"
                                            data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4"
                                            aria-selected="true">Review</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">

                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                        aria-labelledby="course-single-tab1">
                                        <div class="course-single-content">
                                            <div class="course-single-details">

                                                @foreach ($desc as $d)
                                                    <div class="mb-4">
                                                        <h5 class="mb-10">{{ $d->title }}</h5>
                                                        <p>
                                                            {{ $d->text }}
                                                        </p>
                                                        <ul class="course-single-list">

                                                            @foreach ($d->disc as $row)
                                                                <li><i class="far fa-check"></i>
                                                                    {{ $row->text }}

                                                                </li>
                                                            @endforeach

                                                        </ul>



                                                    </div>
                                                @endforeach







                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab2" role="tabpanel"
                                        aria-labelledby="course-single-tab2">
                                        <div class="course-single-content">
                                            <div class="course-single-curriculum">
                                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                                    <?$tartib=1;?>
                                                    @foreach ($video as $v)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header"
                                                                id="<?
                                                        if($tartib==1){
                                                            echo("flush-headingOne");
                                                                } ;if($tartib==2){ echo("flush-headingTwo") ;}
                                                                ;if($tartib==3){ echo("flush-headingThree"); };
                                                                if($tartib==4){ echo("flush-headingFour"); }; ?>">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="<?
                                                                if($tartib==1){
                                                                    echo("#flush-collapseOne");
                                                                    } ;if($tartib==2){ echo("#flush-collapseTwo") ;}
                                                                    ;if($tartib==3){ echo("#flush-collapseThree"); };
                                                                    if($tartib==4){ echo("#flush-collapseFour"); }; ?>"
                                                                    aria-expanded="false"
                                                                    aria-controls="<?
                                                                if($tartib==1){
                                                                    echo("flush-collapseOne");
                                                                    } ;if($tartib==2){ echo("flush-collapseTwo") ;}
                                                                    ;if($tartib==3){ echo("flush-collapseThree"); };
                                                                    if($tartib==4){ echo("flush-collapseFour"); };
                                                                    ?>">
                                                                    {{ $v->name }}







                                                                </button>

                                                            </h2>


                                                            <div id="<?
                                                        if($tartib==1){
                                                            echo("flush-collapseOne");
                                                                } ;if($tartib==2){ echo("flush-collapseTwo") ;}
                                                                ;if($tartib==3){ echo("flush-collapseThree"); };
                                                                if($tartib==4){ echo("flush-collapseFour"); }; ?>"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="<?
                                                            if($tartib==1){
                                                                echo("flush-headingOne");
                                                                } ;if($tartib==2){ echo("flush-headingTwo") ;}
                                                                ;if($tartib==3){ echo("flush-headingThree"); };
                                                                if($tartib==4){ echo("flush-headingFour"); };
                                                                if($tartib==5){ echo("flush-headingFive"); };
                                                                if($tartib==6){ echo("flush-headingSix"); };
                                                                if($tartib==7){ echo("flush-headingSeven"); };
                                                                $tartib=$tartib+1;
                                                                ?>"
                                                                data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    @foreach ($v->video as $d)
                                                                        @if (($d->tip == 'free' or !($buy==null)) and
                                                                            $d->dars_turi == 'Reading' and
                                                                            !(isset(Auth::user()->id) and Auth::user()->id == $cource->user->id))
                                                                            <a href="{{ asset('storage/video/' . $d->v_name) }}"
                                                                                download style="width:100%">
                                                                        @endif
                                                                        <div class="course-curriculum-item
                                                                        <?foreach ($d->watch as $k) {
                                                                                if(isset($k->user_id) and $k->user_id== Auth::user()->id  and isset(Auth::user()->id)){
                                                                                        echo(' curriculum-completed');
                                                                                }
                                                                            }?>
                                                                    @if ($d->tip == 'free' or  !($buy==null))
curriculum-unlock
@endif @if (($d->tip == 'free' or !($buy==null)) and !($d->dars_turi == 'Reading'))
free_lesson
@endif"
                                                                            src="{{ asset('storage/video/' . $d->v_name) }}">
                                                                            <div class="course-curriculum-left">
                                                                                <h6>
                                                                                    <span>
                                                                                        <?foreach ($d->watch as $k) {
                                                                                            if($k->user_id==Auth::user()->id and isset(Auth::user()->id)){
                                                                                                echo(' <i class="fad fa-check-circle"></i>');
                                                                                            };

                                                                                        }?>
                                                                                        @if ($d->dars_turi == 'Video')
                                                                                            <i
                                                                                                class="fad fa-play-circle"></i>
                                                                                        @endif
                                                                                        @if ($d->dars_turi == 'Audio')
                                                                                            <i class="fad fa-volume"></i>
                                                                                        @endif
                                                                                        @if ($d->dars_turi == 'Reading')
                                                                                            <i class="fad fa-file-alt"></i>
                                                                                        @endif


                                                                                    </span> {{ $d->name }}
                                                                                </h6>
                                                                            </div>
                                                                            <div class="course-curriculum-right">
                                                                                <span class="course-curriculum-lock">
                                                                                    @if ($d->tip == 'free' or !($buy==null) and $d->tip == 'premmum')
                                                                                        <i class="fad fa-unlock"></i>
                                                                                    @endif
                                                                                    @if ($d->tip == 'premmum' and ($buy==null))
                                                                                        <i class="fad fa-lock"></i>
                                                                                    @endif



                                                                                </span>



                                                                            </div>
                                                                        </div>
                                                                        @if (isset(Auth::user()->id) and ($d->tip == 'free' or !($buy==null)) and
                                                                            $d->dars_turi == 'Reading' and
                                                                            !(Auth::user()->id == $cource->user->id))
                                                                            </a>
                                                                        @endif
                                                                    @endforeach


                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach



                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab3" role="tabpanel"
                                        aria-labelledby="course-single-tab3">
                                        <div class="course-single-content">
                                            <a href="/instructor-single/{{ $user->id }}"
                                                class="course-tab-instructor">
                                                <div class="course-tab-instructor-img">
                                                    <img style="width:150px"
                                                        src="{{ asset('storage/user/' . $cource->user->img) }}"
                                                        alt="">
                                                </div>
                                                <div class="course-tab-instructor-content">
                                                    <h5>{{ $cource->user->name }}</h5>
                                                    <div class="course-tab-instructor-meta">
                                                        <div class="course-tab-instructor-rating">
                                                            @for ($i = 0; round($user->ins_sharx_avg_reyting) > $i; $i++)
                                                                <i class="fas fa-star"></i>
                                                            @endfor
                                                            @for ($i = 0; 5 - round($user->ins_sharx_avg_reyting) > $i; $i++)
                                                                <i class="far fa-star"></i>
                                                            @endfor


                                                            <span>({{ $user->ins_sharx_count }})</span>
                                                        </div>
                                                        <span class="course-tab-instructor-course"><i
                                                                class="fad fa-book-open"></i> {{ $user->cources_count }}
                                                            Courses</span>
                                                        <span class="course-tab-instructor-enrolled"><i
                                                                class="fad fa-user-friends"></i> {{ $students }}
                                                            Enrolled</span>
                                                    </div>
                                                    <p>
                                                        @if (isset($user->ins_about->text))
                                                            {{ substr($user->ins_about->text, 0, 70) }}
                                                        @endif
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="tab4" role="tabpanel"
                                        aria-labelledby="course-single-tab4">
                                        <div class="course-single-content">
                                            <div class="instructor-tab-wrapper">
                                                <div class="instructor-review-rating">
                                                    <div class="instructor-rating-count">
                                                        <h2>{{ $cource->sharxlar_avg_reyting }}</h2>
                                                        <div class="instructor-rating-star">
                                                            @for ($i = 0; round($cource->sharxlar_avg_reyting) > $i; $i++)
                                                                <i class="fas fa-star"></i>
                                                            @endfor
                                                            @for ($i = 0; 5 - round($cource->sharxlar_avg_reyting) > $i; $i++)
                                                                <i class="far fa-star"></i>
                                                            @endfor

                                                        </div>
                                                        <p>{{ $cource->sharxlar_count }} Students Review</p>
                                                    </div>
                                                    <div class="instructor-rating-range">
                                                        <div class="instructor-rating-range-item">
                                                            <div class="instructor-rating-range-star">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <div class="instructor-rating-range-bar">
                                                                <div class="instructor-progress">
                                                                    <div class="instructor-progress-width"
                                                                        style="width: {{ $stars5 }}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-rating-range-percentage">
                                                                <span>{{ round($stars5, 1) }}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-rating-range-item">
                                                            <div class="instructor-rating-range-star">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <div class="instructor-rating-range-bar">
                                                                <div class="instructor-progress">
                                                                    <div class="instructor-progress-width"
                                                                        style="width: {{ $stars4 }}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-rating-range-percentage">
                                                                <span>{{ round($stars4, 1) }}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-rating-range-item">
                                                            <div class="instructor-rating-range-star">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <div class="instructor-rating-range-bar">
                                                                <div class="instructor-progress">
                                                                    <div class="instructor-progress-width"
                                                                        style="width: {{ $stars3 }}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-rating-range-percentage">
                                                                <span>{{ round($stars3, 1) }}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-rating-range-item">
                                                            <div class="instructor-rating-range-star">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <div class="instructor-rating-range-bar">
                                                                <div class="instructor-progress">
                                                                    <div class="instructor-progress-width"
                                                                        style="width: {{ $stars2 }}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-rating-range-percentage">
                                                                <span>{{ round($stars2, 1) }}%</span>
                                                            </div>
                                                        </div>
                                                        <div class="instructor-rating-range-item">
                                                            <div class="instructor-rating-range-star">
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <div class="instructor-rating-range-bar">
                                                                <div class="instructor-progress">
                                                                    <div class="instructor-progress-width"
                                                                        style="width: {{ $stars1 }}%"></div>
                                                                </div>
                                                            </div>
                                                            <div class="instructor-rating-range-percentage">
                                                                <span>{{ round($stars1, 1) }}%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="instructor-review">
                                                    <h5>Reviews ({{ $cource->sharxlar_count }})</h5>

                                                    @foreach ($sharx as $sh)
                                                        <div class="instructor-review-item">
                                                            <div class="instructor-review-author">
                                                                <img src="{{ asset('storage/user/' . $sh->user->img) }}"
                                                                    alt="">
                                                                <div class="instructor-review-author-info">
                                                                    <div>
                                                                        <h6>{{ $sh->user->name }}</h6>
                                                                        <span><i
                                                                                class="far fa-clock"></i><? $date2=date_create($sh->created_at);
                                                                                                                    $d2=date_format($date2, 'G:ia jS F Y');echo $d2?></span>
                                                                    </div>
                                                                    <div class="instructor-review-author-rating">
                                                                        @for ($i = 0; round($sh->reyting) > $i; $i++)
                                                                            <i class="fas fa-star"></i>
                                                                        @endfor
                                                                        @for ($i = 0; 5 - round($sh->reyting) > $i; $i++)
                                                                            <i class="far fa-star"></i>
                                                                        @endfor

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                {{ $sh->sharx }}
                                                            </p>
                                                        </div>
                                                    @endforeach
                                                    {{ $sharx->links() }}


                                                </div>
                                                @if (!($auth == $user->id))
                                                    <div class="instructor-review-form">
                                                        <h5>Leave A Review</h5>
                                                        <form action="/cource/sharx/{{ $auth }}"
                                                            class="" method="POST" id="my-form-2">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input type="hidden" value="{{ $cource->id }}"
                                                                    name="cource_id">
                                                                <label>Your Rating</label>

                                                                <div class="instructor-review-form-star stars-wrapper">
                                                                    <input id="one-star-rating-2" type="radio"
                                                                        name="reviewRating" value="1">

                                                                    <input id="two-star-rating-2" type="radio"
                                                                        name="reviewRating" value="2">

                                                                    <input id="three-star-rating-2" type="radio"
                                                                        name="reviewRating" value="3">

                                                                    <input id="four-star-rating-2" type="radio"
                                                                        name="reviewRating" value="4">

                                                                    <input id="five-star-rating-2" type="radio"
                                                                        name="reviewRating" value="5">

                                                                    <div class="stars-display" style="">
                                                                        <svg viewBox="0 0 20 20" width="25"
                                                                            height="25">
                                                                            <use href="#star-icon"></use>
                                                                        </svg>
                                                                        <svg viewBox="0 0 20 20" width="25"
                                                                            height="25">
                                                                            <use href="#star-icon"></use>
                                                                        </svg>
                                                                        <svg viewBox="0 0 20 20" width="25"
                                                                            height="25">
                                                                            <use href="#star-icon"></use>
                                                                        </svg>
                                                                        <svg viewBox="0 0 20 20" width="25"
                                                                            height="25">
                                                                            <use href="#star-icon"></use>
                                                                        </svg>
                                                                        <svg viewBox="0 0 20 20" width="25"
                                                                            height="25">
                                                                            <use href="#star-icon"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <svg id="svg-sprite" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" style="display: none;">
                                                                    <symbol id="star-icon">
                                                                        <title>star</title>
                                                                        <path
                                                                            d="M20 7h-7L10 .5 7 7H0l5.46 5.47-1.64 7 6.18-3.7 6.18 3.73-1.63-7z" />
                                                                    </symbol>
                                                                </svg>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Your Review</label>
                                                                <textarea class="form-control" cols="30" name="text" required rows="5"
                                                                    placeholder="Write your review"></textarea>
                                                            </div>
                                                            @if (isset(Auth()->user()->id))
                                                            <input class="theme-btn btn" type="submit"
                                                            value="Post Your Review"
                                                            style="background-color: rgb(18, 174, 70); color:white;">
                                                            @endif
                                                            @if (!isset(auth()->user()->id))


                                                            <a href="/signin" class="theme-btn btn" type="submit"
                                                                value=""
                                                                style="background-color: rgb(18, 174, 70); color:white;">Post Your Review </a>
                                                                @endif
                                                        </form>

                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="course-single-sidebar">
                            <div class="course-single-sidebar-wrapper">
                                <div class="course-single-price-wrapper">
                                    <div class="course-single-price">
                                        <span>${{ $cource->narx }}</span><del>
                                            @if ($cource->eski_narx > $cource->narx)
                                                $
                                                {{ $cource->eski_narx }}
                                            @endif
                                        </del>
                                    </div>

                                    @if ($cource->eski_narx > $cource->narx)
                                        <span class="course-single-price-off">
                                            {{ (1 - $cource->narx / $cource->eski_narx) * 100 }}% Sale</span>
                                    @endif
                                </div>

                                @if (isset(Auth::user()->id) and !(Auth::user()->id == $user->id) and Auth::user()->uroven=='student' and ($buy==null ))
                                    <a href="/card/add/{{$cource->id}}/{{$auth}}" class="theme-btn"> <span class="far fa-shopping-cart"></span> Add To Cart
                                    </a>
                                @endif
                                @if (!isset(Auth::user()->id))
                                <a href="/signin" class="theme-btn"> <span class="far fa-shopping-cart"></span> Add To Cart
                                </a>
                            @endif

                            @if (isset(Auth::user()->id) and Auth::user()->id == $user->id)
                            <a href="/course-single/edit/{{ $cource->id }}" class="theme-btn"
                                style="background-color: rgba(26, 169, 55, 0.752);"> <span
                                    class="far fa-edit"></span> Edit course </a>
                                    @if ($cource->admin==0)
                                    <a href="" class="theme-btn"
                                    style="background-color: rgb(35, 17, 147);">Sotuvga chiqarishga ariza berish.</a>
                                    @endif

                        @endif

                                <div class="course-single-more-info">
                                    <ul>
                                        <li><i class="fad fa-user"></i> Instructor:
                                            <span>{{ $cource->teacher->name }}</span>
                                        </li>
                                        <li><i class="fad fa-layer-group"></i> Level :
                                            <span>{{ $cource->uroven }}</span>
                                        </li>
                                        <li><i class="fad fa-book"></i> Lectures : <span>{{ $cource->video_count }}
                                                Lectures</span></li>
                                        <li><i class="fad fa-clock"></i> Duration: <span>{{ $cource->davomiylik }}
                                                Months</span></li>
                                        <li><i class="fad fa-user-friends"></i> Enrolled:
                                            <span>{{ $cource->students_count }} Students</span>
                                        </li>
                                        <li><i class="fad fa-globe"></i> Language: <span>{{ $cource->lang }}</span></li>
                                    </ul>
                                </div>
                                <div class="course-single-include">
                                    <h5>Course Includes</h5>
                                    <ul>
                                        @foreach ($includes as $i)
                                            <li><i class="fad fa-check-circle"></i>
                                                {{ $i->text }}


                                            </li>
                                        @endforeach





                                    </ul>





                                </div>
                                <div class="course-single-share">
                                    <h5>Social Share</h5>
                                    <div class="course-single-share-link">
                                        @foreach ($cource->teacher->link as $url)
                                            @if (strlen($url->telegram) > 0)
                                                <a href="{{ $url->telegram }}"><i class="fab fa-telegram"></i></a>
                                            @endif
                                            @if (strlen($url->facebook) > 0)
                                                <a href="{{ $url->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                            @endif
                                            @if (strlen($url->instagram) > 0)
                                                <a href="{{ $url->instagram }}"><i class="fab fa-instagram"></i></a>
                                            @endif

                                            @if (strlen($url->youtube) > 0)
                                                <a href="{{ $url->youtube }}"><i class="fab fa-youtube"></i></a>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="course-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title mb-2">Related <span>Courses</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="course-item">
                            <span class="course-tag course-tag-1">Beginer</span>
                            <div class="course-img">
                                <a href="#"><img src="{{ asset('storage/img/course/01.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="course-category course-category-1">Development</span>
                                    <div class="course-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(40)</span>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4 class="course-title">Advance PHP Knowledge and learn Laravel framework</h4>
                                </a>
                                <div class="course-info">
                                    <ul>
                                        <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                        <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                        <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled</li>
                                    </ul>
                                </div>
                                <div class="course-bottom">
                                    <a href="#">
                                        <div class="course-instructor">
                                            <img src="{{ asset('storage/img/course/ins-1.jpg') }}" alt="">
                                            <h6>Sara Wood</h6>
                                        </div>
                                    </a>
                                    <div class="course-price">
                                        <span>$69</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="course-item">
                            <span class="course-tag course-tag-2">Advance</span>
                            <div class="course-img">
                                <a href="#"><img src="{{ asset('storage/img/course/02.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="course-category course-category-2">Art & Design</span>
                                    <div class="course-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(40)</span>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4 class="course-title">Full Web Designing Course With 20 Web Template Designing</h4>
                                </a>
                                <div class="course-info">
                                    <ul>
                                        <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                        <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                        <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled</li>
                                    </ul>
                                </div>
                                <div class="course-bottom">
                                    <a href="#">
                                        <div class="course-instructor">
                                            <img src="{{ asset('storage/img/course/ins-2.jpg') }}" alt="">
                                            <h6>Johnny Michell</h6>
                                        </div>
                                    </a>
                                    <div class="course-price">
                                        <del>$180</del> <span>$150</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="course-item">
                            <span class="course-tag course-tag-1">Beginer</span>
                            <div class="course-img">
                                <a href="#"><img src="{{ asset('storage/img/course/03.jpg') }}"
                                        alt=""></a>
                            </div>
                            <div class="course-content">
                                <div class="course-meta">
                                    <span class="course-category course-category-3">Business</span>
                                    <div class="course-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(40)</span>
                                    </div>
                                </div>
                                <a href="#">
                                    <h4 class="course-title">Basic Knowledge About the UI/UX Design Pattern</h4>
                                </a>
                                <div class="course-info">
                                    <ul>
                                        <li class="course-lecture"><i class="fad fa-book-open"></i>64 Lectures</li>
                                        <li class="course-duration"><i class="fad fa-clock"></i>30 Hours</li>
                                        <li class="course-enrolled"><i class="fad fa-user-friends"></i>40.7k Enrolled</li>
                                    </ul>
                                </div>
                                <div class="course-bottom">
                                    <a href="#">
                                        <div class="course-instructor">
                                            <img src="{{ asset('storage/img/course/ins-3.jpg') }}" alt="">
                                            <h6>Joey D. Glines</h6>
                                        </div>
                                    </a>
                                    <div class="course-price">
                                        <span>$179</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>













    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        const form2 = document.getElementById("my-form-2");
        const outputDisplay2 = document.getElementById("form-data-display-2");





        form2.addEventListener(
            "submit",
            onSubmit({
                formElem: form2,
                displayElem: outputDisplay2
            })
        );
    </script>
    <a href="#" id="scroll-top"><i class="far fa-angle-double-up"></i></a>
@endsection("content")

@section("scripts")

<script>
    const video = document.getElementById("video");
    const circlePlayButton = document.getElementById("circle-play-b");

    function togglePlay() {
        if (video.paused || video.ended) {
            video.play();
        } else {
            video.pause();
        }
    }

    circlePlayButton.addEventListener("click", togglePlay);
    video.addEventListener("playing", function() {
        circlePlayButton.style.opacity = 0;
    });
    video.addEventListener("pause", function() {
        circlePlayButton.style.opacity = 1;
    });



    jQuery(document).ready(function($) {


        $(".free_lesson").on("click", function() {
            var newmp4 = $(this).attr("src");
            $('#video').get(0).pause();
            $('#source').attr('src', newmp4);
            $('#video').get(0).load();
            $('#video').get(0).play();
        });

    });
</script>
<script>
    $(document).ready(function() {


        $('#search').on('keyup', function() {
            var query = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({

                url: "{{ route('employee.search') }}",

                type: "GET",

                data: {
                    'country': query
                },

                success: function(data) {

                    $('.search-ul').html(data);
                }
            })
            // end of ajax call
        });


        $(document).on('click', 'li', function() {

            var value = $(this).text();
            $('#country').val(value);
            $('#country_list').html("");
        });
    });
</script>
<script src="assets/js/cslider1.js"></script>
@endsection("scripts")

