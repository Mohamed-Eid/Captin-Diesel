<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Surgery;
use App\Video;

class CategoryController extends Controller
{
    public function index(){
        $services = Category::all();
        $videos = Video::all();
        $articles = Post::all();
        return view('frontend.services.index',compact('services','videos','articles'));
    }

    public function show(Category $service){
        return view('frontend.services.show',compact('service'));
    }

    public function get_surgery(Surgery $surgery){
        return view('frontend.surgeries.show',compact('surgery'));
    }
}
