<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'responsabilities', 'qualifications', 'salary', 'benefits', 'reporting_line', 'contract_type'];
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
