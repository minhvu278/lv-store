<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Admin</title>

    @vite([
        'resources/sass/admin/auth/master.scss',
    ])
</head>

<body class="border-top-wide border-primary d-flex flex-column">

<div class="page page-center">
    <div class="container-tight py-4">
        <div class="text-center mb-4 mx-auto">
{{--            <a href="{{ config('app.url') }}" class="navbar-brand navbar-brand-autodark">--}}
{{--                <img src="{{ Vite::asset('resources/client/assets/partials/header/logo.svg') }}" height="36" alt="" />--}}
{{--            </a>--}}
        </div>

        @yield('content')
    </div>
</div>

@vite([
    'resources/js/admin/auth/master.js',
])
</body>

</html>
