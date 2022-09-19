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
        <link rel="stylesheet" href="{{ asset('/assets/css/sign-up.css') }}">


        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <!-- Favicons -->
        <link href="{{ asset('/assets/images/icon/favicon.ico') }}" rel="icon">
        <link href="{{ asset('/assets/images/icon/apple-touch-icon.ico') }}" rel="apple-touch-icon">

        <title>Sign up</title>
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
                    <form class="box" action="{{ route('m-register-form') }}" method="POST">
                        @csrf
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (session('warning'))
                        <div class="col-md-12">
                            <div class="alert alert-info alert-has-icon">
                                <div class="alert-icon">
                                    <i class="far fa-lightbulb"></i>
                                </div>
                                <div class="alert-body">
                                    <div class="alert-title">Info</div>
                                    {{ session('warning') }}
                                </div>
                            </div>
                        </div>
                        @endif
                        <h5>{{__("Tizimda ro'yxatdan o'tish uchun quyida ko'rsatilgan maydonlarni to'ldiring")}}}</h5>
                        <div class="input-names">
                            <input class="name" name="first_name"  type="text" placeholder="Ism" autocomplete="on" required autofocus>
                            <input class="surname" name="last_name" type="text" placeholder="Familya" autocomplete="on" required>
                        </div>
                        <input id="emailOrNumber" type="text" name="phone_or_email" placeholder="{{__('Email or Phone')}} "
                            autocomplete="on" required>

                            <input id="datepicker" name="birth_date" type="text" autocomplete="on" required placeholder="kun/oy/yil" />
                        <div class="input-radio">
                            <label for="gender">{{__('JINSI')}}:</label>
                            <div class="d-flex-radio">
                                <input name="gender" type="radio" id="gender" value="1"><label>{{__('AYOL')}}</label>
                                <input name="gender" type="radio" id="gender" value="2"><label>{{_('Erkak')}}</label>
                            </div>
                        </div>
                        <button type="submit" class="btnB btn-input">{{__('Sign up')}}</button>
                    </form>
                    <a href="{{ route('m-login') }}" class="dnthave">{{__('LOGIN')}}</a>
                </div>
            </div>
        </div>
        <script src="{{ asset('/assets/js/loader.js') }}"></script>
        <script src="{{ asset('/assets/js/registerForm.js') }}"></script>
    </body>
</html>
