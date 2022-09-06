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
    <link rel="stylesheet" href="css/editpost.css">

    <!-- Plugins -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">



    <!-- for category -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- <link rel="stylesheet" href="/path/to/bootstrap.min.css">
    <link rel="stylesheet" href="/path/to/font-awesome.min.css"> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>
<style>
    .container {
        margin-top: 2%;
        max-width: 100%;
        height: 80%;
        border: solid 1px white;
        border-radius: 1rem;
        box-shadow: 1rem;
        padding: 0;

        overflow-x: hidden;



    }

    h3 {
        margin-top: 2%;
    }

    .post--form .post--ads .form-group .image-row {
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        gap: 1em;
        justify-content: flex-start;
    }

    .select-img {
        width: 100%;
        height: 100%;
        align-items: center;
        border: 2px dashed grey;
        border-radius: 10px;
        padding: 40px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        transition: 0.3s linear;
    }

    .image_container {
        height: 120px;
        width: 200px;
        border-radius: 6px;
        overflow: hidden;
        margin: 10px;
    }

    .image_container img {
        height: 100%;
        width: auto;
        object-fit: cover;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }

    input:checked+.slider {
        background-color: #2196f3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196f3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    .form-control {
        max-width: 100%;
    }
</style>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
    </svg>

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
                                    @if(Session::get('success'))


                                    <div class="alert alert-success alert-dismissible d-flex" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                            <use xlink:href="#check-circle-fill" />
                                        </svg>
                                        <div>
                                            {{Session::get('success')}}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>



                                    @endif

                                    <!-- Form -->

                                    <form id="form" action="{{route('updatepost',$datas->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form pt-3 mx-2">
                                            <input type="text" class="form-control" placeholder="Ad Title*" name="title" value="{{$datas->title}}" required>
                                            <label for="formFile" class="form-label">eg- Brand, model, color,
                                                size.</label>

                                        </div>
                                        <div class="login-error">
                                            <span class="login-error-msg" style="color: #F53535;"><strong>@error('title'){{$message}}@enderror </strong></span>

                                        </div>
                                        @foreach ($datas->images as $img)
                                        <div class="form-row pt-2 mx-2 d-flex" id="preview">
                                            <img src="{{ asset($img->image) }}" alt="" style="height:80px;width:80px;">
                                        </div>
                                        @endforeach
                                        <div class="form-row pt-2 mx-2" id="container_image">
                                            <div class="image-row">
                                                <div class="col-lg-12 col-12">
                                                    <div class="photo_item justify-content-center">
                                                        <label for="img_input" class="select-img">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                            </svg>
                                                            <small class="text-muted">Choose photo*</small>
                                                        </label>
                                                        <input type="file" accept="image/*" name="images[]" id="img_input" multiple="" class="d-none">
                                                        <button class=" btn btn-sm btn-primary" type="button" onclick="document.getElementById('image').click()" hidden>Choose
                                                            Image</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row pt-4 mx-2">
                                            <label for="formFile" class="form-label">Condition*</label>
                                            <select class="form-select text-muted" name="condition" aria-label="Default select example" required>

                                                <!-- <option value="{{$datas->condition}}" selected>{{$datas->condition}}</option> -->
                                                @foreach ($condition as $condition)
                                                <option value="{{$condition->condition}}" {{$datas->condition== $condition->condition  ? 'selected' : ''}}>{{$condition->condition}}</option>
                                                @endforeach
                                            </select>
                                            <div class="login-error">
                                                <span class="login-error-msg" style="color: #F53535;"><strong>@error('condition'){{$message}}@enderror </strong></span>

                                            </div>
                                        </div>
                                        <div class="form-row pt-3 mx-2">
                                            <label for="formFile" class="form-label">Address*</label>
                                            <select class="form-select text-muted" name="address" aria-label="Default select example" required>

                                                @foreach ($address as $cities)
                                                <option value="{{$cities->city  }}" {{$datas->address== $cities->city  ? 'selected' : ''}}>{{ $cities->city }}</option>
                                                @endforeach
                                            </select>
                                            <div class="login-error">
                                                <span class="login-error-msg" style="color: #F53535;"><strong>@error('address'){{$message}}@enderror </strong></span>

                                            </div>
                                        </div>
                                        <!-- <div class="form-row pt-3 mx-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" unchecked>
                                                <label class="form-check-label">Hide my location</label>
                                            </div>
                                        </div> -->
                                        <div class="form-row pt-3 mx-2">
                                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Description*" required>{{ltrim($datas->description)}}
                                            </textarea>
                                            <label for="formFile" class="form-label">Add all products and service
                                                specifications.</label>
                                            <div class="login-error">
                                                <span class="login-error-msg" style="color: #F53535;"><strong>@error('description'){{$message}}@enderror </strong></span>

                                            </div>
                                        </div>
                                        <div class="form pt-3 mx-2">
                                            <input type="text" class="form-control" placeholder="Used for*" name="usedfor" value="{{$datas->usedfor}}" required>
                                            <label for="formFile" class="form-label">eg- 2years,
                                                2months.</label>

                                        </div>
                                        <div class="form-row pt-4 mx-2">
                                            <div class="row justify-content-flex-start">
                                                <div class="col-lg-6 col-12">
                                                    <label for="formFile" class="form-label">Warranty</label>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <!-- Rounded switch -->
                                                    <label class="switch">
                                                        <input type="checkbox" name="warranty" value="1" {{  ($datas->warranty == 1 ? ' checked' : '') }}>
                                                        <span class="slider round"></span>
                                                    </label>
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
                                                        <input type="checkbox" name="deliverystatus" value="1" {{  ($datas->delivery == 1 ? ' checked' : '') }}>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row pt-3 mx-2">
                                            <input type="text" class="form-control" name="price" value="{{$datas->price}}" placeholder="Rs. Price*" required>
                                            <div class="login-error">
                                                <span class="login-error-msg" style="color: #F53535;"><strong>@error('price'){{$message}}@enderror </strong></span>

                                            </div>
                                        </div>
                                        <div class="form-row pt-4 mx-2">
                                            <div class="row justify-content-flex-start">
                                                <div class="col-lg-6 col-12">
                                                    <label for="formFile" class="form-label">Negotiable</label>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <!-- Rounded switch -->
                                                    <label class="switch">
                                                        <input type="checkbox" name="negotiablestatus" value="1" {{  ($datas->negotiable == 1 ? ' checked' : '') }}>
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
                                                    <div>
                                                        <input type="date" class="form-control" placeholder="Pick a date" name="date" value="{{$datas->expirydate}}" required>

                                                    </div>
                                                </div>
                                                <div class="login-error">
                                                    <span class="login-error-msg" style="color: #F53535;"><strong>@error('date'){{$message}}@enderror </strong></span>

                                                </div>

                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="form-row mt-5 mx-2">
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <button type="submit" class="btn btn-danger">Edit Post</button>
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

    <script>
        function previewImages() {
            var preview = document.querySelector('#preview');

            if (this.files) {
                [].forEach.call(this.files, readAndPreview);
            }

            function readAndPreview(file) {

                // Make sure `file.name` matches our extensions criteria
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                    return alert(file.name + " is not an image");
                } // else...

                var reader = new FileReader();

                reader.addEventListener("load", function() {
                    var image = new Image();
                    image.height = 100;
                    image.title = file.name;
                    image.src = this.result;
                    preview.appendChild(image);
                });

                reader.readAsDataURL(file);
            }
        }
        document.querySelector('#img_input').addEventListener("change", previewImages);
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
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        $(document).ready(function() {
            $('#category').on('change', function(e) {
                var cat_id = e.target.value;
                console.log(cat_id);
                $.ajax({
                    url: "{{ route('subcat') }}",
                    type: "POST",
                    data: {
                        cat_id: cat_id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        $('#subcategory').empty();
                        $.each(data.subcategories[0].subcategories, function(index, subcategory) {
                            $('#subcategory').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
                            // console.log("subcat", subcategory.id);

                        })
                    }
                })
            });
        });

        $(document).ready(function() {
            $('#subcategory').on('change', function(e) {
                var subcat_id = e.target.value;
                console.log("subcat", subcat_id);
                $.ajax({

                    url: "",
                    type: "GET", //POST
                    data: {
                        subcat_id: subcat_id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        $('#subcategory').append('<option value="' + subcat_id + '">' + '</option>');
                        //console.log("subcategory", subcat_id);

                    }
                })
            });
        });
    </script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script> -->

</body>

</html>
@endsection