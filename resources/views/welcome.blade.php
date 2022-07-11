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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/welcome.css">







</head>

<body>



    <!--Nav sakkesi container suru kinaki nav le tanab dirathyo-->

    <div class="container-fluid">
        <div class="d-none d-md-block">
            <!--yo category chai small ma dekhinna lukxa md block le-->
            <div class="row">
                <div class="col col-md-3">
                    <ul class="list-group list-group-flush">
                        <li class="h1">CATEGORIES</li>
                        <li class="list">

                            <div class="dropdown">
                                <button class="dropbtn">Mobiles</button>
                                <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -50px; will-change: transform;">
                                    <button class="dropbtn"><a href="#">Iphone</a></button>
                                    <button class="dropbtn"><a href="#">Samsung</a></button>
                                </div>
                            </div>

                        </li>

                        <li class="list">

                            <div class="dropdown">
                                <button class="dropbtn">Automobiles</button>
                                <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -20px; will-change: transform;">

                                    <a href="#">Cars</a>
                                    <a href="#">Motorcycles</a>

                                </div>
                            </div>
                        </li>
                        <li class="list">

                            <div class="dropdown">
                                <button class="dropbtn">Musical Instruments</button>
                                <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 41px; will-change: transform;">

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
                                <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 20px; will-change: transform;">
                                    <a href="#">Furniture</a>
                                    <a href="#">Kitchen Sets</a>

                                </div>
                            </div>



                        </li>
                        <li class="load"><button class="loadbtn">Load More</button></li>
                    </ul>
                </div>

                <div class="col">
                    <!--thulo ko lagi xuttai search bar which will be hidden in small screen-->
                    <div class="row1" style="text-align: center;">
                        <h2 style="color:#D02020;">SELL - Anything , Anytime , Anywhere</h2>
                        <div class="search1">
                            <div class="input-group rounded">
                                <div class="searchbutton"> <button class="searchbutton"><i class="fa fa-search" aria-hidden="true"></i></button></div>
                                <input type="search" class="form3" placeholder="      Search All Items" aria-label="Search" aria-describedby="search-addon" />
                                <input type="search" class="form4" placeholder="   All Location" aria-label="Search" aria-describedby="search-addon" />
                                <div class="location"><button class="locbutton"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--mobile ko lagi xuttai search bar which will be hidden in big screen-->
        <div class="d-block d-md-none">
            <div class="row2" style="text-align: center;">
                <h1 style="font-size:20px;color:#D02020;">SELL - Anything , Anytime , Anywhere</h1>
                <div class="w-100"></div>
                <div class="search1">
                    <div class="input-group rounded">
                        <div class="searchbutton"> <button class="searchbutton"><i class="fa fa-search" aria-hidden="true"></i></button></div>
                        <input type="search" class="form1" placeholder="   Search Items" aria-label="Search" aria-describedby="search-addon" />
                        <input type="search" class="form2" placeholder=" All Location" aria-label="Search" aria-describedby="search-addon" />
                        <div class="location"><button class="locbutton"><i class="fa fa-map-marker" aria-hidden="true"></i></button></div>


                    </div>
                </div>


            </div>
        </div>
        <!-- Mbl ko lai -->
        <div class="d-block d-md-none">

            <ul class="list-group list-group-flush">
                <li class="h1">CATEGORIES</li>
                <li class="list">

                    <div class="dropdown">
                        <button class="dropbtn">Mobiles</button>
                        <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -50px; will-change: transform;">
                            <button class="dropbtn"><a href="#">Iphone</a></button>
                            <button class="dropbtn"><a href="#">Samsung</a></button>
                        </div>
                    </div>

                </li>

                <li class="list">

                    <div class="dropdown">
                        <button class="dropbtn">Automobiles</button>
                        <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -20px; will-change: transform;">

                            <a href="#">Cars</a>
                            <a href="#">Motorcycles</a>

                        </div>
                    </div>
                </li>
                <li class="list">

                    <div class="dropdown">
                        <button class="dropbtn">Musical Instruments</button>
                        <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 41px; will-change: transform;">

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
                        <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 20px; will-change: transform;">

                            <a href="#">Furniture</a>
                            <a href="#">Kitchen Sets</a>

                        </div>
                    </div>

                </li>
                <li class="load"><button class="loadbtn">Load More</button></li>
            </ul>
        </div>

        <!-- desktop ko lai -->

        <!-- LATEST ADS PART -->
        <div class="row3" style="margin-top:29px ;">
            <h3>LATEST ADS</h3>
            <!-- carousel-->
        </div>
        <div class="d-flex position-relative mt-2 owl-carousel owl-theme">
            @foreach($posts as $post)
            @foreach($post->images->take(1) as $img)

            <div class="card " style="height: 100%;">
                <img class="card-img-top " src="{{asset($img->image)}}" alt="">
                <div class="card-body">
                    <a href="{{route('singlepost',$post->id)}}" style="color:#D02020;">
                        <h4 class="card-title" style="color:#D02020;">{{$post->title}}</h4>
                    </a>
                    <p class="card-text" style="font-style:italic;"> {{$post->condition}} <br> Used For {{$post->usedfor}}</p>
                    <b>
                        <p class="card-text" style="color:#D02020;">Rs. {{$post->price}}</p>
                    </b>
                </div>

            </div>

            @endforeach
            @endforeach


        </div>

        <!-- POPULAR ADS PART -->
        <div class="row3" style="margin-top:29px ;">
            <h3>POPULAR ADS</h3>
        </div>
        <div class="d-flex position-relative mt-2 owl-carousel owl-theme">
            <div class="card">
                <img class="card-img-top " src="/images/8.jpeg">
                <div class="card-body">
                    <h4 class="card-title">Ferrari</h4>
                    <p class="card-text">Used For 3 Years . No problems all good </p>

                </div>

            </div>
            <div class="card">
                <img class="card-img-top" src="/images/4.jpg">
                <div class="card-body">
                    <h4 class="card-title">Ducati</h4>
                    <p class="card-text">
                        Cheap Bargain.Need Money</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/images/9.jpeg ">
                <div class="card-body">
                    <h4 class="card-title">Iphone</h4>
                    <p class="card-text">Good Condition. No problems all good </p>

                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/images/user.png ">
                <div class="card-body">
                    <h4 class="card-title">Iphone</h4>
                    <p class="card-text">Good Condition. No problems all good </p>

                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/images/profile.PNG ">
                <div class="card-body">
                    <h4 class="card-title">Iphone</h4>
                    <p class="card-text">Good Condition. No problems all good </p>

                </div>
            </div>
        </div>

        <div class="footer">
            <div class="row">
                <h9 style="padding-top: 5px; padding-bottom: 10px;">WANT TO DONATE?</h9>
                <div class="col">
                    <button class="donatebutton">Click Here</button>
                </div>
            </div>
        </div>

        <div class="row0">
            <div class="footer-basic">
                <footer>
                    <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
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
    </div>

</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
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

</html>

@endsection