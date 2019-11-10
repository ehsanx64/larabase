<!DOCTYPE html>
<html lang="{{ $pagelanguage }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="{{ $assets }}/css/materialize.min.css" media="screen, projection"/>
    <link type="text/css" rel="stylesheet" href="{{ $assets }}/css/font-awesome.min.css" media="screen, projection"/>
	<link type="text/css" rel="stylesheet" href="{{ $assets }}/css/custom.css"/>
    <link type="text/css" rel="stylesheet" href="{{ $assets }}/rtl/rtl.css"/>
	<title>@hasSection('custom-page-title') @yield('custom-page-title') @else {{ $pagetitle }}@endif</title>
</head>

<body>
	@include('templates/admin-materialize/nav')

	<div class="container">
		<div class="row">
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
		</div>
	</div>

	<script type="text/javascript" src="{{ $assets }}/js/jquery.min.js"></script>
	<script type="text/javascript" src="{{ $assets }}/js/materialize.min.js"></script>
	<script type="text/javascript" src="{{ $assets }}/js/custom.js"></script>
</body>
</html>
