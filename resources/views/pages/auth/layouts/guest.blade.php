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

<body>
<div>
    @yield('content')
</div>

@vite([
    'resources/js/admin/auth/master.js',
])
</body>

</html>
