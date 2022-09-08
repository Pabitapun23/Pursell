<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Address;
use App\Models\Category;
use App\Models\Condition;

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

    public function searchPostDatas(Request $request)
    {
        $posts = Post::with(['user', 'category', 'images'])
            ->where('title', 'like', '%' . $request->search . '%')
            ->where(function ($query) use ($request) {
                if ($request->address) {
                    $query->where('address', $request->address);
                }
            })->get();

        $addresses = Address::all();
        $conditions = Condition::all();
        $categories = Category::all();

        //dd($posts);
        return view('search', ['posts' => $posts, 'addresses' => $addresses, 'conditions' => $conditions, 'categories' => $categories]);
    }


    public function filterPost(Request $request)
    {
        $posts = Post::with(['user', 'category', 'images'])
            ->where(function ($query) use ($request) {
                if ($request->address) {
                    $query->where('address', $request->address);
                }
                if ($request->search) {
                    $query->where('title', 'like', '%' . $request->search . '%');
                }
                if ($request->condition) {
                    $query->where('condition', $request->condition);
                }
                if ($request->category) {
                    $query->where('category_id', $request->category);
                }
                if ($request->negotiable == 'yes') {
                    $query->where('negotiable', 1);
                } elseif ($request->negotiable == 'no') {
                    $query->where('negotiable', 0);
                }

                if ($request->min_price) {
                    $query->where('price', '>=', $request->min_price);
                }

                if ($request->max_price) {
                    $query->where('price', '<=', $request->max_price);
                }
            })
            ->when($request->sort == 'price_desc', function ($query) {
                $query->orderBy('price', 'DESC');
            })
            ->when($request->sort == 'price_asc', function ($query) {
                $query->orderBy('price', 'ASC');
            })
            ->when($request->sort == 'recent', function ($query) {
                $query->orderBy('created_at', 'DESC');
            })
            ->when($request->sort == 'older', function ($query) {
                $query->orderBy('created_at', 'ASC');
            })
            ->get();

        $addresses = Address::all();
        $conditions = Condition::all();
        $categories = Category::all();

        return view('search', ['posts' => $posts, 'addresses' => $addresses, 'conditions' => $conditions, 'categories' => $categories]);
    }
}
