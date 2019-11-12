<!DOCTYPE html>
<html lang="{{ $page_language }}">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link type="text/css" rel="stylesheet" href="{{ $assets }}/css/materialize.min.css" media="screen, projection"/>
	<link type="text/css" rel="stylesheet" href="{{ $assets }}/css/font-awesome.min.css" media="screen, projection"/>
	<link type="text/css" rel="stylesheet" href="{{ $assets }}/css/material-icons.css" media="screen, projection"/>

	@if($page_language === 'fa')
		<link type="text/css" rel="stylesheet" href="{{ $assets }}/rtl/rtl.css"/>
	@endif

	<title>@hasSection('custom-page-title') @yield('custom-page-title') @else {{ $page_title }}@endif</title>
</head>

<body>
@include("$template/_nav")
