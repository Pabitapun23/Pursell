<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Address;
use App\Models\Condition;

class ConditionController extends Controller
{
    public function condition(Request $request)
    {
        $posts = Post::all();
        $conditions = (Condition::all() != null) ?? [];

        return view('welcome', compact('conditions', 'posts'));
    }
}
