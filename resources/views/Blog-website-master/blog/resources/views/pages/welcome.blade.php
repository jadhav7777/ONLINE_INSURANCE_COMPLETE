
@extends('layouts.app')
@section('title','|Homepage')
@section('content')

<div class="jumbotron">
  <h1>Hello, world!</h1>
  <p>This is a blog website</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
<hr>
<div  class="container">
    <div class="row">
      <div class="row">
         @foreach($posts as $post)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="/716813.png" alt="...">
      <div class="caption">
        <h3>{{substr( $post->body , 0 ,20)}}{{ strlen($post->title)>20?"...." :"" }}</h3>
        <p>{{substr( $post->body , 0 ,40)}}{{ strlen($post->body)>40?"...." :"" }}</p>
        <a href="{{url('blog/'.$post->slug)}}" class="btn btn-primary" role="button">Read more</a> 
      </div>
    </div>
  </div>
    @endforeach
   </div>
</div>
</div>
@endsection