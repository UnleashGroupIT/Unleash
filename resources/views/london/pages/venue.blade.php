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
	<link rel="stylesheet" type="text/css" href="{{ mix('css/london/venue.css') }}">

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
				<p>The ExCeL London, will host UNLEASH in March 2018. The ExCeL is London and the UK's leading venue for exhibitions and conferences. With two on-site metro stations, parking for 3,700 cars and London City Airport just five minutes away, getting to ExCeL London couldn't be easier. Just a short ride by metro or car takes you to the heart of London, a leading global city, world cultural capital and leading financial center has been measured as the world’s most visited capital city. </p>
			</div>
			<a href="https://www.excel.london/" target="_blank"><button class="green-btn">Learn More</button></a>
		</div>
	</section>

	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>London</h2>
				<p>The world’s foremost financial center and a leading global and cultural capital, London is one of the world's most visited cities. London has something for everyone: from business and commerce through to history and culture, and it’s a great city for good times!</p>
			</div>
			<a href="{{ route('london.tickets') }}"><button class="green-btn">Book Now</button></a>
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
					<p>The ExCeL London, will host UNLEASH in March 2018. The ExCeL is London and the UK's leading venue for exhibitions and conferences. With two on-site metro stations, parking for 3,700 cars and London City Airport just five minutes away, getting to ExCeL London couldn't be easier.</p>
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
			<h2>Register Now!</h2>
			<p>Unleash Your People! Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology.</p>
			<a href="{{ route('london.tickets') }}"><button class="green-btn">Book Now</button></a>
		</div>
	</section>
@endsection