<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SearchController extends Controller
{
    public $query;
    public $posts;

    public function updateQuery()
    {
        $this->posts = Post::where('title', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    // public function searchPost(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = Post::where('title', 'like', '%' . $request->search . '%')->get();
    //         $output = '';
    //         if (count($data) > 0) {
    //             $output = '<ul class="list-group" style="display:block;position:relative;z-index:1">';
    //             foreach ($data as $row) {
    //                 $output .= '<li class="list-group-item">' . $row->title . '</li>';
    //             }
    //             $output .= '</ul>';
    //         } else {
    //             $output .= '<li class="list-group-item">No data found</li>';  //. is for concatenate
    //         }
    //         return $output;
    //     }
    //     return view('welcome');
    // }

    public function searchPost(Request $request)
    {
        if ($request->ajax()) {
            $data = Post::where('title', 'like', '%' . $request->search . '%')
                ->where(function ($query) use ($request) {
                    if ($request->address) {
                        $query->where('address', $request->address);
                    }
                })
                ->get();
            $output = '';
            if (count($data) > 0) {
                $output = '<ul class="list-group" style="display:block;position:relative;z-index:1">';
                foreach ($data as $row) {
                    $output .= '<a href="/singlepost/' . $row->id . '" class="list-group-item">' . $row->title . '</a>';
                }
                $output .= '</ul>';
            } else {
                $output .= '<li class="list-group-item">No data found</li>';  //. is for concatenate
            }
            return $output;
        }
        return view('welcome');
    }
}
