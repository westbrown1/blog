@extends('main')

@section('title', '| Home')

@section('content')

 <!-- jumbotron -->
 <div class="jumbotron">
 	 <h3>Welcome to our blog!</h3>
 	 <p class="lead">Thank you for visiting.</p>
 	 <p><a href="{{ route('blog.index') }}" class="btn btn-primary btn-lg" role="button">Popular Post</a></p>
 </div><!-- /jumbotron -->

<div class="row">
	 <div class="col-md-8">
	 @foreach ($posts as $post)		
	 	<div class="post">
	 		<h3>{{$post->title}}</h3>
	 		<p>{{substr(strip_tags($post->body), 0, 200)}}{{ strlen(strip_tags($post->body)) > 200 ? '...' : ''}} </p>
	 		<a href="{{ url('blog/'.$post->slug) }} " class="btn btn-primary">Read More</a>
	 	</div>
	 	<hr>
	  @endforeach
	 </div>	 	
	 <div class="col-md-3 col-md-offset-1">
	 	<h4>Sidebar</h4>
	 </div>
</div><!-- /row -->

@stop