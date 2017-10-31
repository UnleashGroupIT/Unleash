@extends('amsterdam.main')

@section('title', 'Floorplan')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/common.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/floorplan.css') }}">
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
				<h2>Amsterdam RAI</h2>
				<p>The RAI Amsterdam, home to UNLEASH, is one of the leading international exhibitions and congress centres in Europe located just a few minutes from the city center.  One of the greatest small cities in the world and a city of tolerance and diversity, Amsterdam has all the advantages of a big city and is one of 
the top financial centers in Europe.  Amsterdam is considered an alpha world city and was ranked the second best city in which to live by the Economist Intelligence Unit.</p>
			</div>
			<button class="blue-btn popup" data-popupdata="booknow">Get Your Ticket</button>
		</div>
	</section>

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
					<p>The RAI Amsterdam, home to UNLEASH, is one of the leading international exhibitions and congress centres in Europe located just a few minutes from the city center.</p>
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
			<h2>Hurry Up!</h2>
			<p>Unleash Yourself! Book your place at the world's leading and fastest growing show on the future of work. Now is the time to face the challenge of change. Set your people loose and power your organization into the next decade of the 21st Century.</p>
			<button class="blue-btn popup" data-popupdata="booknow">Book now 2018</button>
		</div>
	</section>
@endsection