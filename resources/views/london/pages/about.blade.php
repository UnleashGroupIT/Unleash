@extends('london.main')

@section('title', 'About')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/london/about.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/london/speakergrid.css') }}">	

	<link rel="stylesheet" type="text/css" href="{{ asset('css/london/flipclock.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>About the Show</h2>
				<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>
			</div>
			<button class="blue-btn">Join Us</button>
		</div>
		<div class="fix-bg" id="show-bg"></div>
	</section>
	<section class="two keynote arianna">
		<div class="fix-bg" id="team-bg"></div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<div>
						<img class="mic-logo" src="{{ asset('gfx/london/mic.png') }}" alt="Keynote">
						<h4 class="ky">About the Team</h4>
					</div>
					<img class="U-logo" src="{{ asset('gfx/london/U.png') }}" alt="Unleash">
				</div>
				<h2>Title Comes Here</h2>
				<p class="pdg"><strong class="strn">Now is the most exciting time to be an HR professional</strong> A profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>
			</div>
			<div class="schedule-wrp">
				<button class="white-btn">Join Us</button>
			</div>
		</div>
	</section>
	<section class="one futureofwork">
		<div class="wrp">
			<h2>The Team</h2>
			<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>
			<button class="blue-btn">cta</button>
		</div>
	</section>

		<!--Speakers-->
	 @include('london.components.speakergrid')
	<!--Speakers END-->

	<section class="two keynote arianna">
		<div class="fix-bg" id="team2-bg"></div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<div>
						<img class="mic-logo" src="{{ asset('gfx/london/mic.png') }}" alt="Keynote">
						<h4 class="ky pdg">Work hard, <strong>Play Hard!</strong></h4>
					</div>
					<img class="U-logo" src="{{ asset('gfx/london/U.png') }}" alt="Unleash">
				</div>
				<h2>Title Comes Here</h2>
				<p class="pdg"><strong class="strn">Now is the most exciting time to be an HR professional</strong> A profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>
			</div>
			<div class="schedule-wrp">
				<button class="white-btn">Join Us</button>
			</div>
		</div>
	</section>	
	<!--Map-->
	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Home</h2>
					<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems.</p>
				</div>
				<button class="blue-btn">Join Us</button>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
