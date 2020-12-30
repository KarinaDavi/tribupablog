<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

use Validator;
class PostsController extends Controller
{
    public function __construct(){

    	$this ->middleware('auth');
    }

    public function index (){

        $posts = Post::all();
        $categories = Category::all();
    	return view ('admin.posts.index', [
            'posts'=>$posts, 
            'categories' => $categories
            ]);

    }

    public function store (Request $request){


        $newPost = new Post();


        $file = $request->file('featured');
        $random_name = time();
        $destinationPath = 'images/posts/';
        $extension = $file->getClientOriginalExtension();
        $filename = $random_name.'-'.$file->getClientOriginalName();
        $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);


        $newPost->title = $request->title;
 		$newPost->category_id = $request->category_id;
 		$newPost->featured = $filename;
 		$newPost->content = $request->content;
 		$newPost->author = $request->author;		
        $newPost->save();


      
        return redirect()->back();
    	

    }

    public function update (Request $request, $postId){

        $post= Category::find($postId);
        $post= Post::find($postId);
        $post->title = $request->title;
 		$post->category_id = $request->category_id;
 		$post->content = $request->content;
 		$post->author = $request->author;	
        $post->save();

        return redirect()->back();
        

    }

    public function delete (Request $request, $postId){

        $post= Post::find($postId);
        $post->delete();
        

        return redirect()->back();
        

    }
}
