@extends('lasvegas.main')

@section('title', 'Floorplan')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/floorplan.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/common.css') }}">
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
				<p>Unleash is delighted to be making it's US home at the Aria Resort and Casino in Las Vegas, one of North America's premier destinations for large-scale meetings and shows. Described in Popular Mechanics as possibly "the most technologically advanced hotel ever built" the Aria has something for everyone, including a casino, 16 restaurants, bars, nightclubs, pools, and shopping. The Aria’s technologically advanced, flexible meeting space is highlighted by stunning indoor/open-air spaces and a glass-enclosed venue with dramatic views of The Park and the spectacular new T-Mobile Arena.</p>
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
					<p>Unleash is delighted to be making it's US home at the Aria Resort and Casino in Las Vegas, one of North America's premier destinations for large-scale meetings and shows.</p>
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
			<h2>Hurry Up!</h2>
			<p>Unleash Yourself! Book your place at the world's leading and fastest growing show on the future of work. Now is the time to face the challenge of change. Set your people loose and power your organization into the next decade of the 21st Century.</p>
			<button class="red-btn popup" data-popupdata="booknow">Book now</button>
		</div>
	</section>
@endsection