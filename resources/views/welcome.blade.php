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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&family=Roboto:wght@300&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&family=Roboto:wght@300;500;700&display=swap"
            rel="stylesheet">

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
        <link rel="stylesheet" href="css/welcome.css">

    </head>

    <body>

        <!--Nav sakkesi container suru kinaki nav le tanab dirathyo-->

        <div class="container-fluid">
            <div class="cover"
                style="background-image: url('images/cover.PNG'); background-size:cover; background-repeat:no-repeat;">
                <div class="d-none d-md-block">
                    <!--thulo ko lagi xuttai search bar which will be hidden in small screen-->
                    <div class="row1 mt-0" style="text-align: center;">
                        <h2 style="color:#D02020;">PURchase and SELL - Anything , Anytime , Anywhere</h2>
                        {{-- <h4>Explore our huge range of quality second-hand products.</h4> --}}
                        <div class="search1">
                            <form action="/searchData">
                                <div class="input-group rounded">
                                    <div class="searchbutton"> <button class="searchbutton"></button></div>
                                    <div class="search_form" style="position: relative;">
                                        <input type="text" name="search" id="search-web" class="form3"
                                            placeholder=" Search All Items " aria-label="Search"
                                            aria-describedby="search-addon" />
                                        <div id="post_list_web" style="position: absolute;">
                                        </div>
                                    </div>

                                    <div>
                                        <select class="form4" name="address" id="address-web">
                                            <option value="">Select Location</option>
                                            @if ($addresses != null && count($addresses) > 0)
                                                @foreach ($addresses as $address)
                                                    <option value="{{ $address->city }}">{{ $address->city }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="location"><button class="locbutton"><i class="fa fa-search"
                                                aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--mobile ko lagi xuttai search bar which will be hidden in big screen-->
                <div class="d-block d-md-none">
                    <div class="row2" style="text-align: center;">
                        <h1 style="font-size:20px;color:#D02020;">PURchase and SELL - Anything , Anytime , Anywhere</h1>
                        <div class="w-100"></div>
                        <div class="search1">
                            <form action="/searchData">
                                <div class="input-group rounded">
                                    <div class="searchbutton"> <button class="searchbutton"></button></div>
                                    <div class="search_form" style="position: relative;">
                                        <input type="text" name="search" id="search-mobile" class="form3"
                                            placeholder=" Search All Items " aria-label="Search"
                                            aria-describedby="search-addon" />
                                        {{-- <input type="search" class="form4" placeholder="   All Location" aria-label="Search" aria-describedby="search-addon" /> --}}
                                        <div id="post_list_mobile" style="position: absolute;">
                                        </div>
                                    </div>
                                    <div>
                                        <select class="form4" name="address" id="address-mobile">
                                            <option value="">Select Location</option>
                                            @if (count($addresses) > 0)
                                                @foreach ($addresses as $address)
                                                    <option value="{{ $address->city }}">{{ $address->city }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    {{-- <input type="search" class="form1" placeholder="   Search Items" aria-label="Search"
                                aria-describedby="search-addon" /> --}}
                                    {{-- <input type="search" class="form2" placeholder=" All Location" aria-label="Search"
                                aria-describedby="search-addon" /> --}}
                                    <div class="location"><button class="locbutton" type="submit"><i
                                                class="fa fa-map-marker" aria-hidden="true"></i></button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="middle-container">
                <h2 class="text-center py-5">Explore our huge range of quality second-hand products.</h2>
                <div class="row my-3 mx-5">
                    <div class="col-lg-3 col-12">
                        <div class="content shadow ps-2 mb-4 rounded justify-content-center">
                            <!--yo category chai small ma dekhinna lukxa md block le-->
                            <div class="category d-none d-md-block">
                                {{-- <div class="row bg-body" style="width: 100%;">
                                    <div class="col-12 col-md-3"> --}}

                                <ul class="list-group list-group-flush pb-3">
                                    {{-- <li class="h1">CATEGORIES</li> --}}
                                    <h4 class="px-3" style="color: #D02020; padding-top:30px;">All Categories</h4>
                                    <hr style="width: 95%; margin-top: 5px;">
                                    @foreach ($categories as $cat)
                                        <li class="list py-2 px-3">
                                            <div class="dropdown" style="font-family:roboto;">
                                                <button class="dropbtn">{{ $cat->name }}</button>
                                                <div class="drop">
                                                    <div class="dropdown-content" x-placement="right-start">
                                                        @foreach ($subcategories as $sub)
                                                            @if ($sub->parent_id == $cat->id)
                                                                <button class="dropbtn px-2 py-3">
                                                                    <a href="{{ route('displaycat', $sub->name) }}"
                                                                        style="width: 300px;" class="ps-3">
                                                                        {{ $sub->name }}
                                                                    </a>
                                                                </button>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                                {{-- <button type="button" class="loadbtn">Load More</button> --}}
                                {{-- </div>
                                </div> --}}
                            </div>
                            <!-- Mbl ko lai -->
                            <div class="d-block d-md-none">
                                <ul class="list-group list-group-flush">
                                    <li class="h1">CATEGORIES</li>
                                    <li class="list">

                                        <div class="dropdown">
                                            <button class="dropbtn">Mobiles</button>
                                            <div class="dropdown-content" x-placement="right-start"
                                                style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -50px; will-change: transform;">
                                                <button class="dropbtn"><a href="#">Iphone</a></button>
                                                <button class="dropbtn"><a href="#">Samsung</a></button>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list">
                                        <div class="dropdown">
                                            <button class="dropbtn">Automobiles</button>
                                            <div class="dropdown-content" x-placement="right-start"
                                                style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -20px; will-change: transform;">
                                                <a href="#">Cars</a>
                                                <a href="#">Motorcycles</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list">
                                        <div class="dropdown">
                                            <button class="dropbtn">Musical Instruments</button>
                                            <div class="dropdown-content" x-placement="right-start"
                                                style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 41px; will-change: transform;">

                                                <a href="#">Guitar</a>
                                                <a href="#">Microphone</a>
                                                <a href="#">Drum</a>
                                                <a href="#">Speaker</a>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="list">
                                        <div class="dropdown">
                                            <button class="dropbtn">Home Appliances</button>
                                            <div class="dropdown-content" x-placement="right-start"
                                                style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 20px; will-change: transform;">
                                                <a href="#">Furniture</a>
                                                <a href="#">Kitchen Sets</a>
                                            </div>
                                        </div>
                                    </li>
                                    {{-- <li class="load"><button class="loadbtn" type="button">Load More</button></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="content shadow bg-body p-3 rounded justify-content-center">

                            <!-- LATEST ADS PART -->
                            <h4 class="text-bold pt-2 px-2" style="color:#D02020;">Latest Ads</h4>
                            <hr style="width: 95%;">

                            <!-- desktop ko lai -->

                            <div class="d-flex position-relative mt-2 mb-3 owl-carousel owl-theme">
                                @foreach ($posts as $post)
                                    @foreach ($post->images->take(1) as $img)
                                        <div class="card mx-2" style="height: 100%; ">
                                            <a href="{{ route('singlepost', $post->id) }}"
                                                style="color:#D02020; text-decoration:none;">
                                                <img class="card-img-top " src="{{ asset($img->image) }}" alt=""
                                                    style="height: 20vh">
                                                <div class="card-body">
                                                    <h5 class="card-title" style="color:#D02020;">
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
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- POPULAR ADS PART -->
            <div class="popular-ads px-5 mt-5" style="background-color: rgb(250, 245, 236);">
                <h1 class="text-center text pt-4 pb-2">Popular Ads</h1>
                <p class="text-center pb-3 text-secondary" style="font-size:30px;">Find what are the
                    popular ads people like to watch</p>
                <div class="d-flex position-relative mt-2 owl-carousel owl-theme">
                    @foreach ($popularpost as $popular)
                        @foreach ($popular->images->take(1) as $img)
                            <div class="card mx-2 my-2 mb-5" style="height: 100%;">
                                <a href="{{ route('singlepost', $popular->id) }}"
                                    style="color:#D02020; text-decoration:none;">
                                    <img class="card-img-top" src="{{ asset($img->image) }}" alt="img"
                                        style="height: 25vh">
                                    <div class="card-body" style="height: 28vh">
                                        <h4 class="card-title" style="color:#D02020;">{{ $popular->title }}</h4>
                                        <p class="card-text" style="font-style:italic; color:gray;">
                                            {{ $popular->condition }} <br>
                                            Used For
                                            {{ $popular->usedfor }}
                                        </p>
                                        <h6 class="card-text" style="color:#D02020;">Rs. {{ $popular->price }}</h6>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

            {{-- Donation ko part --}}
            <div class="donation">
                <div class="row  mt-0 pb-4" style="background-color: rgb(250, 245, 236);">
                    <h1 style="">Want to <span style="color: orange;"> Donate? </span></h1>
                    <p class="text-center pb-2 text-secondary" style="font-size:30px;">Donate the things that you don't
                        want to sell and Do the good deed!</p>
                    <div class="col">
                        <a href="{{ url('/donation-page') }}">
                            <button type="submit" class="btn btn-danger my-2 me-3">Click Here</button>
                        </a>
                        {{-- <button class="donatebutton">Click Here</button> --}}
                    </div>
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
                    <li class="list-inline-item"><a href="#">Home</a></li>
                    <li class="list-inline-item"><a href="#">Services</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Contact</a></li>
                    <li class="list-inline-item"><a href="#">Something</a></li>

                </ul>
                <p class="copyright">PURSELL © 2021</p>
            </div>
        </footer>

    </body>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom JS code after importing jquery and owl -->
    <script>
        $('.owl-carousel').owlCarousel({
            // loop:true,
            margin: 2,
            nav: true,
            scrollbarType: "progress",
            dots: false,
            navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
            responsive: {

                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#search-web").on('keyup', function() {
                var value = $(this).val();
                var location = $('#address-web').val();

                // console.log(location);
                $.ajax({
                    url: "search",
                    type: "GET",
                    data: {
                        'search': value,
                        'address': location
                    },
                    success: function(data) {
                        $("#post_list_web").html(data);
                    }
                });
            });

            $("#search-mobile").on('keyup', function() {
                var value = $(this).val();
                var location = $('#address-mobile').val();

                //console.log(location);
                $.ajax({
                    url: "search",
                    type: "GET",
                    data: {
                        'search': value,
                        'address': location
                    },
                    success: function(data) {
                        console.log(data)
                        $("#post_list_mobile").html(data);
                    }
                });
            });

            $(document).on('click', 'li', function() {
                var value = $(this).text();
                $("#search").val(value);
                $("#post_list").html("");
            });
        });
    </script>

    </html>
@endsection
