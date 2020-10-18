<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Surgery;
use App\Video;
use Illuminate\Validation\Rule;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::when(request()->surgery_id, function ($q){

            return $q->where('surgery_id', request()->surgery_id);
        })->latest()->paginate(10);
        $surgeries = Surgery::all();
        return view('dashboard.videos.index',compact('surgeries','videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surgeries = Surgery::all();
        return view('dashboard.videos.create',compact('surgeries'));
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
            $rules += [$locale.'.name' => ['required' ,Rule::unique('video_translations','name')]];
        }

        $request->validate($rules);
        
        $data = $request->all();
       
        $data['link'] = get_video_id($data['link']);

        //dd($data);

        Video::create($data);

        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('dashboard.videos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        
        session()->flash('success', __('site.deleted_successfully'));

        return redirect()->route('dashboard.videos.index');   
    }
}
