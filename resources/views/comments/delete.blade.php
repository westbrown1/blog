@extends('main')

@section('title', '| Delete Comment')

@section('content')
	<!-- row -->
	<div class="row">
		 <!-- col-md-8 col-md-offset-2 -->
		 <div class="col-md-8 col-md-offset-2">
		 	 <h3>Delete this comment?</h3>
		 	 <p>
		 	 	<strong>Name: </strong> {{$comment->name}}<br>
		 	 	<strong>Email: </strong> {{$comment->email}}<br>
		 	 	<strong>Comment: </strong> {{$comment->comment}}
		 	 </p>
		 	 {!!Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE'])!!}
				{{Form::submit('Delete Comment', ['class' => 'btn btn-danger btn-block'])}}
		 	 {!!Form::close()!!}
		 </div><!-- /col-md-8 col-md-offset-2 -->
	</div><!-- /row -->
@stop