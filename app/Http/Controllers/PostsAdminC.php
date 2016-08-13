<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Posts;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\HttpResponse;
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
        
       $this->post->create($request->all());
       return redirect()->route('admin.index');
    }
    
    public function edit($id){
		$post = $this->post->find($id);
		return view('posts.edit', compact('post'));
		    
    
    }
    public function update($id, PostRequest $request) {
   	$this->post->find($id)->update($request->all());
   	return redirect()->route('admin.index'); 	
	}
	
	public function destroy($id) {
   	$this->post->find($id)->delete();
   	return redirect()->route('admin.index'); 	
	}
}