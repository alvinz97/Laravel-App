<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    {{-- Favicon  --}}
    <link rel="shortcut icon" href="{{ asset('images/fav-icon.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body id="authBody">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-10 col-sm-10 col-10 ">
                <div class="custom-card" id="custom-login">
                    <!-- LOGIN ARE  -->
                    <form action="{{ route('login') }}" method="POST" class="form" id="login-form">
                        @csrf
                        <h3>Welcome Back</h3>
                        <div class="brandName mb-3">
                            <img src="{{ asset('images/fav-icon.png') }}" alt="">
                        </div>

                        <div class="loginErrorLogs"></div>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address">

                                @error('email')
                                    <span class="invalid-feedback text-left" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

                            @error('password')
                                <span class="invalid-feedback text-left" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group text-left ml-10">
                             <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="form-group text-left">
                           <button type="submit" class="btn btn-primary btn-sm">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="link float-right" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="link mt-4">
                            <p>New Member ? <a href="/register">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>