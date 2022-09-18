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
        <link rel="stylesheet" href="{{ asset('css/donateview.css') }}">

    </head>

    <body>
        <!-- Donation div -->

        <div class="donate-container-fluid mt-5">
            <div class="row justify-content-center mb-5">
                {{-- <div class="col-lg-6 col-12">
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
                </div> --}}

                <div class="col-lg-4 col-md-6 col-12">
                    {{-- <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1"
                        style="height: 16rem background-color:white;"> --}}
                    <div class="card mt-2 mx-3">
                        <img src="{{ asset($organizations->image) }}" height="300vh" width="100%"
                            alt_src="No Image Found">
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-12">
                    <div class="card shadow mt-1 mx-3">
                        <div class="card-header p-0 position-relative mt-3 mx-4 z-index-2 bg-transparent">
                            <h2>{{ $organizations->name }}</h2>
                        </div>
                        <div class="card-body mx-3">
                            <p class="fw-normal" style="font-size: large;">
                                <span style="color: grey">{{ $organizations->description }}
                                </span>
                            </p>
                        </div>
                        <div class="card-footer mx-4 py-0" style="background-color: white;">
                            <ul class="list-group mx-2 my-2">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="#D02020" class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg> &nbsp; <span style="color: grey">{{ $organizations->telephone }}
                                    </span></li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="#D02020" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg> &nbsp; <span style="color: grey">{{ $organizations->location }}
                                    </span></li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="#D02020" class="bi bi-geo" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                                    </svg> &nbsp; <span style="color: grey">{{ $organizations->street }}
                                    </span></li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="#D02020" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                    </svg> &nbsp; <span style="color: grey">{{ $organizations->email }}
                                    </span></li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="#D02020" class="bi bi-globe" viewBox="0 0 16 16">
                                        <path
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                                    </svg> &nbsp; <span style="color: grey">{{ $organizations->website }}</span></li>
                            </ul>
                        </div>
                        <a class="d-flex justify-content-center text-decoration-none" href="{{ url('/donation-page') }}">
                            <button type="submit" class="btn mb-3 px-4"
                                style="background-color: #fd7e14; color:white;">Done</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- footer -->
            <footer>
                <div class="footer-basic">
                    <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                                class="icon ion-social-snapchat"></i></a><a href="#"><i
                                class="icon ion-social-twitter"></i></a><a href="#"><i
                                class="icon ion-social-facebook"></i></a></div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="{{ route('welcome') }}">Home</a></li>
                        <li class="list-inline-item"><a href="{{ route('aboutus') }}">About</a></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                    </ul>
                    <p class="copyright">PURSELL © 2021</p>
                </div>
            </footer>
        </div>







        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>

    </body>

    </html>
@endsection
