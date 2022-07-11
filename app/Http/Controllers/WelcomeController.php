<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    // display post in the homepage
    function displaypost()
    {


        $posts = Post::with('images')->get()->sortDesc();
        // $images =  $posts[0]->images->image;

        // dd($images);

        return view('welcome', ['posts' => $posts]);
    }
 
}
