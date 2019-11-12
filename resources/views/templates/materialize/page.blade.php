@include("$template/_header")

	<div class="container">
		<div class="row">
			@if (isset($sidebar_content) && !empty($sidebar_content))
				<div class="col s12 m3 sidebar-wrapper">
					<div class="row">
						{!! $sidebar_content !!}
					</div>
				</div>

				<div class="col s12 m9 content-wrapper">
					<div class="row">
						@yield('page-content')
					</div>
				</div>
			@else
				<div class="col s12 content-wrapper">
					<div class="row">
						@yield('page-content')
					</div>
				</div>
			@endif
		</div>
	</div>

@include("$template/_footer")
