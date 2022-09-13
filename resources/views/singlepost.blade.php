@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link rel="stylesheet" href="{{ asset('css/singlepost.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <script src="https://kit.fontawesome.com/ab068f72b1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
            integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
            crossorigin="anonymous" />

        <!-- jquery for comment -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>

    <body>

        <!--container-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="card" style="width: 100%; height: 95%;background-color: #FDFDFD; margin-top: 40px;">

                        <div class="d-flex position-relative mt-2 owl-carousel owl-theme">
                            @foreach ($posts as $post)
                                @foreach ($post->images as $img)
                                    <div>
                                        <img class="w-100 d-block" src="{{ asset($img->image) }}" alt="Slide Image">
                                    </div>
                                @endforeach

                        </div>
                        <div class="borderless">
                            <ul class="list-group">
                                <div class="row" style="width: 100%; margin-left: 0px;">
                                    <div class="col-md-6">
                                        <li class="list-group-item border-0" style="color: grey; margin-top: 4px;"><i
                                                class="fa-solid fa-eye"></i> {{ $post->reads }} </li>
                                    </div>
                                    <div class="col-md-6">
                                        <li class="list-group-item border-0"
                                            style="font-family: 'Alegreya Sans SC';color:grey;  font-size: 21px;"><i
                                                class="fa-solid fa-money-bill" style="color:green;"></i>Rs.
                                            {{ $post->price }}</li>
                                    </div>
                                </div>
                            </ul>
                            <ul class="list-group">
                                <div class="row" style="width: 100%; margin-left: 0px;">
                                    <div class="col-md-6">
                                        <li class="list-group-item border-0"
                                            style="color: grey; font-family: 'Alegreya Sans SC'; margin-top: -14px;">
                                            {{ $post->condition }}
                                        </li>
                                    </div>
                                    <div class="col-md-6">
                                        <li class="list-group-item border-0"
                                            style="color: grey; font-family: 'Alegreya Sans SC'; font-size: 21px;margin-top: -14px">
                                            <i class="fa-solid fa-bookmark" style="color:#D02020;"></i> 30
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="cardprofile">
                                        @if ($post->user->profileimg == null)
                                            <img src="{{ URL::asset('/images/user.png') }}" alt="avataree"
                                                class="rounded-circle" me-2
                                                style="width:50px;height:50px;object-fit:cover;">
                                        @else
                                            <img src="/postimage/{{ $post->user->profileimg }}" alt="avatar"
                                                class="rounded-circle" me-2
                                                style="width:50px;height:50px;object-fit:cover;">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a href="{{ route('profile', $post->user->id) }}" style="color:#D02020;">
                                        <h5 class="card-title">{{ $post->user->name }}</h5>
                                    </a>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><button class="btnotherad">
                                                <a href="#"
                                                    style="text-decoration: none;color:black ; font-size: 12px;">30
                                                    Other Ads</a>
                                            </button>
                                        </p>
                                        <p class="phn">contact no: {{ $post->user->phoneno }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <button class="btnad"
                                        style="margin-bottom: 10px; margin-top: 10px; margin-left: -10px;"><i
                                            class="fa-solid fa-comments"></i> Chat</button></li>
                                </div>
                                <div class="col-md-5">
                                    <button class="btnad" style="margin-top: 10px; margin-left: -10px;"><i
                                            class="fa-solid fa-bookmark"></i> Save </button></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ">
                    <div class="card" style="width: 100%; height: 95%;background-color: #FDFDFD; margin-top: 40px;">
                        <div class="subcard" style="width: 95%; height: 50%;background-color: #FDFDFD;">
                            <div class="row">

                                <p class="adheading">{{ $post->title }}</p>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="minimal-tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item" role="presentation"><a class="nav-link " role="tab"
                                                    data-bs-toggle="tab" href="#tab-1"> <i class="fa-solid fa-info"
                                                        style="margin-right: 10px; font-size: 18px;"></i> Description </a>
                                            </li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" role="tab"
                                                    data-bs-toggle="tab" href="#tab-2"> <i
                                                        class="fa-solid fa-comment-dots " style="margin-right: 10px;">
                                                    </i> Comments </a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" role="tabpanel" id="tab-1">
                                                <div class="row" style="margin-left: 5px;">
                                                    <p
                                                        style="font-size: 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                                                   margin-top: 9px; border-bottom: 0.1px solid rgb(210, 210, 210); padding-bottom: 10px;">
                                                        {{ $post->description }}
                                                    </p>
                                                </div>

                                                <div class="row" style="margin-left: 5px; padding-bottom: 10px;">

                                                    <div class="card"
                                                        style="width: 100%; height: 95%;background-color: #FDFDFD; margin-top: 10px;">
                                                        <p
                                                            style="font-size: 18px; color:rgb(103, 103, 103); margin-top: 5px; margin-left: 5px;">
                                                            General</p>


                                                        <ul class="list-group"
                                                            style="color: black ; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding: 10px ;">

                                                            <li class="list-group-item">Ad ID : {{ $post->id }}</li>
                                                            <li class="list-group-item">Location : {{ $post->address }}
                                                            </li>
                                                            <li class="list-group-item">Delievery : @if ($post->delivery == '0')
                                                                    No
                                                                @else
                                                                    Yes
                                                                @endif
                                                            </li>
                                                            <li class="list-group-item">Negotiable: @if ($post->negotiable == '0')
                                                                    No
                                                                @else
                                                                    Yes
                                                                @endif
                                                            </li>
                                                            <li class="list-group-item">Ad Posted:
                                                                {{ $post->created_at->diffForHumans() }}</li>




                                                        </ul>



                                                    </div>
                                                </div>


                                                <div class="row" style="margin-left: 5px; padding-bottom: 10px;">
                                                    <div class="card"
                                                        style="width: 100%; height: 95%;background-color: #FDFDFD; margin-top: 10px;">
                                                        <p
                                                            style="font-size: 18px; color:rgb(103, 103, 103); margin-top: 5px; margin-left: 5px;">
                                                            Others</p>


                                                        <ul class="list-group"
                                                            style="color: black ; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding: 10px;">

                                                            <li class="list-group-item">Used for : {{ $post->usedfor }}
                                                            </li>
                                                            <li class="list-group-item">Waranty : @if ($post->warranty == '0')
                                                                    No
                                                                @else
                                                                    Yes
                                                                @endif
                                                            </li>

                                                        </ul>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="tab-2">
                                                <div class="comment-box ml-2">
                                                    <p class="adheading">Add a comment
                                                    <p>

                                                    <form action="{{ route('comment', $post->id) }}" method="POST"
                                                        id="my_form">
                                                        @csrf
                                                        <input type="hidden" name="id" id="id"
                                                            value="{{ $post->id }}">

                                                        <div class="comment-area">


                                                            <textarea class="form-control" placeholder="what is your view?" rows="4" id="comment" name="comment"></textarea>

                                                        </div>

                                                        <div class="comment-btns mt-2">

                                                            <div class="row">

                                                                <div class="col-6">
                                                                    <!--
                                                                    <div class="pull-left">

                                                                        <button class="btnad">Cancel</button>

                                                                    </div> -->

                                                                </div>

                                                                <div class="col-6">

                                                                    <div class="pull-right">

                                                                        <button type="submit" id="addCommentBtn"
                                                                            class="btnad">Post </button>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </form>

                                                </div>
                                                <!-- comment ko display ko lai -->
                                                <div class="commentsec">
                                                    <p class="alertcomment"
                                                        style="background-color: #D4EDDA; padding-left:20px; font-style:italic;">
                                                    </p>
                                                    @foreach ($post->comments as $comment)
                                                        <div class="border">
                                                            <div class="text">
                                                                <a href="{{ route('profile', $comment->user->id) }}"
                                                                    style="color:#D02020;">
                                                                    <p
                                                                        style="font-weight:bold; margin-top:10px; margin-bottom:10px;">
                                                                        {{ $comment->user->name }}</p>
                                                                </a>
                                                                <p style="font-style: italic;">
                                                                    {{ $comment->created_at->diffForHumans() }}</p>
                                                                <p>{{ $comment->comment }}</p>

                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <div class="ajaxcomm">
                                                        <div class="commentname text">
                                                        </div>
                                                        <div class="commentdate"
                                                            style="font-style:italic ;padding-left: 20px;">
                                                        </div>
                                                        <div class="newcomment text">
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


                <div class="col-md-3 ">
                    <div class="card" style="width: 100%; height: 95%;background-color: #FDFDFD; margin-top: 40px;">
                        <div>
                            <p class="adheading"> Similar Products</p>
                        </div>

                        <div class="scroll">
                            <div class="row">

                                <!--first col-->
                                <div class="col-xl-6">

                                    @foreach ($relatedpost as $relatedpost)
                                        @foreach ($relatedpost->images->take(1) as $img)
                                            <div class="cardsimi">

                                                <div class="img-square-wrapper">
                                                    <a href="{{ route('singlepost', $relatedpost->id) }}"
                                                        style="color:#D02020;">
                                                        <img class="responsive"
                                                            style="max-height:150px; max-width: 100%; box-shadow: 4px 10px 10px rgba(0, 0, 0, 0.25);border-radius: 15px;"
                                                            src="{{ asset($img->image) }}">
                                                </div>
                                                <h4 class="card-title"
                                                    style="margin-top: 10px;font-size: 15px; font-weight: bolder;">
                                                    {{ $relatedpost->title }}
                                                </h4>
                                                </a>

                                                <ul class="list-group list-group-horizontal " style="margin-top: -10px;">

                                                    <li class="list-group-item border-0"
                                                        style="color: grey; font-size:12px">{{ $relatedpost->condition }}
                                                    </li>
                                                </ul>

                                                <ul class="list-group list-group-horizontal " style="margin-top: -10px;">
                                                    <li class="list-group-item border-0"
                                                        style=" font-size: 12px; font-weight: 700;">
                                                        {{ $relatedpost->price }}</li>

                                                </ul>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>




                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

    </body>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom JS code after importing jquery and owl -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 2,

            scrollbarType: "progress",
            dots: false,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 2500,

            responsive: {

                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    </script>
    <!-- <script>
        const form = document.getElementById('my_form');

        form.addEventListener('submit', function handleSubmit(event) {
            event.preventDefault();


            form.reset();
        });
    </script> -->

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF_TOKEN': $('meta[name="csrf_token"]').attr('content')
            }
        });

        $(document).ready(function() {

            //add comment function by id
            $('#addCommentBtn').click(function(e) {
                e.preventDefault();
                // alert(1);

                //get data from form

                // var pusher = new Pusher('d3137dd476270dd48d4e', {
                //     cluster: 'ap1'
                // });
                // var channel = pusher.subscribe('channel');
                // channel.bind('App\\Events\\CommentNotify', function(data) {
                //     alert(JSON.stringify(data));
                // });



                var comment = $('#comment').val();
                var id = $('#id').val();

                // $.ajax({
                //     type: 'POST',
                //     dataType: 'json',
                //     data: {
                //         comment: comment,
                //         _token: '{{ csrf_token() }}'
                //     },
                //     url: '/singlepost/' + id,
                //     success: function(data) {
                //         console.log(data.html);
                //         // $('#commentdisplay').val("");
                //         // $('#commentdisplay').val(data);
                //         // console.log('data saved');
                //     },
                //     error: function(error) {
                //         console.log(error);
                //     }

                // })
                $.ajax({
                    type: "post",
                    url: '/singlepost/' + id,
                    data: {
                        comment: comment,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        $('#comment').val();
                        // alert("comment added successfully");

                        // console.log(comment);
                        $('.alertcomment').html(data.success);

                        $('.commentname').html(data.name);
                        $('.commentdate').html(data.date);
                        $('.newcomment').append(comment);



                    },


                });

            })
        });
    </script>


    </html>
@endsection
