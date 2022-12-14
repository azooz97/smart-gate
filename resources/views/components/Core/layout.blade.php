{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;

            }

            html, body {
                height: 100%;
            }
        </style>

    </head>
    <body class="bg-blue-700 font-bold">
        <div class="flex items-center justify-center h-full bg-black sm:bg-white">
            {{$slot}}
        </div>
    </body>
</html> --}}
@props(['data'])
    <!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Smart Gate - Protect Your Child</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json"/>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="img/fav180.png" sizes="180x180">
    <link rel="icon" href="img/fav32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="img/fav16.png" sizes="16x16" type="image/png">

    <!-- Material icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- swiper CSS -->
    <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="{{$data}}">
<!-- screen loader -->
<x-ScreenLoader></x-ScreenLoader>

{{$slot}}

<!-- Required jquery and libraries -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- cookie js -->
<script src="js/jquery.cookie.js"></script>

<!-- Swiper slider  js-->
<script src="vendor/swiper/js/swiper.min.js"></script>

<!-- Customized jquery file  -->
<script src="js/main.js"></script>
<script src="js/color-scheme-demo.js"></script>

<!-- PWA app service registration and works -->
<script src="js/pwa-services.js"></script>

<!-- page level custom script -->
<script src="js/app.js"></script>
</body>

</html>
