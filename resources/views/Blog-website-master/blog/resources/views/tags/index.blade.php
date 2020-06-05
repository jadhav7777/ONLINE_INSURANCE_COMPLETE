@extends('layouts.app')

@section('title','| Tags')

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1><b>Tags</b></h1>
		<hr>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tags as $tag)
				<tr>
					<th>{{$tag->id}}</th>
					<td><a href="{{route('tags.show',$tag->id)}}">{{$tag->name}}</a></td>
					<td><a href="{{ route('tags.edit',$tag->id)}}" class="btn btn-warning btn-sm">Edit</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>

	<div class="col-md-3">
		<div class="well">
			{!! Form::open(['route' => 'tags.store','method'=>'POST']) !!}<!-- here form will open only but when we use model lets check edit.php inside posts-->
			<h2>New Category</h2>
           {{Form::label('name', 'Name:')}}
           {{Form::text('name',null,array('class'=>'form-control'))}}

           {{Form::submit('Add Tag',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}
		</div>
	</div>
	
</div>
@endsection