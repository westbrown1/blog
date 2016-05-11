@extends('main')

@section('title', '| Contact Us')

@section('content')
<!-- row -->
<div class="row">
	 <div class="col-md-6 col-md-offset-3">
	 <!-- panel panel-primary -->
	 	<div class="panel panel-primary">
	 		 <!-- panel-heading -->
	 		 <div class="panel-heading">
	 		 	 <h4>Contact Us</h>
	 		 </div><!-- /panel-heading -->
			<!-- panel-body -->
			<div class="panel-body">
 				{!! Form::open(array('route' => 'posts.store')) !!}
    				{{Form::label('email', 'Email:')}}
    				{{Form::email('email', null, ['class' => 'form-control'])}}

    				{{Form::label('password', 'Password:')}}
    				{{Form::password('password', ['class' => 'form-control'])}}

    				{{Form::label('body', 'Body:')}}
					{{Form::textarea('body', null, ['class' => 'form-control'])}}

    				{{Form::submit('Contact Us', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top:20px;'])}}
    			{!!Form::close()!!}
			</div><!-- /panel-body -->
	 	</div><!-- /panel panel-primary -->		
	 </div>
</div><!-- /row -->

@stop