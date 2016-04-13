@extends('main')

@section('title', '| Login')

@section('content')
	<!-- row -->
<div class="row">
	 <div class="col-md-6 col-md-offset-3">
	 <!-- panel panel-primary -->
	 	<div class="panel panel-primary">
	 		 <!-- panel-heading -->
	 		 <div class="panel-heading">
	 		 	 <h4>Login Here</h>
	 		 </div><!-- /panel-heading -->
			<!-- panel-body -->
			<div class="panel-body">
 				{!! Form::open(array('route' => 'users.store')) !!}
 				
    				{{Form::label('email', 'Email:')}}
    				{{Form::text('email', null, ['class' => 'form-control'])}}

    				{{Form::label('password', 'Password:')}}
    				{{Form::text('password', null, ['class' => 'form-control'])}}

					{{Form::label('remember', 'Remember Me')}}
    				{{Form::checkbox('remember')}}

    				{{Form::submit('Login', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top:20px;'])}}
    			{!!Form::close()!!}
			</div><!-- /panel-body -->
	 	</div><!-- /panel panel-primary -->		
	 </div>
</div><!-- /row -->
@stop