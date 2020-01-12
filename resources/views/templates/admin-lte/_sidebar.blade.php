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
		<li class="header">منو</li>
		<li class="{{ TH::handleActiveMenu('users') }}">
			<a href="/index.php/users">
				<i class="fa fa-users"></i> <span>کاربران</span>
			</a>
		</li>
		<li class="{{ TH::handleActiveMenu('requests') }}">
			<a href="/index.php/requests">
				<i class="fa fa-file-text-o"></i> <span>درخواست‌ها</span>
			</a>
		</li>
		<li class="{{ TH::handleActiveMenu('suggests') }}">
			<a href="/index.php/suggests">
				<i class="fa fa-commenting"></i> <span>پیشنهادات</span>
			</a>
		</li>
		<li class="treeview {{ TH::handleActiveMenu('services') }}">
			<a href="#">
				<i class="fa fa-folder"></i> <span>خدمات</span>
				<span class="pull-left-container">
                          <i class="fa fa-angle-right pull-left"></i>
                        </span>
			</a>
			<ul class="treeview-menu">
				<li>
					<a href="/index.php/services"><i class="fa fa-th"></i>لیست خدمات</a>
				</li>
				<li>
					<a href="/index.php/services/create"><i class="fa fa-circle-o"></i>خدمت
						جدید
					</a>
				</li>
			</ul>
		</li>
		<li class="{{ TH::handleActiveMenu('ads') }}">
			<a href="/index.php/ads">
				<i class="fa fa-eye"></i> <span>تبلیغات</span>
			</a>
		</li>
		<li class="{{ TH::handleActiveMenu('receipts') }}">
			<a href="/index.php/receipts">
				<i class="fa fa-money"></i> <span>پرداخت‌ها</span>
			</a>
		</li>
		<li class="treeview {{ TH::handleActiveMenu('units') }}">
			<a href="#">
				<i class="fa fa-folder"></i> <span>واحدها</span>
				<span class="pull-left-container">
                          <i class="fa fa-angle-right pull-left"></i>
                        </span>
			</a>
			<ul class="treeview-menu">
				<li>
					<a href="/index.php/units"><i class="fa fa-circle-o"></i>لیست واحدها</a>
				</li>
				<li>
					<a href="/index.php/units/create"><i class="fa fa-circle-o"></i>واحد
						جدید
					</a>
				</li>
			</ul>
		</li>
	</ul>
</section>
