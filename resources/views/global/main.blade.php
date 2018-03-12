<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

 	 @yield('meta')

     <!-- Browser color  -->
    <meta name="theme-color" content="#4AD9D9">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#4AD9D9">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#4AD9D9">

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
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('gfx/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('gfx/favicon/favicon-128.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('gfx/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('gfx/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('gfx/favicon/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('gfx/favicon/favicon-196x196.png') }}">
    <link rel="manifest" href="{{ URL::asset('gfx/favicon/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ URL::asset('gfx/favicon/ms-icon-144x144.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

	
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>UNLEASH @yield('title')</title>


	 @yield('headercss')
	 

	 @yield('headerjs')




<!--Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-69202140-18"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-69202140-18');
</script>
<!-- CrazyEgg -->
<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0046/2666.js" async="async"></script>

<!-- Google API for MAPS -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC23Ed2Jj6V22JPpxKutPZnH1LiJ7tabsA&callback=initMap"
                    type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
var formId = null;
var doSubmit = false;
</script>						
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
				
				 <ul class="menu-ul">
				 	<li class="sub-menu--li">
						<nav id="sub" class="sub-menu">
							<ul class="spec-menu amsterdam">
								<li><a href="{{ route('london.index') }}">HOME</a></li>
								<li><a href="{{ route('london.speakers') }}">SPEAKERS</a></li>
								<li><a href="{{ route('london.agenda') }}">AGENDA</a></li>
								<li><a href="{{ route('london.sponsors') }}">SPONSORS</a></li>
								<li><a href="{{ route('global.startup') }}">STARTUPS</a></li>
								<li><a href="{{ route('london.venue') }}">VENUE</a></li>
								<li><a href="{{ route('london.tickets') }}">TICKETS</a></li>
							</ul>
						</nav>
					</li>
					<li><a href="/" title="NEWS">News</a></li>
					<!--Dropdownbox for the menu-->
					<li title="EVENTS" class="more opened">
						<a class="more-a">Events</a>
						<!--Double wrap to prevent hover interrupt-->
						<div class="dropdownbox">
							<div class="ul-wrp">
								<h4>Where would you like to go?</h4>
								<ul class="first-ul">
									<li class="london" title="LONDON">
										<a class="prevent" href="{{ route('london.index') }}">
											<img src="{{ URL::asset('gfx/london-box.png') }}" alt="LONDON">
											<div class="brdr"></div>
										</a>
										<ul class="subs-ul">
											<li><a href="{{ route('london.index') }}">Home</a></li>
											<li><a href="{{ route('london.speakers') }}">Speakers</a></li>
											<li><a href="{{ route('london.agenda') }}">Agenda</a></li>
											<li><a href="{{ route('london.sponsors') }}">Sponsors</a></li>
											<li><a href="{{ route('london.volunteer') }}">Volunteer</a></li>
											<li><a href="{{ route('london.venue') }}">Venue</a></li>
											<li><a href="{{ route('london.floorplan') }}">Floor plan</a></li>
											<li><a href="{{ route('london.travel') }}">Travel</a></li>
											<li><a href="{{ route('london.tickets') }}">Tickets</a></li>
										</ul>
									</li>
									<li class="lasvegas" title="LAS VEGAS">
										<a class="prevent" href="{{ route('lasvegas.index') }}">
											<img src="{{ URL::asset('gfx/vegas-box.png') }}" alt="LAS VEGAS">
											<div class="brdr"></div>
										</a>
										<ul class="subs-ul">
											<li><a href="{{ route('lasvegas.index') }}">Home</a></li>
											<li><a href="{{ route('lasvegas.speakers') }}">Speakers</a></li>
											<li><a href="{{ route('lasvegas.sponsors') }}">Sponsors</a></li>
											<li><a href="{{ route('lasvegas.agenda') }}">Agenda</a></li>
											<li><a href="{{ route('lasvegas.volunteer') }}">Volunteer</a></li>
											<li><a href="{{ route('lasvegas.travel') }}">Venue &amp; Travel</a></li>
											<li><a href="{{ route('america.floorplan') }}">Floor plan</a></li>
											<li><a href="{{ route('lasvegas.tickets') }}">Tickets</a></li>
										</ul>
									</li>
									<li class="amsterdam" title="AMSTERDAM">
										<a class="prevent" href="{{ route('ams.index') }}">
											<img src="{{ URL::asset('gfx/ams-box.png') }}" alt="AMSTERDAM">
											<div class="brdr"></div>
										</a>
										<ul class="subs-ul">
											<li><a href="{{ route('ams.index') }}">Home</a></li>
											<li><a href="{{ route('ams.index') }}#spkrgrd">Speakers</a></li>
											<li><a href="{{ route('ams.sponsors') }}">Our Clients</a></li>
											<li><a href="{{ route('ams.floorplan') }}">Venue</a></li>
											<li><a href="{{ route('ams.tickets') }}">Tickets</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="{{ route('global.startup') }}">Startup</a></li>
					<li><a href="{{ route('ams.about') }}">About</a></li>
					<li><a href="https://careers.unleashgroup.io/homepage">Careers</a></li>
					<li><a href="{{ route('media') }}">Media</a></li>
				</ul>	
				 
				<div class="social-booknow">
					<div class="icos-wrp">
						<div><a href="https://www.youtube.com/user/hrneurope/"><img class="youtube" src="{{ URL::asset('gfx/youtube-white.svg') }}" alt="Youtube"></a></div>
						<div><a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a></div>
						<div><a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a></div>
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
		<nav id="sub" class="sub-menu">
			<ul class="spec-menu amsterdam">
				<li><a href="{{ route('london.index') }}">HOME</a></li>
				<li><a href="{{ route('london.speakers') }}">SPEAKERS</a></li>
				<li><a href="{{ route('london.agenda') }}">AGENDA</a></li>
				<li><a href="{{ route('london.sponsors') }}">SPONSORS</a></li>
				<li><a href="{{ route('london.volunteer') }}">VOLUNTEER</a></li>
				<li><a href="{{ route('london.venue') }}">VENUE</a></li>
				<li><a href="{{ route('london.travel') }}">TRAVEL</a></li>
				<li><a href="{{ route('london.tickets') }}">TICKETS</a></li>
			</ul>
		</nav>
		<div class="mobileButtons">
			<a href="{{ route('london.agenda') }}"><button id="mobileTicket">Agenda</button></a>
			<a href="{{ route('london.speakers') }}"><button id="mobileTicket">SPEAKERS</button></a>
			<a href="{{ route('london.tickets') }}"><button id="mobileTicket">TICKETS</button></a>
		</div>
		
		
		<!--Menu icon in lower sizes.-->
 	@yield('headercontent')		

	<!--Mainsponsors END-->
	</header>
	<!--Header END-->

	@yield('maincontent')	

	<!--Footer-->

	 @include('london.components.footer')
     @include('london.components.fixedjs')	 
	 <div id="MiscScripts">
	 	@include('globalscript')
	</div>
    @include('london.components.popup')


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
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/flipclock.css') }}">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</html>