<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Condition;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']); // user cannot access the page without the verification
    }
    public function index(Request $request)
    {
        $address = Address::orderBy('city')->get();
        $condition = Condition::all();
        // dd($address);

        $categoris = Category::where('parent_id', 0)->get();

        return view('addpost', ["categoris" => $categoris, "address" => $address, "condition" => $condition]);
        // return view('category', ["categoris" => $categoris]);
    }

    public function subCat(Request $request)
    {

        $parent_id = $request->cat_id;


        $subcategories = Category::where('id', $parent_id)
            ->with('subcategories')
            ->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }


    public function addpost(Request $request)
    {
        dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            //'images' => 'required',
            // 'category' => 'required',
            'subcategory' => 'required',
            'condition' => 'required',
            'address' => 'required',
            'description' => 'required',

            'usedfor' => 'required|string|max:255',

            'price' => 'required|numeric|min:10',
            'date' => 'required|date_format:Y-m-d'


        ]);

        //dd($request->all());
        $post = new Post();

        $post->title = $request->title;

        $post->category_id = $request->subcategory;
        $post->condition = $request->condition;
        $post->address = $request->address;
        $post->description = $request->description;
        $post->usedfor = $request->usedfor;
        // $post->warranty = $request->warranty;

        if ($request->warranty == "on") {
            $post->warranty = 1;
        } else {
            $post->warranty = 0;
        }

        if ($request->deliverystatus == "on") {
            $post->delivery = 1;
        } else {
            $post->delivery = 0;
        }
        if ($request->negotiablestatus == "on") {
            $post->negotiable = 1;
        } else {
            $post->negotiable = 0;
        }
        $post->price = $request->price;

        $post->expirydate = $request->date;

        $post->user_id  = Auth::user()->id;

        if ($request->hasFile('images')) {
            $post->save();

            foreach ($request->file('images') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $fileName = time() . Str::random(5) . '.' . $extension;
                $imageFile->move(public_path('/uploads/post-images/'), $fileName);

                $image = new Image();
                $image->post_id = $post->id;
                $image->image = 'uploads/post-images/' . $fileName;
                $image->save();
            }
            return back()->with('success', 'Your post has been uploaded');
        } else {
            return back()->with('fail', "Unable to add your post please fill all the field and try again");
        }
    }
}
