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
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="Images/Logo.jpg" style="width: 80px; height: 60px" /></a>
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

    <!-- SignUp div -->
    <section class="Form justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="max-width: 100%">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-7 p-0 ">
                                    <h1 class="form-title mt-4 ms-3">Sign Up</h1>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class=" form-row p-1 mx-3">
                                            <div class="input-group flex-nowrap ">
                                                <span class="input-group-text bg-white" id="addon-wrapping">
                                                    <i class="bi bi-person-fill text-danger"></i>
                                                </span>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Your Name" aria-label="Name" aria-describedby="addon-wrapping" required autocomplete="name" autofocus>
                                                @error('name')

                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row p-1 mx-3">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping">
                                                    <i class="bi bi-envelope-fill text-danger"></i>
                                                </span>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email" aria-label="Email" aria-describedby="addon-wrapping">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row p-1 mx-3">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping">
                                                    <i class="bi bi-telephone-fill text-danger"></i>
                                                </span>
                                                <input type="text" class="form-control @error('phone-number') is-invalid @enderror" name="phone-number" value="{{ old('phone-number') }}" required autocomplete="phone-number" placeholder="Your Phone number" aria-label="PhoneNumber" aria-describedby="addon-wrapping">
                                                @error('phone-number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row p-1 mx-3">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping">
                                                    <i class="bi bi-lock-fill text-danger"></i>
                                                </span>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Your Password" aria-label="Password" aria-describedby="addon-wrapping">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row p-1 mx-3">
                                            <div class="input-group flex-nowrap">
                                                <span class="input-group-text bg-white" id="addon-wrapping">
                                                    <i class="bi bi-lock-fill text-danger"></i>
                                                </span>
                                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" aria-label="Password" aria-describedby="addon-wrapping">
                                            </div>
                                        </div>
                                        <div class="form-row p-3 ms-3 mb-4">
                                            <button type="submit" class="btn btn-danger px-3 py-2">Register</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-5 ">
                                    <img src="Images/register.jpg" class="img-fluid" alt="Images/register.jpg">
                                    <a href="{{ route('login') }}">I am already registered</a>
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