@extends('layouts.app')

@section('title','|EditPost')

@section('stylesheets')
{!! Html::style('css/select2.min.css') !!}
 <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>


<script>
    tinymce.init({
     selector:'textarea'
      });
</script>
@endsection

@section('content')

<div class="row">
	{!!Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT','files'=>true])!!}
	<div class="col-md-8">
		 {{Form::label('title', 'Title:')}}
    {{Form::text('title', null,array('class'=>'form-control input-lg'))}}
 
      {{Form::label('slug', 'Slug:')}}
    {{Form::text('slug', null,array('class'=>'form-control input-lg'))}}

    {{Form::label('category_id','Category:')}}
    {{Form::select('category_id',$categories,null,['class'=>'form-control'])}}

        {{Form::label('tags','Tag:')}}
          {{Form::select('tags[]',$tags,null,['class'=>'form-control','multiple'=>'multiple'])}} 
        {{Form::label('featured_image','Upload Image:')}}  
        {{Form::file('featured_image')}}

    {{Form::label('body', 'Post:'),array('style'=>'margin-top:20px;')}}
     {{Form::textarea('body', null,array('class'=>'form-control input-lg'))}}
     </div>

    <div class="col-md-4">
    	<div class="well">
    		<dl class="dl-horizontal">
    			<dt>Created At:</dt>
    			<dd>{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</dd>
    		</dl>
    		<dl class="dl-horizontal">
    			<dt>Last Updated:</dt>
    			<dd>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</dd>
    		</dl>
    		<hr>
    		<div class="row">
    			<div class="col-sm-6">
    				{!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class' => 'btn btn-danger btn-block' ))!!}
    			</div>
    			<div class="col-sm-6">
    				{{Form::submit('Save',array('class' => 'btn btn-success btn-block'))}}
    			</div>
    		</div>
    	</div>
    </div> 
{!!Form::close()!!}
</div>

@endsection

@section('scripts')

{!! Html::script('js/select2.min.js') !!}

@endsection