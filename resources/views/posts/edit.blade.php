@extends('main')

@section('title', '| Edit Post')

@section('stylesheets')
    {!!Html::style('css/select2.min.css')!!}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
        selector: 'textarea',
        plugins: "link code"
      });
    </script>
@stop

@section('content')
<!-- row -->
<div class="row">
	{!!Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true])!!}
		<!-- col-md-8 -->
		<div class="col-md-8">
			<!-- panel panel-primary -->
			<div class="panel panel-primary">
				 <!-- panel-heading -->
				 <div class="panel-heading">
				 	 <h3>Edit Your Post</h3>
				 </div><!-- /panel-heading -->
				 <!-- panel-body -->
				 <div class="panel-body">
				 	{{Form::label('title', 'Title:')}}
				 	{{Form::text('title', null, ['class' => 'form-control'])}}

				 	{{Form::label('slug', 'Url Slug:')}}
    				{{Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255'])}}

    				{{Form::label('category_id', 'Category:')}}
    				{{Form::select('category_id', $categories, null, ['class' => 'form-control'])}}

    				{{Form::label('tags', 'Tags:')}}
    				{{Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple'])}}
    				
    				{{Form::label('featured_image', 'Update Featured Image:')}}
    				{{Form::file('featured_image')}}

				 	{{Form::label('body', 'Body:')}}
					{{Form::textarea('body', null, ['class' => 'form-control'])}}
				 </div><!-- /panel-body -->
			</div><!-- /panel panel-primary -->		
		</div><!-- /col-md-8 -->
		<!-- col-md-4 -->
		<div class="col-md-4">
			<!-- well -->
			<div class="well">
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
						{!!Html::linkRoute('posts.show', 'Cancel', [$post->id], ['class' => 'btn btn-warning btn-block'])!!}
					</div><!-- /col-md-6 -->								 
					<div class="col-md-6">						
						{!!Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])!!}					
					</div><!-- /col-md-6 -->
				</div><!-- /row -->
			</div><!-- /well -->		 
		</div><!-- /col-md-4 -->	
	{!!Form::close()!!} 
</div><!-- /row -->
@stop

@section('scripts')
    {!!Html::script('js/select2.min.js')!!}

    <script type="text/javascript">
        $(".select2-multi").select2();
        $(".select2-multi").select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');
    </script>
@stop