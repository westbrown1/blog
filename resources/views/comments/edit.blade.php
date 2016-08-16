@extends('main')

@section('title', '| Edit Comment')

@section('content')
<!-- row -->
<div class="row">
	<!-- col-md-8 col-md-offset-2 -->
	<div class="col-md-8 col-md-offset-2">	
		<h3>Edit Comment</h3>	 
	
		{!!Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT'])!!}
			{{Form::label('name', 'Name:')}}
			{{Form::text('name', null, ['class' => 'form-control', 'disabled' => 'disabled'])}}

			{{Form::label('email', 'Email:')}}
			{{Form::email('email', null, ['class' => 'form-control', 'disabled' => 'disabled'])}}

			{{Form::label('comment', 'Comment:')}}
			{{Form::textarea('comment', null, ['class' => 'form-control'])}}

			{{Form::submit('Edit Comment', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 15px;'])}}
		{!!Form::close()!!}

	</div><!-- /col-md-8 col-md-offset-2 -->
</div><!-- /row -->
@stop