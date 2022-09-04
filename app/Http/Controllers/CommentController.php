<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class CommentController extends Controller
{
    public function addComment(Request $request, $id)
    {
        //dd($request->comment);
        // $result = Comment::create([
        //     'post_id' => $id,
        //     'comment' => $request->comment,
        //     'user_id' => Auth::user()->id
        // ]);

        // return response()->json([


        //     'status' => true,
        //     'html' => "$result",
        //     'message' => 'Comment added successfully',
        // ]);

        $post = Post::where('id', $id)->firstOrFail();
        //dd($post);
        $comments = new Comment();
        $comments->comment = $request->comment;
        $comments->user_id = Auth::user()->id;
        $comments->post()->associate($post);

        $comments->save();
        //$comments->user;

        $user_name = Auth::user()->name;
        $time = $comments->created_at->diffForHumans();
        return response()->json(["name" => [$user_name], "date" => [$time], "success" => "comment added successfully"]);

        //return response(["data" => $user_name]);
    }
}
