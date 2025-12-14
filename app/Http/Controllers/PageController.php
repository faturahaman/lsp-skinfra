<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Article;
use App\Models\Gallery;


class PageController extends Controller
{
    public function home() {
        $profiles = Profile::first();
        $services = Service::latest()->take(3)->get();
        $galeries = Gallery::latest()->take(6)->get();
        $articles = Article::latest()->take(3)->get();
        return view('pages.home', compact('profiles', 'services', 'articles', 'galeries'));
    }


}
