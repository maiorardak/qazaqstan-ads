<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- begin::Head -->
<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8"/>
    <title>Админ Панель</title>
    <meta name="description" content="User login example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_panel.css') }}" rel="stylesheet">
    <!--begin::Page Custom Styles(used by this page) -->
    <script src="https://kit.fontawesome.com/5d5a092e04.js" crossorigin="anonymous"></script>

    <!--end::Page Custom Styles -->

</head>
<!-- end::Head -->

<!-- begin::Body -->
<body class="">

<!-- begin:: Page -->
<div class="container">

    <div class="wrapper fadeInDown">
       @yield('content')
    </div>
</div>

<!-- end:: Page -->

</body>
<!-- end::Body -->
</html>

