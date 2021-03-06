<!DOCTYPE html>
<html lang="{{ $page_language }}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>{{ $page_title }}</title>

	<link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>

	<!-- CSS  -->
	<link type="text/css" rel="stylesheet" href="{{ $assets }}/css/material-icons.css" media="screen, projection"/>
	<link href="{{ $assets }}/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

	<link href="{{ $assets }}/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

	@if($page_language === 'fa')
		<link type="text/css" rel="stylesheet" href="{{ $assets }}/rtl/rtl.css"/>
	@endif

</head>
<body>

