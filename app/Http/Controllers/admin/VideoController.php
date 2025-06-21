<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required',
        'description' => 'nullable',
        'video_type' => 'required|in:file,url',
        'video_path' => $request->video_type == 'file' ? 'nullable|file|mimes:mp4,avi,mov' : 'nullable|string',
        'video_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $videoPath = '';

    // Handle video file upload
    if ($request->video_type == 'file' && $request->hasFile('video_path')) {
        $videoPath = $request->file('video_path')->store('videos', 'public');
    } else {
        $videoPath = $validated['video_path']; // Direct URL
    }

    $imagePath = null;

    // Handle video image upload
    if ($request->hasFile('video_img')) {
        $imagePath = $request->file('video_img')->store('videos', 'public');
    }

    Video::create([
        'title' => $validated['title'],
        'description' => $validated['description'],
        'video_type' => $validated['video_type'],
        'video_path' => $videoPath,
        'video_img' => $imagePath,
    ]);

    return redirect()->route('admin.videos.index')->with('success', 'تم إضافة الفيديو بنجاح');
}

    public function show(Video $video)
    {
        return view('admin.videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'video_type' => 'required|in:file,url',
            'video_path' => $request->video_type == 'file' ? 'nullable|file|mimes:mp4,avi,mov' : 'nullable|string',
            'video_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update image if uploaded
        if ($request->hasFile('video_img')) {
            $imagePath = $request->file('video_img')->store('videos', 'public');
            $video->video_img = $imagePath;
        }

        // Handle video file upload
        if ($request->video_type == 'file' && $request->hasFile('video_path')) {
            $videoPath = $request->file('video_path')->store('videos', 'public');
            $video->video_path = $videoPath;
        }

        // Handle video URL
        if ($request->video_type == 'url') {
            $video->video_path = $request->video_path; // Direct URL from input
        }

        $video->title = $request->title;
        $video->description = $request->description;
        $video->video_type = $request->video_type;

        $video->save();

        return redirect()->route('admin.videos.index')->with('success', 'تم تحديث الفيديو بنجاح');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.videos.index')->with('success', 'Video deleted successfully.');
    }
}
