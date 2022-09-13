<?php

namespace App\Http\Controllers;

use App\Models\ReportUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportUserController extends Controller
{
    public function reportUser(Request $request, $id)
    {
        $report = ReportUser::where('reporter_id', Auth::id())->where('user_id', $id)->first();

        if (!$report) {
            $report = new ReportUser();
            $report->user_id = $id;
            $report->reporter_id = auth()->user()->id;

            $report->description = $request->description;
            $report->save();

            return redirect()->back()->with('status', "You reported the user");
        } else {
            return redirect()->back()->with('status', "You didn't report the user");
        }
    }
}
