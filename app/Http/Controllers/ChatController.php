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
        //dd($id);


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
        return view('chatdisplay', ['chats' => $chat]);
    }

    public function chat(Request $request)
    {
        //dd($request->all());

        $postid = $request->id;
        $post =  DB::table('posts')->where('id', $postid)->first();
        $ownerid = DB::table('users')->where('id', $post->user_id)->first()->id;
        $userid = Auth::user()->id;
        $text = $request->text;

        if ($ownerid != $userid) {
            $recieverId = $ownerid;
        } else {
            $recieverId = DB::table('chats')->where('reciever_id', $ownerid)
                ->where('sender_id', '!=', $ownerid)
                ->first()->sender_id;
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
}
