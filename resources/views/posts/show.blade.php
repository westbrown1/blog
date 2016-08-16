@extends('main')

@section('title', '| Your Post')

@section('content')
<!-- row -->
<div class="row">
	<!-- col-md-8 -->
	<div class="col-md-8">
		<h3>{{$post->title}} </h3>
		<p class="lead">{{$post->body}}</p>
		<div class="tags">
			@foreach ($post->tags as $tag)
				<span class="label label-default">{{$tag->name}}</span>
			@endforeach
		</div>
		<!-- background-comments -->
		<div id="background-comments" style="margin-top: 35px;">
			 <h3>Comments <small>{{$post->comments()->count()}} total</small></h3>

			 <table class="table">
			 	<thead>
			 		<tr>
			 			<th>Name</th>
			 			<th>Email</th>
			 			<th>Comment</th>
			 			<th width="150px"></th>
			 		</tr>
			 	</thead>
			 	<tbody>
			 	@foreach($post->comments as $comment)
			 		<tr>
			 			<td>{{$comment->name}} </td>
			 			<td>{{$comment->email}} </td>
			 			<td>{{$comment->comment}} </td>
			 			<td>
			 				<a href="{{route('comments.edit', $comment->id)}} " class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
			 				<a href="{{route('comments.delete', $comment->id)}} " class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Trash</a>
			 			</td>
			 		</tr>
			 	@endforeach
			 	</tbody>
			 </table>
		</div><!-- /background-comments -->
	</div>		
	<!-- col-md-4 -->
	<div class="col-md-4">
		<!-- well -->
		<div class="well">
			<dl class="horizontal">
				<dt>Url Slug:</dt>
				<dd><a href="{{ route('blog.single', $post->slug) }}">{{route('blog.single', $post->slug)}}</a></dd>
			</dl>
			<dl class="horizontal">
				<dt>Category:</dt>
				<dd>{{$post->category->name}}</dd>
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