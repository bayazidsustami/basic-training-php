<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "All Posts",
            //"blogs" => Blog::all(),
            //"blogs" => Blog::latest()->get(),
            "blogs" => Blog::with(['author', 'category'])->latest()->get(), //eager loading using `with` resolve N+1 prombles
        ]);
    }

    public function showDetail(Blog $post)
    {
        return view('blog_detail', [
            "title" => "Details Blog",
            "post" => $post,
        ]);
    }
}
