<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswerTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['question', 'answer'];
}
