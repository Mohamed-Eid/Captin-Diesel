<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Surgery;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surgeries = Surgery::all();
        $posts = Post::paginate(10);
        return view('dashboard.posts.index',compact('surgeries','posts'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surgeries = Surgery::all();
        return view('dashboard.posts.create',compact('surgeries'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'surgery_id' => 'required',
        ];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.name' => ['required' ,Rule::unique('post_translations','name')]];
            $rules += [$locale.'.body' => ['required' ,Rule::unique('post_translations','name')]];
        }

        $request->validate($rules);
        
        $data = $request->all();
       
        $data['image'] = 'default.png';

        if( isset($request->image)) {
             $data['image'] = upload_image('blog_images',$request->image);
        }

        Post::create($data);

        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('dashboard.blog.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $blog)
    {
        //dd($blog);
        $surgeries = Surgery::all();
        return view('dashboard.posts.edit',['surgeries'=>$surgeries , 'post' => $blog]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $blog)
    {
        $rules = [
            'surgery_id' => 'required',
        ];
        //dd($blog);
        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.name' => ['required' ,Rule::unique('post_translations','name')->ignore($blog->id,'post_id')]];
            $rules += [$locale.'.body' => ['required' ,Rule::unique('post_translations','body')->ignore($blog->id,'post_id')]];
        }

        $request->validate($rules);
        
        $data = $request->all();
       
        if( isset($request->image)) {
             $data['image'] = upload_image('blog_images',$request->image);
        }

        $blog->update($data);

        session()->flash('success', __('site.updated_successfully'));

        return redirect()->route('dashboard.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $blog)
    {
        if ($blog->image != 'default.png') {
            delete_image('blog_images',$blog->image);
        } 

        $blog->delete();

        session()->flash('success', __('site.deleted_successfully'));

        return redirect()->route('dashboard.blog.index');    
    }
}
