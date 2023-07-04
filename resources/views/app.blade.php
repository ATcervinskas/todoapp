<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials._head')

    @include('partials._assets')

    <title>{{ config('app.name') }}</title>
</head>
<body>
@include('partials._global_loader')

@yield('content')

@include('partials._modals')
</body>
</html>
