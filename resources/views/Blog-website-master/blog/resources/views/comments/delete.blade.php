@extends('layouts.app')

@section('title'.'| DeleteComment')

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Delete This Comment</h1>
       <hr>
		<p>
			<h3>NAME: </h3>
			<h4>{{$comment->name}}</h4>
			<h3>Email: </h3>
			<h4>{{$comment->email}}</h4>
			<h3>Comment: </h3>
			<h4>{{$comment->comment}}</h4>
		</p>
		{{Form::open(['route'=>['comments.destroy',$comment->id],'method'=>'DELETE'])}}
            
            		{{Form::submit('Delete Comment',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
            	
		{{Form::close()}}
	</div>
</div>

@endsection