<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="author" content="CHANGE-ME">
    <meta name="description" content="CHANGE-ME">
    <!-- Mobile Stuff -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="CHANGE-ME">
    <!-- Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="CHANGE-ME">


    <link rel="icon" type="image/svg+xml" href="{{ asset('./favicon.ico') }}">
    <title>Name of project</title>
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css'>
    <script src="{{ asset('js/jquery-3.1.1.js') }}" defer></script>
    <script src="{{ asset('js/jquery-ui-1.12.1.min.js') }}" defer></script>
    <script src="{{ asset('js/main-scripts.js') }}" defer></script>
    <script src="{{ asset('js/aside.js') }}" defer></script>
    <script src="{{ asset('js/request-part.js') }}" defer></script>
</head>
<body>
<div class="wrapper">
    @include('layouts.header')
    <div class="content">
        @include('layouts.aside')
        @yield('content')
    </div>
</div>
</body>
</html>

