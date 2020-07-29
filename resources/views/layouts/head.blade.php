<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <base href="{{ url('/') }}">
    <meta charset="utf-8"/>
    <title>@yield('title', config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--begin::Fonts -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <!--end::Fonts -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}"/>

    @stack('styles')

</head>
<body>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

   <header id="header">
       <div class="container">
           dsfsdfsdf
       </div>

   </header>

    <div class="content">
       @yield('content')
    </div>
</body>
</html>

