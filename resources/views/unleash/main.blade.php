<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="Unleash"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Unleash - @yield('title')</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">

	 @yield('headercss')
	 
	 @yield('headerjs')

</head>
<body>


	<!--Header-->
	<header>

	 @include('components.menu')
		<!--Menu icon in lower sizes.-->


		<div class="hamb-wrp">
			<!--Logo-->
			<div id="unleash-logo">
				<a href="/">
					<h1>
						<img src="./gfx/logo.png" alt="Unleash logo" title="HOME">
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

	 @include('components.footer')

</body>
@yield('footerscripts')

</html>