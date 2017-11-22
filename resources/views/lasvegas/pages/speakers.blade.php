@extends('lasvegas.main')

@section('title', 'Speakers')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/speakergrid.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/speakers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/flipclock.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/common.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
<!--Keynote-->
	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="fix-bg gary"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<div>
						<img class="mic-logo" src="{{ URL::asset('gfx/lasvegas/mic.png') }}" alt="Keynote">
						<h4 class="ky">Keynote in Las Vegas</h4>
					</div>
					<img class="U-logo" src="{{ URL::asset('gfx/lasvegas/U.png') }}" alt="Unleash">
				</div>
				<h2>Gary Vaynerchuck</h2>
				<p class="pdg">Our recent San Francisco show this past June welcomed Gary Vaynerchuk, a serial entrepreneur and cofounder of VaynerMedia. A venture capitalist, 4 time New York Times best selling author and named to
				both Crian’s and Fortune’s 40 Under 40 lists. Gary first rose to prominence in the late 90’s having
				established one of the first e-commerce wine sites that helped him grow the family business from 4 to
				60MM in sales. Watch this space to find out who we Unleash to Keynote in Las Vegas.</p>
				<div class="testim">
					<img class="coma" src="{{ URL::asset('gfx/lasvegas/coma.png') }}" alt="coma">
					<span>... as technology commoditizes shit that doesn’t matter, all of us are going to be forced into the things
						that actually do matter, which is people</span>
						<p><strong class="strn">Gary Vaynechuck CEO &amp; Co-founder of Vaynermedia</strong></p>
				</div>
			</div>
			<div class="schedule-wrp">
				<div class="schedule">
					<img class="clock-logo" src="{{ URL::asset('gfx/lasvegas/clock.png') }}" alt="Date">
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
			<p>We bring you the visionaries, the movers and shakers and the hard edged thinkers shaping and unleashing tomorrows world of work. The CEOs, CIOs, CHROs and leaders from the world’s most innovative enterprises, the people and organizations that have been there and done it, the ones who can and will share the challenges they had to overcome to get where they are today.  More than that speakers at Unleash will share their passion for people, for life and for the power of transformative technology and how it can unleash the power of people!</p>
			<button class="red-btn">Become a Speaker</button>
			</div>
		</div>
	</section>
	<!--Future of Work END-->
		<!--Speakers-->
	 @include('lasvegas.components.speakergrid')
	<!--Speakers END-->
	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed.</p>
			<div class="your-clock"></div>
			<button class="pink-btn">cta</button>
		</div>
	</section>
	<!--Counter END-->
	<!--Map-->
	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>Unleash is delighted to be making it’s US home at the Aria Resort and Casino, one of North America's premier destinations for large-scale meetings and events.</p>
				</div>
				<button class="red-btn">More</button>
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
