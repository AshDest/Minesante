<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/qovex-node/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jun 2022 09:27:04 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Refernces's Terms</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    @livewireStyles

</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
            @yield('content')
    </div>

    <!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>
    @livewireScripts



</body>


<!-- Mirrored from themesdesign.in/qovex-node/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jun 2022 09:27:59 GMT -->

</html>
