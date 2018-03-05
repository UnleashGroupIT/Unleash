@extends('lasvegas.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018.">
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH America - Travel"/>
        <meta property="og:title" content="UNLEASH America - Travel"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/america/travel">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH America - Travel">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}">
@endsection

@section('title', 'Travel')

@section('headercss')

	<link rel="stylesheet" type="text/css" href="{{ mix('css/lasvegas/travel.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection

@section('maincontent')

	<section class="two keynote f">
		<div class="wrppr">
			<div class="img-bg travelbg"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>ARIA RESORT &amp; CASINO</h2>
				
				<p>UNLEASH is delighted to be making it's US home at the Aria Resort and Casino in Las Vegas, one of North America's premier destinations for large-scale meetings and shows. Described in Popular Mechanics as possibly "the most technologically advanced hotel ever built" the Aria has something for everyone, including a casino, 16 restaurants, bars, nightclubs, pools, and shopping. The Aria’s technologically advanced, flexible meeting space is highlighted by stunning indoor/open-air spaces and a glass-enclosed venue with dramatic views of The Park and the spectacular new T-Mobile Arena.</p>
				<h3>ADDRESS</h3>
				<p>3730 S Las Vegas Blvd, Las Vegas, NV 89158</p>							
			</div>
			<div class="schedule-wrp">
				<a href="https://www.google.hu/maps/place/ARIA+Resort+%26+Casino+Las+Vegas/@36.1074628,-115.1789045,17z/data=!3m2!4b1!5s0x80c8c431e35b9c4b:0xa1d65d6b6c79b3db!4m5!3m4!1s0x80c8c42e1d156485:0x2ef3882f44b3056f!8m2!3d36.1074585!4d-115.1767158?hl=hu" target="_blank"><button class="white-btn">Show on Map</button></a>
			</div>
		</div>
	</section>

	<section class="two keynote">
		<div class="content">
			<div class="content-wrap">
				<h2>Las Vegas</h2>
				<p>Las Vegas is an internationally renowned city, known primarily for its entertainment industry, shopping, fine dining, casinos, and nightlife. Las Vegas, home to many of the world’s leading conventions, is a place where deals can get done away from the hustle and pressure of the big capital cities.</p>
			</div>
		</div>
		<div class="wrppr">
			<div class="img-bg floorplanbg"></div>
		</div>
	</section>
	<section class="one-cntr vhcls">
		<div class="wrp">
			<h2>How to get there</h2>
			
			<div class="vehicles-wrp">
				<a href="https://www.aria.com/en/amenities/transportation.html" target="_blank">
					<div class="eliz">
						<p>Transportation</p>
						<span>From the monorail and limos to town cars and rentals, we have a variety of wheels to help you get out and explore all that Las Vegas has to offer.</span>
					</div>
				</a>
				<a href="https://www.aria.com/en/amenities/rideshare.html" target="_blank">
					<div class="car">
						<p>Uber</p>
						<span>ARIA and Uber have teamed up to help you get the most out of your stay here in Las Vegas. ARIA now has a designated pick up and drop off location to make your time here hassle free. Simply open the app, request and meet your driver.</span>
					</div>
				</a>
				<a href="https://www.aria.com/en/amenities/parking.html" target="_blank">
					<div class="park">
						<p>Parking</p>
						<span>Whether you are visiting for a few hours or for a few days, parking at ARIA will be easy and convenient during your stay. *Prices may be higher during special events. Parking fees are subject to change and parking is subject to availability.</span>
					</div>
				</a>				
			</div>

		</div>
	</section>

	<section id="map" class="map">
		<iframe src="https://snazzymaps.com/embed/48553" width="100%" height="600px" style="border:none;"></iframe>
		<div class="content">
			<div class="mapcont-wrp">
				<!-- Google API for MAP -->
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>UNLEASH is delighted to make its US home at the Aria Resort and Casino in Las Vegas, one of North America's premier destinations for large-scale meetings and shows.</p>
				</div>
				<button class="darkgreen-btn popup" data-popupdata="joinourcommunity">Join Our Community</button>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
@endsection