<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestmonialTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','job','body'];
}
