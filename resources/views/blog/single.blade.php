@extends('main')
<?php $title = htmlspecialchars($post->title); ?>
@section('title', "| $title")

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
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span> {{$post->comments()->count()}}  Comments </h3>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">
						<img src=" {{ 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($comment->email))) . "?d=wavatar" }} " class="author-image" alt="">
						<div class="author-name">
							<h4>{{$comment->name}}</h4>
							<p class="author-time">{{ date('F nS, Y g:ia', strtotime($comment->created_at)) }}</p> 
						</div>						
					</div>
					<div class="comment-content">
						{{$comment->comment}}
					</div>	
				</div>
			@endforeach
		</div>
	</div>
	<!-- row -->
	<div class="row">
		 <!-- col-md-8 col-md-offset-2 -->
		 <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
		 	 {!!Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST'])!!}
		 	 	<!-- row -->
		 	 	<div class="row">
		 	 		 <!-- col-md-6 -->
		 	 		 <div class="col-md-6">
		 	 		 	 {{Form::label('name', 'Name:')}}
		 	 		 	 {{Form::text('name', null, ['class' => 'form-control'])}}
		 	 		 </div><!-- /col-md-6 -->
		 	 		 <!-- col-md-6 -->
		 	 		 <div class="col-md-6">
		 	 		 	 {{Form::label('email', 'Email:')}}
		 	 		 	 {{Form::email('email', null, ['class' => 'form-control'])}}
		 	 		 </div><!-- /col-md-6 -->
		 	 		 <!-- col-md-12-->
		 	 		 <div class="col-md-12">
		 	 		 	 {{Form::label('comment', 'Comment:')}}
		 	 		 	 {{Form::textarea('comment', null, ['class' => 'form-control'])}}

		 	 		 	 {{Form::submit('Enter Comment', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top:10px;'])}}
		 	 		 </div><!-- /col-md-12 -->
		 	 	</div><!-- /row -->
		 	 {!!Form::close()!!}
		 </div><!-- /col-md-8 col-md-offset-2 -->
	</div><!-- /row -->
@stop