<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    public function singlepost($id)


    {
        
        $posts = Post::with('images', 'user')->where('id', $id)->get();

        // dd($posts);

        return view('singlepost', ['posts' => $posts]);
    }
}
