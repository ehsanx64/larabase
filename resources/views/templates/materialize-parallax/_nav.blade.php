<nav class="white" role="navigation">
	<div class="nav-wrapper container">
		<a id="logo-container" href="{{ $app_url }}" class="brand-logo">{{ $app_title }}</a>
		<ul class="right hide-on-med-and-down">
			<li>
				<a href="/loose">{{ __('Loose') }}</a>
			</li>
		</ul>

		<ul id="nav-mobile" class="sidenav">
			<li>
				<a href="/loose">{{ __('Loose') }}</a>
			</li>
		</ul>
		<a href="#" data-target="nav-mobile" class="sidenav-trigger">
			<i class="material-icons">menu</i></a>
	</div>
</nav>
