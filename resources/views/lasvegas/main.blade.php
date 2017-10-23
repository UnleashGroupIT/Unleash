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
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('gfx/lasvegas/favicon/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('gfx/lasvegas/favicon/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('gfx/lasvegas/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('gfx/lasvegas/favicon/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('gfx/lasvegas/favicon/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('gfx/lasvegas/favicon/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('cgfx/lasvegas/favicon/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('gfx/lasvegas/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('gfx/lasvegas/favicon/apple-touch-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('gfx/lasvegas/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('gfx/lasvegas/favicon/favicon-128.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('gfx/lasvegas/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('gfx/lasvegas/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('gfx/lasvegas/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('gfx/lasvegas/favicon/favicon-196x196.png') }}">
    <link rel="manifest" href="{{ URL::asset('gfx/lasvegas/favicon/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ URL::asset('gfx/lasvegas/favicon/ms-icon-144x144.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Unleash Confrence | @yield('title')</title>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/reset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/menu.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/menu.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/popup.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/popup.css') }}">

	 @yield('headercss')
	 
     @include('lasvegas.components.fixedjs')

	 @yield('headerjs')


<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-69202140-19"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-69202140-19');
</script>

<!-- Crazyegg -->
<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0046/2666.js" async="async"></script>
</head>
<body>


	<!--Header-->
	<header>

	 @include('lasvegas.components.menu')
		<!--Menu icon in lower sizes.-->


		<div class="hamb-wrp">
			<!--Logo-->
			<div id="unleash-logo">
				<a href="/">
					<h1>
						<img src="{{ URL::asset('gfx/lasvegas/logo.png') }}" alt="Unleash logo" title="HOME">
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

	 @include('lasvegas.components.footer')
	 <div id="MiscScripts">
	 	@include('globalscript')
	</div>
    @include('lasvegas.components.popup')
</body>
@yield('footerscripts')
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</html>