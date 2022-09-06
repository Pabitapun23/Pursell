@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Pursell Donation Page</title>
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
            <h1 class="px-2" style="font-family: Arial,sans-serif;">List of organizations</h1>
            <div class="row mt-4">

                @foreach ($organizations as $data)
                    <div class="col-lg-4 col-md-6 mt-2 mb-4">
                        <div class="card shadow mx-4 z-index-2">
                            <div class="card-header p-0 position-relative mt-2 mx-4 z-index-2 bg-transparent">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1"
                                    style="height: 14rem">
                                    <img src="{{ asset($data->image) }}" height="200" width="100%"
                                        alt_src="notfound.png">
                                </div>
                            </div>

                            <div class="card-body mx-2">
                                <h4>{{ $data->name }}</h4>
                                <hr class="light horizontal">
                                <div class="pt-2">
                                    <p class="fw-normal" style="font-size: large;">Telephone: &nbsp;
                                        <span style="color: grey">{{ $data->telephone }}
                                        </span>
                                    </p>
                                    <p class="fw-normal" style="font-size: large;">Email: &nbsp;
                                        <span style="color: grey">{{ $data->email }}</span>
                                    </p>
                                    <p class="fw-normal" style="font-size: large;">Website: &nbsp;
                                        <span style="color: grey">{{ $data->website }}</span>
                                    </p>
                                </div>
                                <a href="{{ url('donation-view/' . $data->id) }}">
                                    <button type="submit" class="btn btn-primary float-end px-4 py-2">View</button>
                                </a>
                                {{-- <button type="submit" class="btn btn-primary float-end">View</button> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
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
