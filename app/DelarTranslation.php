<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DelarTranslation extends Model
{
    public $fillable = ['name','address'];
    public $timestamps = false;
}
