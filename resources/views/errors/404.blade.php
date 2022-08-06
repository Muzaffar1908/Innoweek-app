<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="">

    <title>Eduhub - Education And LMS HTML5 Template</title>

    @yield('links')

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>


    <main class="main">



        <div class="error-area py-120">
            <div class="container">
                <div class="col-md-6 mx-auto">
                    <div class="error-wrapper">
                        <h1>4<span>0</span>4</h1>
                        <h2>Opos... Page Not Found!</h2>
                        <p>The page you looking for not found may be it not exist or removed.</p>
                        <a href="/" class="theme-btn"><i class="far fa-home"></i> Go Back Home</a>
                    </div>
                </div>
            </div>
        </div>

    </main>


</body>

</html>
