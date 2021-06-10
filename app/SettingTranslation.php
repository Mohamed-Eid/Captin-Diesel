<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'value', 'title', 'description', 'link'];
}
