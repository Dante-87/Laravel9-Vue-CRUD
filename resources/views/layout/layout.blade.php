<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>@yield('title', 'Test CRUD Laravel<->VUE')</title>
    @vite('resources/js/app.js')
    @vite('resources/sass/app.scss')
</head>
<body>
    <div id="app"></div>
    
</body>
</html>