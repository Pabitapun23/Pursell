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

        <!-- owl carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous" />


        {{-- Owl carousel plugins --}}
        <!-- Basic stylesheet -->
        <link rel="stylesheet" href="owl-carousel/owl.carousel.css">

        <!-- Default Theme -->
        <link rel="stylesheet" href="owl-carousel/owl.theme.css">

        <!-- You can use latest version of jQuery  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous"></script>

        <!-- Include js plugin -->
        <script src="assets/owl-carousel/owl.carousel.js"></script>


        <!-- CSS Link -->
        <link rel="stylesheet" href="{{ asset('css/donate.css') }}">
    </head>

    <body>

        <!-- Donation div -->
        <div class="donation-container-fluid" style="background-color: rgb(250, 245, 236); overflow:hidden;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="donate-cover"
                        style="background-image: url('images/donate_cover.JPG'); background-size:cover; background-position:center; background-repeat:no-repeat;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 style="font-size:50px; padding-top:150px; padding-left:50px;">Charity is an act of a Soft Heart!
                    </h1>
                </div>
            </div>
            <h1 class="text-center px-3 pt-5" style="font-family: Arial,sans-serif;">List of <span style="color:orange;">
                    organizations
                </span></h1>
            <p class="text-center pb-5 text-secondary" style="font-size:30px;">Checkout the list of Organizations where you
                can make donation. </p>


            <div class="d-flex position-relative mt-2 mb-3 owl-carousel owl-theme">
                @foreach ($organizations as $data)
                    <div class="card mx-2 mb-4" style="height: 100%; ">
                        <a href="{{ asset($data->image) }}" style="color:#D02020; text-decoration:none;">
                            <img class="card-img-top " src="{{ asset($data->image) }}" alt="" style="height: 20vh">
                            <div class="card-body px-1 pb-0">
                                <h4 class="px-2">{{ $data->name }}</h4>
                                <ul class="list-group mx-2 my-1">
                                    <li class="list-group-item pt-2">Telephone: &nbsp; <span
                                            style="color: grey">{{ $data->telephone }}
                                        </span></li>
                                    <li class="list-group-item pt-1">Email: &nbsp; <span
                                            style="color: grey">{{ $data->email }}
                                        </span></li>
                                    <li class="list-group-item pt-1">Website: &nbsp; <span
                                            style="color: grey">{{ $data->website }}</span></li>
                                </ul>
                            </div>
                            <a href="{{ url('donation-view/' . $data->id) }}" class="my-2 me-2">
                                <button type="submit" class="btn float-end px-3 py-2"
                                    style="background-color: #fd7e14; color:white;">View</button>
                            </a>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- footer -->
            <div class="footer-basic">
                <footer>
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
                </footer>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous"></script>
        <!-- Owl Carousel -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- custom JS code after importing jquery and owl -->
        <script>
            $('.owl-carousel').owlCarousel({
                margin: 2,
                nav: true,

                scrollbarType: "progress",
                dots: false,
                navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        </script>

    </body>

    </html>
@endsection
