<?php

namespace App;
use App\Post;	
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
         protected $fillable = ['tag', 'post_id'];

    public function posts(){
        
        return $this->belongsToMany('App\Post', 'posts_tags');
        
    }
}
