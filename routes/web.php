<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
// Route::get('/', function () {
//     return view('pages.home');
// });
use App\Http\Controllers\ServiceController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/services', [ServiceController::class, 'index'])->name('services');


Route::get('/articles', [ArticleController::class, 'index'])->name('articles');


Route::get('/articles/{id}', [ArticleController::class, 'show'])
    ->name('article.detail');
