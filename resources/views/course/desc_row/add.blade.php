@extends('layauts.app')
@section('links')

@endsection("links")
@section('content')


    <main class="main">

        <div class="site-breadcrumb">
            <div class="hero-shape-area">
                <img class="hero-shape-1" src="assets/img/shape/shape-1.png" alt="">
                <img class="hero-shape-2" src="assets/img/shape/shape-3.png" alt="">
                <img class="hero-shape-3" src="assets/img/shape/shape-6.png" alt="">
                <img class="hero-shape-4" src="assets/img/shape/shape-4.png" alt="">
            </div>
            <div class="container">
                <h2 class="breadcrumb-title">Sign Up</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Course</a></li>
                    <li class="active">Description add</li>
                </ul>
            </div>
        </div>


        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-5 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <img src="{{ asset('storage/img/logo/logo.png') }}" alt="">

                            <p>Course description add</p>
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
                        <form method="POST" action="/course/desc_row/save">
                            @csrf


                            <input type="hidden" value="{{$c_id}}" name="cource_id">
                            <input type="hidden" value="{{$desc_id}}" name="desc_id">


                            <div class="form-group">
                                <label for="text">
                                    <h5>Text</h5>
                                </label>

                                <textarea name="text" class="form-control" name="text" required id="text" cols="30" rows="10" placeholder="Text"></textarea>
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


<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>


@endsection('scripts')
