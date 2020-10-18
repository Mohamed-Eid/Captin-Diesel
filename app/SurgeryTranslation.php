<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurgeryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','body'];
}
