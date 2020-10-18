<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpectationTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
}
