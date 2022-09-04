<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.layout.partials.head')
  </head>

  <body>
    <!--*******************
        Preloader start
    ********************-->
    @include('admin.layout.partials.preloader')
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
      <!--**********************************
            Nav header start
        ***********************************-->
        @include('admin.layout.partials.nav-header')
      
      <!--**********************************
            Nav header end
        ***********************************-->

      <!--**********************************
            Header start
        ***********************************-->
       @include('admin.layout.partials.header')
      <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

      <!--**********************************
            Sidebar start
        ***********************************-->
       @include('admin.layout.partials.sidebar')
      <!--**********************************
            Sidebar end
        ***********************************-->

      <!--**********************************
            Content body start
        ***********************************-->
         @yield('content')
      <!--**********************************
            Content body end
        ***********************************-->

      <!--**********************************
           Support ticket button start
        ***********************************-->

      <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    @include('admin.layout.partials.script')

  </body>
</html>