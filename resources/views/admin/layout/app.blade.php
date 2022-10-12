<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- PAGE TITLE HERE -->
    <title>INNOWEEK ELEKTRON PLATFORMA</title>
    
    {{-- <link href="{{asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('admin/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css')}}" rel="stylesheet">
    
    {{-- Daterange picker --}}
    {{-- <link href="{{asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet"> --}}
    
    {{-- Clockpiker --}}
    {{-- <link href="{{asset('admin/vendor/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet"> --}}
    
    {{-- asColorpicker --}}
    {{-- <link href="{{asset('admin/vendor/jquery-asColorPicker/css/asColorPicker.min.css')}}" rel="stylesheet"> --}}
    
    {{-- Material color picker --}}
    {{-- <link href="{{asset('admin/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    {{-- Pick date --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin/vendor/pickadate/themes/default.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin/vendor/pickadate/themes/default.date.css') }}"> --}}
    @yield('style')
    <!-- FAVICONS ICON -->
    {{-- <link
        href="{{ asset('admin/vendor/jquery-nice-select/css/nice-select.css') }}"
        rel="stylesheet"
    /> --}}
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
    {{-- <link href="{{asset('admin/vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet"> --}}
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    
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
    
    <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    @yield('script')
    
    <script src="{{asset('admin/js/custom.js')}}"></script>
    <script src="{{asset('admin/js/dlabnav-init.js')}}"></script>
    <script src="{{asset('admin/js/demo.js')}}"></script>

    <script src="{{asset('admin/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins-init/sweetalert.init.js')}}"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script src="{{asset('//cdn.jsdelivr.net/npm/sweetalert2@11')}}"></script>

    <script src="{{ asset('/tinymce/tinymce.min.js')}}"></script>
    <script>
        var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    tinymce.init({
      selector: 'textarea',
      plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
      imagetools_cors_hosts: ['picsum.photos'],
      menubar: 'file edit view insert format tools table help',
      toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
      toolbar_sticky: true,
      autosave_ask_before_unload: true,
      autosave_interval: '30s',
      autosave_prefix: '{path}{query}-{id}-',
      autosave_restore_when_empty: false,
      autosave_retention: '2m',
      image_advtab: true,
      entity_encoding : "raw",
        protect: [
        /\<\/?(if|endif)\>/g,  // Protect <if> & </endif>
        /\<xsl\:[^>]+\>/g,  // Protect <xsl:...>
        /\<xml\:[^>]+\>/g,  // Protect <xsl:...>
        /<\?php.*?\?>/g  // Protect php code
      ],
      link_list: [
        { title: 'My page 1', value: 'http://www.tinymce.com' },
        { title: 'My page 2', value: 'http://www.moxiecode.com' }
      ],
      image_list: [
        { title: 'My page 1', value: 'http://www.tinymce.com' },
        { title: 'My page 2', value: 'http://www.moxiecode.com' }
      ],
      image_class_list: [
        { title: 'None', value: '' },
        { title: 'Some class', value: 'class-name' }
      ],
      importcss_append: true,
      file_picker_callback: function (callback, value, meta) {
        /* Provide file and text for the link dialog */
        if (meta.filetype === 'file') {
          callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
        }
    
        /* Provide image and alt text for the image dialog */
        if (meta.filetype === 'image') {
          callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
        }
    
        /* Provide alternative source and posted for the media dialog */
        if (meta.filetype === 'media') {
          callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
        }
      },
      templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
        { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
        { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
      ],
      template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
      template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
      height: 600,
      image_caption: true,
      quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
      noneditable_noneditable_class: 'mceNonEditable',
      toolbar_mode: 'sliding',
      contextmenu: 'link image imagetools table',
      skin: useDarkMode ? 'oxide-dark' : 'oxide',
      content_css: useDarkMode ? 'dark' : 'default',
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
     });
    
    </script>
  </body>
</html>
