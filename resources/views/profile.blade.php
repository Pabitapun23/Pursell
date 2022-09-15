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
        <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

    </head>

    <body>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>

            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </symbol>
        </svg> --}}

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </symbol>
        </svg>


        <!-- Profile div -->

        {{-- Rating and Review Pop-up modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('user-rate', ['id' => $id]) }}" method="POST">
                        @csrf

                        <input name="user_id" hidden value={{ app('request')->get('user_id') }} />
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ratings and Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="rating-css">
                                <input type="radio" value="1" name="rating" checked id="rating1">
                                <label for="rating1" class="fa fa-star"></label>
                                <input type="radio" value="2" name="rating" id="rating2">
                                <label for="rating2" class="fa fa-star"></label>
                                <input type="radio" value="3" name="rating" id="rating3">
                                <label for="rating3" class="fa fa-star"></label>
                                <input type="radio" value="4" name="rating" id="rating4">
                                <label for="rating4" class="fa fa-star"></label>
                                <input type="radio" value="5" name="rating" id="rating5">
                                <label for="rating5" class="fa fa-star"></label>
                            </div>
                            <div class="review mb-3 my-1">
                                <label for="message-text" class="col-form-label"
                                    style="font-family: Arial, Helvetica, sans-serif">Review:</label>
                                <textarea class="form-control" name="review" id="message-text"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Report User --}}
        <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('reportUser', ['id' => $id]) }}" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="user_id" value="{{ $users->id }}"> --}}
                        <input name="user_id" hidden value={{ app('request')->get('user_id') }} />
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Report the user</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="report mb-3 my-1">
                                {{-- <label for="message-text" class="col-form-label"
                                    style="font-family: Arial, Helvetica, sans-serif font-size:60px;">Report
                                    Description:</label> --}}
                                <h4 class="modal-title" id="exampleModalLabel" style="font-size:20px;">Report
                                    Description:</h4>
                                <p style="color: gray; font-size:10px;">What's the reason of your report?</p>
                                <textarea class="form-control" name="description" id="message-text"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="profile-container mt-0">
            @if (session('status'))
                <div class="alert alert-success text-white" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row my-3 mx-5 mb-5 justify-content-around">
                <div class="col-lg-5 col-12">
                    <div
                        class="profile-content shadow ms-3 mt-3 px-5 pb-5 pt-3 ps-2 bg-body rounded justify-content-center">
                        <div>
                            @if ($users->profileimg == null)
                                <img src="{{ URL::asset('/images/user.png') }}" alt="avatar"
                                    class="rounded-circle ms-3" style="width:100px;height:100px;object-fit:cover;">
                            @else
                                <img src="/postimage/{{ $users->profileimg }}" alt="avatar"
                                    class="rounded-circle ms-4 mt-3" style="width:80px;height:80px;object-fit:cover;">
                            @endif
                        </div>

                        {{-- @if (\Auth::user() && $posts->user->id === \Auth::user()->id) --}}
                        @if (auth()->user()->id == $id)
                            <button type="button" class="btn editbutton ms-3 mt-2" data-bs-toggle="modal"
                                data-bs-target="#addModal"
                                style="background-color: #f38d09; color:white; font-family:Roboto;">
                                Edit Image
                            </button>
                        @endif

                        <!-- Modal -->
                        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addModalLabel">Profile Picture </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('profileimg') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div>
                                                <p><b>Add Profile Picture </b></p>
                                                <input class="form-control" type="file" id="profileFile"
                                                    name="profileimg">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger w">Update Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <hr class="ms-3">
                        <div class="d-grid gap-2 d-md-block ps-4 ms-2">
                            <h4 class="p-0">{{ $users->name }}</h4>
                        </div>
                        <div class="d-grid gap-2 d-md-block ps-4 ms-2">
                            <p class="p-0"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="#d02020" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg> &nbsp; <span style="color: gray;">{{ $users->phoneno }}</span></p>
                        </div>
                        <div class="d-grid gap-2 d-md-block ps-4 ms-2">
                            <p class="p-0">Member since: <span
                                    style="color: gray;">{{ $users->created_at->diffForHumans() }}</span></p>
                        </div>

                        <div class="d-grid gap-2 d-md-block ps-4 ms-2">
                            @php $ratenum = number_format($rating_value) @endphp
                            <div class="rating p-0">
                                @for ($i = 1; $i <= $ratenum; $i++)
                                    <i class="bi bi-star-fill checked"></i>
                                @endfor
                                @for ($j = $ratenum + 1; $j <= 5; $j++)
                                    <i class="bi bi-star-fill" style="color: lightgray;"></i>
                                @endfor
                                &nbsp; {{ number_format($rating_value, 2) }} &nbsp;
                                <span style="color: gray">
                                    @if ($rating->count() < 0)
                                        No Ratings
                                    @else
                                        ( {{ $rating->count() }} )
                                        Reviews
                                    @endif
                                </span>
                            </div>
                        </div>

                        {{-- Rating and Review Pop-up modal button --}}
                        @if (!auth()->user() || auth()->user()->id != $id)
                            <div class="d-grid gap-2 d-md-block ps-4 ms-2 pt-3 mt-2">
                                @if (!auth()->user())
                                    <a href="http://127.0.0.1:8000/login"><button type="button" class="btn"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                                            style="border: 2px solid gray; color:gray; margin-right:5px;">Review
                                            the
                                            User</button></a>
                                    <a href="http://127.0.0.1:8000/login"><button type="button" class="btn"
                                            data-bs-toggle="modal" data-bs-target="#reportModal"
                                            style="border: 2px solid gray; color:gray; margin-right:5px;">Report
                                            the User</button></a>
                                @else
                                    <button type="button" class="btn" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" @if ($myRating) disabled @endif
                                        style="border: 2px solid gray; color:gray; margin-right:5px;">Review the
                                        User</button>
                                    <button type="button" class="btn" data-bs-toggle="modal"
                                        data-bs-target="#reportModal" @if ($myReport) disabled @endif
                                        style="border: 2px solid gray; color:gray; margin-left:5px;">Report the
                                        User</button>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-lg-7 col-12">
                    <div class="content shadow p-3 ms-3 mt-3 me-2 bg-body rounded justify-content-center">
                        <div class="tab row">
                            <div class="col-lg-4 col-4">
                                <button class="tablinks px-3" onclick="openCity(event, 'Ad_post')">
                                    <h4> Ad Post </h4>
                                </button>
                            </div>
                            <div class="col-lg-4 col-4">
                                <button class="tablinks" onclick="openCity(event, 'Saved')">
                                    <h4>Saved List </h4>
                                </button>
                            </div>
                            <hr class="mx-3" style="width: 90%;">
                        </div>

                        <div class="tabcontent" id="Ad_post">
                            <div class="row justify-content-around" style="margin-top:10px ;">
                                <div class="col-4 rounded bg-light text-center px-4 py-3">
                                    <p style="margin-bottom: 3px; color:gray;">Total Ads ({{ $posts->count() }})</p>
                                </div>
                                <div class="col-4 rounded bg-light text-center px-4 py-3">
                                    {{-- <p>Reported (0)</p> --}}

                                    <span style="color: gray; padding-bottom:2px;">
                                        @if ($report->count() < 0)
                                            Reported (0)
                                        @else
                                            Reported
                                            ( {{ $report->count() }} )
                                        @endif
                                    </span>
                                </div>
                            </div>

                            <div class="row justify-content-center mx-3 my-3">
                                <div class="col-12 rounded bg-light px-3 py-2" style="margin-top:20px ;">

                                    <div class="row">
                                        @if (Session::get('success'))
                                            <div class="alert alert-danger alert-dismissible d-flex" role="alert">
                                                <svg class="bi flex-shrink-0 me-2" width="24" height="24"
                                                    role="img" aria-label="Danger:">
                                                    <use xlink:href="#exclamation-triangle-fill" />
                                                </svg>
                                                <div>
                                                    {{ Session::get('success') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        @endif

                                        @foreach ($posts as $post)
                                            @foreach ($post->images->take(1) as $img)
                                                <div class="col-lg-4 col-12 justify-content-center">
                                                    <div class="card m-1">
                                                        <a href="{{ route('singlepost', $post->id) }}"
                                                            style="color:#D02020; text-decoration:none;">
                                                            <img class="card-img-top " src="{{ asset($img->image) }}"
                                                                alt="" style="object-fit:cover; height:15vh;">
                                                            <div class="card-body">

                                                                <h5 class="card-title">{{ $post->title }}</h5>

                                                                <p class="card-text"
                                                                    style="font-style:italic; color:gray; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                                                                    {{ $post->condition }} <br> Used For
                                                                    {{ $post->usedfor }}
                                                                </p>

                                                                <p class="card-text" style="color:black;">Rs.
                                                                    {{ $post->price }}</p>

                                                                @if (\Auth::user() && $post->user->id === \Auth::user()->id)
                                                                    <a href="{{ route('editpost', $post->id) }}"
                                                                        style="text-decoration: none;">
                                                                        <button type="button"
                                                                            class="btn btn-success p-2 py-1 mt-1"
                                                                            style="font-size: 10px;">Edit</button>
                                                                    </a>
                                                                    &nbsp;
                                                                    <a href="{{ route('deletepost', $post->id) }}"
                                                                        style="text-decoration: none;">
                                                                        <button type="button"
                                                                            class="btn btn-danger p-2 py-1 mt-1"
                                                                            style="font-size: 10px;">Delete</button>
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </a>

                                                    </div>
                                                </div>
                                            @endforeach
                                        @endforeach
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
                                                <img src="Images/profile.PNG" class="card-img-top" alt="..."
                                                    style="height:15vh;">
                                                <div class="card-body" style="height: 15vh;">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">Some quick example text to
                                                        build</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12 justify-content-flex-center">
                                            <div class="card m-1">
                                                <img src="Images/profile.PNG" class="card-img-top" alt="..."
                                                    style="height: 15vh;">
                                                <div class="card-body" style="height: 15vh;">
                                                    <h5 class="card-title">Card title lamooooooooooooo</h5>
                                                    <p class="card-text">Some quick example text to
                                                        build</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12 justify-content-flex-center">
                                            <div class="card m-1">
                                                <img src="Images/profile.PNG" class="card-img-top" alt="..."
                                                    style="height: 15vh;">
                                                <div class="card-body" style="height: 15vh;">
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
            <!-- footer -->
            <footer>
                <div class="footer-basic">
                    <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a
                            href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i
                                class="icon ion-social-twitter"></i></a><a href="#"><i
                                class="icon ion-social-facebook"></i></a></div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">Home</a></li>
                        <li class="list-inline-item"><a href="#">Services</a></li>
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                        <li class="list-inline-item"><a href="#">Something</a></li>

                    </ul>
                    <p class="copyright">PURSELL © 2021</p>
                </div>
            </footer>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>

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
