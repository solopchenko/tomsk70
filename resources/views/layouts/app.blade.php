<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    {{-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– --}}
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="">

    {{-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF-Token
    ___________________________________________________ --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Шрифты
    –––––––––––––––––––––––––––––––––––––––––––––––––– --}}
    <link href="//fonts.googleapis.com/css?family=Fira+Sans:200,400,500" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">

    {{-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– --}}
    @stack('head')
    <link rel="stylesheet" href="{{ asset('/assets/fontello/css/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/NameSite.css" />
    @stack('css')
    <link rel="stylesheet" type="text/css" href="/css/ProLink.css" />

    {{-- Скрипты
    –––––––––––––––––––––––––––––––––––––––––––––––––– --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="/js/NameSite.js"></script>
    @stack('scripts')
    <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="/js/ProLink.js"></script>
  </head>

  <body class="body">
      {{-- Верхнее меню
    –––––––––––––––––––––––––––––––––––––––––––––––––– --}}
    @include('layouts.navbar')

    {{-- Контент из дочерних шаблонов
    –––––––––––––––––––––––––––––––––––––––––––––––––– --}}
    @yield('content')

    {{-- Подвал
    –––––––––––––––––––––––––––––––––––––––––––––––––– --}}
    @include('layouts.footer')
  </body>

</html>
