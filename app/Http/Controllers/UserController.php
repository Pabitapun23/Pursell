<?php

namespace App\Http\Controllers;

use App\Models\ReportUser;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']); // user cannot access the page without the verification
    }
    function index()
    {
        return view('dashboards.users.index');
    }
    function profile($id)
    {
        // $report = ReportUser::where('user_id', $id)->withCount('user_id');
        return view('dashboards.users.profile', compact("users"));
    }
    function setting()
    {
        return view('dashboards.users.setting');
    }
}
