<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Posts;
use App\Comment;
class PostC extends Controller
{    
    public function index(){
        $posts = \App\Posts::all();
        return view('index', compact('posts'));
     
    }
 
}
