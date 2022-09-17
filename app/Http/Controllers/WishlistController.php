<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function index(Request $req)
    {
        // dd($req->all());

        $userid = Auth::user()->id;

        $check = DB::table('wishlists')->where('user_id', $userid)->where('post_id', $req->postId)->first();
        if ($check) {
            DB::table('wishlists')->where('user_id', $userid)->where('post_id', $req->postId)->delete();
            $status = "false";
            $message = "Deleted from wishlist!!";
        } else {

            Wishlist::Create(["user_id" => $userid, "post_id" => $req->postId, "wished" => '1']);
            $status = "true";
            $message = "Added to wishlist!!";
        }
        // \Session::flash('success', $message);
        $data = [
            'status' => $status,
            'message' => $message,
        ];
        return $data;
    }
}
