<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $guarded = [];
    protected  $appends = ['image_path'];


    public  function getImagePathAttribute(){
        return asset('uploads/department_images/'.$this->image);
    }

    public function jobs(){
        return $this->hasMany(Job::class);
    }

}
