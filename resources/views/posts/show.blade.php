@extends('main')

@section('title', '| Your Post')

@section('content')
<!-- row -->
<div class="row">
	<!-- col-md-8 -->
	<div class="col-md-8">
		<h3>{{$post->title}} </h3>
		<p class="lead">{{$post->body}}</p>
	</div><!-- /col-md-8 -->
	<!-- col-md-4 -->
	<div class="col-md-4">
		<!-- well -->
		<div class="well">
			<dl class="horizontal">
				<dt>Url Slug:</dt>
				<dd><a href="{{ route('blog.single', $post->slug) }}">{{route('blog.single', $post->slug)}}</a></dd>
			</dl>
			 <dl class="horizontal">
				<dt>Created at:</dt>
				<dd>{{date('F j, Y g:i a', strtotime($post->created_at))}}</dd>
			</dl>  
			<dl class="horizontal">
				<dt>Updated:</dt>
				<dd>{{date('F j, Y g:i a', strtotime($post->updated_at))}}</dd>
			</dl>
			<!-- row -->
			<div class="row">
				<!-- col-md-6 -->
				<div class="col-md-6">
					{!!Html::linkRoute('posts.edit', 'Edit Post', [$post->id], ['class' => 'btn btn-primary btn-block'])!!}	
				</div><!-- /col-md-6 -->								 
				<div class="col-md-6">
					{!!Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE'])!!}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])!!}					
					{!!Form::close()!!}
				</div><!-- /col-md-6 -->
			</div><!-- /row -->
			<!-- row -->
			<div class="row">
				 <!-- col-md-12 -->
				 <div class="col-md-12">
				 	 {!!Html::linkRoute('posts.index', '<< See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing'])!!}
				 </div><!-- /col-md-12 -->
			</div><!-- /row -->
		</div><!-- /well -->		 
	</div><!-- /col-md-4 -->	 
</div><!-- /row -->	
@stop