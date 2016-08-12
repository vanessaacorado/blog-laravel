<?php
use App\Http\Requests;
namespace App\Http\Controllers;



use App\Posts;
use App\Http\Controllers\Controller;
class PostsAdminC extends Controller
{
      private $post;
   
    function __construct(Posts $post){
        $this->post=$post;
        
    }
    public function index(){
        $posts = $this->post->paginate(5);
        return view("posts.index", compact('posts'));
     
    }
    
    public function create()
    {
        return view("posts.create");
    }
    
    public function store(PostRequest $request){
        
       dd($request->all());
       return redirect()->route('admin.index');
    }
}
