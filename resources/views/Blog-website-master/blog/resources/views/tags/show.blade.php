
@extends('layouts.app')

@section('title'," | $tag->name Tag")  <!--must use double quotes here to show the code $tag->name;  -->

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1>{{ $tag->name }} : <small>{{$tag->posts()->count()}} Posts</small></h1>
	</div>

	<div class="col-md-2">
		<a href="{{route('tags.edit',$tag->id)}}" class="btn btn-md btn-primary pull-right" style="margin-top: 20px;">Edit</a>
	</div>
	<div class="col-md-2">
		{{Form::open(['route'=> ['tags.destroy',$tag->id],'method'=>'DELETE'])}}
		{{Form::submit('Delete',['class'=>'btn btn-md btn-danger','style'=>'margin-top:20px;'])}}
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Tags</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($tag->posts as $post)
				<tr>
					<td>{{$post->id}}</td>
					<td>{{$post->title}}</td>
					<td>
						@foreach($post->tags as $tag)
					<span class="label label-default">{{$tag->name}}</span>
					@endforeach
					</td>
					<td><a href="{{route('posts.show',$post->id)}}" class="btn btn-default btn-sm">View</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>


@endsection