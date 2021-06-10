<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $guarded = [];

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('uploads/product_images/'.$this->image);
    }

    //==================relations===================//

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
