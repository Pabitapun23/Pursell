<?php

namespace App\Http\Controllers;

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
    function profile()
    {
        return view('dashboards.users.profile');
    }
    function setting()
    {
        return view('dashboards.users.setting');
    }
}
