<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Shop')</title>
    @vite([
        'resources/sass/client/master.scss',
        'resources/sass/client/partials/header.scss',
        'resources/sass/client/partials/footer.scss',
//        'node_modules/toastr/build/toastr.min.css',
    ])
    @stack('css')
</head>
<body>
@include('partials.header')
<main>@yield('content')</main>
@include('partials.footer')
@vite([
    'resources/js/master.js',
    'resources/js/client/partials/header.js',
])
@stack('js')

{{--@include('client::partials.toast')--}}
</body>
</html>
