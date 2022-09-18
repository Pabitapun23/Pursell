@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="stylesheet" href="./aboutus.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/ab068f72b1.js" crossorigin="anonymous"></script>
    </head>

    <body>

        {{-- About Us Page --}}
        <div class="bg-light">
            <div class="container py-5">
                <div class="row h-100 align-items-center py-5">
                    <div class="col-lg-6">
                        <h1 class="display-4" style="color:#D02020; font-size: 60px; font-weight: bolder;">About Us</h1>
                        <p class="lead text-muted mb-0" style="font-size: 25px; margin-top:20px;">Pursell is an online
                            platform that enables users to list a broad variety of products that users want to sell online
                            which is then visible to everyone accessing the site and other users can search and buy the
                            products they want or need. Also, the sellers can donate the products to their desired
                            organizations.</p>
                        </p>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block"><img src="images/logo.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white py-5">
            <div class="container py-5">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <h2 class="font-weight-light" style="color:#D02020; font-size: 45px; font-weight: bolder;">Find what
                            you want easily</h2>
                        <p class="font-italic text-muted mb-4" style="font-size: 25px; margin-top:20px;">We uses the
                            location in order to categorize the items according to the user’s
                            preferences and show the products which are most likely to be picked by the users. Pursell is a
                            perfect stop for the buying, selling, and donating of products online.</p>
                    </div>
                    <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt=""
                            class="img-fluid mb-4 mb-lg-0"></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 px-5 mx-auto"><img src="images/donation.jpg" alt=""
                            class="img-fluid mb-4 mb-lg-0"></div>
                    <div class="col-lg-6">
                        <h2 class="font-weight-light"
                            style="color:#D02020; font-size: 45px; font-weight: bolder; margin-top: 15px;">Extend A Helping
                            Hand</h2>
                        <p class="font-italic text-muted mb-4" style="font-size: 25px; margin-top:20px;">At Pursell You have
                            the Power to Bring Happiness. Donate stuff to needy people by selecting among the listed
                            organizations on our site.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light py-5">
            <div class="container py-5">
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <h2 class="ourteam">Our Team</h2>
                    </div>
                </div>

                <div class="row text-center">
                    <!-- Team item-->
                    <div class="col-xl-4 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/bikal.jpg" alt=""
                                width="150" style="margin-top: 20px;"
                                class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Bikalpa KC</h5>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="https://www.facebook.com/bikku.rocky/"
                                        class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/bikal_kc21/"
                                        class="social-link"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/in/bikalpa-kc-505205192/"
                                        class="social-link"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End-->

                    <!-- Team item-->
                    <div class="col-xl-4 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/pabita.jpeg" alt=""
                                width="150" style="margin-top: 20px;"
                                class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Pabita Pun</h5>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a href="https://www.facebook.com/pabita.pun.731"
                                        class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/pabita_pun/"
                                        class="social-link"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.linkedin.com/in/pabita-pun-2390a0193/"
                                        class="social-link"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- End-->

                    <!-- Team item-->
                    <div class="col-xl-4 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/rabita.jpeg" alt=""
                                width="150" style="margin-top: 20px;"
                                class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <h5 class="mb-0">Rabita Chhantyal</h5>
                            <ul class="social mb-0 list-inline mt-3">
                                <li class="list-inline-item"><a
                                        href="https://www.facebook.com/profile.php?id=100009394778933"
                                        class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/rabeeee5/"
                                        class="social-link"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a
                                        href="https://www.linkedin.com/in/rabita-chhantyal-90212419b/"
                                        class="social-link"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End-->


                </div>
            </div>
        </div>


        <footer class="bg-light pb-5">
            <div class="container text-center">
                <p class="font-italic text-muted mb-0">&copy; Copyrights Pursell All rights reserved.</p>
            </div>
        </footer>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection

@section('scripts')
@endsection
