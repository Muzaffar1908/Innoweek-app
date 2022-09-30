<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('/stat/css/main.css') }}">
        <title>{{__('INNOWEEK - STATISTICS')}}</title>
    </head>

    <body>

        <!-- Site main start -->
        <main class="site-main">
            <div class="statistics">
                <!-- Hero section start -->
                <section class="progress">
                    <div class="container">
                        <div class="progress__inner">
                            <ul class="progress__list">
                                <li class="progress__item">
                                    <div class="progress__item-start progress__item-visitors">
                                        <span class="number">4 382</span>
                                    </div>
                                    <div class="text-wrapper">
                                        <p class="text">{{__('visits to innoweek website')}}</p>
                                    </div>
                                </li>
                                <li class="progress__item">
                                    <div class="progress__item-start progress__item-views">
                                        <span class="number">2 972</span>
                                    </div>
                                    <div class="text-wrapper">
                                        <p class="text">{{__('Virtual Tour Views')}}</p>
                                    </div>
                                </li>
                                <li class="progress__item">
                                    <div class="progress__item-start progress__item-companys">
                                        <span class="number">72</span>
                                    </div>
                                    <div class="text-wrapper">
                                        <p class="text">{{__('Participating companies')}}</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="progressing">
                                <div class="text-wrapper">
                                    <p class="text progressing__heading">{{__('Top 5')}}
                                    </p>
                                </div>
                                <div class="progressing-box">
                                    <div class="progressing__ball">
                                        <div class="canvas">
                                            <svg class="chart" width="500" height="500" viewBox="0 0 50 50">
                                                <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                                <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                                <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                                <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                                <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                                <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                                <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                            </svg>

                                            <div class="diagram-desc">
                                                <span class="number">23</span>
                                                <p class="progressing__text">{{__('Participating companies')}}</p>
                                            </div>

                                            <div class="legend">
                                                <ul class="caption-list">
                                                    <li class="caption-item">
                                                        <span class="number progressing__item-span">87</span>
                                                        <p class="text">{{__('Uzbekistan')}}</p>
                                                    </li>
                                                    <li class="caption-item">
                                                        <span class="number progressing__item-span">10</span>
                                                        <p class="text">{{__('Turkey')}}</p>
                                                    </li>
                                                    <li class="caption-item">
                                                        <span class="number progressing__item-span">6</span>
                                                        <p class="text">{{__('Russia')}}</p>
                                                    </li>
                                                    <li class="caption-item">
                                                        <span class="number progressing__item-span">5</span>
                                                        <p class="text">{{__('Tatarstan')}}</p>
                                                    </li>
                                                    <li class="caption-item">
                                                        <span class="number progressing__item-span">4</span>
                                                        <p class="text">{{__('Azerbaijan')}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Hero section finish -->

                <!-- Section progress visitors start -->
                <section class="progress-visitors">
                    <div class="container">
                        <div class="progress-visitors__inner">
                            <div class="progressing">
                                <div class="text-wrapper">
                                    <p class="text progressing__heading">{{__('Top 5 by')}}
                                    </p>
                                </div>
                                <div class="progressing-box">
                                    <div class="canvas">
                                        <svg class="chart" width="500" height="500" viewBox="0 0 50 50">
                                            <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                            <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                            <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                            <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                            <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                            <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                            <circle class="unit" r="15.9" cx="50%" cy="50%"></circle>
                                        </svg>

                                        <div class="diagram-desc__end">
                                            <span class="number">1 587</span>
                                            <p class="progressing__text">{{__('Virtual tour visitors')}}</p>
                                        </div>

                                        <div class="legend">
                                            <ul class="caption-list">
                                                <li class="caption-item">
                                                    <span class="number progressing__item-span">1524</span>
                                                    <p class="text">{{__('Uzbek')}}</p>
                                                </li>
                                                <li class="caption-item">
                                                    <span class="number progressing__item-span">7</span>
                                                    <p class="text">{{__('RF')}}</p>
                                                </li>
                                                <li class="caption-item">
                                                    <span class="number progressing__item-span">3</span>
                                                    <p class="text">{{__('Kaz')}}</p>
                                                </li>
                                                <li class="caption-item">
                                                    <span class="number progressing__item-span">2</span>
                                                    <p class="text">{{__('Aze')}}</p>
                                                </li>
                                                <li class="caption-item">
                                                    <span class="number progressing__item-span">2</span>
                                                    <p class="text">{{__('Rb')}}</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="progress__list">
                                <li class="progress__item">
                                    <div class="progress__item-start progress__item-visitors">
                                        <span class="number">0</span>
                                    </div>
                                    <div class="text-wrapper">
                                        <p class="text">{{__('Exhibition visitors')}}</p>
                                    </div>
                                </li>
                                <li class="progress__item">
                                    <div class="progress__item-start progress__item-visitors-age">
                                        <span class="number">29</span>
                                    </div>
                                    <div class="text-wrapper">
                                        <p class="text">{{__('Average age')}}</p>
                                    </div>
                                </li>
                                <li class="progress__item">
                                    <div class="progress__item-start progress__item-visitors-country">
                                        <span class="number">30</span>
                                    </div>
                                    <div class="text-wrapper">
                                        <p class="text">{{__('Visitor countries')}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- Section progress visitors finish -->

                <!-- Section last progress start -->
                <section class="progress">
                    <div class="container">
                        <div class="progress__inner">
                            <ul class="progress__list">
                                <li class="progress__item">
                                    <div class="progress__item-start progress__item-amount">
                                        <span class="number">3</span>
                                    </div>
                                    <div class="text-wrapper">
                                        <p class="text">{{__('Number of investment agreements')}}</p>
                                    </div>
                                </li>
                                <li class="progress__item">
                                    <div class="text-wrapper">
                                        <p class="text">{{__('Amount of investment agreements')}}</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="progressing">
                                <div class="text-wrapper">
                                    <p class="text progressing__heading">{{__('The number of visitors to the exhibition in the gap languages')}}</p>
                                </div>
                                <div class="last-progressing">
                                    <ul class="last-progressing__list">
                                        <li class="last-progressing__item">
                                            <span class="last-progressing__diagram"></span>
                                            <span class="number">1 139</span>
                                        </li>
                                        <li class="last-progressing__item">
                                            <span class="last-progressing__diagram"></span>
                                            <span class="number">435</span>
                                        </li>
                                        <li class="last-progressing__item">
                                            <span class="last-progressing__diagram"></span>
                                            <span class="number">33</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section last progress finish -->
            </div>
            <div class="live-stream">
                <h2 class="live-stream-title">{{__('Live stream')}}</h2>
                <ul class="live-stream-list">
                    <li class="live-stream-item">
                        <div class="live-stream-box">

                        </div>
                        <p class="live-stream-box-text">{{__('Forum')}}</p>
                    </li>

                    <li class="live-stream-item">
                        <div class="live-stream-box">

                        </div>
                        <p class="live-stream-box-text">{{__('Yarmarka')}}</p>
                    </li>

                    <li class="live-stream-item">
                        <div class="live-stream-box">

                        </div>
                        <p class="live-stream-box-text">{{__('Forum')}}-2</p>
                    </li>

                    <li class="live-stream-item">
                        <div class="live-stream-box">

                        </div>
                        <p class="live-stream-box-text">{{__('Yarmarka')}}-2</p>
                    </li>

                    <li class="live-stream-item">
                        <div class="live-stream-box">

                        </div>
                        <p class="live-stream-box-text">{{__('Forum')}}-3</p>
                    </li>

                    <li class="live-stream-item">
                        <div class="live-stream-box">

                        </div>
                        <p class="live-stream-box-text">{{__('Yarmarka')}}-3</p>
                    </li>
                </ul>
            </div>

        </main>
        <!-- Site main finish -->

        <script src="{{ asset('/stat/js/main.js') }}"></script>
    </body>

</html>