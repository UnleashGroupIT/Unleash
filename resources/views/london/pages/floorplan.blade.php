@extends('london.main')

@section('title', 'Floorplan')

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
				<h2>London</h2>
				<p>ExCeL London, will host Unleash in March 2018. ExCeL is London and the UK’s leading venue for exhibitions, conferences, and much more. With two on-site metro stations, parking for 3,700 cars and London City Airport just 5 minutes away, getting to ExCeL London couldn’t be easier.  Just a short ride by metro or car takes you to the heart of London, a leading global city, world cultural capital and leading financial center has been measured as the world’s most visited capital city. </p>
			</div>
			<button class="green-btn">Get Your Ticket</button>
		</div>
	</section>

	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>London</h2>
				<p>ExCeL London, will host Unleash in March 2018. ExCeL is London and the UK’s leading venue for exhibitions, conferences, and much more. With two on-site metro stations, parking for 3,700 cars and London City Airport just 5 minutes away, getting to ExCeL London couldn’t be easier.  Just a short ride by metro or car takes you to the heart of London, a leading global city, world cultural capital and leading financial center has been measured as the world’s most visited capital city.</p>
			</div>
			<button class="green-btn">Book now</button>
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
					<p>ExCeL London, will host Unleash in March 2018. ExCeL is London and the UK’s leading venue for exhibitions, conferences, and much more. With two on-site metro stations, parking for 3,700 cars and London City Airport just 5 minutes away, getting to ExCeL London couldn’t be easier.</p>
				</div>
				<button class="green-btn">More</button>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Hurry Up!</h2>
			<p>Unleash Yourself!  Book your place at the world’s leading and fastest growing show on the future of work.  Now is the time face the challenge of change and let your people loose to power your organization in the next decade of the 21st Century.</p>
			<button class="green-btn">Book now</button>
		</div>
	</section>
@endsection