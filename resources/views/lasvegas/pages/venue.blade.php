@extends('lasvegas.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018.">
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH America - Venue"/>
        <meta property="og:title" content="UNLEASH America - Venue"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/america/venue">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH America - Venue">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}">
@endsection

@section('title', 'Floorplan')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/lasvegas/venue.css') }}">
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
				<h2>Aria Resort &amp; Casino - Las Vegas</h2>
				<p>UNLEASH is delighted to make its U.S. home at the Aria Resort and Casino in Las Vegas, one of North America's premier destinations for large-scale meetings and shows. Described in Popular Mechanics as "the most technologically advanced hotel ever built" the Aria has something for everyone, including a casino, 16 restaurants, bars, nightclubs, pools, and shopping. The Aria’s technologically advanced, flexible meeting space is highlighted by stunning indoor/open-air spaces and a glass-enclosed venue with dramatic views of The Park and the spectacular new T-Mobile Arena.</p>
			</div>
			<button class="red-btn popup" data-popupdata="booknow">Get Your Ticket</button>
		</div>
	</section>

	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>Las Vegas</h2>
				<p>Las Vegas is an internationally renowned city, known primarily for its entertainment industry, shopping, fine dining, casinos, and nightlife.  Las Vegas, home to many of the world’s leading conventions, is a place where deals can get done away from the hustle and pressure of the big capital cities.</p>
			</div>
			<button class="red-btn popup" data-popupdata="booknow">Book now</button>
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
					<p>UNLEASH is delighted to make its US home at the Aria Resort and Casino in Las Vegas, one of North America's premier destinations for large-scale meetings and shows.</p>
				</div>
				<button class="red-btn popup" data-popupdata="joinourcommunity">Join Our Community</button>
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
			<button class="red-btn popup" data-popupdata="booknow">Book now</button>
		</div>
	</section>
@endsection