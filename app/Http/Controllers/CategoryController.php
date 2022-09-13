<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function index(Request $request)
    // {

    //     $categoris = Category::where('parent_id', 0)->get();

    //     return view('addpost', ["categoris" => $categoris]);
    //     // return view('category', ["categoris" => $categoris]);
    // }

    // public function subCat(Request $request)
    // {

    //     $parent_id = $request->cat_id;

    //     $subcategories = Category::where('id', $parent_id)
    //         ->with('subcategories')
    //         ->get();
    //     return response()->json([
    //         'subcategories' => $subcategories
    //     ]);
    // }

    // public function index()
    // {
    //     $categories = Category::where('parent_id', 0)->get();

    //     $subcategories = Category::where('parent_id', '!=', 0)->get();
    //     return view('test', compact("categories", "subcategories"));
    // }

    public function index($catname)
    {

        $categoryitem = Category::where('name', '=', $catname)->get();
        //$products = $categoryitem->posts()->orderBy('created_at')->paginate(12);
        return view('categorydisplaypost', ['categoryitem' => $categoryitem]);
        //dd($categoryitem);
    }
}
