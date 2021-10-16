<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Models\Category;

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



Route::get('/blog', [BlogController::class, 'index']);

Route::get('blogs/{post:slug}', [BlogController::class, 'showDetail']);

Route::get('/categories', function () {
    return view('categories', [
        "title" => "Blog Categories",
        "categories" => Category::all(),
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        "title" => $category->name,
        "blogs" => $category->blogs,
        "category" => $category->name,
    ]);
});
