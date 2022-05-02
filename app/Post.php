<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];
    public function tags(){
        return $this->belongsToMany(tags::class,'tags_posts','post_id','tag_id')
                    ->withTimestamps();
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function User(){
        return $this->belongsTo(User::class,'admin_id');
    }
}
