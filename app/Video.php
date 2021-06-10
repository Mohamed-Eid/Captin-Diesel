<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    public $guarded = [];

    public function embeded_link()
    {
        return 'https://www.youtube.com/embed/'.$this->link;
    }

    //==================relations===================//

    public function surgery()
    {
        return $this->belongsTo(Surgery::class);
    }
}
