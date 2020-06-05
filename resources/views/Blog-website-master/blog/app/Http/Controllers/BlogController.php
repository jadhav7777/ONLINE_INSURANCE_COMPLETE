<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
       public function getIndex(){
       	$posts=Post::paginate(2);

       	return view('blog.index')->withPosts($posts);
       }



    public function getSingle($slug){

     //fetch from db based on slug
   
      $post=Post::where('slug','=',$slug)->first();  //we can not use where('slug','=',$slug)->get(); here;
    	
      //return view and pass in the post project
      return view('blog.single')->withPost($post);
    
    }
    
}
