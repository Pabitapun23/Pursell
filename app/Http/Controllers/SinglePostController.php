<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        $categoryid = DB::table('posts')->where('id', $id)->first()->category_id;


        // $categoryid = $posts->category_id;
        $relatedpost = Post::with('images', 'user')->where('category_id', $categoryid)->where('id', '!=', $id)->get();

        //$relatedpost = DB::table('posts')->where('category_id', $categoryid)->where('id', '!=', $id)->get();
        //dd($relatedpost);

        // dd($posts);

        return view('singlepost', ['posts' => $posts, 'relatedpost' => $relatedpost]);
    }
}
