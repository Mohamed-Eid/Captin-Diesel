<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Video;

class VideosController extends Controller
{
    public function index()
    {
        $videos = Video::paginate(10);

        return view('frontend.videos.index', compact('videos'));
    }
}
