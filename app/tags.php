<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    protected $guarded=[];
  public function post(){
        return $this->belongsToMany(Post::class,'tags_posts','tag_id','post_id');
    }
}
