{{-- TODO: Make error list structure/style better --}}
@if ($errors->any())
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif
