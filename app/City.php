<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    public $guarded = [];

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
