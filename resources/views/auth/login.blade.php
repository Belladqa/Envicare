<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/loginadmin.css">
    <link rel="icon" href="assets/img/logo.png">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/all.css" type="text/css">

    <title>LOGIN ADMIN</title>
  </head>
  <body>

    <!-- Banner -->
    <section class="container-fluid banner">
      <section class="row justify-content-center form-container">
        <section class="col-12 col-sm-6 m-5">
          <div class="m-4" style="color:white;">
            
            <div class="text-center">
              <a href="{{ url('/') }}" style="color:white;">
                <li class="fas fa-user-circle" style="font-size:10vw"></li>
              </a><br>
              <a href="{{ url('/') }}">
                <p class="fw-bold" style="color:white;font-size:3vw;">{{ __('ENVICARE') }}</p>
              </a>
            </div>

            <form method="POST" action="{{ route('login') }}">
              @csrf

            <div class="form-group row mb-3">
              <label for="username">Username</label>
              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus>
              
              @error('username')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div><br>

            <div class="form-group row mb-3">
              <label for="password">Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group row mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
            </div><br>

            <button type="submit" class="btn btn-outline-light">{{ __('Login') }}</button>
              
            @if (Route::has('password.request'))
              <b><a class="btn btn-link forgot"  style="text-decoration:none;color:white;" href="{{ route('password.request') }}">
                {{ __('Lupa Kata Sandi?') }}
              </a></b>
            @endif
          </div>
        </section>
      </section>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html> 