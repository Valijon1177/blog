@extends('posts.default')

@section('title', 'All Posts')

@section('content')
	<h1>Create Post</h1>	
	
	<form action="/posts" method="post">
		@csrf		
	
		<div class="form-group">
			<label for="title">Title:</label>		
			<input id="name" class="form-control" type="text" name="title"  >
			
		</div>
		<div class="form-group">
			<label for="content">Content:</label>		
			<textarea id="content" class="form-control" type="text" name="content"> </textarea>
			
				
		</div>
		<input class="btn btn-success btn-block" type="submit" value="Create">
	</form>
@endsection