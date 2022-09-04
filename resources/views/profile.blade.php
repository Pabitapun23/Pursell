@extends('layouts.app')

@section('content')

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
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>

<body>


    <!-- Profile div -->

    <div class="container">
        <div class="row my-3 mx-5 justify-content-around">
            <div class="col-lg-5 col-12">
                <div class="content shadow ms-3 mt-3 px-5 py-5 ps-2 bg-body rounded
              justify-content-center">
                    <img src="Images/profile.PNG" class="img-fluid rounded-circle
                ms-4">
                    <div class="d-grid gap-2 d-md-block pt-3 ps-3 ms-2">
                        <button class="editbutton" type="button">Edit</button>
                    </div>
                    <br>
                    <hr>
                    <div class="d-grid gap-2 d-md-block ps-4 ms-2">
                        <p class="p-0">Username</p>
                    </div>
                    <div class="d-grid gap-2 d-md-block ps-4 ms-2">
                        <p class="p-0">Phone number</p>
                    </div>
                    <div class="d-grid gap-2 d-md-block ps-4 ms-2">
                        <p class="p-0">Member since: (date)</p>
                    </div>
                    <div class="d-grid gap-2 d-md-block ps-4 ms-2">
                        <p class="p-0">
                            <i class="bi bi-geo-alt"></i>
                            N/A (location)
                        </p>
                    </div>
                    <div class="d-grid gap-2 d-md-block ps-4 ms-2">
                        <p class="p-0">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <i class="bi bi-star"></i>
                            (0.0) Ratings
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-7 col-12" style="margin-top:50px ;">
                <div class="content shadow p-3 ms-3 mt-3 me-2 bg-body rounded
              justify-content-center">
                    <div class="tab row ps-2">
                        <div class="col-lg-2 col-4">
                            <button class="tablinks" onclick="openCity(event, 'Ad_post')">Ad
                                post</button>
                        </div>
                        <div class="col-lg-2 col-4">
                            <button class="tablinks" onclick="openCity(event, 'Saved')">Saved
                                List</button>
                        </div>
                        <hr>
                    </div>
                    <div class="tabcontent" id="Ad_post">
                        <div class="row justify-content-around" style="margin-top:10px
                  ;">
                            <div class="col-4 rounded bg-light text-center px-4 py-3">
                                <p>Total Ads (5)</p>
                            </div>
                            <div class="col-4 rounded bg-light text-center px-4 py-3">
                                <p>Reported (0)</p>
                            </div>
                        </div>

                        <div class="row justify-content-center mx-3 my-3">
                            <div class="col-12 rounded bg-light px-3 py-2" style="margin-top:20px ;">
                                <div class="row">
                                    <div class="col-lg-4 col-12 justify-content-center">
                                        <div class="card m-1">
                                            <img src="Images/profile.PNG" class="card-img-top" alt="..." style="height: 8vh;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to
                                                    build</p>
                                            </div>
                                            <button class="edit" type="button">Edit</button>
                                            <button class="delete" type="button">Delete</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 justify-content-flex-center">
                                        <div class="card m-1">
                                            <img src="Images/profile.PNG" class="card-img-top" alt="..." style="height: 8vh;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title lamooooooooooooo</h5>
                                                <p class="card-text">Some quick example text to
                                                    build</p>
                                            </div>
                                            <button class="edit" type="button">Edit</button>
                                            <button class="delete" type="button">Delete</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 justify-content-flex-center">
                                        <div class="card m-1">
                                            <img src="Images/profile.PNG" class="card-img-top" alt="..." style="height: 8vh;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to
                                                    build</p>
                                            </div>
                                            <button class="edit" type="button">Edit</button>
                                            <button class="delete" type="button">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabcontent" id="Saved" style="display: none;">
                        <div class="row justify-content-center mx-3 my-3">
                            <div class="col-12 rounded bg-light px-3 py-2" style="margin-top:20px ;">
                                <div class="row">
                                    <div class="col-lg-4 col-12 justify-content-center">
                                        <div class="card m-1">
                                            <img src="Images/profile.PNG" class="card-img-top" alt="..." style="height: 8vh;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to
                                                    build</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 justify-content-flex-center">
                                        <div class="card m-1">
                                            <img src="Images/profile.PNG" class="card-img-top" alt="..." style="height: 8vh;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title lamooooooooooooo</h5>
                                                <p class="card-text">Some quick example text to
                                                    build</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12 justify-content-flex-center">
                                        <div class="card m-1">
                                            <img src="Images/profile.PNG" class="card-img-top" alt="..." style="height: 8vh;">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to
                                                    build</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
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



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
</body>

</html>
@endsection