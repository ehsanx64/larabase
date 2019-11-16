@extends("$template/page")

@section('page-content')
	<div class="post-create">
		<div class="row">
			<form action="{{ action('PostController@store') }}" method="post" class="col s12">
				@include('posts._form')
			</form>

			@include('posts._errors')
		</div>
	</div>
@endsection()
