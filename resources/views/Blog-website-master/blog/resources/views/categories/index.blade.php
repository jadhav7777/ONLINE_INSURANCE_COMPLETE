@extends('layouts.app')

@section('title','| Categories')

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1><b>Categories</b></h1>
		<hr>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $category)
				<tr>
					<th>{{$category->id}}</th>
					<td>{{$category->name}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
	<div class="col-md-3">
		<div class="well">
			{!! Form::open(['route' => 'categories.store','method'=>'POST']) !!}<!-- here form will open only but when we use model lets check edit.php inside posts-->
			<h2>New Category</h2>
           {{Form::label('name', 'Name:')}}
           {{Form::text('name',null,array('class'=>'form-control'))}}

           {{Form::submit('Add Category',array('class' => 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}
        {!! Form::close() !!}
		</div>
	</div>
	
</div>

@endsection