@extends('main')

@section('title', '| Edit Tag')

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		{!!Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT'])!!}
		
		{{Form::label('name', 'Name:')}}
		{{Form::text('name', null, ['class' => 'form-control'])}}

		{{Form::submit('Save Changes', ['class' => 'btn btn-primary', 'style' => 'margin-top:10px;'])}}
	{!!Form::close()!!}
	</div>
</div>	
@stop