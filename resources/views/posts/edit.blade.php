@extends("$template/page")

@php TH::setModel($model) @endphp
@section('page-content')
	<div class="post-edit">
		<div class="row">
			{!! TH::formBegin('PostController@update', "PATCH", $model->id) !!}
			@include('posts._form')
			{!! TH::formEnd() !!}
			{{--<form action="{{ action('PostController@update', $model->id) }}" method="POST" class="col s12">--}}
				{{--<input type="hidden" name="_method" value="PATCH" />--}}
			{{--</form>--}}

			@include('posts._errors')
		</div>
	</div>
@endsection()
