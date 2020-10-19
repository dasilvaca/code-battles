<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>@yield('pageTitle') - {{config('app.name')}}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- meta -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover"
          name="viewport">
    <meta name="description" content="@yield('pageDescription')">
    <meta name="author" content="Reider Oliver">

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('icons/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('icons/safari-pinned-tab.svg')}}" color="#488eff">
    <link rel="shortcut icon" href="{{asset('icons/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="{{asset('icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="d-flex flex-column" style="height: 90vh">
    @yield('body')
</div>
</body>
</html>
