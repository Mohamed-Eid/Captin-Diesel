<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::paginate(20);
        return view('dashboard.settings.index',compact('settings'));
    }

    public function all()
    {

        $settings_classes = DB::table('settings')
            ->select(DB::raw('count(*) as setting_count, class'))
            ->groupBy('class')->get();
        
        $settings = Setting::all();    
        $data = [];

        foreach ($settings as $setting) {
            //$data['dd'][] = $setting;
            foreach ($settings_classes as $class) {
                if($class->class == $setting->class){
                    $setting->class!="" ? $data[$class->class."_settings"][] = $setting : $data["other_settings"][] = $setting; 
                }
            } 
        }
        //dd($data);
        return view('dashboard.settings.site_settings',compact('data'));
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->location = $request->lat.','.$request->lng;
        $rules = [
            //'lat' => 'required',
            'type' => 'required',
            'key' => 'required|unique:settings',
        ];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.name' => ['required']];
            // $rules += [$locale.'.value' => ['required' ,Rule::unique('setting_translations','value')]];
        }

        $request->validate($rules);    
        $data = [
            'type' => '',
            'class' => '',
        ];

        $data['ar'] = $request->ar;
        $data['en'] = $request->en;
        $data['class'] = $request->class;
        $data['key'] = $request->key;

        

        if($request->type == 'text'){
            $data['type'] = 'text';
        }elseif($request->type == 'image'){
            $data['type'] = 'image';
            $data['image'] = upload_image_without_resize('setting_images',$request->value,null,null);
        }else{
            $data['type'] = 'location';
            $data['value'] = $request->location;
        }

        Setting::create($data);
        
        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('dashboard.settings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
    public function update(Request $request, Setting $setting)
    {
        $request->location = $request->lat.','.$request->lng;
        $rules = [
            //'lat' => 'required',
            'type' => 'required',
        ];

        foreach (config('translatable.locales') as $locale){
            //$rules += [$locale.'.key' => ['required' ,Rule::unique('setting_translations','key')]];
            // $rules += [$locale.'.value' => ['required' ,Rule::unique('setting_translations','value')]];
        }

        // $request->validate($rules);    

        $data = $request->all();
  
        if( isset($request->image)) {
            $data['image'] = upload_image_without_resize('setting_images',$request->image,null,null);
       }

        $setting->update($data);

        session()->flash('success', __('site.updated_successfully'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
