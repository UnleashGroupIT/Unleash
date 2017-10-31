@extends('london.main')

@section('meta')
 <meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
 
	  <!-- Open Graph data -->
	<meta property="og:site_name" content="UNLEASH London - Venue"/>
	<meta property="og:title" content="UNLEASH London - Venue"/>
	<meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
	<meta property="og:url" content="http://www.unleashgroup.io/london/venue">
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@hrtechworld">
	<meta name="twitter:creator" content="@hrneurope">
	<meta name="twitter:title" content="UNLEASH London - Venue">
	<meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
	<meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
		
@endsection

@section('title', 'London - Venue')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/floorplan.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/common.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

	<section class="two clients">
		<div class="wrppr">
			<div class="fix-bg floorplanbg"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>ExCel - London</h2>
				<p>ExCeL London, will host UNLEASH in March 2018. ExCeL is London and the UK's leading venue for exhibitions and conferences. With two on-site metro stations, parking for 3,700 cars and London City Airport just 5 minutes away, getting to ExCeL London couldn't be easier. Just a short ride by metro or car takes you to the heart of London, a leading global city, world cultural capital and leading financial center has been measured as the world’s most visited capital city. </p>
			</div>
			<button class="green-btn popup" data-popupdata="booknow">Get Your Ticket</button>
		</div>
	</section>

	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>London</h2>
				<p>The world’s foremost financial center and a leading global and cultural capital, London is one of the world's most visited cities. London has something for everyone: from business and commerce through to history and culture, and it’s a great city for good times!</p>
			</div>
			<button class="green-btn popup" data-popupdata="booknow">Book now</button>
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
					<p>ExCeL London, will host UNLEASH in March 2018. ExCeL is London and the UK's leading venue for exhibitions and conferences. With two on-site metro stations, parking for 3,700 cars and London City Airport just 5 minutes away, getting to ExCeL London couldn't be easier.</p>
				</div>
				<button class="green-btn popup" data-popupdata="joinourcommunity">Join Our Community</button>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Hurry Up!</h2>
			<p>Unleash Yourself! Book your place at the world's leading and fastest growing show on the future of work. Now is the time to face the challenge of change. Set your people loose and power your organization into the next decade of the 21st Century.</p>
			<button class="green-btn popup" data-popupdata="booknow">Book now</button>
		</div>
	</section>
@endsection