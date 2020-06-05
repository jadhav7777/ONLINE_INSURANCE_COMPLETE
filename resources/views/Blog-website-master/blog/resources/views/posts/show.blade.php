@extends('layouts.app')

@section('title','|Show Posts')

@section('content')

<div class="row">
	<div class="col-md-8">
    <img src="{{asset('images/'. $post->image)}}" height="400" width="800" >
    <h1>{{ $post->title }}</h1>
     <p class="lead">{!! $post->body !!}</p>
     <hr>

     <div class="tags">
     @foreach($post->tags as $tag)    
     <span class="label label-default">{{$tag->name}}</span>
    @endforeach
     </div>

   <!--  all comments comes here-->
<div class="backend-comments" style="margin-top: 50px;">
  <h3>Comments <small>{{$post->comments()->count()}}</small></h3>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Comment</th>
      <th width="70px"></th>
    </tr>
  </thead>

  <tbody>
    @foreach($post->comments as $comment)
    <tr>
      <td>{{$comment->name}}</td>
      <td>{{$comment->email}}</td>
      <td>{{substr( $comment->comment , 0 ,30 ) }}{{ strlen($comment->comment)>30 ?"...." :""}}</td>
      <td><a href="{{route('comments.edit',$comment->id)}}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
        <a href="{{route('comments.delete',$comment->id)}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
     </div>

    <div class="col-md-4">
    	<div class="well">
            <dl class="dl-horizontal">
                <label>Url:</label>
              <p>  <a href="{{ url('blog/'.$post->slug)}}">{{url('blog/'.$post->slug)}}</a></p>
            </dl>
    		<dl class="dl-horizontal">
    			<dt>Created At:</dt>
    			<dd>{{ date('M j, Y',strtotime($post->created_at)) }}</dd>
    		</dl>
    		<dl class="dl-horizontal">
    			<dt>Last Updated:</dt>
    			<dd>{{ date('M j, Y',strtotime($post->updated_at)) }}</dd>
    		</dl>
            <dl class="dl-horizontal">
                <dt>Category:</dt>
                <dd>{{ $post->category->name}}</dd>
            </dl>
    		<hr>
    		<div class="row">
    			<div class="col-sm-6">
    				{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class' => 'btn btn-primary btn-block' ))!!}
    			</div>
    			<div class="col-sm-6">
                    {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}
    				 {{Form::submit('Delete',array('class' => 'btn btn-danger  btn-block'))}}
                    
                    {!! Form::close()!!}
    			</div>
    		</div>
           <a href="{{route('posts.index')}}" class="btn btn-success  btn-block"b style="margin-top: 20px"><< See All Posts</a>
    	</div>
    </div> 
</div>

@endsection