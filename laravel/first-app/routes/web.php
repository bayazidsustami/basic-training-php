<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

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
    //view('welcome');
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "bays",
        "email" => "bay@mail.com",
        "image" => "photo_2.jpg"
    ]);
});



Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blogs",
        "blogs" => Blog::all(),
    ]);
});

Route::get('blogs/{slug}', function ($slug) {
    return view('blog_detail', [
        "title" => "Details Blog",
        "post" => Blog::find($slug),
    ]);
});
