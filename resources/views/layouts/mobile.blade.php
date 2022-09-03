<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links Of CSS File -->
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/remixicon.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/ma5-menu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/dark-mode.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
        @yield('styles')

        <!-- Favicons -->
        <link href="{{ asset('/assets/images/icon/favicon.ico') }}" rel="icon">
        <link href="{{ asset('/assets/images/icon/apple-touch-icon.ico') }}" rel="apple-touch-icon">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>

    <body>
        <!-- Start Preloader Area -->
        <div class="preloader" id="loader-style">
            <div class="preloader-wrap">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- End Preloader Area -->
        @yield('content')

        <!-- Links of JS File -->
        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
        @yield('script')
        <script src="{{ asset('/assets/js/dark-mode-switch.min.js') }}"></script>
        <script src="{{ asset('/assets/js/ma5-menu.min.js') }}"></script>
        <script src="{{ asset('/assets/js/calendar.js') }}"></script>
        <script src="{{ asset('/assets/js/form-validator.min.js') }}"></script>
        <script src="{{ asset('/assets/js/contact-form-script.js') }}"></script>
        <script src="{{ asset('/assets/js/custom.js') }}"></script>
    </body>

</html>