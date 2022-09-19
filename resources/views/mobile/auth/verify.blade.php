<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Roboto:ital,wght@1,100&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('/assets/css/user-page.css') }}">

        <!-- Favicons -->
        <link href="{{ asset('/assets/images/icon/favicon.ico') }}" rel="icon">
        <link href="{{ asset('/assets/images/icon/apple-touch-icon.ico') }}" rel="apple-touch-icon">
        <title>User page</title>
    </head>

    <body>
        <!-- LOADER -->
        <div id="loader">
            <div class="flexbox">
                <div id="preloader" style="display: flex; flex-direction: column">
                    <div class="images">
                        <img width="90px" src="{{ asset('/assets/images/min.webp') }}" alt="">
                        <img width="140px" src="{{ asset('/assets/images/logo.webp') }}" alt="">
                    </div>
                    <div class="load">
                        <div class="dot-loader"></div>
                        <div class="dot-loader dot-loader--2"></div>
                        <div class="dot-loader dot-loader--3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LOADER -->

        <div id="inno">
            <div class="animated bounceInDown">
                <div class="form-container">
                    <div class="images">
                        <img width="70px" src="{{ asset('/assets/images/min.webp') }}" alt="">
                        <img width="130px" src="{{ asset('/assets/images/logo.webp') }}" alt="">
                    </div>
                    <form class="box" action="{{ route('m-verify-form') }}" method="POST">
                        @csrf
                        <h5>{{__('VERIFIY_CODE')}}</h5>
                        <input type="number" name="code" placeholder="Parolni kiriting" autocomplete="off" required autofocus>
                        <button type="submit" class="btn btn-input">{{__('Next')}}</button>
                    </form>
                    <a href="{{ route('m-login') }}" class="dnthave">{{__('ORTGA')}}</a>
                </div>
            </div>
        </div>
    </body>
    <script src="{{ asset('/assets/js/loader.js') }}"></script>
</html>
