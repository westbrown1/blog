@extends('main')

@section('title', '| Contact Us')

@section('content')
<!-- col-md-4 -->
<div class="col-md-4">
	<!-- well -->
	<div class="well">
	 	<center><img src="images/photo.jpg" alt="Photo of West Brown"><br>
		<p>West Brown</p>

		<p>Phone/Text # <a href="tel: +19102001391"> (910) 200-1391</a></p>
		<p>Email: <a href="mailto:lawsonsdad@gmail.com">lawsonsdad@gmail.com</a></p>
		<p>Wilmington, NC  28480</p></center><br>
		<p>West is available anytime Monday through Friday from 9:00 am until 5:00 pm.  He grow up in Wilmington, NC and graduated from the University of North Carolina, Chapel Hill, with a degree in Economics.  West enjoys time with his family, sports with his son and all things related to computer technology.  West will be glad to assist you with all your web development needs.</p>	
	</div><!-- /well -->		
</div><!-- /col-md-4 -->

<div class="row">
	 <div class="col-md-7">
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
	 </div><!-- col-md-7 -->
</div><!-- /row -->
@stop