<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Expectation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Surgery;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SurgeryController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        //dd('test');
        $surgeries = Surgery::when($request->search , function ($q) use ($request){
            return $q->whereTranslationLike('name','%'.$request->search.'%');
        })->when(request()->category_id, function ($q){
            return $q->where('category_id', request()->category_id);
        })->latest()->paginate(10);

        $categories = Category::all();
        return view('dashboard.surgeries.index' , compact('surgeries','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.surgeries.create',compact('categories'));

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
            'category_id' => 'required',
        ];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.name' => ['required' ,Rule::unique('surgery_translations','name')]];
            $rules += [$locale.'.body' => ['required']];

        }

        $request->validate($rules);

        $data = $request->except(['expectation']);

        $data['image'] = 'default.png';
        $data['icon'] = 'default.png';

        if( isset($request->image)) {
             $data['image'] = upload_image('surgery_images',$request->image);
        }

        if( isset($request->icon)) {
            $data['icon'] = upload_image('surgery_images',$request->icon);
        }
        //dd($data);

        $surgery = Surgery::create($data);

        //dd(request()->expectation);
        foreach(request()->expectation as $expectation){
            $additional_data = $expectation;
            if( isset($expectation['image'])) {
                $additional_data['image'] = upload_image_without_resize('surgery_images',$additional_data['image']);
            }
            $surgery->expectations()->create($additional_data);
        }

        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('dashboard.surgery.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Surgery  $surgery
     * @return \Illuminate\Http\Response
     */
    public function edit(Surgery $surgery)
    {
        $categories = Category::all();

        return view('dashboard.surgeries.edit', compact('surgery','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Surgery $surgery)
    {
        //dd($request->all());
        $rules = [];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.name' => ['required' ,Rule::unique('surgery_translations','name')->ignore($surgery->id,'surgery_id')]];
        }

        $request->validate($rules);

        $data = $request->except(['expectation']);

        if( isset($request->image)) {
            $data['image'] = upload_image('surgery_images',$request->image);
        }

        if( isset($request->icon)) {
           $data['icon'] = upload_image('surgery_images',$request->icon);
        }
        
        
        $surgery->update($data);

        foreach(request()->expectation as $request_expectation){
            $additional_data = $request_expectation;
            
            if(isset($request_expectation['image'])) {
                delete_image('surgery_images',$request_expectation['image']);
                $additional_data['image'] = upload_image_without_resize('surgery_images',$additional_data['image']);
            } 
            $expectation = Expectation::find($request_expectation['key']);
            unset($additional_data['key']);
            $expectation->update($additional_data);
        }

        session()->flash('success', __('site.updated_successfully'));

        return redirect()->route('dashboard.surgery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Surgery  $surgery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surgery $surgery)
    {
        if ($surgery->image != 'default.png') {
            //Storage::disk('public_uploads')->delete('/category_images/' . $surgery->image);
            delete_image('surgery_images',$surgery->image);
        } 

        if ($surgery->icon != 'default.png') {
            //Storage::disk('public_uploads')->delete('/category_images/' . $surgery->image);
            delete_image('surgery_images',$surgery->icon);
        } 

        $surgery->delete();

        session()->flash('success', __('site.deleted_successfully'));

        return redirect()->route('dashboard.surgery.index');
    } 
}
