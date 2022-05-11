@extends('layouts.main')

@section('container')	
	
	@foreach ($posts as $post)
		<article>
			<h2>
			<a href="{{ url('/posts/'.$post["slug"])}}">{{ $post["title"] }}</a>
			</h2>
			<h5>By: {{ $post["author"] }}</h5>
			<p>{{ $post["body"] }}</p>
		</article>
	@endforeach	

		<!-- <a href="/coba-laravel2/public/about">Back to Posts</a>	 -->
@endsection

