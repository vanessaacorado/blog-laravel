<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\HttpResponse;
use Illuminate\Http\Request;
use Auth;
class PostsAdminC extends Controller
{
      private $post;
   
    function __construct(Post $post){
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
        
        
       $post=$this->post->create($request->all());
       $post->tags()->sync($this->getTagsIds($request->tag));
       return redirect()->route('admin.index');
    }
    
    public function edit($id){
		$post = $this->post->find($id);
		return view('posts.edit', compact('post'));
		    
    
    }
    public function update($id, PostRequest $request) {
   	$this->post->find($id)->update($request->all());
		$post=$this->post->find($id);		
		$post->tags()->sync($this->getTagsIds($request->tag));   	
   	return redirect()->route('admin.index'); 	
	}
	
	public function destroy($id) {
   	$this->post->find($id)->delete();
   	return redirect()->route('admin.index'); 	
	}
	
	public function getTagsIds($tags) {
		$tagList = array_filter(array_map('trim',explode(",", $tags)));
        $tagIDs=[];
        foreach($tagList as $tagName){
				$tagIDs[]= \App\Tag::firstOrCreate(["tag"=>$tagName])->id	;        
        }	
        return $tagIDs;
}

	public function auth(){
		$user = \App\User::find(1);
		Auth::login($user);
		if(Auth::check()){
			return "Oi";		
		}
		}
		public function Logout(){
		Auth::logout();
	
	}
}