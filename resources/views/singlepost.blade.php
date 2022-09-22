@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="{{ asset('css/singlepost.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/ab068f72b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!-- jquery for comment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    @auth
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('d3137dd476270dd48d4e', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('chat-channel' + '{{ Auth::user()->id }}');
        channel.bind('chat-submitted', function(data) {
            // $('p').append('<p>' + JSON.stringify(data.text) + '</p>');

            // $('#msgdisplay').append('<p>' + JSON.stringify(data.text) + '</p>');

            $('#msgdisplay').append(
                '<div class="d-flex flex-row justify-content-start mb-4"> <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;"> <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);"> <p class="small mb-0 " id="msgdisplay">' +
                data.text + '</p> </div> </div>');

        });
    </script>
    @endauth

</head>

<body>

    <!--container-->

    <div class="post-container-fluid mt-3">
        @foreach ($posts as $post)
        <div class="row justify-content-center mt-4">
            <div class="col-lg-4 col-md-6 col-12 pe-0">
                <div class="card mt-2 shadow">
                    <div class="card-header p-0 position-relative mt-3 mx-3 z-index-2 bg-transparent">
                        <div class="d-flex position-relative owl-carousel owl-theme">
                            @foreach ($post->images as $img)
                            <div class="bg-gradient-primary shadow-primary border-radius-lg p-2">
                                <img class="w-100 d-block" src="{{ asset($img->image) }}" alt="Slide Image" height="280vh" width="100%" style="object-fit:cover">
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="row m-0 mt-4 px-2">
                            <div class="col-md-6 col-4">
                                <p class="fw-normal" style="font-size: large;"><i class="fa-solid fa-eye"></i>
                                    <span style="color: grey">{{ $post->reads }} views
                                    </span>
                                </p>
                            </div>
                            <div class="col-md-6 col-8 d-flex flex-column justify-content-end align-items-end mx-0">
                                <div>
                                    <h4><i class="fa-solid fa-money-bill" style="color:green;"></i>
                                        Rs.{{ $post->price }}
                                    </h4>
                                </div>
                                <div>
                                    <p class="pt-1 ps-5 pe-0" style="color: grey;">
                                        {{ $post->condition }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer mx-4 mb-2 py-0" style="background-color: white;">
                        <div class="pt-3">
                            @if ($post->user->profileimg == null)
                            <img src="{{ URL::asset('/images/user.png') }}" alt="avataree" class="rounded-circle" style="width:70px;height:70px;object-fit:cover;">
                            @else
                            <img src="/postimage/{{ $post->user->profileimg }}" alt="avatar" class="rounded-circle" style="width:70px;height:70px;object-fit:cover;">
                            @endif
                        </div>
                        <a href="{{ route('profile', $post->user->id) }}" style="color:#D02020;">
                            <h5 class="card-title pt-3">{{ $post->user->name }}</h5>
                        </a>
                        <p class="btnotherad">
                            <a href="{{ route('profile', $post->user->id) }}" style="text-decoration: none;color:gray ; font-size: 12px;">{{ $post->user->count() }}
                                Other Ads</a>
                        </p>

                        <p class="phn"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#d02020" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> &nbsp; <span style="color: gray;">{{ $post->user->phoneno }}</span>
                        </p>
                        @auth
                        @if (auth()->user()->id != $post->user->id)
                        <button class="py-2 px-3 mb-4 btnad rounded" type="button" style="color: white; background-color:#D02020;">
                            <a href="{{ route('getchat', $post->user->id) }}" style="text-decoration:none; color:white;">
                                <i class="fa-solid fa-comments"></i> Chat
                            </a>
                        </button>

                        <button id="wishlistBtn" class="py-2 px-1 float-end" style="border:none; background-color:white;">
                            <i class="fa-solid fa-bookmark fa-2x" id='heart' style="color:gray; color:{{ Auth::user()->wishlists()->where('post_id', $post->id)->count() > 0? '#d02020': '' }}">
                            </i>
                        </button>
                        <input type="hidden" name="id" id="postid" value="{{ $post->id }}">
                        @endif
                        @endauth
                    </div>
                </div>
            </div>



            <div class="col-lg-6 col-md-6 col-12 ">
                <div class="card mt-2" style="width: 100%; background-color: #FDFDFD; margin-top: 40px;">
                    <div class="subcard mb-3" style="width: 95%; height: 50%; background-color: #FDFDFD;">
                        <h2 class="px-4 pt-4">{{ $post->title }}</h2>
                        <h5 class="px-4 pt-4">Description</h5>
                        <p class="px-4 pt-3 pb-2" style="font-size: 15px; color:gray;">
                            {{ $post->description }}
                        </p>
                        <p class="ms-4 mb-0" style="border-bottom: 0.1px solid rgb(210, 210, 210);"></p>
                        <div class="row mt-0">
                            <div class="col-md-12">
                                <div class="minimal-tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-1"> <i class="fa-solid fa-info" style="margin-right: 10px; font-size: 18px;"></i>
                                                Specification
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2"> <i class="fa-solid fa-comment-dots " style="margin-right: 10px;">
                                                </i> Comments </a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" role="tabpanel" id="tab-1">

                                            {{-- General Specification section --}}
                                            <h5 class="px-3 pt-3 pb-1"> General</h5>
                                            <ul class="list-group">
                                                <li class="list-group-item py-1 pt-3">Ad ID :
                                                    <span style="color: gray;"> &nbsp; {{ $post->id }} </span>
                                                </li>
                                                <li class="list-group-item py-1">Location :
                                                    <span style="color: gray;"> &nbsp; {{ $post->address }}
                                                </li>
                                                <li class="list-group-item py-1">Delievery : <span style="color: gray;"> &nbsp;
                                                        @if ($post->delivery == '0')
                                                        No
                                                        @else
                                                        Yes
                                                        @endif
                                                    </span>
                                                </li>
                                                <li class="list-group-item py-1">Negotiable: <span style="color: gray;"> &nbsp;
                                                        @if ($post->negotiable == '0')
                                                        No
                                                        @else
                                                        Yes
                                                        @endif
                                                    </span>
                                                </li>
                                                <li class="list-group-item py-1 pb-3">Ad Posted:
                                                    <span style="color: gray;"> &nbsp;
                                                        {{ $post->created_at->diffForHumans() }} </span>
                                                </li>
                                            </ul>

                                            {{-- Other Specification section --}}
                                            <h5 class="px-3 pt-4"> Others</h5>
                                            <ul class="list-group">
                                                <li class="list-group-item py-1 pt-3">Used for :
                                                    <span style="color: gray;"> &nbsp; {{ $post->usedfor }}
                                                    </span>
                                                </li>
                                                <li class="list-group-item py-1 pb-3">Waranty : <span style="color: gray;">
                                                        &nbsp; @if ($post->warranty == '0')
                                                        No
                                                        @else
                                                        Yes
                                                        @endif </span>
                                                </li>
                                            </ul>
                                        </div>

                                        {{-- Comment Section --}}
                                        <div class="tab-pane" role="tabpanel" id="tab-2">
                                            <div class="comment-box ml-2">
                                                <h5 class="px-2 pt-3 pb-1"> Add a Comment</h5>
                                                <form action="{{ route('comment', $post->id) }}" method="POST" id="my_form">
                                                    @csrf
                                                    <input type="hidden" name="id" id="id" value="{{ $post->id }}">
                                                    <div class="comment-area">
                                                        <textarea class="form-control" placeholder="write a comment" rows="2" id="comment" name="comment"></textarea>
                                                    </div>
                                                    {{-- <button type="submit" class="btnad">Post
                                                            </button> --}}
                                                    <button type="submit" class="py-1 px-3 mt-3 btnad rounded float-end" id="addCommentBtn" style="color: white; background-color:#D02020;"> Post
                                                    </button>
                                                </form>
                                            </div>
                                            <br>
                                            <br>
                                            <!-- comment ko display ko lai -->
                                            <div class="commentsec" id="commentdisplay">

                                                @foreach ($post->comments as $comment)
                                                <div class="border rounded bg-body my-2 ms-2">
                                                    <div class="text">
                                                        <a href="{{ route('profile', $comment->user->id) }}" style="color:#D02020;">
                                                            <p class="pt-3 mb-0" style="font-size:18px; font-weight:bold;">
                                                                {{ $comment->user->name }}
                                                            </p>
                                                        </a>
                                                        <p class="mt-1">{{ $comment->comment }}</p>
                                                    </div>
                                                </div>
                                                <p style="font-style: italic; font-size:15px; color:gray; float:right;">
                                                    {{ $comment->created_at->diffForHumans() }}
                                                </p>
                                                <br>
                                                @endforeach
                                                <!-- <div class="ajaxcomm">
                                                            <div class="commentname text">
                                                            </div>
                                                            <div class="commentdate"
                                                                style="font-style:italic ;padding-left: 20px;">
                                                            </div>
                                                            <div class="newcomment text">
                                                            </div>
                                                        </div> -->
                                                <a href="#" style="color:gray;">
                                                    <h6 class="px-2 pt-3 mb-0"> View more comments</h6><a>
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

        <div class="content mt-5 bg-body p-3 rounded">
            <!-- SIMILAR ADS PART -->
            <h4 class="text-bold pt-2 px-4" style="color:#D02020;">Similar Ads</h4>
            <hr style="width: 98%; margin-left:10px">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="d-flex position-relative mb-3 ms-3">
                        @foreach ($relatedpost as $relatedpost)
                        @foreach ($relatedpost->images->take(1) as $img)
                        <div class="card shadow mx-2 mb-4" style="height: 100%;">
                            <a href="{{ route('singlepost', $relatedpost->id) }}" style="color:#D02020; text-decoration:none;">
                                <img class="card-img-top" src="{{ asset($img->image) }}" alt="" style="height: 20vh">
                                <div class="card-body">
                                    <h5 class="card-title" style="color:#D02020;">
                                        {{ $relatedpost->title }}
                                    </h5>
                                    <p style="font-style:italic; color:gray; font-size:13px;">
                                        {{ $relatedpost->condition }}
                                        <br>
                                        Used For
                                        {{ $relatedpost->usedfor }}
                                    </p>

                                    <h6 class="text-bold" style="color:#D02020;">Rs.
                                        {{ $relatedpost->price }}
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
        @endforeach

        <!-- footer -->
        <footer>
            <div class="footer-basic">
                <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="{{ route('welcome') }}">Home</a></li>
                    <li class="list-inline-item"><a href="{{ route('aboutus') }}">About</a></li>
                    <li class="list-inline-item"><a href="#">Contact</a></li>
                </ul>
                <p class="copyright">PURSELL © 2021</p>
            </div>
        </footer>

    </div>

</body>
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->
<script>
    $('.owl-carousel').owlCarousel({
        // loop: true,
        margin: 2,

        scrollbarType: "progress",
        dots: false,
        // autoplay: true,
        // smartSpeed: 1000,
        // autoplayTimeout: 2500,

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




            var comment = $('#comment').val();
            var id = $('#id').val();


            $.ajax({
                type: "post",
                url: '/singlepost/' + id,
                data: {
                    comment: comment,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    $('#comment').val();

                    $('#commentdisplay').prepend(' <p class="alertcomment" style="background-color: #D4EDDA; padding-left:20px; font-style:italic;">' + data.success + '</p><div class="border rounded bg-body my-2 ms-2" id="commentdisplay"> <div class="text">  <p class="pt-3 mb-0" style="font-size:18px; font-weight:bold;">' + data.name + '</p> </a> <p class="mt-1">' + comment + '</p> </div> </div> <p style="font-style: italic; font-size:15px; color:gray; float:right;">' + data.date + '</p> <br>')


                },


            });

        })
    });
