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
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper container">
				<a href="#!" class="brand-logo">{{ $apptitle }}</a>
				<ul class="right hide-on-med-and-down">
					<li>
						<a href="sass.html">Sass</a>
					</li>
					<li>
						<a href="badges.html">اجزا</a>
					</li>
				</ul>

				<ul class="left">
					<li>
						<a href="">System</a>
					</li>
					<li>
						<a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right"></i></a>
					</li>
				</ul>
				<ul id="dropdown1" class="dropdown-content">
					<li><a href="#!">one</a></li>
					<li><a href="#!">two</a></li>
					<li class="divider"></li>
					<li><a href="#!">three</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<script type="text/javascript" src="/f_first/js/jquery.min.js"></script>
	<script type="text/javascript" src="/f_first/js/materialize.min.js"></script>
	<script type="text/javascript" src="/f_first/js/custom.js"></script>
</body>
</html>
