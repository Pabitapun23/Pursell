@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Pursell Search Result Page</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!-- CSS Link -->
        <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    </head>

    <body>


        <!-- Search Result div -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12 mx-2 shadow rounded">
                    <h4 class="px-4 py-2" style="font-family: Arial,sans-serif;">Search Results for:
                        {{ app('request')->get('search') }}
                    </h4>
                    <hr>
                    @if ($posts != null && count($posts) > 0)
                        @foreach ($posts as $data)
                            <div class="col-lg-12 col-sm-12 mx-1 me-2">
                                <a href="{{ url('singlepost/' . $data->id) }}" style="text-decoration: none; color:black;">
                                    <div class="card" id="post">
                                        <div class="card-horizontal">
                                            <div class="row">
                                                <div class="col-xl-3 ">
                                                    @foreach ($data->images->take(1) as $img)
                                                        <div class="img-square-wrapper">
                                                            <img class="responsive" src="{{ asset($img->image) }}"
                                                                name="img" alt="Card image cap">
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <div class="col-xl-9">
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{ $data->title }}</h4>
                                                        <p class="card-text">{{ $data->description }}
                                                        </p>
                                                        <ul class="list-group list-group-horizontal ">
                                                            <li class="list-group-item border-0"
                                                                style="font-weight: bolder;"><i
                                                                    class="fa-solid fa-money-bill-wave" name="price"
                                                                    style="margin-right: 4px;"></i>Price
                                                                : {{ $data->price }}</li>

                                                            <li class="list-group-item border-0" name="condition"
                                                                style="font-weight: bolder;">
                                                                Condition:
                                                                {{ $data->condition }}</li>
                                                            <li class="list-group-item border-0" name="negotiable"
                                                                style="font-weight: bolder;">
                                                                Negotiable:
                                                                @if ($data->negotiable == 0)
                                                                    <p>No</p>
                                                                @else
                                                                    <p>Yes</p>
                                                                @endif
                                                            </li>
                                                        </ul>
                                                        <hr>
                                                        <ul class="list-group list-group-horizontal ">
                                                            <li class="list-group-item border-0" name="username"
                                                                style="color: grey;"><i class="fa-regular fa-user"
                                                                    style="margin-right: 8px;"></i>{{ $data->user->name }}
                                                            </li>
                                                            <li class="list-group-item border-0" name="address"
                                                                style="color: grey;"><i class="fa-solid fa-location-dot"
                                                                    style="margin-right: 8px;"></i>{{ $data->address }}</li>
                                                            <li class="list-group-item border-0" style="color: grey;">
                                                                <button class="bookmark"><i
                                                                        class="fa-solid fa-bookmark"></i></button>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div></a>
                        @endforeach
                    @else
                        <div class="col-lg-6 col-12 mx-2">
                            <div class="card">
                                <div class="card-horizontal">
                                    <div class="row">
                                        {{-- <h4 class="px-4" style="font-family: Arial,sans-serif;">Search Results for :
                                            {{-- {{ $data->search }} --}}
                                        {{-- </h4> --}}
                                        <p class="px-4">Search result not found!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                {{-- Filter section div --}}
                <div class="col-lg-5 col-12 mx-3">
                    <form action="{{ route('filter') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <input name="search" hidden value={{ app('request')->get('search') }} />
                            <div id="formdiv">
                                <div class="filter">
                                    <p>Filter the Search</p>
                                </div>
                                <p style="margin-left: 25px;margin-bottom:5px;font-family: Algeria; ">
                                    Sort Ads By</p>
                                <select class="form-select" name="sort"
                                    style="height: 28px;padding-bottom:
                                        3px;margin-bottom: 10px;font-size:
                                        12px;width: 90%; margin-left:25px;
                                        color: grey;">

                                    <option value="">Sort Ads</option>
                                    {{-- <a href="{{ URL::current() }}" class="sort-font">
                                        <option>All</option>
                                    </a>
                                    <a href="{{ URL::current() . '?sort=price_asc' }}" class="sort-font">
                                        <option>Low to High (Price)</option>
                                    </a>
                                    <a href="{{ URL::current() . '?sort=price_desc' }}" class="sort-font">
                                        <option>High to Low (Price)</option>
                                    </a>
                                    <a href="{{ URL::current() . '?sort=newest' }}" class="sort-font">
                                        <option>Recent
                                        </option>
                                    </a>
                                    <a href="{{ URL::current() . '?sort=oldest' }}" class="sort-font">
                                        <option>Older</option>
                                    </a> --}}

                                    <option value="">All</option>
                                    <option value="price_asc">Low to High (Price)</option>
                                    <option value="price_desc">High to Low (Price)</option>
                                    <option value="recent">Recent</option>
                                    <option value="older">Older</option>

                                </select>

                                <p style="margin-left: 25px;margin-bottom:5px;font-family: Algeria; ">Condition</p>
                                <select class="form-select" name="condition"
                                    style="height: 28px;padding-bottom:3px;margin-bottom: 10px;font-size:12px;width: 90%; margin-left:25px;color: grey;">
                                    <option value="">Select Condition</option>
                                    @if ($conditions != null && count($conditions) > 0)
                                        @foreach ($conditions as $cond)
                                            <option value="{{ $cond->condition }}">{{ $cond->condition }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <p style="margin-left: 25px;margin-bottom:5px;font-family: Algeria; ">Location</p>
                                <select class="form-select" name="address"
                                    style="height: 28px;padding-bottom:
                                        3px;margin-bottom: 10px;font-size:
                                        12px;width: 90%; margin-left:25px;
                                        color: grey;"
                                    id="address">
                                    <option value="">Select Location</option>

                                    @if ($addresses != null && count($addresses) > 0)
                                        @foreach ($addresses as $address)
                                            <option value="{{ $address->city }}">{{ $address->city }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <p style="margin-left: 25px;margin-bottom:5px;font-family: Algeria; ">
                                    Price Range</p>
                                <div class="row" name="price">
                                    <div class="col">
                                        <input type="number" min="1" name="min_price"
                                            message="No
                                                products for free!"
                                            class="form-control" name="minprice"
                                            style="height:
                                                28px;padding-bottom:
                                                3px;margin-bottom:
                                                10px;font-size: 12px;width: 90%;
                                                margin-left:25px; color: grey;"
                                            placeholder="Min" aria-label="First name">
                                    </div>
                                    <div class="col">
                                        <input type="Number" min="1" name="max_price"
                                            message="No
                                                products for free!"
                                            class="form-control" name="maxprice"
                                            style="height:
                                                28px;padding-bottom:
                                                3px;margin-bottom:
                                                10px;font-size: 12px;width: 90%;
                                                color: grey;"
                                            placeholder="Max" aria-label="Last name">
                                    </div>
                                </div>
                                <p style="margin-left: 25px;margin-bottom:5px;font-family: Algeria; ">
                                    Negotiable</p>
                                <select class="form-select" name="negotiable"
                                    style="height: 28px;padding-bottom:
                                        3px;margin-bottom: 10px;font-size:
                                        12px;width: 90%; margin-left:25px;
                                        color: grey;">
                                    <option value="">Negotiable</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>

                                </select>

                                <div class="row" style="padding-top:24px;">
                                    <div class="clear">
                                        <button type="submit" class="bottombutton" style="font-family:Algeria;"
                                            id="filterbtn">Filter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="footer-basic">
            <footer>
                {{-- <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                            class="icon ion-social-snapchat"></i></a><a href="#"><i
                            class="icon ion-social-twitter"></i></a><a href="#"><i
                            class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Home</a></li>
                    <li class="list-inline-item"><a href="#">Services</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Contact</a></li>
                    <li class="list-inline-item"><a href="#">Something</a></li>
                    <li class="list-inline-item"><a href="#">Bla Bla</a></li>
                </ul> --}}
                <p class="copyright">PURSELL © 2021</p>
            </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>

        <script src="https://kit.fontawesome.com/ab068f72b1.js" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
                $("#address").on('change', function() {
                    var location = $(this).val();

                    //console.log(location);
                    $.ajax({
                        url: "filter",
                        type: "GET",
                        data: {
                            'address': location,
                        },
                        success: function(data) {
                            $("#post").html(data);
                        }
                    });

                });
            });
        </script>

    </body>

    </html>
@endsection
