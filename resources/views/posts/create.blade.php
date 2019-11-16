@extends("$template/page")

@section('page-content')
	<div class="post-create">
		<div class="row">
			<form action="{{ action('PostController@store') }}" method="post" class="col s12">
				{{ csrf_field() }}

				<div class="input-field col s12">
					<input id="title" name="title" type="text" class="validate">
					<label for="title">{{ __('Title') }}</label>
				</div>

				<div class="input-field col s12">
					<textarea id="excerpt" name="excerpt" class="materialize-textarea"></textarea>
					<label for="excerpt">{{ __('Excerpt') }}</label>
				</div>

				<div class="input-field col s12">
					<textarea id="content" name="content" class="materialize-textarea"></textarea>
					<label for="content">{{ __('Content') }}</label>
				</div>

				<div class="input-field col s12">
					<input id="published_at" name="published_at" type="text" class="validate" value="{{ date('Y-m-d') }}">
					<label for="published_at">{{ __('Publish Date') }}</label>
				</div>

				<div class="col s12">
					<input type="submit" class="waves-effect waves-light btn" value="{{ __('Create') }}" />
				</div>
			</form>

			{{-- TODO: Make error list structure/style better --}}
			@if ($errors->any())
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif
		</div>
	</div>
@endsection()
