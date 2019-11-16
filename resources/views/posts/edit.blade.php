@extends("$template/page")

@section('page-content')
	<div class="post-edit">
		<div class="row">
			<form action="{{ action('PostController@update', $post->id) }}" method="POST" class="col s12">
				<input type="hidden" name="_method" value="PATCH" />
				@include('posts._form')
			</form>

			@include('posts._errors')
		</div>
	</div>
@endsection()
