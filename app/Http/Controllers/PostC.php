<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;
class PostC extends Controller
{    
    public function index(){
        $post = \App\Post::paginate(5);
        return view('index', compact('post'));
     
    }
 
}
