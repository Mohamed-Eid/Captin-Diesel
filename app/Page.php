<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name','body'];
    public $guarded = [];
    protected  $appends = ['image_path'];

    public  function getImagePathAttribute(){
        return asset('uploads/page_images/'.$this->image);
    }

    public function page_images(){
        return $this->hasMany(PageImage::class);
    }
}
