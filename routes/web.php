<?php

use App\Http\Controllers\Postscontroller;
use App\Http\Controllers\CommentsController;
use App\Models\Post;
// use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


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
    return view('welcome');
});


Route::get('/users/{name}', function($name){
    return view('userpage', compact('name'));
});

Route::view('/aboutus', 'about');

// Route::view('/posts/create', 'posts.create');

Route::resource('posts', Postscontroller::class);



Route::post('/posts/{post}/comments', [CommentsController::class, 'store']);