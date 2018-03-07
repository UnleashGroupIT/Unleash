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
	<link rel="stylesheet" type="text/css" href="{{ mix('css/amsterdam/venue.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>Amsterdam</h2>
				<p>Known for its openness, Amsterdam is one of the world’s most multicultural cities, a leading financial centre, and a major arts and cultural capital. A leading world trading centre Amsterdam features on many indexes as one of the best places to live.</p>
			</div>
			<button class="blue-btn popup" data-popupdata="booknow">Book now</button>
		</div>
		<div class="wrppr">
      <div class="img-bg venue1"></div>
    </div>
	</section>
	<!--Expo END-->

	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>Known for its openness, Amsterdam is one of the world’s most multicultural cities, a leading financial centre, and a major arts and cultural capital.</p>
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
			<p>Unleash Your People! Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology.</p>
			<button class="red-btn popup" data-popupdata="booknow">Register now</button>
		</div>
	</section>
@endsection