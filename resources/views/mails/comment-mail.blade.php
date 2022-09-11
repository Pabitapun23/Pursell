<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Comment</title>
</head>

<body>
    <p> Hi {{$data['owner']}},</p>
    <p>{{$data['commented_by']}} has commented on your ad.</p>
    <p>AD ID: {{ $data['post_id']}} </p>
    <p>AD TITLE:{{ $data['title']}} </p>
    <p>CLick the button below for the visiting your ad</p>

    <a href="{{ route('singlepost', $data['post_id']) }}">
        <button type="button" class="btn " style="background-color:red; color:white; padding: 10px; padding-left:15px; padding-right:15px; border:red; border-radius:25px;">Click Here</button>

    </a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>