<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class SearchController extends Controller
{
    public function index()
    {
        $profiles = Profile::all()->sortBy('username');

        // dd($profiles);

        return view('search.index', compact('profiles'));
    }
}
