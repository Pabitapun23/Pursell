@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Untitled</title>


        <link rel="stylesheet" href="fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="fonts/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/fontawesome5-overrides.min.css">
        <link rel="stylesheet" href="fonts/ionicons.min.css">

        <!-- owl carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous" />

        <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/categorydisplaypost.css">

    </head>

    <body>
        <div class="category mt-3">
            <div class="row mb-5">
                @foreach ($categoryitem as $categoryitems)
                    <h3 class="ps-5 pb-3">Categories: <span style="color: gray;"> {{ $categoryitems->name }} </span></h3>
                    <div class="d-flex position-relative mt-2 ms-3 owl-carousel owl-theme">
                        @foreach ($categoryitems->posts as $post)
                            @foreach ($post->images->take(1) as $img)
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 mx-0 pe-0 py-2">
                                    <div class="card mx-2" style="height: 100%; ">
                                        <a href="{{ route('singlepost', $post->id) }}"
                                            style="color:#D02020; text-decoration:none;">
                                            <img class="card-img-top " src="{{ asset($img->image) }}" alt=""
                                                style="height: 20vh">

                                            <div class="card-body py-2">
                                                <h5 class="card-title mt-n2" style="color:#D02020;">
                                                    {{ $post->title }}
                                                </h5>
                                                <p style="font-style:italic; color:gray; font-size:13px;">
                                                    {{ $post->condition }}
                                                    <br>
                                                    Used For
                                                    {{ $post->usedfor }}
                                                </p>

                                                <h6 class="text-bold" style="color:#D02020;">Rs.
                                                    {{ $post->price }}
                                                </h6>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
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
                        <li class="list-inline-item"><a href="#">Home</a></li>
                        <li class="list-inline-item"><a href="#">Services</a></li>
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                        <li class="list-inline-item"><a href="#">Something</a></li>
                    </ul>
                    <p class="copyright">PURSELL © 2021</p>
                </footer>
            </div>


        </div>
    </body>

    </html>
@endsection
