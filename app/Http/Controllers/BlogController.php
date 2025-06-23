<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
     // Display all blogs
    public function index()
    {
        $blogs = Blog::latest()->paginate(6);
        $latestBlogs = Blog::latest()->take(4)->get();
        return view('blogs.index', compact('blogs','latestBlogs'));
    }


    // Show single blog
    public function show(Blog $blog)
    {
        return view('blogs.show',  ['blog' => $blog]);
    }


}
