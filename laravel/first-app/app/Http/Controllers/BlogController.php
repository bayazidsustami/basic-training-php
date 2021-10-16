<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Blogs",
            //"blogs" => Blog::all(),
            "blogs" => Blog::latest()->get(),
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
