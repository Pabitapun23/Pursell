<?php

namespace App\Http\Controllers;

use App\Models\RateAndReview;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RateAndReviewController extends Controller
{
    public function addRating(Request $request, $id)
    {
        $rules = [
            'rating' => 'required',
        ];

        $this->validate($request, $rules);

        // if (auth()->user()->id != $id && auth()->user()->id == "") {
        //     return view('auth.login')->with('status', "You cannot rate the user");
        // }

        $rating = RateAndReview::where('reviewer_id', Auth::id())->where('user_id', $id)->first();

        if (!$rating) {
            $rating = new RateAndReview();
            $rating->user_id = $id;
            $rating->reviewer_id = auth()->user()->id;

            $rating->rating = $request->rating;
            $rating->review = $request->review;
            $rating->save();

            return redirect()->back()->with('status', "You rated the user");
        } else {
            return redirect()->back()->with('status', "You didn't rate the user");
        }
    }
}
