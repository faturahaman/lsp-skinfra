<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index() {
        $profiles = Profile::first();
        return view('pages.profile', compact('profiles'));
    }
}
