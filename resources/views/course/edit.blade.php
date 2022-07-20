@extends('layauts.app')
@section('links')
    <title>Eduhub - Education And LMS HTML5 Template</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .ui-datepicker-calendar {
            display: none;
        }
        </style>
@endsection("links")
@section('content')
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>

    <main class="main">

        <div class="site-breadcrumb">

                <div class="hero-shape-area">
                    <img class="hero-shape-1" src="{{asset("storage/img/shape/shape-1.png")}}" alt="">
                    <img class="hero-shape-2" src="{{asset("storage/img/shape/shape-2.png")}}" alt="">
                    <img class="hero-shape-3" src="{{asset("storage/img/shape/shape-3.png")}}" alt="">
                    <img class="hero-shape-4" src="{{asset("storage/img/shape/shape-4.png")}}" alt="">

                </div>
            <div class="container">
                <h2 class="breadcrumb-title">Add Course</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Add Course</li>
                </ul>
            </div>
        </div>


        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-8 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <img src="{{ asset('storage/img/logo/logo.png') }}" alt="">

                            <p>Bu yerda faqatgina kursni asosiy qismlarni toldirib olasiz. Profil bolimidan kursni yanada to'ldiring va adminga so'rov yuboring</p>
                        </div>
                        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                        <form method="POST" action="/course/update/{{$course->id}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">
                                    <h5>Name</h5>
                                </label>
                                <input type="text" class="form-control" value="{{$course->name}}" name="name" id="name" required
                                    placeholder="Name" >
                            </div>
                            <div class="form-group">
                                <label for="name">
                                    <h5>Category</h5>
                                </label>
                             <select class="form-control" name="cat_id" id="">
                                <option value="">---</option>
                                @foreach ($cat as $c)
                                <option   {{ $c->id == $course->cat_id ? 'selected' : '' }}  value="{{$c->id}}">{{$c->name}}</option>

                                @endforeach
                             </select>
                            </div>
                            <div class="form-group">
                                <label for="name">
                                    <h5>Course darajasi</h5>
                                </label>
                             <select class="form-control"  name="uroven" id="">


                                <option {{ $course->uroven == "Starter" ? 'selected' : '' }}  value="Starter">Starter</option>
                                <option {{ $course->uroven == "Middle" ? 'selected' : '' }}  value="Middle">Middle</option>
                                <option {{ $course->uroven == "Advenced" ? 'selected' : '' }}  value="Advenced">Advenced</option>



                             </select>
                            </div>
                            <div class="form-group">
                                <label for="text">
                                    <h5>About text</h5>
                                </label>

                                <textarea  name="text" class="form-control" name="text" required id="text" cols="30" rows="10" placeholder="Text">{{$course->text}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="date1">
                                    <h5>Narx</h5>
                                </label>

                                <input class=" form-control" name="narx"  value="{{$course->narx}}"  required type="number">

                            </div>
                            <div class="form-group">
                                <label for="date2">
                                    <h5>Eski narx</h5>
                                </label>
                                <input class="form-control"  name="eski_narx"
                                 @if($course->eski_narx>0 and  $course->eski_narx>$course->narx)
                               value="{{$course->eski_narx}}"
                                 @endif
                                 type="number">


                            </div>
                            <div class="form-group">
                                <label for="date2">
                                    <h5>Course davomiyligi(oy)</h5>
                                </label>
                                <input class="form-control"  name="davomiylik" value="{{$course->davomiylik}}" required type="number">
                            </div>
                            <div class="form-group">
                                <label for="date2">
                                    <h5>Videolar umumiy uzunligi(soat)</Video></h5>
                                </label>
                                <input class="form-control"  name="lenght" value='{{$course->lenght}}' required type="number">
                            </div>
                            <div class="form-group">
                                <label for="date2">
                                    <h5>Course o'tilgan til</Video></h5>
                                </label>
                                <input class="form-control"  name="lang" value="{{$course->lang}}"  required type="text">
                            </div>
                            <div class="form-group">
                                <label for="date2">
                                    <h5>Images</Video></h5>
                                </label>
                                <input class="form-control"  name="img"  type="file">
                            </div>





                            <div class="d-flex align-items-center">
                                <button type="submit" class="login-btn"><i class="far fa-paper-plane"></i>Save</button>
                            </div>
                        </form>

                        <div class="login-footer">
                            <p> <a href="/signin">Back</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <a href="#" id="scroll-top"><i class="far fa-angle-double-up"></i></a>
@endsection('content')
@section('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>


<script>
    $(document).ready(function(){
      $(".datepicker").datepicker({
         format: "yyyy",
         viewMode: "years",
         minViewMode: "years",
         autoclose:true
      });
    })


    </script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/counter-up.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>


@endsection('scripts')
