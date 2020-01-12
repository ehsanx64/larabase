<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>داشبرد | کنترل پنل مدیریت</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{ $assets }}/dist/css/bootstrap-theme.css">
	<!-- Bootstrap rtl -->
	<link rel="stylesheet" href="{{ $assets }}/dist/css/rtl.css">
	<!-- persian Date Picker -->
	<link rel="stylesheet" href="{{ $assets }}/dist/css/persian-datepicker-0.4.5.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ $assets }}/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ $assets }}/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="{{ $assets }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ $assets }}/dist/css/AdminLTE.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{ $assets }}/dist/css/skins/_all-skins.min.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="{{ $assets }}/bower_components/morris.js/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="{{ $assets }}/bower_components/jvectormap/jquery-jvectormap.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{ $assets }}/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="{{ $assets }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<link rel="stylesheet" href="{{ $assets }}/dist/css/custom.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<header class="main-header">
		@include("$template/_header")
	</header>

	<!-- right side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		@include("$template/_sidebar")
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<h2>
							{{ $title }}
							<small>{{{ $subTitle or '' }}}</small>
						</h2>
						<ol class="breadcrumb">
							<li>
								<a href="{{ url('/admin') }}">
									<i class="fa fa-dashboard"></i>&nbsp;{{ __('Control Panel') }}</a>
							</li>
							<li class="active">
								@if (isset($mainLink))
									<a href="{{ $mainLink }}">{{ $title }}</a>
								@else
									{{ $title }}
								@endif
							</li>
							@if (isset($subTitle))
								<li>{{ $subTitle }}</li>
							@endif
						</ol>

					</div>

				</div>
			</div>

		</section>

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- Main row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-header">

							</div>
							<div class="box-body">
								@yield('page-content')
							</div>
						</div>
					</div>
				</div>
				<!-- /.row (main row) -->
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<footer class="main-footer text-left">
		<strong style="display: block; text-align: center;">کلیه حقوق متعلق به <a href="https://ehsanm.net" target="_blank" style="cursor: pointer;">احسان محمّدی</a>
			میباشد</strong>
	</footer>

	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<div class="modal fade" id="main-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">خروج
				</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- jQuery 3 -->
<script src="{{ $assets }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ $assets }}/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ $assets }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{ $assets }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ $assets }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Morris.js charts -->
{{--<script src="{{ $assets }}/bower_components/raphael/raphael.min.js"></script>--}}
{{--<script src="{{ $assets }}/bower_components/morris.js/morris.min.js"></script>--}}
<!-- Sparkline -->
<script src="{{ $assets }}/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ $assets }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ $assets }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ $assets }}/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ $assets }}/bower_components/moment/min/moment.min.js"></script>
<script src="{{ $assets }}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ $assets }}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ $assets }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{ $assets }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ $assets }}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ $assets }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ $assets }}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ $assets }}/dist/js/demo.js"></script>
<script src="{{ $assets }}/js/scripts.js"></script>
</body>
</html>
