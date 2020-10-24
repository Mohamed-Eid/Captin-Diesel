<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    public $guarded = [];

    public function city(){
        return $this->belongsTo(City::class);
    }
}
