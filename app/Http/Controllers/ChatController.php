<?php

namespace App\Http\Controllers;

use App\Events\Message;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index($id)
    {
        // dd($id);


        $chat = DB::table('chats')
            ->where(function ($q) {
                $q->where('chats.sender_id', Auth::user()->id)->orWhere('chats.reciever_id', Auth::user()->id);
            })
            ->where(function ($q) use ($id) {
                $q->where('chats.sender_id', $id)
                    ->orWhere('chats.reciever_id', $id);
            })
            ->get();
        // dd($chat);
        return view('chatdisplay', ['chats' => $chat, 'user_id' => $id]);
    }

    public function chat(Request $request)
    {
        // dd($request->all());

        $postid = $request->id;
        // $post =  DB::table('posts')->where('id', $postid)->first();
        // $ownerid = DB::table('users')->where('id', $post->user_id)->first()->id;

        $ownerid = $request->userId;
        $userid = Auth::user()->id;
        $text = $request->text;

        if ($ownerid != $userid) {
            $recieverId = $ownerid;
        } else {
            $recieverId = $request->userId;
        }

        $chats = new Chat();
        $chats->post_id = $postid;
        $chats->owner_id = $ownerid;
        $chats->sender_id = Auth::User()->id;
        $chats->reciever_id = $recieverId;
        $chats->message = $text;
        $chats->save();

        event(new Message($text, $recieverId));
    }

    public function chatFetch(Request $request)
    {
        $postId = $request->postId;
        $owner = DB::table('posts')->where('id', $postId)->first();
        $ownerId = $owner->user_id;
        $chat = DB::table('chats')
            ->where(function ($q) {
                $q->where('chats.sender_id', Auth::user()->id)->orWhere('chats.reciever_id', Auth::user()->id);
            })
            ->where(function ($q) use ($ownerId) {
                $q->where('chats.sender_id', $ownerId)
                    ->orWhere('chats.reciever_id', $ownerId);
            })
            ->get();
        // $chats = $chat->toArray();


        // dd($chat);

        // return view('singlepost', ['chats' => $chat]);
        return $chat;
    }
}
