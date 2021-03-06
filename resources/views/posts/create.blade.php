@extends('layouts.app')

@section('content')

	<h1>Create New Post</h1>

	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
		<div class="form-group">
			{{Form::label('title', 'Post Title')}}
			{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Post title'])}}
		</div>
		<div class="form-group">
			{{Form::label('body', 'Post Content')}}
			{{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Post content'])}}
		</div>
		{{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
	{!! Form::close() !!}
	
@endsection