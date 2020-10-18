<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['question','answer'];
    protected $guarded = [];
    //==================relations===================//

    public function surgery(){
        return $this->belongsTo(Surgery::class);
    }
}
