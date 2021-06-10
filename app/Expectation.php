<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expectation extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $guarded = [];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/surgery_images/'.$this->image);
    }

    public function surgery()
    {
        return $this->belongsTo(Surgery::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
