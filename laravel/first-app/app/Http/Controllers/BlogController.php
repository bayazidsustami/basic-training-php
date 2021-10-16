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
            "active" => "blogs",
            //"blogs" => Blog::all(),
            //"blogs" => Blog::latest()->get(),
            //eager loading using `with` resolve N+1 prombles
            "blogs" => Blog::latest()->get(),
        ]);
    }

    public function showDetail(Blog $post)
    {
        return view('blog_detail', [
            "title" => "Details Blog",
            "active" => "blogs",
            "post" => $post,
        ]);
    }
}
