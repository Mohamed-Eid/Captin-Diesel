<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Surgery;

class BeforeAfterController extends Controller
{
    public function index()
    {
        $services = Category::all();
        return view('frontend.images.index',compact('services'));
    }

    public function show(Surgery $surgery){
        return view('frontend.pages.before_after',['images' => $surgery->images]);
    }
}
