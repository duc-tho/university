<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('dist/img/AdminLTELogo.png') }}" type="image/x-icon">
    {{-- <style>
        .btn-Edit{padding: 6px auto; width:100%;margin-bottom:10px;}
        .mb-1{background:red;}
    </style> --}}
    <title>@yield('title') - Quản trị Website | Admin Dashboard</title>
    @yield('head-import')
</head>

<body class="sidebar-mini layout-fixed pace-success">
    @yield('main')
    @yield('js-import')
</body>

</html>
