<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name','description'];
    public $guarded = [];
}
