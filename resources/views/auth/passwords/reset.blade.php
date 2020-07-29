@extends('layouts.login')

@section('content')

    <div id="formContent" class="pt-lg-5">
        <!-- Tabs Titles -->
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </div>
        </form>
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
            @if (Route::has('password.request'))
                <a class="underlineHover"  href="{{ route('password.request') }}">
                    Забыли пароль?
                </a>
            @endif

        </div>

    </div>





@endsection
