<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use App\Category;
use App\Tag;
use Purifier;
use Image;
use Storage;
class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable andshow all of the post fromthe database
           $posts = Post::paginate(10);

        // return view and pass in above variable
           return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //here we have to access all categories to edit   
        $categories= Category::all();
        $tags=Tag::all();

        return view('posts.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,array(
           'title'=>'required|max:255',
           'slug'=>'required|alpha_dash|min:5|max:255unique:posts,slug',
           'category_id'=>'required',
           'body'=>'required',
           'featured_image'=>'sometimes|image'
        ));

        
        //store in database
        $post = new Post;

        $post->title=$request->title;
         $post->slug=$request->slug;
         $post->category_id=$request->category_id;
         $post->body=Purifier::clean($request->body);

         //save our image
         if ($request->hasFile('featured_image')) {
           $image= $request->file('featured_image');
           $filename= time() . '.' .$image->getClientOriginalExtension();
           $location=public_path('images/'. $filename);
           Image::make($image)->resize(800,400)->save($location);

           $post->image=$filename;
         }

         $post->save();

         $post->tags()->sync($request->tags,false); //for adding multiple tags from form we use "false"  here because we dont want to overwrite tags here

          Session::flash('success','The blog has been saved successsfully!!!');
        //redirect to another base
         return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {    
        $post= Post::find($id);
       
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save as a var

          $post=Post::Find($id);
          $categories=Category::all();
          $tags=Tag::all();

          $cats=array();
         //paasing the id only in dropdown menu
          foreach ($categories as $category) {
              $cats[$category->id]=$category->name;
          }

          $tags2=[];
          foreach ($tags as $tag) {
              $tags2[$tag->id]=$tag->name;
          }

        //return the view and pass in the var we previously created 
         return view('posts.edit')->withPost($post)->withCategories($cats)->withTags($tags)->withTags($tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the data
        $post=Post::find($id);
   
         $this->validate($request,array(
           'title'=>'required|max:255',
           'slug'=>"required|alpha_dash|min:5|max:255|unique:posts,slug,$id",
           'category_id'=>'required',
           'body'=>'required',
           'featured_image'=>'image'
        ));
        //Save the data to the database
              
          $post=Post::Find($id);
           $post->title=$request->input('title');
          $post->slug=$request->input('slug');
          $post->category_id=$request->input('category_id');
         $post->body=Purifier::clean($request->body);

          if ($request->hasFile('featured_image')) {
            //add new image
           $image= $request->file('featured_image');
           $filename= time() . '.' .$image->getClientOriginalExtension();
           $location=public_path('images/'. $filename);
           Image::make($image)->resize(800,400)->save($location);
            //old filename
           $oldFilename=$post->image;
           //update the database
           $post->image=$filename;
           //delete the old photo
           Storage::delete($oldFilename);
         }

          $post->save();
           
           $post->tags()->sync($request->tags,true); //for adding multiple tags from form we use "true" for overwrite into the database or blank it it delets already tags and add new ones 

        //set flash data with success messege
           Session::flash('success','The blog has been changed successsfully!!!');
        //redirect with flash data to posts.show
            return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post=Post::find($id);

        //deatch the tag form post related with 
        $post->tags()->detach(); //means no post then to tag realated with that post
        Storage::delete($post->image);//beacuse when we are deleting any post its necessary to delete that image tooo
        $post->delete();

        Session::flash('success','The blog has been deleted successsfully!!!');
        
        return redirect()->route('posts.index');
    }
}
