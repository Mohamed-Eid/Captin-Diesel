<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $guarded = [];
    protected  $appends = ['image_path'];


    public  function getImagePathAttribute(){
        return asset('uploads/category_images/'.$this->image);
    }

    //==================relations===================//

    public function surgeries(){
        return $this->hasMany(Surgery::class);
    }

    public function expectations(){
        return $this->hasMany(Expectation::class);
    }
}
