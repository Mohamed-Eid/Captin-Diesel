<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name','description'];
    public $guarded = [];
    protected  $appends = ['image_path',];


    public  function getImagePathAttribute(){
        return asset('uploads/category_images/'.$this->image);
    }

    public function ScopeParent($q){
        return $q->where('parent_id',NULL);
    }

    public function parent(){
        return $this->belongsTo(Category::class,'parent_id')->with('parent');
    }

    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }
}
