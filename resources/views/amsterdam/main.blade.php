<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="Unleash"/>

    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

     <!-- Browser color  -->
    <meta name="theme-color" content="#00a8e2">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#00a8e2">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#00a8e2">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('gfx/amsterdam/favicon/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('gfx/amsterdam/favicon/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('gfx/amsterdam/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('gfx/amsterdam/favicon/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('gfx/amsterdam/favicon/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('gfx/amsterdam/favicon/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('cgfx/amsterdam/favicon/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('gfx/amsterdam/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('gfx/amsterdam/favicon/apple-touch-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('cgfx/amsterdam/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('gfx/amsterdam/favicon/favicon-128.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('gfx/amsterdam/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('gfx/amsterdam/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('gfx/amsterdam/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('gfx/amsterdam/favicon/favicon-196x196.png') }}">
    <link rel="manifest" href="{{ URL::asset('gfx/amsterdam/favicon/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ URL::asset('gfx/amsterdam/favicon/ms-icon-144x144.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Unleash Confrence | @yield('title')</title>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/reset.css') }}">

	 @yield('headercss')
	 
     @include('amsterdam.components.fixedjs')

	 @yield('headerjs')

</head>
<body>


	<!--Header-->
	<header>

	 @include('amsterdam.components.menu')
		<!--Menu icon in lower sizes.-->


		<div class="hamb-wrp">
			<!--Logo-->
			<div id="unleash-logo">
				<a href="/">
					<h1>
						<img src="{{ URL::asset('gfx/amsterdam/logo.png') }}" alt="Unleash logo" title="HOME">
					</h1>
				</a>
			</div>
			<div id="hamburger">
				<div class="bar"></div>
			</div>
		</div>

 	@yield('headercontent')		

	<!--Mainsponsors END-->
	</header>
	<!--Header END-->

	@yield('maincontent')	

	<!--Footer-->

	 @include('amsterdam.components.footer')
	 <div id="MiscScripts">
	 	@include('globalscript')
	</div>

</body>
@yield('footerscripts')

</html>