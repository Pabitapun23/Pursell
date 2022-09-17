<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>pursell</title>

    <!-- extra -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&family=Roboto:wght@300;500;700&display=swap"
        rel="stylesheet">


    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'>
    </script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="../fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../fonts/ionicons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css">


</head>

<body>
    @auth
        @php

            // $notification_count = DB::table('notifications')
            //     ->where('owner_id', Auth::user()->id)
            //     ->get()
            //     ->count();
            // $detail = DB::table('notifications')
            //     ->where('owner_id', Auth::user()->id)
            //     ->get();

            $notification_count = DB::table('notifications')
                ->where('owner_id', Auth::user()->id)
                ->where('read', 0)
                ->get()
                ->count();
            $detail = DB::table('notifications')
                ->where('owner_id', Auth::user()->id)
                ->get();

        @endphp
    @endauth
    <div id="app">
        <!--talako bar ko lagi -->
        <ul class="nav nav-fill fixed-bottom d-lg-none pt-2" id="mobile-bottom-navbar"
            style=" background:#fbf9f9; border-bottom:1px solid #F53535;    box-shadow: 0 0 5px 1px #F53535; height: 55px; ">
            <li class="nav-item">
                <a class="nav-link text-capitalize d-flex flex-column justify-content-center align-items-center"
                    href="{{ route('welcome') }}">
                    <button class="home">
                        <i class="fas fa-home fa-fw fa-lg">
                        </i>
                    </button>
                    <span style="color:black" class="small">
                </a>
            </li>

            @auth
                <li class="nav-item">
                    <a class="nav-link text-capitalize d-flex flex-column justify-content-center align-items-center"
                        href="javascript:void(0);">
                        <button class="message">
                            <i class="fa fa-commenting" aria-hidden="true">
                            </i>
                        </button>
                        <span style="color:black" class="small">
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active text-capitalize d-flex flex-column justify-content-center align-items-center"
                        href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <button class="noti">
                            <i class="fas fa-bell fa-fw fa-lg">
                                <span
                                    class="badge badge-danger navbar-badge notification-count rounded-circle">{{ $notification_count }}</span>
                            </i>
                        </button>
                        {{-- <span style="color:black" class="small">
                        </span> --}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end position-absolute px-3 py-3" aria-labelledby="navbarDropdown"
                        style="background-color: white; padding:5px;">
                        <li class="dropdown-menu-element"><a class="dropdown-item py-2" href="{{ route('read') }}"
                                style="background-color: white;">
                                Mark all as read</a></li>

                        @foreach ($detail as $comment)
                            <li class="dropdown-menu-element"><a class="dropdown-item"
                                    href="{{ route('notifyseen', $comment->id) }}"
                                    style="background-color: white;">{{ $comment->name }}
                                    commented on your post </a></li>
                        @endforeach
                    </ul>
                </li>
            @endauth

            {{-- <li class="nav-item">
                <a class="nav-link text-capitalize d-flex flex-column justify-content-center align-items-center"
                    href="#">
                    <button class="message">
                        <i class="fa fa-commenting" aria-hidden="true">
                        </i>
                    </button>
                    <span style="color:black" class="small">
                </a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link text-capitalize d-flex flex-column justify-content-center align-items-center"
                    href="{{ route('postform') }}">
                    <button class="addpost">
                        <i class="fa fa-plus-circle" aria-hidden="true">
                        </i>
                    </button>
                    <span style="color:black;" class="small">
                    </span>
                </a>
            </li>

            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link pt-0 text-capitalize d-flex flex-column justify-content-center align-items-center"
                            href="{{ route('login') }}">
                            <button class="profile">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </button>
                            <span style="color:black" class="small">
                            </span>
                        </a>
                    </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link pt-0 text-capitalize d-flex flex-column justify-content-center align-items-center"
                        href="{{ route('profile', Auth::user()->id) }}">
                        <button class="profile">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </button>
                        <span style="color:black" class="small">
                        </span>
                    </a>
                </li>
            @endguest
        </ul>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <div class="navbar-container-fluid">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}"
                        style="height:75px ; width:80px; margin-right:139px; margin-top:0px; margin-bottom:-10px; margin-left: -10px;">
                </a>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                <div class="d-lg-flex justify-content-end collapse navbar-collapse float-end"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menu">
                        @auth
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="javascript:void(0);">
                                    <button class="btn1">
                                        {{-- <i class="fa fa-commenting" aria-hidden="true">
                                    </i> --}}
                                        {{-- <i class="bi bi-chat-dots"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            <path
                                                d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                        </svg>
                                    </button>
                                </a>
                            </li>

                            {{-- <div class="dropdown-content" aria-labelledby="navbarDropdown">
                                @foreach ($detail as $comment)
                                    <a class="dropdown-item" href="{{ route('singlepost', $comment->post_id) }}">
                                        {{ $comment->user_id }} commented on your post
                                    </a>
                                @endforeach
                            </div> --}}

                            <li class="nav-item px-2 dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <button class="btn2 mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                        </svg>
                                        <span
                                            class="badge badge-danger navbar-badge notification-count rounded-circle">{{ $notification_count }}</span>
                                    </button>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end position-absolute px-3 py-3"
                                    aria-labelledby="navbarDropdown" style="background-color: white; padding:5px;">
                                    <li class="dropdown-menu-element"><a class="dropdown-item py-2"
                                            href="{{ route('read') }}" style="background-color: white;">
                                            Mark all as read</a></li>

                                    @foreach ($detail as $comment)
                                        {{-- <li> <a class="dropdown-item" href="{{ route('singlepost', $comment->post_id) }}">
                    {{ $comment->user_id }} commented on your post
                    </a></li> --}}
                                        <li class="dropdown-menu-element"><a class="dropdown-item"
                                                href="{{ route('notifyseen', $comment->id) }}"
                                                style="background-color: white;">{{ $comment->name }}
                                                commented on your post </a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endauth

                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('postform') }}">
                                <button class="btn3">
                                    {{-- <i class="fa fa-plus-circle" aria-hidden="true">
                                </i> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                </button>
                            </a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <button class="btn3">
                                            {{-- <i class="fa fa-user " aria-hidden="true"></i> --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                            </svg>
                                        </button>
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link active text-capitalize d-flex flex-column justify-content-center align-items-center"
                                    href="{{ route('profile', Auth::user()->id) }}">
                                    <button class="profile-btn">
                                        {{-- <i class="fa fa-user" aria-hidden="true"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                        </svg>
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item py-2 dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle mt-0" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre style="padding-top: 3px;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"
                                    style="background-color: white;">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                        style="background-color: white; padding:5px; padding-left:10px;">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- end of navbar -->

        <main>
            @yield('content')
        </main>

    </div>

    <script>
        var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu");

        window.onscroll = function() {
            if (window.pageYOffset >= menu.offsetTop) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>
