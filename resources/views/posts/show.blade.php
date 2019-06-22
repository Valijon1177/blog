@extends('posts.default')

@section('content')
<div class="container">
	<h2 class="text-primary text-center">{{ $post->title }}</h1>
	<p class="lead">{{ $post->content }}</p>
	<a href="{{ route('posts.index') }}">All posts</a>
</div>
@endsection