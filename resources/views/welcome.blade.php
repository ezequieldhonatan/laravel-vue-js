<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel Vue JS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div id="app">

            <vue-snotify></vue-snotify>

            <preloader-component></preloader-component>

            <router-view></router-view>

        </div> <!-- #app -->

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
