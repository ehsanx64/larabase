@extends("$template/page")
@section('page-content')
	<div class="post-create">
		<div class="row">
			<div class="col-xs-12">
				<form action="{{ action('PostController@store') }}" method="POST">
					@include('posts._form')
				</form>

				@include('posts._errors')
			</div>
		</div>
	</div>
@endsection()
