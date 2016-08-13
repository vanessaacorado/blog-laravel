<?php

namespace App;
use App\Comment;
use App\Tag;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
      protected $fillable = ['title', 'content'];
    
    
    public function comments(){
        
        return $this->hasMany('App\Comment');
        
    }
    public function tags(){
        
        return $this->belongsToMany('App\Tag', 'posts_tags');
        
    }
}
