<?php

namespace App\Http\Controllers\Frontend;

use App\Culture;
use App\Http\Controllers\Controller;

class CultureController extends Controller
{
    public function index()
    {
        $cultures = Culture::all();

        return view('frontend.cultures.index', compact('cultures'));
    }
}