</script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF_TOKEN': $('meta[name="csrf_token"]').attr('content')
        }

    });



    //add comment function by id
    $('#chatPop').click(function(e) {
        e.preventDefault();
        // alert(1);
        var postId = $('#id').val();
        $.ajax({
            type: "post",
            url: '/getchat/' + postId,
            data: {
                postId: postId,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                // alert(data);
                console.log(data);


            },


        });


    });
</script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF_TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $('#submitButton').click(function(e) {
            e.preventDefault();
            // alert(1);
            var text = $('#text').val();
            console.log(text)
            var id = $('#id').val();
            $.ajax({
                type: "post",
                // url: '/chat/' + id,
                url: '/chat',
                data: {
                    text: text,
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    console.log(data);
                    // $('#msgdisplay').prepend('<div class="d-flex flex-row justify-content-start mb-4"> <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;"> <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);"> <p class="small mb-0 " id="msgdisplay">' + text + '</p> </div> </div>');
                    $('#msgdisplay').append(
                        '<div class="d-flex flex-row justify-content-end mb-4"> <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">  <p class="small mb-0 " id="msgdisplay">' +
                        text +
                        '</p>  </div> <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;"> </div>'
                    );
                },
            });
        })
    });
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF_TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $('#wishlistBtn').click(function(e) {
            e.preventDefault();
            // alert(1);

            var postId = $('#postid').val();
            // alert(postId);
            $.ajax({

                type: 'GET',
                dataType: 'json',
                url: "{{ route('wishlist') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    postId: postId,
                },

                success: function(result) {


                    if (result.status == 'true') {
                        $('#heart').css('color', '#d02020');
                    } else {
                        $('#heart').css('color', 'gray');
                    }
                    // alert(result.message);
                },
                error: function(result) {}
            });
        })
    });
</script>


</html>
@endsection