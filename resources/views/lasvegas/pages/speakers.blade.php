@extends('lasvegas.main')

@section('title', 'Speakers')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/lasvegas/speakers.css') }}">

@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>Our Speakers</h2>
			<p>We bring you the visionaries, the movers &amp; shakers and the hard-edged thinkers shaping and unleashing tomorrow's world of work. The CEOs, CIOs, CHROs and leaders from the world’s most innovative enterprises, the people and organizations that have been there and done it, the ones who can and will share the challenges they had to overcome to get where they are today speak and attend our events. More than that speakers at UNLEASH will share their passion for people, for life and for the power of transformative technology and how it can unleash the power of people!</p>
			<button class="red-btn popup" data-popupdata="applytospeak">Become a Speaker</button>
			</div>
		</div>
	</section>
	<!--Future of Work END-->
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
				<h2>MO GAWDAT</h2>
				<p class="pdg"></p>
				<div class="testim">
					<img class="coma" src="{{ URL::asset('gfx/lasvegas/coma.png') }}" alt="coma">
					<span></span>
						<p><strong class="strn"></strong></p>
				</div>
			</div>
			<div class="schedule-wrp">
				<button class="white-btn popup" data-popupdata="applytospeak">Apply to speak</button>
			</div>
		</div>
	</section>
		<!--Speakers-->
	 @include('lasvegas.components.speakergrid')
	<!--Speakers END-->
	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Your People! Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology. </p>
			<div class="your-clock"></div>
			<a href="{{ route('lasvegas.tickets') }}"><button class="red-btn">Register Now</button></a>
		</div>
	</section>
	<!--Counter END-->
	<!--Map-->
	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>UNLEASH is delighted to make its US home at the Aria Resort and Casino in Las Vegas, one of North America's premier destinations for large-scale meetings and shows.</p>
				</div>
				<a href="{{ route('lasvegas.travel') }}"><button class="red-btn">More</button></a>
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
