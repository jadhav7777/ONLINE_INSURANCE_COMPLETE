<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Session;
use Mail;
class pagescontroller extends Controller{
	public function getIndex(){

		$posts=Post::orderBy('created_at','desc')->limit(3)->get();
		//show only 3 recents posts in descending order on welcome page

        return view('pages.welcome')->withPosts($posts);
	}
	public function getAbout()
	{
       return view('pages.about');

	}
	public function getContact()
	{
        return view('pages.contact');

	}
	

	public function postContact(Request $request)
	{  
           $this->validate($request,array(
           'email'=>'required|email',
           'subject'=>'min:3',
          'message'=>'min:10',
        ));

        $data=array(
        'email'=>$request->email,
        'subject'=>$request->subject,
        'bodymessage'=>$request->message
        );  //we choose a variable bodymessage because laravel already have a variable name message so we change it//

        //if we are sending bulk of emails then we use Mail::queue(); 
         Mail::send('emails.contact',$data,function($message) use($data){
         	$message->from($data['email']);
         	$message->to('amankumarshrivas@gmail.com');
         	$message->subject($data['subject']);
         });
       Session::flash('success','The blog has been saved successsfully!!!'); 
        return redirect()->url('/');
	}
	
	
}