<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>pursell</title>

    <!-- extra -->
    <link rel="stylesheet" href="fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <link rel="stylesheet" href="..css/responsiveactivenavbar.css">
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="../fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../fonts/ionicons.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">




</head>

<body>
    <script src="../js/responsiveactivenavbar.js"></script>
    <div id="app">
        <!--talako bar ko lagi -->
        <ul class="nav nav-fill fixed-bottom d-lg-none pt-2" id="mobile-bottom-navbar">
            <li class="nav-item">
                <a class="nav-link text-capitalize d-flex flex-column justify-content-center align-items-center" href="#">
                    <button class="home"><i class="fas fa-home fa-fw fa-lg"></i></button>
                    <span style="color:black" class="small">Home
                </a>
            </li>
            <li class="nav-item"><a class="nav-link active text-capitalize d-flex flex-column justify-content-center align-items-center" href="#"><button class="noti"><i class="fas fa-bell fa-fw fa-lg"></i></button><span style="color:black" class="small">Notification</span></span></a></li>
            <li class="nav-item"><a class="nav-link text-capitalize d-flex flex-column justify-content-center align-items-center" href="#"><button class="acc"><i class="fas fa-user fa-fw fa-lg"></i></button><span style="color:black" class="small">account</span></a></li>
        </ul>


        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a href="{{ url('/') }}">
                <img src="images/logo.png" style="width: 115px;margin-right: 139px;margin-top: 0px;margin-bottom: -20px;margin-left: -50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-bs-label="Toggle navigation">
                <i class="fa fa-star fas fa-bars "></i>
            </button>
            <div class="d-lg-flex justify-content-lg-end collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <div class="hori-selector">
                        <div class="left"></div>
                    </div>
                    <li class="nav-item">
                    </li>
                    <li class="nav-item1">
                        <a class="nav-link" href="javascript:void(0);">
                            <button class="btn1"><i class="fa fa-commenting" aria-hidden="true"></i>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item2"><a class="nav-link" href="javascript:void(0);">
                            <button class="btn2"><i class="fa fa-bell" aria-hidden="true">
                                </i>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item3"><a class="nav-link" href="javascript:void(0);">
                            <button class="btn3">
                                <i class="fa fa-plus-circle" aria-hidden="true">

                                </i>
                            </button>
                        </a>
                    </li>
                    <li class="nav-item4">
                        <a class="nav-link" href="javascript:void(0);">
                            <div class="cardprofile">
                                <button class="btn4">
                                    <img src="images/user.png " class="profile" />
                                </button>
                            </div>
                        </a>
                    </li>

                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item5">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item6">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest

                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>