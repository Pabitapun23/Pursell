<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function test(Request $request, $id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        //dd($post);
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = Auth::user()->id;
        $comment->post()->associate($post);
        //dd($comment->user);
        $comment->save();
        return response()->json($comment);

        // dd($comment);
    }
}