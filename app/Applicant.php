<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $guarded = [];

    public function getQualificationTextAttribute()
    {
        return [
            '0' => 'Student',
            '1' => 'Graduate',
        ][$this->qualifications];
    }

    public function getCvPathAttribute()
    {
        return asset('uploads/career_files/'.$this->cv);
    }
}
