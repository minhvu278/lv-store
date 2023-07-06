<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Shop')</title>
{{--    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/client/assets/common/favicon-32x32.ico') }}">--}}
    @vite([
        'resources/client/sass/master.scss',
        'resources/client/sass/partials/header.scss',
        'resources/client/sass/partials/footer.scss',
//        'node_modules/toastr/build/toastr.min.css',
    ])
    @stack('css')
</head>
<body>
@include('partials.header')
<main>@yield('content')</main>
@include('partials.footer')
@vite([
//    'resources/client/js/master.js',
])
@stack('js')

{{--@include('client::partials.toast')--}}
</body>
</html>
