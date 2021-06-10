<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'job', 'body'];
    public $guarded = [];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/culture_images/'.$this->image);
    }
}
