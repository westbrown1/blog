@if (Session::has('success'))
	<!-- alert alert-success -->
	<div class="alert alert-success" role="alert">
		 <strong>Success!</strong> {{ Session::get('success') }} 
	</div><!-- /alert alert-success -->
@endif

@if (count($errors) > 0)
	<!-- alert alert-danger -->
	<div class="alert alert-danger" role="alert">
		 <strong>Errors:</strong>
		 <ul>
		 @foreach ($errors->all() as $error)			
			<li>{{ $error }}</li>			
		 @endforeach
		 </ul>
	</div><!-- /alert alert-danger -->
@endif