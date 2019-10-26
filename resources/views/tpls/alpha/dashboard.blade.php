<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="/f_first/css/materialize.min.css" media="screen, projection"/>
    <link type="text/css" rel="stylesheet" href="/f_first/css/font-awesome.min.css" media="screen, projection"/>
    <link type="text/css" rel="stylesheet" href="/f_first/rtl/rtl.css"/>
	<title>{{ $pagetitle }}</title>
</head>

<body>
	@include('tpls/alpha/nav')

	<div class="container">
		<div class="row">
			@include('tpls.alpha.sidebar')
			@include('tpls.alpha.content')
		</div>
	</div>

	<script type="text/javascript" src="/f_first/js/jquery.min.js"></script>
	<script type="text/javascript" src="/f_first/js/materialize.min.js"></script>
	<script type="text/javascript" src="/f_first/js/custom.js"></script>
</body>
</html>
