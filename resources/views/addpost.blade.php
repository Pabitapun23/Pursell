@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Pursell</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Bootstrap CSS  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!-- CSS Link -->
        <link rel="stylesheet" href="css/addpost.css">

        <!-- Plugins -->

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

        <!-- google map api -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script
            src=https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly">
        </script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="/path/to/bootstrap.min.css">
        <link rel="stylesheet" href="/path/to/font-awesome.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="PlacePicker.js"></script>

    </head>

    <body>


        <!-- Post Ad  -->
        <section class="Form justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <div class="card shadow p-3 mb-5 bg-body rounded" style="max-width: 100%">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-lg">
                                        <h3 class="form-title mx-2">Post Ad</h3>
                                        <!-- Form -->
                                        <form id="form">
                                            <div class="form-row pt-3 mx-2">
                                                <input type="text" class="form-control" placeholder="Ad Title*">
                                                <label for="formFile" class="form-label">eg- Brand, model, colour,
                                                    size.</label>
                                            </div>
                                            <div class="form-row pt-2 mx-2 d-flex" id="container_image">
                                                <!-- <input class="form-control" type="file" id="formFile"> -->
                                            </div>
                                            <div class="form-row pt-2 mx-2">
                                                <div class="image-row">
                                                    <div class="col-lg-12 col-12">
                                                        <div class="photo_item justify-content-center">
                                                            <label for="image" class="select-img">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="60"
                                                                    height="60" fill="currentColor"
                                                                    class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                    <path
                                                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                                </svg>
                                                                <small class="text-muted">Choose photo*</small>
                                                            </label>
                                                            <input type="file" accept="image/*" required name="Image"
                                                                id="image" multiple="" class="d-none"
                                                                onchange="image_select()">
                                                            <button class="btn btn-sm btn-primary" type="button"
                                                                onclick="document.getElementById('image').click()" hidden>Choose
                                                                Image</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row pt-2 mx-2">
                                                <div class="row justify-content-around">
                                                    <div class="col-lg-6 col-12">
                                                        <label for="formFile" class="form-label">Category*</label>
                                                        <select class="form-select text-muted"
                                                            aria-label="Default select example">
                                                            <option selected>Select the condition</option>
                                                            <option value="1">Brand New</option>
                                                            <option value="2">New Like</option>
                                                            <option value="3">Used</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <label for="formFile" class="form-label">Sub-category*</label>
                                                        <select class="form-select text-muted"
                                                            aria-label="Default select example">
                                                            <option selected>Select the condition</option>
                                                            <option value="1">Brand New</option>
                                                            <option value="2">New Like</option>
                                                            <option value="3">Used</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row pt-4 mx-2">
                                                <label for="formFile" class="form-label">Condition*</label>
                                                <select class="form-select text-muted" aria-label="Default select example">
                                                    <option selected>Select the condition</option>
                                                    <option value="1">Brand New</option>
                                                    <option value="2">New Like</option>
                                                    <option value="3">Used</option>
                                                </select>
                                            </div>
                                            <div class="form-row pt-3 mx-2">
                                                <input type="text" id="pickup_country" class="form-control"
                                                    placeholder="Address" autofocus>
                                            </div>
                                            <div class="form-row pt-3 mx-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="check1"
                                                        name="option1" value="something" unchecked>
                                                    <label class="form-check-label">Hide my location</label>
                                                </div>
                                            </div>
                                            <div class="form-row pt-3 mx-2">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description*"></textarea>
                                                <label for="formFile" class="form-label">Add all products and service
                                                    specifications.</label>
                                            </div>
                                            <div class="form-row pt-2 mx-2">
                                                <div class="row justify-content-flex-start">
                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" class="form-control"
                                                            placeholder="Used for">
                                                    </div> &nbsp;
                                                    <div class="col-lg-4 col-12">
                                                        <input type="text" class="form-control"
                                                            placeholder="Warranty">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row pt-4 mx-2">
                                                <div class="row justify-content-flex-start">
                                                    <div class="col-lg-6 col-12">
                                                        <label for="formFile" class="form-label">Delivery</label>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row pt-3 mx-2">
                                                <input type="text" class="form-control" placeholder="Rs. Price*">
                                            </div>
                                            <div class="form-row pt-4 mx-2">
                                                <div class="row justify-content-flex-start">
                                                    <div class="col-lg-6 col-12">
                                                        <label for="formFile" class="form-label">Negotiable</label>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <!-- Rounded switch -->
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row pt-2 mx-2">
                                                <div class="row justify-content-around">
                                                    <div class="col-lg-4 col-12">
                                                        <label for="formFile" class="form-label">Expiry Date</label>
                                                    </div>
                                                    <div class="col-lg-8 col-12">
                                                        <div class="input-group date" id="datepicker">
                                                            <input type="text" class="form-control"
                                                                placeholder="Pick a date">
                                                            <span class="input-group-append">
                                                                <span class="input-group-text bg-white">
                                                                    <i class="bi bi-calendar"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Button -->
                                            <div class="form-row mt-5 mx-2">
                                                <div class="col-lg-4 col-md-6 col-12">
                                                    <button type="button" class="btn btn-danger">Publish Post</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Multiple image select -->
        <script type="text/javascript">
            var images = [];

            function image_select() {
                var image = document.getElementById('image').files;
                for (i = 0; i < image.length; i++) {
                    if (check_duplicate(image[i].name)) {
                        images.push({
                            "name": image[i].name,
                            "url": URL.createObjectURL(image[i]),
                            "file": image[i],
                        })
                    } else {
                        alert(image[i].name + "is already added to the list");
                    }

                }
                document.getElementById('form').reset();
                document.getElementById('container_image').innerHTML = image_show();
            }

            function image_show() {
                var image = "";
                images.forEach((i) => {
                    image += `<div class="image_container d-flex justify-content-end position-relative">
                            <img src="` + i.url + `" alt="Image">
                            <span class= "position-absolute" onclick="delete_image(` + images.indexOf(i) + `)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg></span>
                        </div>`;
                })
                return image;
            }

            function delete_image(e) {
                images.splice(e,
                    1) //splice function ke koi pani array bata index haru 0,1,2,3 haru hunxa ni teslai delete garxa
                document.getElementById('container_image').innerHTML = image_show();
            }

            function check_duplicate(name) {
                var image = true;
                if (images.length > 0) {
                    for (e = 0; e < images.length; e++) {
                        if (images[e].name == name) {
                            image = false;
                            break;
                        }
                    }
                }
                return image;
            }
        </script>


        <!-- Date picker -->
        <script type="text/javascript">
            $(function() {
                $('#datepicker').datepicker();
            })
        </script>

        <!-- Location Picker -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#pickup_country").PlacePicker({
                    btnClass: "btn btn-xs btn-default",
                    key: "AIzaSyBAGm4WfH69Ny5DmWFAA88s26UwiNqHMn8",
                    center: {
                        lat: 17.6868,
                        lng: 83.2185
                    },
                    success: function(data, address) {
                        //data contains address elements and
                        //address conatins you searched text
                        //Your logic here
                        $("#pickup_country").val(data.formatted_address);
                    }
                });
            });
        </script>
        <style>
            .form-signin {
                width: 100%;
                max-width: 630px;
                padding: 15px;
                margin: 0 auto;
            }
        </style>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36251023-1']);
            _gaq.push(['_setDomainName', 'jqueryscript.net']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                    '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>

    </body>

    </html>
@endsection
