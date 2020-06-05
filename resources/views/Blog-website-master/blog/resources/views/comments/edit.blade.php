@extends('layouts.app')

@section('title',' | Edit comment')

@section('content')


<h1>Edit Command:</h1>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{{Form::model($comment,['route'=>['comments.update',$comment->id],'method'=>'PUT'])}}
            
            		{{Form::label('name','Name:')}}
            		{{Form::text('name',null,['class'=>'form-control','disabled'=>''])}}
            	
            	
            		{{Form::label('email','Email:')}}
            		{{Form::text('email',null,['class'=>'form-control','disabled'=>''])}}
            
            	
            		{{Form::label('comment','Comment:')}}
            		{{Form::textarea('comment',null,['class'=>'form-control','rows'=>'5'])}}
            <!-- rows = '5' here decrease the size of comment block -->
            		{{Form::submit('Update Comment',['class'=>'btn btn-success btn-block','style'=>'margin-top:20px;'])}}
            	
		{{Form::close()}}
	</div>
</div>



@endsection