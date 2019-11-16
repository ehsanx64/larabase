@extends("$template/page")

@section('page-content')
	<div class="post-list">
		@foreach ($posts as $post)
			<article>
				<h3><a href="{{ action('PostController@show', $post->id) }}">{{ $post->title }}</a></h3>
				<p>{{ $post->excerpt }}</p>
			</article>
		@endforeach
	</div>
@endsection()
