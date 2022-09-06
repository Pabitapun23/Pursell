<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Address;
use App\Models\Organization;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    // display post in the homepage
    function displaypost()
    {
        $categories = Category::where('parent_id', 0)->get();

        $subcategories = Category::where('parent_id', '!=', 0)->get();

        $posts = Post::with('images')->get()->sortDesc();

        $organizations  = Organization::all();
        // $images =  $posts[0]->images->image;

        // dd($images);

        $addresses = Address::all();

        return view('welcome', compact("categories", "subcategories", "addresses", "organizations", "posts"));
    }
    // public function index()
    // {

    //     return view('welcome', compact("categories", "subcategories", "posts"));
    // }


}
