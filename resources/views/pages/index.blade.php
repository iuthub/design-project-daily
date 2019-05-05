@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To Daily.uz</h1>
        <p>Learn and Write something daily</p>
         @if (!Auth::check())
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endif
    </div>
    @if($late_posts!=NULL)
    @foreach($late_posts as $post)
   <div class="row">
   	<div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
 	 <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1> 
 	 <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
  	 </div>
 <br>
	@endforeach
	@endif
@endsection
