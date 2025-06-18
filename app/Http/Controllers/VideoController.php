<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
     public function index()
    {
        $videos = Video::latest()->paginate(6);
        return view('videos.index', compact('videos'));
    }


    // Show single blog
    public function show(Video $video)
    {
        return view('videos.show',  ['video' => $video]);
    }

}
