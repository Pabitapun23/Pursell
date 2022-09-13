<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>pursell</title>

    <!-- extra -->
    <link rel="stylesheet" href="../css/navbar.css">
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
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">




</head>

<body>
    @auth
    @php

    $notification_count = DB::table('notifications')->where('owner_id', Auth::user()->id)->where('read',0)->get()->count();
    $detail =DB::table('notifications')->where('owner_id', Auth::user()->id)->get();

    @endphp
    @endauth
    <div id="app">
        <!--talako bar ko lagi -->
        <ul class="nav nav-fill fixed-bottom d-lg-none pt-2" id="mobile-bottom-navbar" style=" background: #FBF9F9; border-bottom:1px solid #F53535;    box-shadow: 0 0 5px 1px #F53535; height: 55px; ">
            <li class="nav-item">
                <a class="nav-link text-capitalize d-flex flex-column justify-content-center align-items-center" href="#">
                    <button class="home">
                        <i class="fas fa-home fa-fw fa-lg">

                        </i>
                    </button>
                    <span style="color:black" class="small">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-capitalize d-flex flex-column justify-content-center align-items-center" href="#">
                    <button class="message">
                        <i class="fa fa-commenting" aria-hidden="true">
                        </i>
                    </button>
                    <span style="color:black" class="small">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-capitalize d-flex flex-column justify-content-center align-items-center" href="#">
                    <button class="addpost">
                        <i class="fa fa-plus-circle" aria-hidden="true">
                        </i>
                    </button>
                    <span style="color:black;" class="small">
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-capitalize d-flex flex-column justify-content-center align-items-center" href="#">
                    <button class="noti">
                        <i class="fas fa-bell fa-fw fa-lg"></i>
                    </button>
                    <span style="color:black" class="small">
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-capitalize d-flex flex-column justify-content-center align-items-center" href="#">
                    <button class="profile">
                        <i class="fa fa-user " aria-hidden="true"></i>
                    </button>
                    <span style="color:black" class="small">
                    </span>
                </a>
            </li>

        </ul>


        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" style="height:80px ; width: 85px;margin-right: 139px;margin-top: 0px;margin-bottom: -10px;margin-left: -10px;">
            </a>

            <div class="d-lg-flex justify-content-lg-end collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector">
                        <div class="left">

                        </div>
                    </div>
                    <li class="nav-item">

                    </li>
                    @auth
                    <li class="nav-item1">
                        <a class="nav-link" href="javascript:void(0);">
                            <button class="btn1">
                                <i class="fa fa-commenting" aria-hidden="true">
                                </i>

                            </button>
                        </a>
                    </li>
                    <!-- <li class="nav-item2">
                        <a class="nav-link" href="javascript:void(0);">
                            <button class="btn2">
                                <i class="fa fa-bell" aria-hidden="true">
                                    <span class="badge badge-danger navbar-badge notification-count">3</span>
                                </i>
                            </button>
                        </a>
                    </li> -->

                    <!-- <li class="nav-item2 dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <button class="btn2">

                                <i class="fa fa-bell" aria-hidden="true">

                                    <span class="badge badge-danger navbar-badge notification-count">{{$notification_count }}</span>

                                </i>

                            </button>

                        </a>

                        <div class="dropdown-content" aria-labelledby="navbarDropdown">


                            @foreach($detail as $comment)

                            <a class="dropdown-item" href="{{ route('singlepost', $comment->post_id) }}">
                                {{$comment->user_id}} commented on your post
                            </a>

                            @endforeach

                        </div>

                    </li> -->
                    <!-- <li class="nav-item2"> -->
                    <div class=" dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell" aria-hidden="true">

                                <span class="badge badge-danger navbar-badge notification-count">{{$notification_count }}</span>

                            </i>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('read')}}"> Mark all as read</a>
                            @foreach($detail as $comment)
                            <a class="dropdown-item" href="{{ route('notifyseen',$comment->id) }}">
                                {{$comment->name}} commented on your post
                            </a>

                            @endforeach

                        </div>
                    </div>
                    @endauth
                    <!-- </li> -->

                    <li class="nav-item3">
                        <a class="nav-link" href="{{route('postform')}}">
                            <button class="btn3">
                                <i class="fa fa-plus-circle" aria-hidden="true">

                                </i>
                            </button>
                        </a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item4">
                        <a class="nav-link" href="{{ route('login') }}">
                            <button class="btn3">
                                <i class="fa fa-user " aria-hidden="true"></i>
                            </button>
                        </a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item6 dropdown">
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
                    <!-- <li class="nav-item4">
                        <a class="nav-link" href="javascript:void(0);">
                            <div>
                                <button class="btn4">
                                    <img src="images/user.png " alt="avatar" class="rounded-circle me-2" style="width:30px ;height:30px;object-fit:cover;" />
                                </button>
                            </div>
                        </a>
                    </li> -->
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>