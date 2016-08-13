<?php

namespace App;
use App\Posts;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
         protected $fillable = ['tag'];

    public function posts(){
        
        return $this->belongsToMany('App\Posts', 'posts_tags');
        
    }
}
