<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SinglePostController extends Controller
{
    public function singlepost($id)


    {
        $blogKey = 'blog_' . $id;

        // Check if blog session key exists
        // If not, update view_count and create session key
        if (!Session::has($blogKey)) {
            Post::where('id', $id)->increment('reads');
            Session::put($blogKey, 1);
        }
        // Post::find($id)->increment('reads');



        $posts = Post::with('images', 'user')->where('id', $id)->get();


        // dd($posts);

        return view('singlepost', ['posts' => $posts]);
    }
}
