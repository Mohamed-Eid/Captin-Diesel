<?php

namespace App\Http\Controllers\Frontend;

use App\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.pages.contact_page');
    }

    public function store(){
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone'  => 'required',
            'message' => 'required',
        ];
        request()->validate($rules);

        //dd(request()->all());

        ContactMessage::create(request()->all());

        session()->flash('success', __('site.message_was_send'));

        return redirect()->back();
    }
}
