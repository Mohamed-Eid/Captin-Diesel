<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testmonial extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'job', 'body'];
    public $guarded = [];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/testmonial_images/'.$this->image);
    }
}
