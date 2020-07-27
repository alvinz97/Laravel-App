<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Locked</title>

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
<body>

    <div class="container-fluid" id="lockScreenContainer">
        <div class="row"  id="app">
            <div class="col-lg-6" style="background-color: #ebeeff">
                <div class="pb-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center mt-10">
                            <div class="company-name mb-3">
                                <div class="brand-name">
                                    <h4>Company Name</h4>
                                    <small>Lorem ipsum dolor sit amet, consectetur </small>
                                </div>
                            </div>

                            <div class="text-center">
                                @if (auth()->user()->img_url == 'not.jpg')
                                        <img src="storage/public/avatars/not.jpg" alt="{{ auth()->user()->name }} Profile Image" class="img-fluid rounded-circle my-3 width-150 height-150">
                                
                                    @else 
                                    <img src="storage/public/avatars/{{auth()->user()->id}}/{{auth()->user()->img_url }}" alt="{{ auth()->user()->name }} Profile Image" class="img-fluid rounded-circle my-3 width-150 height-150">
                                @endif
                            </div>


                            <div class="user-info">
                                <h3>{{ auth()->user()->name }}</h3>
                                <p><a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a></p>
                            </div>

                            <form action="{{ route('login.unlock') }}" method="post" class="mx-10 text-center">
                                @csrf
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-lg-10">
                                        <input id="password" type="password" class="form-control form-control-sm {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-lg-10">
                                        <button class="btn btn-sm btn-block btn-primary"> {{ __('Unlock') }}</button>
                                    </div>
                                </div>

                                <div class="text-left ml-10">
                                    <a href="{{ route('logout') }}" class="text-left text-dark" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sign Out') }} &nbsp; <i class="fa fa-sign-out"></i>
                                    </a>
                                </div>

                            </form>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="lock-right">
                <div class="text-container text-center">
                    <div class="text-bg-custom">
                        <h1>Account Locked</h1>
                        <h3>Please Enter Your Password To Unlock</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>