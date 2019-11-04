<!DOCTYPE html>
<html lang="{{ $language }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css" media="screen, projection"/>
    <link type="text/css" rel="stylesheet" href="/materialize/css/font-awesome.min.css" media="screen, projection"/>
    <link type="text/css" rel="stylesheet" href="/materialize/rtl/rtl.css"/>
    <link type="text/css" rel="stylesheet" href="/css/login.css"/>
	<title>{{ $pagetitle }}</title>
</head>

<body class="{{ $locale }}">
	@yield('page-content')

	<script type="text/javascript" src="/materialize/js/jquery.min.js"></script>
	<script type="text/javascript" src="/materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="/materialize/js/custom.js"></script>
</body>
</html>
