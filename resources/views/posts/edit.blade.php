@extends('posts.default')

@section('title', 'All posts')

@section('content')
	<h1>Edit Post</h1>
	
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	<form action="/posts/{{ $post->id }}" method="post">
		@method('PUT')
		@csrf		
		<div class="form-group">
			<label for="title">Title:</label>		
			<input id="title" class="form-control" type="text" name="title" value="{{ old('title', $post->title) }}" >
		</div>
		<div class="form-group">
			<label for="content">Content:</label>		
			<input id="content" class="form-control" type="text" name="content" value="{{ old('content', $post->content) }}" >
		</div>
		<input class="btn btn-success btn-block" type="submit" value="Update">
	</form>
@endsection