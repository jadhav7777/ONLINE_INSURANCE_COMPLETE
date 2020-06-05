@extends('layouts.app')

@section('title','|CreatePost')

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
	
	<div class="col-md-8 col-md-offset-2">
		<h1 style="text-align: center;"> Create New Post</h1>
		<hr>
		
		{!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'','files'=>true]) !!}<!-- here form will open only but when we use model lets check edit.php inside posts
       upload a image set (files = true) -->
           {{Form::label('title', 'Title:')}}
           {{Form::text('title', null,array('class'=>'form-control'))}}

            {{Form::label('slug', 'Slug:')}}
           {{Form::text('slug', null,array('class'=>'form-control'))}}
            
            {{Form::label('category_id','Category:')}}
           <select class="form-control" name="category_id">
            <option>select</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>   

              <!-- Using select2.js here to use multiple tag system (use tag[] here because of multiple tags are going to store so we store them into an array)-->
               {{Form::label('tags','Tag:')}}
           <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
              </select>             

               {{Form::label('featured_image','Upload image')}}
               {{Form::file('featured_image')}}

           {{Form::label('body', 'Post:')}}
            {{Form::textarea('body', null,array('class'=>'form-control'))}}

           {{Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}
	</div>

</div>
@endsection


@section('scripts')

{!! Html::script('js/select2.min.js') !!}

<script type="text/javascript">
  $('.select2-multi').select2();  //select2-multi is a class see line 34
</script>
@endsection