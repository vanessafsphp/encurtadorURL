<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Encurtador de URL</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!--== Main Style CSS ==-->
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::to('template/css/style.css') }}">
    <!--== Custom Style CSS ==-->
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::to('assets/css/style.css') }}">
    <!--== Animate CSS ==-->
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::to('template/css/animate.css') }}">
</head>

<body class="bg-dark">
    <!--== Start Main ==-->
    <main class="site-wrapper">
        <div class="container">
            <h1 class="text-center pt-5 mt-5 text-white">Encurtador de URL</h1>
            <div class="content py-5 my-5">
                @include('form-url')
            </div>
        </div>
    </main>
    <!--== End Main ==-->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#e8c867"/>
        </svg>
    </div>

    <!--=======================Javascript============================-->
    <!--=== jQuery Min Js ===-->
    <script src="{{ \Illuminate\Support\Facades\URL::to('template/js/jquery.min.js') }}"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="{{ \Illuminate\Support\Facades\URL::to('template/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ \Illuminate\Support\Facades\URL::to('template/js/bootstrap.min.js') }}"></script>
    <!--=== Scrollax Min Js ===-->
    <script src="{{ \Illuminate\Support\Facades\URL::to('template/js/scrollax.min.js') }}"></script>
    <!--=== Main Js ===-->
    <script src="{{ \Illuminate\Support\Facades\URL::to('template/js/main.js') }}"></script>
</body>
</html>

