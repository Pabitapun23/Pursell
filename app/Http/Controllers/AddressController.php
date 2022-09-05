<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Address;

class AddressController extends Controller
{
    public function location(Request $request)
    {
        $posts = Post::all();
        $addresses = (Address::all() != null) ?? [];

        return view('welcome', compact('addresses', 'posts'));
    }
}
