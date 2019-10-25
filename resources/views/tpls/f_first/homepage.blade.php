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
        </div>
    </nav>
</div>

<div class="container">
	<div class="row">
		<div class="col s12">
			@yield('pagecontent')
		</div>
    </div>
</div>

<footer class="page-footer">
    <div class="container">
		<div class="row">
			@yield('pagefooter')
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>

<script type="text/javascript" src="/f_first/js/jquery.min.js"></script>
<script type="text/javascript" src="/f_first/js/materialize.min.js"></script>
</body>
</html>
