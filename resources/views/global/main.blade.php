<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

	@yield('meta')

     <!-- Browser color  -->
    <meta name="theme-color" content="#00a8e2">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#00a8e2">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#00a8e2">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('gfx/favicon/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('gfx/favicon/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('gfx/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('gfx/favicon/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('gfx/favicon/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('gfx/favicon/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('cgfx/favicon/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('gfx/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('gfx/favicon/apple-touch-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('cgfx/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('gfx/favicon/favicon-128.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('gfx/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('gfx/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('gfx/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('gfx/favicon/favicon-196x196.png') }}">
    <link rel="manifest" href="{{ URL::asset('gfx/favicon/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ URL::asset('gfx/favicon/ms-icon-144x144.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>UNLEASH Conference | @yield('title')</title>

	 @yield('headercss')

	 @yield('headerjs')


<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-69202140-20"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-69202140-20');
</script>
<!-- CrazyEgg -->
<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0046/2666.js" async="async"></script>

</head>
<body>


	<!--Header-->
	<header>

		<section id="header-menu">
			<div id="hamburger">
	            <div id="mobile-logo">
					<a href="/">
						<h1>
							<img src="{{ URL::asset('gfx/unleash-logo.png') }}" alt="Unleash logo" title="UNLEASH">
						</h1>
					</a>
				</div>	
	        	<div class="bar-wrp">
	        		<div class="bar"></div>
	        	</div>
        	</div>
			<!--Menu-->
			<nav id="desktop-menu">
				<!--Logo-->
				<div id="unleash-logo">
					<a href="/">
						<h1>
							<img id="full-logo" src="{{ URL::asset('gfx/unleash-logo.png') }}" alt="Unleash logo" title="UNLEASH">
						</h1>
					</a>
				</div>
				<img id="x-btn" src="{{ URL::asset('gfx/x-btn.svg') }}" alt="X">
				
				@include('global.components.menu')
				
				<div class="social-booknow">
					<div class="icos-wrp">
						<div><a href="https://www.youtube.com/user/hrneurope/"><img class="youtube" src="{{ URL::asset('gfx/youtube-white.svg') }}" alt="Youtube"></a></div>
						<div><a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a></div>
						<div><a href="https://www.linkedin.com/groups/3930182/profile"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a></div>
						<div><a href="https://twitter.com/unleashgroup"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a></div>
					</div>
					<div class="envelope popup" data-popupdata="joinourcommunity">
					  <div class="icon-envelope"></div>
					  <div class="header"></div>
					  <div class="letter"></div>
					</div>
				</div>
					
				
			</nav>
		</section>
		
		
		<!--Menu icon in lower sizes.-->
 	@yield('headercontent')		

	<!--Mainsponsors END-->
	</header>
	<!--Header END-->

	@yield('maincontent')	

	<!--Footer-->

	 @include('global.components.footer')
     @include('global.components.fixedjs')	 
	 <div id="MiscScripts">
	 	@include('globalscript')
	</div>
	
    @include('global.components.popup')

 <!-- LiveChat code -->
<script type="text/javascript">
	window.__lc = window.__lc || {};
	window.__lc.license = 8465813;
	(function() {
	  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
	  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
	  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
	})();
</script>
<!-- END LiveChat code --> 

    @include('global.components.trackers') 
</body>
@yield('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/flipclock.css') }}">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</html>