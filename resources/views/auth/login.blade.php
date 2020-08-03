@extends('layouts.login')
@section('content')
    <div id="formContent" class="pt-lg-5">
        <!-- Tabs Titles -->

        <!-- Login Form -->
        <form action="{{ route('login') }}"  method="POST" autocomplete="off">
            @csrf
            <input type="email" id="email"
                   class="fadeIn second @error('email') is-invalid @enderror"
                   name="email"  value="{{ old('name') }}"
                   placeholder="Email" autocomplete="name" required autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <input type="password" id="password"
                   class="fadeIn third  @error('password') is-invalid @enderror"
                   name="password" placeholder="Пароль" autocomplete="current-password"
                   required autofocus>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <input type="submit" class="fadeIn fourth" value="Войти">
        </form>



        <!-- Remind Passowrd -->
        <div id="formFooter">
            {{--@if (Route::has('password.request'))--}}
                {{--<a class="underlineHover"  href="{{ route('password.request') }}">--}}
                    {{--Забыли пароль?--}}
                {{--</a>--}}
            {{--@endif--}}

        </div>

    </div>
@endsection
