@extends('main')

@section('title', "| $post->title")

@section('content')
	<!-- row -->
	<div class="row">
		 	<!-- col-md-8 col-md-offset-2 -->
		 	<div class="col-md-8 col-md-offset-2">
		 		 <h2>{{ $post->title }}</h2>
		 		 <p>{{ $post->body }}</p>
		 		 <hr>
		 		 <p>Posted In: {{$post->category->name}} </p>
		 	</div><!-- /col-md-8 col-offset-2 -->
	</div><!-- /row -->
@stop