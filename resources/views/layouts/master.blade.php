<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>

    @include('layouts.structure.header')
</head>

<body>
    @include('layouts.structure.navBar')

    @yield('content')

    @vite(['resources/js/app.js'])
</body>

</html>
