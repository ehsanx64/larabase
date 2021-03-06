<!-- Logo -->
<a href="{{ url('/admin') }}" class="logo">
	<!-- mini logo for sidebar mini 50x50 pixels -->
	<span class="logo-mini">{{ __('Panel') }}</span>
	<!-- logo for regular state and mobile devices -->
	<span class="logo-lg"><b>{{ __('Control Panel') }}</b></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		<span class="sr-only">{{ __('Toggle navigation') }}</span>
	</a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="{{ $assets }}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
					<span class="hidden-xs">{{ Auth::user()->name }}</span>
				</a>
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<img src="{{ $assets }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

						<p>
							{{ Auth::user()->name }}
							<small>{{ __('Website Administrator') }}</small>
						</p>
					</li>
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
							<a href={{ route('logout') }}" onClick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-info btn-flat">{{ __('Logout') }}</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</div>
					</li>
				</ul>
			</li>
			<!-- Control Sidebar Toggle Button -->
		</ul>
	</div>
</nav>
