<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationController extends Controller
{
    public function organizationData()
    {
        $organizations  = Organization::all();

        return view('donation')->with('organizations', $organizations);
    }

    public function orgDetail(Request $request)
    {
        $id = $request->id;
        $organizations = Organization::find($id);

        // $organizations = Organization::findOrFail($id);

        //dd($organizations);
        return view('donationview')->with('organizations', $organizations);
    }
}
