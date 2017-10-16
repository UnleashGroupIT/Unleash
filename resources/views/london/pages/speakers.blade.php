@extends('london.main')

@section('title', 'Speakers')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/speakergrid.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/speakers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/flipclock.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
	<!--Keynote-->
	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="fix-bg robinson"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<div>
						<img class="mic-logo" src="../../gfx/london/mic.png" alt="Keynote">
						<h4 class="ky">Keynote in London</h4>
					</div>
					<img class="U-logo" src="../../gfx/london/U.png" alt="Unleash">
				</div>
				<h2>Sir Ken Robinson</h2>
				<p class="pdg">Watch to see who we Unleash to Keynote in London in 2018. In March 2017 we hosted Sir Ken Robinson
					whose Ted TalK has been seen by an estimated 300 million people in over 150 countries. Sir Ken works
					with governments in Europe, Asia and the US, international agencies, Fortune 500 companies and leading
					cultural organizations. Called “one of the world’s elite thinkers on creativity and innovation” by Fast
					Company magazine, Sir Ken has received numerous awards and recognitions for his groundbreaking
					contributions.</p>
				<div class="testim">
					<img class="coma" src="../../gfx/london/coma.png" alt="coma">
					<span>Imagination is the source of every form of human achievement. And it's the one thing that I believe we
						are systematically jeopardizing in the way we educate our children and ourselves.</span>
						<p><strong class="strn">Sir Ken Robinson</strong></p>
				</div>
			</div>
			<div class="schedule-wrp">
				<div class="schedule">
					<img class="clock-logo" src="../../gfx/london/clock.png" alt="Date">
					<div class="date-place">
						<p><strong>day 01</strong> / 10.25 / Main Auditorium</p>
					</div>
				</div>
				<button class="white-btn">Apply to Speak</button>
			</div>
		</div>
	</section>
	<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>Our Speakers</h2>
			<p>We bring you the visionaries, the movers and shakers and the hard edged thinkers
shaping and unleashing tomorrows world of work. The CEOs, CIOs, CHROs and
leaders from the world’s most innovative enterprises, the people and organizations
that have been there and done it, the ones who can and will share the challenges
they had to overcome to get where they are today. More than that speakers at
Unleash will share their passion for people, for life and for the power of
transformative technology and how it can unleash the power of people!</p>
			<button class="green-btn">Become a Speaker</button>
		</div>
	</section>
	<!--Future of Work END-->
		<!--Speakers-->
	 @include('london.components.speakergrid')
	<!--Speakers END-->
	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Hurry Up!</h2>
			<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed.</p>
			<div class="your-clock"></div>
			<button class="green-btn">cta</button>
		</div>
	</section>
	<!--Counter END-->
	<!--Map-->
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
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
