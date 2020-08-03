@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <h1 class="mt-4">Добро пожаловать в Админ панель!</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">/</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Количество всех реклам</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                       <h3>

                           {{ App\Adverts::getAllAdvertsCount() }}
                       </h3>
                    </div>
                </div>
            </div>
            {{--<div class="col-xl-3 col-md-6">--}}
                {{--<div class="card bg-primary text-white mb-4">--}}
                    {{--<div class="card-body">Кол-тво реклам на главном блоке</div>--}}
                    {{--<div class="card-footer d-flex align-items-center justify-content-between">--}}
                        {{--<h3>--}}

                            {{--{{ App\Adverts::getMainBlockdvertsCount() }}--}}
                        {{--</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


        </div>

    </div>
    @endsection
