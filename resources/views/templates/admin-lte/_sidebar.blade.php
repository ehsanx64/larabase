<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel">
		<div class="pull-right image">
			<img src="{{ $assets }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
		</div>
		<div class="pull-right info">
			<p>{{ Auth::user()->name }}</p>
		</div>
	</div>
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu" data-widget="tree">
		<li class="header">{{ __('Modules') }}</li>
		<li class="treeview {{ TH::handleActiveMenu('posts') }}">
			<a href="#">
				<i class="fa fa-folder"></i> <span>{{ __('Posts') }}</span>
				<span class="pull-left-container">
                          <i class="fa fa-angle-right pull-left"></i>
                        </span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ TH::handleActiveMenu('/posts') }}">
					<a href="{{ action('PostController@admin') }}"><i class="fa fa-th"></i>{{ __('Post List') }}</a>
				</li>
				<li class="{{ TH::handleActiveMenu('posts/create') }}">
					<a href="{{ action('PostController@create') }}"><i class="fa fa-circle-o"></i>{{ __('New Post') }}</a>
				</li>
			</ul>
		</li>
		<li class="{{ TH::handleActiveMenu('loose') }}">
			<a href="{{ action('LooseController@admin') }}">
				<i class="fa fa-commenting"></i> <span>{{ __('Loose') }}</span>
			</a>
		</li>
	</ul>
</section>
