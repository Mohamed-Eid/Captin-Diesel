<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Post;
use App\Video;

class HomeController extends Controller
{
    public function index(){
        $articles = Post::all();
        $videos = Video::all();
        $bf_images = Image::all();
        $services = Category::all();
        return view('frontend.index',compact('articles','videos','bf_images','services'));
    }
}
