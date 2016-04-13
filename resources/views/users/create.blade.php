@extends('main')

@section('title', '| Sign Up')
@section('stylesheets')
	{{Html::style('css/parsley.css')}}
@stop
@section('content')
<!-- row -->
<div class="row">
	 <div class="col-md-6 col-md-offset-3">
	 <!-- panel panel-primary -->
	 	<div class="panel panel-primary">
	 		 <!-- panel-heading -->
	 		 <div class="panel-heading">
	 		 	 <h4>Register Here</h>
	 		 </div><!-- /panel-heading -->
			<!-- panel-body -->
			<div class="panel-body">
 				{!! Form::open(['route' => 'users.store', 'data-parsley-validate' => '']) !!}
 					{{Form::label('name', 'Username:')}}
    				{{Form::text('name', null, ['class' => 'form-control', 'required' => '', 'data-parsley-type' => 'alphanum'])}}

    				{{Form::label('email', 'Email:')}}
    				{{Form::text('email', null, ['class' => 'form-control', 'type' => 'email', 'required' => ''])}}

    				{{Form::label('password', 'Password:')}}
    				{{Form::text('password', null, ['class' => 'form-control', 'type' => 'password', 'required' => ''])}}

					{{Form::label('password_confirmation', 'Confirm Password:')}}
    				{{Form::text('password_confirmation', null, ['class' => 'form-control', 'type' => 'password', 'required' => ''])}}

    				{{Form::submit('Register', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top:20px;'])}}
    			{!!Form::close()!!}
			</div><!-- /panel-body -->
	 	</div><!-- /panel panel-primary -->		
	 </div>
</div><!-- /row -->
@stop
@section('scripts')
	{{Html::script('js/parsley.min.js')}}
@stop


