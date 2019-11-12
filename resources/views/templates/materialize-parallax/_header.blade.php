<!DOCTYPE html>
<html lang="{{ $page_language }}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>{{ $page_title }}</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{ $assets }}/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="{{ $assets }}/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

	@if($page_language === 'fa')
		<link type="text/css" rel="stylesheet" href="{{ $assets }}/rtl/rtl.css"/>
	@endif

</head>
<body>
@include("$template/_nav")

