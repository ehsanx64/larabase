<div class="navbar-fixed">
	<nav>
		<div class="nav-wrapper container">
			<a href="{{ URL::to('/') }}" class="brand-logo">{{ $app_title }}</a>
			<div class="navmenu right hide-on-med-and-down">
				<ul>
					<li><a href="#">آیتم ۱</a></li>
				</ul>
			</div>

			<div class="topmenu left">
				<ul>
                    <li><a href="/login">{{ __('Login') }}</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
