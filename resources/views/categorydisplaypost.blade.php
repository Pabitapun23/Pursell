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
    <link rel="stylesheet" href="/css/category.css">







</head>

<body>


    <div class="container-fluid">

        <div class="row3" style="margin-top:29px ;">

        </div>
        <div class="card-deck row">

            <div class="col-xs-12 col-sm-6 col-md-4">
                @foreach ($categoryitem as $categoryitems)
                <h3>Categories: {{$categoryitems->name}} </h3>
                <div class="card mb-4">

                    <div class="card-body">
                        @foreach ($categoryitems->posts as $post)
                        @foreach ($post->images->take(1) as $img)
                        <img class="card-img-top " src="{{ asset($img->image) }}" alt="">
                        <a href="{{ route('singlepost', $post->id) }}" style="color:#D02020;">

                            <h4 class="card-title" style="color:#D02020;">{{ $post->title }}</h4>

                        </a>

                        <p class="card-text" style="font-style:italic;"> {{ $categoryitems->name }} <br> Used For
                            {{ $post->usedfor }}
                        </p>
                        <b>
                            <p class="card-text" style="color:#D02020;">Rs. {{ $post->price }}</p>
                        </b>
                        @endforeach
                        @endforeach

                    </div>

                </div>
                @endforeach
            </div>


        </div>
    </div>







</body>

</html>
@endsection