<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;
use App\Surgery;
use Illuminate\Support\Collection;

class ImageAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::when(request()->surgery_id, function ($q){

            return $q->where('surgery_id', request()->surgery_id);
        })->paginate(10);
        
        $surgeries = Surgery::all();
        //$images = Image::paginate(10);
        return view('dashboard.images.index',compact('images','surgeries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surgeries = Surgery::all();
        return view('dashboard.images.create',compact('surgeries'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surgery = Surgery::find(request()->surgery_id); 
        $images = Collection::wrap(request()->file('file'));
        //dd(request()->surgery_id);
        $images->each(function($image) use ($surgery){
            $image_name = upload_image('image_album',$image);
            $surgery->images()->create([
                'image' => $image_name
            ]);
        });
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        //dd($image);
        if ($image->image != 'default.png') {
            delete_image('image_album',$image->image);
        } 

        $image->delete();
        session()->flash('success', __('site.deleted_successfully'));

        return redirect()->route('dashboard.image_album.index');
    }
}
