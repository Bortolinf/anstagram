<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\PostController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Redirect()->route('login');   
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/search/{nick_name}', [SearchController::class,'search'])->name('search');

    //posts
    Route::post('/create-post', [PostController::class,'createPost'])->name('create-post');
    Route::get('/list-posts', [PostController::class,'getPosts'])->name('list-posts');
    
});




