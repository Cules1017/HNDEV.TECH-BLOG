<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tagsPost extends Model
{
    
    protected $fillable=[
		'post_id',
		'tag_id	',
		];
}
