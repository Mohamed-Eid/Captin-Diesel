<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CultureTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'job', 'body'];
}
