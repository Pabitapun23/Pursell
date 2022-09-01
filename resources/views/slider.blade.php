<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Icon -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />




</head>

<body>
    <div class="d-flex position-relative mt-2 owl-carousel owl-theme">
        <!-- story 1 -->



        <div class="round mx-2 story " type="button" style="width:7em; height:190px;">
            <img src="/images/register.jpg" alt="story 2" class="card-img-top rounded" style="min-height:190px; object-fit:cover;">

        </div>
        <div class="round mx-2 story " type="button" style="width:7em; height:190px;">
            <img src="/images/login.jpg" alt="story 2" class="card-img-top rounded" style="min-height:190px; object-fit:cover;">

        </div>
        <div class="round mx-2 story " type="button" style="width:7em; height:190px;">
            <img src="/images/4.jpg" alt="story 2" class="card-img-top rounded" style="min-height:190px; object-fit:cover;">

        </div>
        <div class="round mx-2 story " type="button" style="width:7em; height:190px;">
            <img src="/images/8.jpeg" alt="story 2" class="card-img-top rounded" style="min-height:190px; object-fit:cover;">

        </div>
        <div class="round mx-2 story " type="button" style="width:7em; height:190px;">
            <img src="/images/9.jpeg" alt="story 2" class="card-img-top rounded" style="min-height:190px; object-fit:cover;">

        </div>
        <div class="round mx-2 story " type="button" style="width:7em; height:190px;">
            <img src="/images/c3.jpg" alt="story 2" class="card-img-top rounded" style="min-height:190px; object-fit:cover;">

        </div>
        <div class="round mx-2 story " type="button" style="width:7em; height:190px;">
            <img src="/images/user.png" alt="story 2" class="card-img-top rounded" style="min-height:190px; object-fit:cover;">

        </div>
        <div class="round mx-2 story " type="button" style="width:7em; height:190px;">
            <img src="/images/c5.jpg" alt="story 2" class="card-img-top rounded" style="min-height:190px; object-fit:cover;">

        </div>


    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->
<script>
    $('.owl-carousel').owlCarousel({
        margin: 2,
        nav: true,

        dots: false,
        navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
        responsive: {
            0: {
                items: 3
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

<div class="card">
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