<?php

namespace App\Http\Controllers;

use App\Mail\CommentMail;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
        $post = DB::table('posts')->where('id', $id)->first();
        $userEmail = DB::table('users')->where('id', $post->user_id)->first()->email;

        // $post = Post::where('id', $id)->get();
        $comments = new Comment();
        $comments->comment = $request->comment;
        $comments->user_id = Auth::user()->id;
        $comments->post_id = $id;
        $comments->save();

        if (Auth::user()->email != $userEmail) {

            $owner = DB::table('users')->where('id', $post->user_id)->first()->name;
            $commented_by = Auth::user()->name;
            $data = ['owner' => $owner, 'commented_by' => $commented_by, 'post_id' => $id, 'title' => $post->title];

            Mail::to($userEmail)->send(new CommentMail($data));
        }
        //$comments->user;

        $user_name = Auth::user()->name;
        $time = $comments->created_at->diffForHumans();
        return response()->json(["name" => [$user_name], "date" => [$time], "success" => "comment added successfully"]);

        //return response(["data" => $user_name]);
    }
}
