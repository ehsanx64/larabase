<!DOCTYPE html>
<html lang="{{ $pagelanguage }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css" media="screen, projection"/>
    <link type="text/css" rel="stylesheet" href="/materialize/css/font-awesome.min.css" media="screen, projection"/>
    <link type="text/css" rel="stylesheet" href="/materialize/rtl/rtl.css"/>
    <link type="text/css" rel="stylesheet" href="/css/login.css"/>
	<title>@hasSection('custom-page-title') @yield('custom-page-title') @else {{ $pagetitle }}@endif</title>
</head>

<body>
	@yield('page-content')
	<script type="text/javascript" src="/materialize/js/jquery.min.js"></script>
	<script type="text/javascript" src="/materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="/materialize/js/custom.js"></script>
</body>
</html>
