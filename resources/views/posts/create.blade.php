@extends('main')

@section('title', '| Create New Post')
@section('stylesheets')
	{{Html::style('css/parsley.css')}}
@stop
@section('content')
 <!-- row -->
 <div class="row">
 	 <!-- col-md-6 col-md-offset-3 -->
 	 <div class="col-md-6 col-md-offset-3">
 	 	 <!-- panel panel-primary -->
 	 	 <div class="panel panel-primary">
 	 	 	 <!-- panel-heading -->
 	 	 	 <div class="panel-heading">
 	 	 	 	 <h3>Create a Post</h3>
 	 	 	 </div><!-- /panel-heading -->
 	 	 	 <!-- panel-body -->
 	 	 	 <div class="panel-body">
 	 	 	 	 {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
    				{{Form::label('title', 'Title:')}}
    				{{Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255'])}}

    				{{Form::label('slug', 'Url Slug:')}}
    				{{Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255'])}}

                    {{Form::label('category_id', 'Category:')}}
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}} ">{{$category->name}}</option>
                        @endforeach
                    </select>

    				{{Form::label('body', 'Body:')}}
    				{{Form::textarea('body', null, ['class' => 'form-control', 'required' => ''])}}
    				{{Form::submit('Create Post', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top:20px;'])}}
				 {!! Form::close() !!}
 	 	 	 </div><!-- /panel-body -->
 	 	 </div><!-- /panel panel-primary -->
 	 </div><!-- /col-md-6 col-md-offset-3 -->
 </div><!-- /row -->
@stop
@section('scripts')
	{{Html::script('js/parsley.min.js')}}
@stop