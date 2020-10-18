<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageImage extends Model
{
    protected $guarded = [];

    protected  $appends = ['image_path'];


    public  function getImagePathAttribute(){
        return asset('uploads/page_images/'.$this->image);
    }
    //==================relations===================//

    public function page(){
        return $this->belongsTo(Page::class);
    }
}
