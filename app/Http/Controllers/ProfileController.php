<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Condition;
use App\Models\Image;
use App\Models\Post;
use App\Models\RateAndReview;
use App\Models\ReportUser;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function displayprofile($id)
    {
        $userid = Auth::user()->id;

        $wishdatas = Wishlist::with('post', 'user')->where('user_id', $userid)->get();

        $users = User::find($id);
        $posts = $users->post()->get();

        $myRating = null;
        $myReport = null;
        if (auth()->user()) {
            $myRating = RateAndReview::where('user_id', $users->id)->where('reviewer_id', auth()->user()->id)->first();
            $myReport = ReportUser::where('user_id', $users->id)->where('reporter_id', auth()->user()->id)->first();
        }

        $rating = RateAndReview::where('user_id', $users->id)->get();
        $rating_sum = RateAndReview::where('user_id', $users->id)->sum('rating');

        if ($rating->count() > 0) {
            $rating_value = $rating_sum / $rating->count();
        } else {
            $rating_value = 0;
        }

        $report = ReportUser::where('user_id', $users->id)->get();
        // $report_sum = ReportUser::where('user_id', $users->id)->sum('report');
        // if($report->count() > 0)
        // {
        //     $report_sum = ReportUser::where('user_id', $users->id)->sum('user_id');
        // }

        //dd($report);
        // dd($users);

        return view('profile', compact("users", "posts", 'id', "rating", "report", "rating_value", 'myRating', 'myReport', 'wishdatas'));
    }

    public function deletepost($id)
    {
        $data = Post::find($id);
        $data->delete();
        //dd("delete");

        return back()->with('success', 'Post deleted successfully!');
    }

    function showinForm($id)
    {
        $address = Address::orderBy('city')->get();
        $condition = Condition::all();
        // dd($address);

        $categoris = Category::where('parent_id', 0)->get();
        $data = Post::find($id);
        //dd($data);

        return view('editpost', ["categoris" => $categoris, "address" => $address, "datas" => $data, "condition" => $condition]);
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
    function updatepost(Request $request, $id)
    {

        //dd($request->warranty);
        $post = Post::find($id);
        $post->title = $request->title;

        //$post->category_id = $request->subcategory;
        $post->condition = $request->condition;
        $post->address = $request->address;
        $post->description = $request->description;
        $post->usedfor = $request->usedfor;
        // $post->warranty = $request->warranty;

        if ($request->warranty === "1") {
            $post->warranty = 1;
        } else {
            $post->warranty = 0;
        }

        if ($request->deliverystatus === "1") {
            $post->delivery = 1;
        } else {
            $post->delivery = 0;
        }
        if ($request->negotiablestatus === "1") {
            $post->negotiable = 1;
        } else {
            $post->negotiable = 0;
        }
        $post->price = $request->price;

        $post->expirydate = $request->date;

        $post->user_id  = Auth::user()->id;
        $post->save();
        if ($request->hasFile('images')) {


            foreach ($request->file('images') as $imageFile) {
                $extension = $imageFile->getClientOriginalExtension();
                $fileName = time() . Str::random(5) . '.' . $extension;
                $imageFile->move(public_path('/uploads/post-images/'), $fileName);

                $image = new Image();
                $image->post_id = $post->id;
                $image->image = 'uploads/post-images/' . $fileName;
                $image->save();
            }
        }
        return back()->with('success', 'Your post has been updated');
    }

    function userprofile(Request $request)
    {
        //dd($request->profileimg);
        $id = Auth::user()->id;
        $data = User::find($id);
        $image = $request->profileimg;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->profileimg->move('postimage', $imagename);
        $data->profileimg = $imagename;
        $data->update();
        return redirect()->back();
    }
}
