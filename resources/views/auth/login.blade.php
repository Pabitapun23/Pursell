@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pursell</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS Link -->
    <link rel="stylesheet" href="css/login.css">

</head>


<body>


    <!-- login form  my-4 mx-5 -->
    <section class="Form justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="max-width: 100%">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-7 p-0">
                                    <img src="Images/login.jpg" class="img-fluid" alt="Images/login.jpg">
                                    <a href="{{ route('register') }}">Create an account</a>
                                </div>
                                <div class="col-lg-5">
                                    @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{Session::get('fail')}}
                                    </div>
                                    @endif
                                    <h1 class="form-title mx-2">Login</h1>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-row pt-4 mx-2">

                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping">
                                                    <i class="bi bi-envelope-fill text-danger"></i>
                                                </span>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" @if(Cookie::has('useremail')) value="{{Cookie::get('useremail')}}" @endif placeholder="Your Email" aria-label="Email" aria-describedby="addon-wrapping">

                                            </div>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                        <div class="form-row pt-2 mx-2">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping">
                                                    <i class="bi bi-lock-fill text-danger"></i>
                                                </span>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" @if(Cookie::has('userpass')) value="{{Cookie::get('userpass')}}" @endif required placeholder="Your Password" aria-label="Password" aria-describedby="addon-wrapping">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-check pt-2">
                                            <input type="checkbox" class="form-check-input" @if(Cookie::has('useremail')) checked @endif name="remember" id="remember">
                                            <label class="form-check-label" for="remember">Remember Me</label>
                                        </div>
                                        <div class="form-row pt-3 me-0">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                            @endif

                                        </div>
                                        <div class="form-row pt-4 mx-2">
                                            <button type="submit" class="btn btn-danger">Login</button>
                                        </div>

                                    </form>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>


</html>
@endsection