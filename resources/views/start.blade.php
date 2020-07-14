<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To Laravel App</title>

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

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        a:hover {
            text-decoration: none;
        }
        body {
            margin: 0px;
            padding: 0px;
        } 
        body .custom-card {
            background-color: rgba(0, 238, 255, 0.185);
        }    
    </style>
</head>
<body>
    <div class="container-fluid mt-10">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="custom-card p-5">
                    <h1>Welcome To Laravel <br> App</h1>

                    <h3 class="mt-5">Please Login</h3>

                    <div class="auth-area my-5">
                        <a class="btn btn-sm btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="btn btn-sm btn-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>