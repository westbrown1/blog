@extends('main')

@section('title', '| Registration Status')

@section('content')
<!-- alert alert-success -->
<div class="alert alert-success" role="alert">
	 @if (Session::has('success'))
			<strong>Success</strong> {{Session::get('success')}}		
	 @endif
</div><!-- /alert alert-success -->

<!-- alert alert-danger -->
<div class="alert alert-danger" role="alert">
	 @if (count($errors) > 0)
			<strong>Errors:</strong>
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	@endif
</div><!-- /alert alert-danger -->
		
	
@stop