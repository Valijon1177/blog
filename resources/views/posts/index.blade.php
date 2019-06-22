@extends('posts.default')

@section('content')
<div class="container">
    @auth
		<a href="{{ route('posts.create') }}" class="btn btn-success btn-block mt-3">Create Post</a>
	@endauth
	
	@guest
	<div class="alert alert-info mt-3">
		Please, Sign up for create posts! 
		<a href="{{ route('login') }}" class="alert-link">Login</a>
	</div> 
	@endguest
	
	<h1 class="text-primary text-center my-3">All posts</h1>
	
	
	<table class="table">
	 	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Title</th>
		  <th scope="col">Content</th>
		  <th scope="col">Actions</th>
		</tr>
	  </thead>
	  <tbody>
		@foreach($posts as $post)
			<tr>
			  <th scope="row">{{ $loop->iteration }}</th>
			  <td>{{ $post->title }}</td>
			  <td>
				  {{ Str::limit($post->content, 170) }}
				  <a href="{{ route('posts.show', ['post' => $post->id]) }}">Read More</a> 		
			  </td>
			  </td><td><a href="{{ route('posts.show', ['post' => $post->id]) }}"><i class="fas fa-eye"></i><br>Show
			  </a></td></td>
			  @auth
			  <td><a href="{{ route('posts.edit', ['post' => $post->id]) }}"><i class="fas fa-edit"></i><br>Edit</a></td>
			  <td>
			  	<a href="" onclick="var result = confirm('Are you sure delete this Post?');
			  	if (result) {
			  		event.preventDefault();
			  		document.getElementById('delete-form').submit();
			  	}">
			  	<i class="fas fa-archive"></i>Delete</a>
			  	<form id="delete-form" action="{{ route('posts.destroy', [$post->id]) }}" method="POST" style="display: none">
			  		<input type="hidden" name="_method" value="delete">{{ csrf_field() }}
			  	</form>
			  </td>
			@endauth
			</tr>
		@endforeach
	  </tbody>
	</table>



</div>
@endsection