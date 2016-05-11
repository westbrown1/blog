@extends('main')

@section('title', '| Upload Images')

@section('content')

	<!-- row -->
	<div class="row">
		 <!-- col-md-8 col-md-offset-2 -->
		 <div class="col-md-8 col-md-offset-2">
		 	 <h1>File Upload</h1>
		 	 <form action="{{ URL::to('upload')}}" method="post" enctype="multipart/form-data">
		 	 	<label for=""> Select image to upload: </label>
		 	 	<input type="file" name="file" id="file">
		 	 	<input type="submit" value="Upload" name="submit" style="margin-top: 5px;">
		 	 	<input type="hidden" value="{{csrf_token()}}" name="_token">
		 	 </form>
		 </div><!-- /col-md-8 col-md-offset-2 -->
	</div><!-- /row -->
@stop