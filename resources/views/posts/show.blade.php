@extends("$template/page")

@section('page-content')
	<div class="post-content">
		<article>
			<h3>{{ $post->title }}</h3>
			<p>{{ $post->content }}</p>
		</article>
	</div>
@endsection()
