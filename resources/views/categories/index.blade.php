@extends('main')

@section('title', '| All Categories')

@section('content')
	<!-- row -->
	<div class="row">
		 <!-- col-md-8 -->
		 <div class="col-md-8">
		 	 <h1>Categories</h1>
		 	 <table class="table">
		 	 	<thead>
		 	 		<tr>
		 	 			<th>#</th>
		 	 			<th>Name</th>
		 	 		</tr>
		 	 	</thead>
		 	 	<tbody>
		 	 	@foreach ($categories as $category)
		 	 		<tr>
		 	 			<th>{{$category->id}}</th>
		 	 			<td>{{$category->name}}</td>
		 	 		</tr>
		 	 	@endforeach
		 	 	</tbody>
		 	 </table>
		 </div><!-- /col-md-8 -->
		 <div class="col-md-3">
		 	<div class="well" style="margin-top: 35px;">
		 		{!! Form::open(['route' => 'categories.store']) !!}
				<h2>New Category</h2>
				{{Form::label('name', 'Name:')}}
				{{Form::text('name', null, [ 'class' => 'form-control'])}}	
				{{Form::submit('Create Category', ['class' => 'btn btn-primary btn-block btn-h1-spacing'])}}			
				{!! Form::close() !!}
		 	</div>
		 </div>
	</div><!-- /row -->

@stop

