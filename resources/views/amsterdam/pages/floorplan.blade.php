@extends('amsterdam.main')

@section('title', 'Floorplan')

@section('headercss')
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
				<p>The RAI Amsterdam, home to Unleash, is one of the leading international exhibitions and congress centre’s in Europe located just a few minutes from the city center.  One of the greatest small cities in the world and a city of tolerance and diversity, Amsterdam has all the advantages of a big city and is one of 
the top financial centers in Europe.  Amsterdam is considered an alpha world city and was ranked the second best city in which to live by the Economist Intelligence Unit.</p>
			</div>
			<button class="blue-btn">Get Your Ticket</button>
		</div>
	</section>

	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>Amsterdam</h2>
				<p>The RAI Amsterdam, home to Unleash, is one of the leading international exhibitions and congress centre’s in Europe located just a few minutes from the city center.  One of the greatest small cities in the world and a city of tolerance and diversity, Amsterdam has all the advantages of a big city and is one of 
the top financial centers in Europe.  Amsterdam is considered an alpha world city and was ranked the second best city in which to live by the Economist Intelligence Unit.</p>
			</div>
			<button class="blue-btn">Book now</button>
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
					<p>The RAI Amsterdam, home to Unleash, is one of the leading international exhibitions and congress
						centre’s in Europe located just a few minutes from the city center.</p>
				</div>
				<button class="blue-btn">More</button>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Hurry Up!</h2>
			<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed.</p>
			<button class="amsblue-btn">cta</button>
		</div>
	</section>
@endsection