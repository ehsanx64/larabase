@extends("$template/page")
@section('page-content')
	<div class="post-create">
		<div class="row">
			{!! TH::formBegin('PostController@store', "POST") !!}
			@include('posts._form')
			{!! TH::formEnd() !!}

			{{--<form action="{{ action('PostController@store') }}" method="post" class="{{ TH::$formClass }}">--}}
				{{--@include('posts._form')--}}
			{{--</form>--}}

			@include('posts._errors')
		</div>
	</div>
@endsection()
