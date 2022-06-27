@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <link rel="stylesheet" href="css/responsiveactivenavbar.css">
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/welcome.css">

    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>





</head>

<body>
    <!--talako bar ko lagi
    <ul class="nav nav-fill fixed-bottom d-lg-none pt-2" id="mobile-bottom-navbar">
        <li class="nav-item"><a class="nav-link text-capitalize d-flex flex-column justify-content-center align-items-center" href="#"><button class="home"><i class="fas fa-home fa-fw fa-lg"></i></button><span style="color:black" class="small">Home</a></li>
        <li class="nav-item"><a class="nav-link active text-capitalize d-flex flex-column justify-content-center align-items-center" href="#"><button class="noti"><i class="fas fa-bell fa-fw fa-lg"></i></button><span style="color:black" class="small">Notification</span></span></a></li>
        <li class="nav-item"><a class="nav-link text-capitalize d-flex flex-column justify-content-center align-items-center" href="#"><button class="acc"><i class="fas fa-user fa-fw fa-lg"></i></button><span style="color:black" class="small">account</span></a></li>
    </ul> -->
    <!--Mathi ko navbar ra toggle ko lai-->
    <!-- <nav class="navbar navbar-expand-custom navbar-mainbg"><img src="images/logo.png" style="width: 115px;margin-right: 139px;margin-top: 0px;margin-bottom: -20px;margin-left: -50px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-bs-label="Toggle navigation"><i class="fa fa-star fas fa-bars "></i></button>
        <div class="d-lg-flex justify-content-lg-end collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                </div>
                <li class="nav-item"></li>
                <li class="nav-item1"><a class="nav-link" href="javascript:void(0);"><button class="btn1"><i class="fa fa-commenting" aria-hidden="true"></i>
                        </button></a></li>
                <li class="nav-item2"><a class="nav-link" href="javascript:void(0);"><button class="btn2"><i class="fa fa-bell" aria-hidden="true"></i></button></a></li>
                <li class="nav-item3"><a class="nav-link" href="javascript:void(0);"><button class="btn3"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></a></li>
                <li class="nav-item4"><a class="nav-link" href="javascript:void(0);">
                        <div class="cardprofile"><button class="btn4"><img src="images/user.png " class="profile" /></button>
                        </div>
                    </a></li>
            </ul>
        </div>
    </nav> -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/responsiveactivenavbar.js"></script>

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
                                <button class="dropbtn">Bikes</button>
                                <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -65px; will-change: transform;">
                                    <button class="dropbtn" style=" border-bottom: 2px solid black;"><a href="#">Honda</a></button>
                                    <ul>
                                        <li><a href="#">CBR</a></li>
                                        <li><a href="#">CB 200</a></li>
                                        <li><a href="#">Shine</a></li>

                                    </ul>
                                    <button class="dropbtn" style=" border-bottom: 2px solid black;"><a href="#">Bajaj</a></button>
                                    <ul>
                                        <li><a href="#">Dominar</a></li>
                                        <li><a href="#">Pulsar</a></li>

                                    </ul>
                                    <a href="#">Suzuki</a>
                                </div>
                            </div>

                        </li>

                        <li class="list">

                            <div class="dropdown">
                                <button class="dropbtn">Cars</button>
                                <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -68px; will-change: transform;">
                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                            </div>


                        </li>
                        <li class="list">

                            <div class="dropdown">
                                <button class="dropbtn">Electronics</button>
                                <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -20px; will-change: transform;">

                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                            </div>

                        </li>



                        <li class="list">

                            <div class="dropdown">
                                <button class="dropbtn">Books</button>
                                <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -72px; will-change: transform;">

                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
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
                        <button class="dropbtn">Bikes</button>
                        <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -65px; will-change: transform;">

                            <a href="#">Honda





                            </a>


                            <a href="#">Bajaj</a>
                            <a href="#">Ducati</a>
                            <a href="#">Hyosung</a>
                            <a href="#">Kayo</a>
                            <a href="#">CX</a>
                            <a href="#">BMW</a>

                        </div>
                    </div>





                </li>

                <li class="list">

                    <div class="dropdown">
                        <button class="dropbtn">Cars</button>
                        <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -68px; will-change: transform;">

                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>


                </li>
                <li class="list">

                    <div class="dropdown">
                        <button class="dropbtn">Electronics</button>
                        <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -20px; will-change: transform;">

                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>

                </li>



                <li class="list">


                    <div class="dropdown">
                        <button class="dropbtn">Pets</button>
                        <div class="dropdown-content" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: -72px; will-change: transform;">

                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>



                </li>
                <li class="load"><button class="loadbtn">Load More</button></li>
            </ul>






        </div>

    </div>
    <!-- <div class="footer" style="padding-bottom:10px ;">

    </div>
    </div> -->

    <!-- desktop ko lai -->
    <div class="d-none d-md-block">

        <!-- popular ADS PART -->
        <div class="row3" style="margin-top:29px ;">
            <h3>POPULAR ADS</h3>
            <!-- carousal-->
            <div class="row">

                <!-- <div class="col-6">

                </div> -->

                <!-- arrow -->
                <div class="col-6 text-right">
                    <button class="productslider"><a href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left" style="color: red;"></i>
                        </a></button>
                    <button class="productslider"> <a href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <i class="fa fa-arrow-right" style="color: red;"></i>
                        </a></button>
                </div>

                <div class="product">
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/8.jpeg ">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ferrari</h4>
                                                    <p class="card-text">Used For 3 Years . No problems all good </p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/4.jpg " style="object-fit:cover;">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ducati</h4>
                                                    <p class="card-text">
                                                    <p>Cheap Bargain.Need Money</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/9.jpeg ">
                                                <div class="card-body">
                                                    <h4 class="card-title">Iphone</h4>
                                                    <p class="card-text">Good Condition. No problems all good </p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/8.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ferrari</h4>
                                                    <p class="card-text">Used For 3 Years . No problems all good </p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/4.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ducati</h4>
                                                    <p class="card-text">
                                                    <p>Cheap Bargain.Need Money</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/9.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Iphone</h4>
                                                    <p class="card-text">Good Condition. No problems all good </p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/8.jpeg ">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ferrari</h4>
                                                    <p class="card-text">Used For 3 Years . No problems all good </p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/4.jpg ">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ducati</h4>
                                                    <p class="card-text">
                                                    <p>Cheap Bargain.Need Money</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="images/8.jpeg ">
                                                <div class="card-body">
                                                    <h4 class="card-title">Iphone</h4>
                                                    <p class="card-text">Good Condition. No problems all good </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--over-->

                </div>
            </div>
        </div>

        <!-- NEW ADS PART -->
        <div class="row3" style="margin-top:29px ;">
            <h3>NEW ADS</h3>
            <!--carousal-->
            <div class="row">
                <!-- <div class="col-6">

                </div> -->
                <div class="col-6 text-right">
                    <button class="productslider"><a href="#carouselExampleIndicators3" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left" style="color: red;"></i>
                        </a></button>
                    <button class="productslider"> <a href="#carouselExampleIndicators3" role="button" data-slide="next">
                            <i class="fa fa-arrow-right" style="color: red;"></i>
                        </a></button>
                </div>

                <div class="product">
                    <div class="col-12">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="/images/8.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ferrari</h4>
                                                    <p class="card-text">Used For 3 Years . No problems all good </p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="/images/4.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ducati</h4>
                                                    <p class="card-text">
                                                    <p>Cheap Bargain.Need Money</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="/images/9.jpeg ">
                                                <div class="card-body">
                                                    <h4 class="card-title">Iphone</h4>
                                                    <p class="card-text">Good Condition. No problems all good </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="/images/8.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ferrari</h4>
                                                    <p class="card-text">Used For 3 Years . No problems all good </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="/images/4.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ducati</h4>
                                                    <p class="card-text">
                                                    <p>Cheap Bargain.Need Money</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="/images/9.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Iphone</h4>
                                                    <p class="card-text">Good Condition. No problems all good </p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="/images/8.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ferrari</h4>
                                                    <p class="card-text">Used For 3 Years . No problems all good </p>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="/images/8.jpeg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ducati</h4>
                                                    <p class="card-text">
                                                    <p>Cheap Bargain.Need Money</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="/images/8.jpeg  ">
                                                <div class="card-body">
                                                    <h4 class="card-title">Iphone</h4>
                                                    <p class="card-text">Good Condition. No problems all good </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--over-->

                </div>
            </div>

            <!--end carousal-->

        </div>



    </div>
    <!-- </div> -->
    <!-- Mbl ko lai -->
    <div class="d-block d-md-none">

        <div class="row3" style="margin-top:29px ;">
            <h3>POPULAR ADS</h3>


            <!--carousal-->


            <div class="wrappermobile">
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg " alt="Card image cap">
                    </div>
                </div>
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg  " alt="Card image cap">
                    </div>
                </div>
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg  " alt="Card image cap">
                    </div>
                </div>
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg " alt="Card image cap">
                    </div>
                </div>
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg " alt="Card image cap">
                    </div>
                </div>
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg  " alt="Card image cap">
                    </div>
                </div>
                <div class="item">box-7</div>
                <div class="item">box-8</div>
                <div class="item">box-9</div>
                <div class="item">box-10</div>
                <div class="item">box-11</div>
                <div class="item">box-12</div>
                <div class="item">box-13</div>
                <div class="item">box-14</div>
                <div class="item">box-15</div>
                <div class="item">box-16</div>
            </div>



        </div>

        <div class="row3" style="margin-top:29px ;">
            <h3>NEW ADS</h3>
            <div class="wrappermobile">
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg " alt="Card image cap">
                    </div>
                </div>
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg " alt="Card image cap">
                    </div>
                </div>
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg  " alt="Card image cap">
                    </div>
                </div>
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg  " alt="Card image cap">
                    </div>
                </div>
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg  " alt="Card image cap">
                    </div>
                </div>
                <div class="item">
                    <div class="cardmobile">
                        <img class="cardmobile-img-top" src="/images/9.jpeg  " alt="Card image cap">
                    </div>
                </div>
                <div class="item">box-7</div>
                <div class="item">box-8</div>
                <div class="item">box-9</div>
                <div class="item">box-10</div>
                <div class="item">box-11</div>
                <div class="item">box-12</div>
                <div class="item">box-13</div>
                <div class="item">box-14</div>
                <div class="item">box-15</div>
                <div class="item">box-16</div>
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
                    <li class="list-inline-item"><a href="#">Bla Bla</a></li>
                </ul>
                <p class="copyright">PURSELL © 2021</p>
            </footer>


        </div>


    </div>












</body>

</html>

@endsection