<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Partner;
use App\Post;
use App\Video;

class HomeController extends Controller
{
    public function index(){
        $partners = Partner::all();
        $posts    = Post::take(3)->latest()->get();
        return view('frontend.index',compact('partners','posts'));
    }
}
