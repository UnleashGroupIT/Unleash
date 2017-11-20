@extends('amsterdam.main')

@section('meta')
 <meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018.">
 
	  <!-- Open Graph data -->
	<meta property="og:site_name" content="UNLEASH Amsterdam - Venue"/>
	<meta property="og:title" content="UNLEASH Amsterdam - Venue"/>
	<meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018."/>
	<meta property="og:url" content="http://www.unleashgroup.io/amsterdam/venue">
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="{{ URL::asset('gfx/amsterdam/UNLEASH_metashare_amsterdam.png') }}" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@hrtechworld">
	<meta name="twitter:creator" content="@hrneurope">
	<meta name="twitter:title" content="UNLEASH Amsterdam - Venue">
	<meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018." />
	<meta name="twitter:image" content="{{ URL::asset('gfx/amsterdam/UNLEASH_metashare_amsterdam.png') }}">
		
@endsection

@section('title', 'Venue')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/common.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/floorplan.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>Amsterdam</h2>
				<p>Known for it’s tolerance and openness Amsterdam is the world’s most multicultural city, as well as being a leading financial centre, and a major arts and cultural capital. A leading world trading centre Amsterdam features on many indexes as one of the best places to live.</p>
			</div>
			<button class="blue-btn popup" data-popupdata="booknow">Book now 2018</button>
		</div>
		<div class="wrppr">
			<div class="fix-bg floorplancitybg"></div>
		</div>
	</section>
	<!--Expo END-->

	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>Known for it’s tolerance and openness Amsterdam is the world’s most multicultural city, as well as being a leading financial centre, and a major arts and cultural capital.</p>
				</div>
				<button class="blue-btn popup" data-popupdata="joinourcommunity">Join Us</button>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Yourself! Book your place at the world's leading and fastest growing show on the future of work. Now is the time to face the challenge of change. Set your people loose and power your organization into the next decade of the 21st Century.</p>
			<button class="blue-btn popup" data-popupdata="booknow">Book now 2018</button>
		</div>
	</section>
@endsection