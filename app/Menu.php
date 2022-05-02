<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable=[
		'name',
		'parent_id',
		];
		public function getchil(){
            return $this->hasMany(Menu::class,'parent_id');
        }
}

