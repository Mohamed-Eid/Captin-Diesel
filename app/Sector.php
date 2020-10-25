<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name','description'];
    public $guarded = [];

    protected  $appends = ['image_path'];


    public  function getImagePathAttribute(){
        return asset('uploads/sector_images/'.$this->image);
    }

}
