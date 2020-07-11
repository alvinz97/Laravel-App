<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Favicon  --}}
    <link rel="shortcut icon" href="{{ asset('images/fav-icon.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
<body>

     <div class="wrapper d-flex align-items-stretch" id="app">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="" class="img logo mb-5" style="background-image: url({{ asset('images/fav-icon.png')}});"></a>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="">Dashboard</a>
                    </li>
                    <li>
                        <a href="#link1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Link 01</a>
                        <ul class="collapse list-unstyled" id="link1">
                            <li>
                                <a href="sub-link1">Sub Link 01</a>
                            </li>
                            <li>
                                <a href="sub-link2">Sub Link 02</a>
                            </li>
                        </ul>
                    </li>

                    <li class="active">
                        <a href="#link2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Link 02</a>
                        <ul class="collapse list-unstyled" id="link2">
                            <li class="active">
                                <a href="sub-link3">Sub Link 03</a>
                            </li>
                            <li>
                                <a href="sub-link4">Sub Link 04</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#link3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Link 03</a>
                        <ul class="collapse list-unstyled" id="link3">
                            <li>
                                <a href="sub-link5">Sub Link 05</a>
                            </li>
                            <li>
                                <a href="sub-link6">Sub Link 01</a>
                            </li>
                        </ul>
                    </li>


                </ul>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4">

            <nav class="navbar navbar-expand-lg navbar-light bg-custome-nav">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">
                                        {{ __('Profile') }} &nbsp; <i class="fa fa-user"></i>
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} &nbsp; <i class="fa fa-sign-out"></i>
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </div>
                </div>
            </nav>

            <!-- Page contanet start  -->

            <main class="py-4">
                @yield('content')
            </main>

            <!-- Page contanet end  -->

        </div>
    </div>
    
</body>
</html>
