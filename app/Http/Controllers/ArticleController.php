<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(Request $request) {
        // Mulai query
        $query = Article::latest();

        // Jika ada input pencarian (name="q" atau "search")
        if ($request->has('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%')
                  ->orWhere('konten', 'like', '%' . $request->search . '%');
        }

        // angka 6 atau 9 supaya rapi di grid 3 kolom
        $articles = $query->paginate(6)->withQueryString(); 

        return view('pages.articles', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::where('id', $id)->firstOrFail();
        return view('pages.article-detail', compact('article'));
    }
}