<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name','body'];
    public $guarded = [];

    protected  $appends = ['image_path'];


    public  function getImagePathAttribute(){
        return asset('uploads/blog_images/'.$this->image);
    }

    public function getCreatedAtAttribute($date)
{
    return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('j F, Y');
}
    //==================relations===================//

    public function surgery(){
        return $this->belongsTo(Surgery::class);
    }
}
