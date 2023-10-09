<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeSnip</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLET/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
          href="{{ asset('AdminLET/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('AdminLET/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('AdminLET/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLET/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('AdminLET/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('AdminLET/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('AdminLET/plugins/summernote/summernote-bs4.min.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('my_style.css')}}">
    {{--googleLink--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">

    {{--codemirror cdn--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.15/codemirror.min.js" integrity="sha512-2359y3bpxFfJ9xZw1r2IHM0WlZjZLI8gjLuhTGOVtRPzro3dOFy4AyEEl9ECwVbQ/riLXMeCNy0h6HMt2WUtYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.15/theme/dracula.min.css" integrity="sha512-gFMl3u9d0xt3WR8ZeW05MWm3yZ+ZfgsBVXLSOiFz2xeVrZ8Neg0+V1kkRIo9LikyA/T9HuS91kDfc2XWse0K0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.15/codemirror.min.css" integrity="sha512-uf06llspW44/LZpHzHT6qBOIVODjWtv4MxCricRxkzvopAlSWnTf6hpZTFxuuZcuNE9CBQhqE0Seu1CoRk84nQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.15/mode/clike/clike.min.js" integrity="sha512-jcF10R6LSoLddMx32eEitiBfJ8icHBobh0Z7fwVewrKmNBBGM0B09oG3yxxnkIYwilUsXBbIcRN5jfmc6vSt9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.15/mode/php/php.min.js" integrity="sha512-jZGz5n9AVTuQGhKTL0QzOm6bxxIQjaSbins+vD3OIdI7mtnmYE6h/L+UBGIp/SssLggbkxRzp9XkQNA4AyjFBw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.15/keymap/sublime.min.js" integrity="sha512-SV3qeFFtzcmGtUQPLM7HLy/7GKJ/x3c2PdiF5GZQnbHzIlI2q7r77y0IgLLbBDeHiNfCSBYDQt898Xp0tcZOeA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>


<body class="hold-transition ">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('AdminLET/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
            height="60" width="60">
    </div>

@include('Template.components.navbar')
@include('Template.components.slidebar')


<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>




<!-- jQuery -->
<script src="{{ asset('AdminLET/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('AdminLET/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLET/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('AdminLET/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('AdminLET/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('AdminLET/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('AdminLET/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('AdminLET/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('AdminLET/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('AdminLET/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('AdminLET/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('AdminLET/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('AdminLET/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLET/dist/js/adminlte.js') }}"></script>


    <script>
        function customEncodeURIComponent(str) {
            return encodeURIComponent(str).replace(/[()]/g, function(c) {
                return '%' + c.charCodeAt(0).toString(16);
            });
        }
        $(document).ready(function () {
            $('#createForm').submit(function (e) {
                e.preventDefault(); // Prevent the default form submission

                // Get the value of the textarea and encode it
                var codeValue = customEncodeURIComponent($('#Code').val());

                // Set the encoded value to the hidden input field
                $('#EncodedCode').val(codeValue);

                // Continue with the form submission
                this.submit();
            });
        });
    </script>


    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById("Code"), {
            lineNumbers: true,
            mode: "text/x-php", // Example mode: C/C++
            theme: "dracula", // Example theme: Dracula
            autofocus: true,
            // Other configuration options here
        })

    </script>

    <script>
        var editorShow = CodeMirror.fromTextArea(document.getElementById("CodeShow"), {
            lineNumbers: true,
            mode: "text/x-php", // Example mode: C/C++
            theme: "dracula", // Example theme: Dracula
            autofocus: true,
            // Other configuration options here
        }).setSize("100%", 550);
    </script>

</body>

</html>
