@extends('layouts.app')

@section('title','| Blog')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1 style="text-align: center;">Blog</h1>
		<hr>
	</div>
</div>

  @foreach($posts as $post)
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2>{{$post->title}}</h2>
		<h5>Published: {{date('M j, Y', strtotime($post->created_at))}}</h5>

		<p>{!!substr($post->body,0,250)!!}{!!strlen($post->body)>250 ?'...':""!!}</p>

		<a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a>
		<hr>
	</div>

</div>

@endforeach
               <!--pagination links starts here-->
      <div class="text-center">
              {!! $posts->links();!!}
            </div>


@endsection