@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Pursell Donation Details Page</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!-- CSS Link -->
        {{-- <link rel="stylesheet" href="{{ asset('css/profile.css') }}"> --}}
    </head>

    <body>


        <!-- Donation div -->

        <div class="container-fluid">
            {{-- <h1>List of organizations</h1> --}}
            <div class="row justify-content-center mt-3">
                <div class="col-lg-6 col-12">
                    <div class="card shadow mt-2 mx-3">
                        <div class="card-header p-0 position-relative mt-3 mx-4 z-index-2 bg-transparent">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1"
                                style="height: 16rem">
                                <img src="{{ asset($organizations->image) }}" height="230" width="100%"
                                    alt_src="No Image Found">
                            </div>
                        </div>
                        <div class="card-body mx-3">
                            <h4>{{ $organizations->name }}</h4>
                            <p class="fw-normal" style="font-size: large;">
                                <span style="color: grey">{{ $organizations->description }}
                                </span>
                            </p>
                        </div>
                        <div class="card-footer mx-4">
                            <ul class="list-group mx-2 my-3">
                                <li class="list-group-item">Telephone: &nbsp; <span
                                        style="color: grey">{{ $organizations->telephone }}
                                    </span></li>
                                <li class="list-group-item">Location: &nbsp; <span
                                        style="color: grey">{{ $organizations->location }}
                                    </span></li>
                                <li class="list-group-item">Street: &nbsp; <span
                                        style="color: grey">{{ $organizations->street }}
                                    </span></li>
                                <li class="list-group-item">Email: &nbsp; <span
                                        style="color: grey">{{ $organizations->email }}
                                    </span></li>
                                <li class="list-group-item">Website: &nbsp; <span
                                        style="color: grey">{{ $organizations->website }}</span></li>
                            </ul>
                        </div>
                        <a class="d-flex justify-content-center text-decoration-none" href="{{ url('/donation-page') }}">
                            <button type="submit" class="btn btn-success my-3 px-4 py-2">Done</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- footer -->
        <div class="footer-basic">
            <footer>
                {{-- <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                            class="icon ion-social-snapchat"></i></a><a href="#"><i
                            class="icon ion-social-twitter"></i></a><a href="#"><i
                            class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Home</a></li>
                    <li class="list-inline-item"><a href="#">Services</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Contact</a></li>
                    <li class="list-inline-item"><a href="#">Something</a></li>
                    <li class="list-inline-item"><a href="#">Bla Bla</a></li>
                </ul> --}}
                <p class="copyright">PURSELL © 2021</p>
            </footer>



            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
                integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
                integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
            </script>

    </body>

    </html>
@endsection
