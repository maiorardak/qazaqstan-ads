<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Админ панель</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5d5a092e04.js" crossorigin="anonymous"></script>

    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/admin_panel_style.css')}}" rel="stylesheet" />
    <link href="{{asset('datatables/datatables.min.css')}}" rel="stylesheet" />
    @stack('styles')

</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('admin.index')}}">Админ панель</a>
     @if(auth()->user())

        <form action="{{ route('logout') }}" method="post" class="inline">
            @csrf
            <button type="submit" id="logout-button" class="btn btn-outline-danger btn-sm">
                Выйти
            </button>
        </form>

         @endif
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading"></div>
                    <a class="nav-link" href="{{route('admin.index')}}">
                        <div class="sb-nav-link-icon"><i class="fa fa-tachometer-alt"></i></div>
                        Главная
                    </a>

                    <a class="nav-link" href="{{route('adverts.index')}}">
                        <div class="sb-nav-link-icon"><i class="fa fa-table"></i></div>
                        Список записей рекламы
                    </a>

                    <a class="nav-link" href="{{route('adverts.create',['type'=>\App\AdvertTypes::MAIN_BLOCK_ADVERT])}}">
                        <div class="sb-nav-link-icon"><i class="fa fa-plus-circle"></i></div>
                        Добавить рекламу на главный блок
                    </a>

                    <a class="nav-link" href="{{route('adverts.create',['type'=>\App\AdvertTypes::HEADER_ADVERT])}}">
                        <div class="sb-nav-link-icon"><i class="fa fa-plus-circle"></i></div>
                        Добавить рекламу на шапку
                    </a>
                    <a class="nav-link" href="{{route('adverts.create',['type'=>\App\AdvertTypes::FOOTER_ADVERT])}}">
                        <div class="sb-nav-link-icon"><i class="fa fa-plus-circle"></i></div>
                        Добавить рекламу в подвал
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Вы вошли как:</div>
                @if(auth()->user())
                    <span class="text-white-50">{{auth()->user()->email}}</span>
                @endif
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; ads 2020</div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{asset('js/admin_panel_script.js')}}"></script>
<script src="{{asset('datatables/datatables.min.js')}}"></script>\

@stack('scripts')
</body>
</html>
