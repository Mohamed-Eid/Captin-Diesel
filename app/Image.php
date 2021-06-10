<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/image_album/'.$this->image);
    }

    //==================relations===================//

    public function surgery()
    {
        return $this->belongsTo(Surgery::class);
    }
}
