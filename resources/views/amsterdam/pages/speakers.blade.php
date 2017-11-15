@extends('amsterdam.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018.">
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH Amsterdam - Speakers"/>
        <meta property="og:title" content="UNLEASH Amsterdam - Speakers"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/amsterdam/speakers">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/amsterdam/UNLEASH_metashare_amsterdam.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH Amsterdam - Speakers">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/amsterdam/UNLEASH_metashare_amsterdam.png') }}">
@endsection

@section('title', 'Speakers')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/speakergrid.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/speakers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/flipclock.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/common.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
<!--Keynote-->
	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="fix-bg arianna"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<div>
						<img class="mic-logo" src="{{ URL::asset('gfx/amsterdam/mic.png') }}" alt="Keynote">
						<h4 class="ky">Keynote in Amsterdam 2017</h4>
					</div>
					<img class="U-logo" src="{{ URL::asset('gfx/amsterdam/U.png') }}" alt="Unleash">
				</div>
				<h2>Arianna Huffington</h2>
				<p class="pdg">Named to Time Magazine's list of the world’s 100 most influential people, and the Forbes Most Powerful
				Women list, Arianna Huffington serves on numerous boards, including Uber and The Center for Public
				Integrity. She is also the founder of Huffington Post, the founder and CEO of Thrive Global, mother,
				sister, flat shoe advocate, sleep evangelist and the author of fifteen books, including, most recently,
				Thrive and The Sleep Revolution.</p>
				<div class="testim">
					<img class="coma" src="{{ URL::asset('gfx/amsterdam/coma.png') }}" alt="coma">
					<span>I want to help people and businesses thrive, ... take advantage of the connections between well-being
						and performance, and find and nurture their sense of purpose.</span>
						<p><strong class="strn">Arianna Huffington, Founder of Huffington Post &amp; Founder and CEO of Thrive Global</strong></p>
				</div>
			</div>
			<div class="schedule-wrp">
				<div class="schedule">
					<img class="clock-logo" src="{{ URL::asset('gfx/clock.png') }}" alt="Date">
					<div class="date-place">
						<p><strong>day 01</strong> / 10.25 / Main Auditorium</p>

					</div>
				</div>
				<button class="white-btn popup" data-popupdata="becomeaspeaker">Apply to Speak</button>
			</div>
		</div>
	</section>
	<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>Our Past Speakers</h2>
				<p>We bring you the visionaries, the movers and shakers and the hard edged thinkers shaping and unleashing tomorrows world of work. The CEOs, CIOs, CHROs and leaders from the world’s most innovative enterprises, the people and organizations that have been there and done it, the ones who can and will share the challenges they had to overcome to get where they are today.  More than that speakers at UNLEASH will share their passion for people, for life and for the power of transformative technology and how it can unleash the power of people!</p>
				<button class="blue-btn popup" data-popupdata="becomeaspeaker">Become a Speaker</button>
			</div>
		</div>
	</section>
	<!--Future of Work END-->
		<!--Speakers-->
	 @include('amsterdam.components.speakergrid')
	<!--Speakers END-->
	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Yourself! Book your place at the world's leading and fastest growing show on the future of work. Now is the time to face the challenge of change. Set your people loose and power your organization into the next decade of the 21st Century.</p>
			<div class="your-clock"></div>
			<button class="blue-btn popup" data-popupdata="booknow">Book Now 2018</button>
		</div>
	</section>
	<!--Counter END-->
	<!--Map-->
	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>Known for it’s tolerance and openness Amsterdam is the world’s most multicultural city, as well as being a leading financial centre, and a major arts and cultural capital.</p>
				</div>
				<a href="{{ route('ams.floorplan') }}"><button class="blue-btn">More</button></a>
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
