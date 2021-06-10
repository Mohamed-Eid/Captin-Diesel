<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $guarded = [];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/partner_images/'.$this->image);
    }
}
