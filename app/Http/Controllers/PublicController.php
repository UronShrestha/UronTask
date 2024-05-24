<?php

namespace App\Http\Controllers;
use App\Models\Organization;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index()
    {
        $organizations = Organization::with('software')->get();
        return view('public.organizations', compact('organizations'));
    }
}
