<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->has('children')->get();

        return view('frontend.categories.index', compact('categories'));
    }
}
