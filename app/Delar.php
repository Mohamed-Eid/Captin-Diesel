<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delar extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'address'];
    public $guarded = [];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
