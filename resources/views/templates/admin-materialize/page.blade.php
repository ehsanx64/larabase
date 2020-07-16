<!DOCTYPE html>
<html lang="{{ $page_language }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="{{ $assets }}/css/materialize.min.css" media="screen, projection"/>
    <link type="text/css" rel="stylesheet" href="{{ $assets }}/css/font-awesome.min.css" media="screen, projection"/>
	<link type="text/css" rel="stylesheet" href="{{ $assets }}/css/material-icons.css" media="screen, projection"/>
	<link type="text/css" rel="stylesheet" href="{{ $assets }}/css/custom.css"/>
    <link type="text/css" rel="stylesheet" href="{{ $assets }}/rtl/rtl.css"/>
	<title>@hasSection('custom-page-title') @yield('custom-page-title') @else {{ $page_title }}@endif</title>
</head>

<body>
	@yield('page-content')

	<script type="text/javascript" src="{{ $assets }}/js/jquery.min.js"></script>
	<script type="text/javascript" src="{{ $assets }}/js/materialize.min.js"></script>
	<script type="text/javascript" src="{{ $assets }}/js/custom.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
