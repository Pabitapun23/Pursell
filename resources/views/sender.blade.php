<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('d3137dd476270dd48d4e', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('form-submitted', function(data) {
            $('p').append('<p>' + JSON.stringify(data.text) + '</p>');
        });
    </script>
</head>

<body>
    <form id="form-submit" method="post">
        @csrf
        <input type="text" name="text" id="text">
        <input type="submit" id="submitButton">
    </form>
    <p>

    </p>
</body>


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
            // var id = $('#id').val();
            $.ajax({
                type: "post",
                url: '/sender',
                data: {
                    text: text,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    console.log(data);
                },
            });
        })
    });
</script>

</html>