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
          <div id="formContent" class="pt-lg-5">
              <!-- Tabs Titles -->

              <!-- Login Form -->
              <form action="{{ route('admin.check_login') }}"  method="post" autocomplete="off">
                  @csrf
                  <input type="text" id="name"  class="fadeIn second @error('name') is-invalid @enderror" name="login"  placeholder="Логин"
                         value="{{ old('name') }}"
                         autocomplete="off"
                         required autofocus>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                                     {{ $errors->first('name') }}
                                    </span>
                  @enderror

                  <input type="text" id="password" class="fadeIn third  @error('password') is-invalid @enderror"
                         name="password" placeholder="Пароль" autocomplete="off"
                         required autofocus
                  >
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                                     {{ $errors->first('password') }}
                                    </span>
                  @enderror
                  <input type="submit" class="fadeIn fourth" value="Войти">
              </form>



              <!-- Remind Passowrd -->
              <div id="formFooter">
                  <a class="underlineHover" href="#">Забыли пароль?</a>
              </div>

          </div>
      </div>
  </div>

<!-- end:: Page -->

</body>
<!-- end::Body -->
</html>
