<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //
    protected $fillable=[
		'name',
		'parent_id',
        'slug'
		];
        public function getchil(){
            return $this->hasMany(Category::class,'parent_id');
        }
}
