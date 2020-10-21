<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','responsabilities','qualifications','salary','benefits','reporting_line','contract_type'];
}
