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
    <link rel="stylesheet" href="../css/resetpass.css">
</head>

<body>
    <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="../images/Logo.jpg" style="width: 80px; height: 60px" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profilePage.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginPage.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="registerPage.html">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <!-- end of navbar -->

    <!-- Reset Password form  my-4 mx-5 -->
    <section class="Form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="max-width: 100%">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <h1 class="form-title mx-2">Reset Your Password</h1>
                                    <!-- Form -->
                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="form-row pt-4 mx-2">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping">
                                                    <i class="bi bi-envelope-fill"></i>
                                                </span>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Your Email" aria-label="Email" aria-describedby="addon-wrapping">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row pt-2 mx-2">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping">
                                                    <i class="bi bi-lock-fill"></i>
                                                </span>
                                                <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Your Password" aria-label="Password" aria-describedby="addon-wrapping">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row pt-2 mx-2">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping">
                                                    <i class="bi bi-lock-fill"></i>
                                                </span>
                                                <input type="text" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="form-row mt-5 mx-2">
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <button type="submit" class="btn btn-danger">Reset Password</button>
                                            </div>
                                        </div>
                                        <div class="form-row pt-4 mx-2">
                                            <p class="form-title mx-2">Not registered? <span><a href="{{route('register')}}">Sign Up</a></span></p>
                                        </div>
                                    </form>
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