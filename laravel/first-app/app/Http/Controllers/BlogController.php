<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('name', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('blog', [
            "title" => "All Posts" . $title,
            "active" => "blogs",
            //"blogs" => Blog::all(),
            //"blogs" => Blog::latest()->get(),
            //eager loading using `with` resolve N+1 prombles
            "blogs" => Blog::latest()->filter(request(['search', 'category', 'author']))->get(),
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
