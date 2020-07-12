<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

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
                    <!-- Register ARE  -->
                    <form action="{{ route('register') }}" enctype="multipart/form-data" method="POST" class="form" id="login-form">
                        @csrf
                        <h3>Register</h3>
                        <div class="brandName mb-3">
                            <img src="{{ asset('images/fav-icon.png') }}" alt="">
                        </div>

                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name">

                                @error('name')
                                    <span class="invalid-feedback text-left" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email">

                                @error('email')
                                    <span class="invalid-feedback text-left" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

                                @error('password')
                                    <span class="invalid-feedback text-left" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Confirm Password">
                        </div>

                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-sm">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <div class="link mt-4">
                            <p>Already have an account ? <a href="/login">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>