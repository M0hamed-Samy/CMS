<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // Display all blogs
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        return view('admin.blogs.index', compact('blogs'));
    }

    // Show form to create new blog
    public function create()
    {
        return view('admin.blogs.create');
    }

    // Store new blog
   public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required',
        'content' => 'required',
        'brief' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'author_name' => 'required',
    ]);

    $imageFields = ['image', 'image1', 'image2', 'image3', 'image4', 'image5'];

    foreach ($imageFields as $field) {
        if ($request->hasFile($field)) {
            $validated[$field] = $request->file($field)->store('blogs', 'public');
        }
    }

    Blog::create($validated);

    return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
}

    // Show single blog
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    // Show form to edit blog
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    // Update blog
    public function update(Request $request, Blog $blog)
{
    $validated = $request->validate([
        'title' => 'nullable',
        'content' => 'nullable',
        'brief' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'image5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'author_name' => 'nullable',
    ]);

    $imageFields = ['image', 'image1', 'image2', 'image3', 'image4', 'image5'];

    foreach ($imageFields as $field) {
        if ($request->hasFile($field)) {
            // Delete the old image if exists
            if ($blog->$field) {
                Storage::disk('public')->delete($blog->$field);
            }

            // Store new image
            $validated[$field] = $request->file($field)->store('blogs', 'public');
        } else {
            // Keep old image if no new one is uploaded
            $validated[$field] = $blog->$field;
        }
    }

    $blog->update($validated);

    return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
}


    // Delete blog
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
