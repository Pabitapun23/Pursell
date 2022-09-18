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

            $('.message-recieved').css('display', 'block');
            $('#msgdisplay').append(
                '<div class="d-flex flex-row justify-content-start mb-4"> <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;"> <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);"> <p class="small mb-0 " id="msgdisplay">' +
                data.text + '</p> </div> </div>');

        });
    </script>


</head>

<body>

    {{-- Chat Display --}}
    <div class="chat-container" style="overflow: hidden;">
        <div class="row mt-2 mb-3 justify-content-center">
            <div class="col-lg-5 col-md-8 col-12">
                <div class="card shadow" id="chat1" style="border-radius: 15px;">
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id" value="3">

                        <div class=" card-body" id="msgdisplay" style="position: relative; height: 400px;overflow:scroll;overflow-x: hidden;">

                            @foreach($chats as $chat)
                            @if($chat->sender_id == Auth::user()->id)
                            <div class="d-flex flex-row justify-content-end mb-4">
                                <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                                    <p class="small mb-0 ">
                                        {{$chat->message}}
                                    </p>
                                </div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
                            </div>
                            @else
                            <div class="d-flex flex-row justify-content-start mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
                                <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                                    <p class="small mb-0 ">
                                        {{$chat->message}}
                                    </p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>

                        <div class="card-footer row text-muted d-flex justify-content-start align-items-center p-3">
                            <div class="col-2">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp" alt="avatar 3" style="width: 45px; height: 100%;">
                            </div>
                            <div class="col-lg-8 col-7 ps-1 pe-0">
                                <input type="text" class="form-control form-control-lg" name="text" id="text" placeholder="Type message">
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-outline-info m-0" id="submitButton">Send</button>
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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

</body>

</html>
@endsection