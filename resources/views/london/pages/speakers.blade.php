@extends('london.main')

@section('title', 'London - Speakers')

@section('headercss')

	<link rel="stylesheet" type="text/css" href="{{ mix('css/london/speakers.css') }}">

@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
	<!--Keynote-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>Our Speakers</h2>
			<p>We bring you the visionaries, the movers and shakers and the hard-edged thinkers
shaping and unleashing tomorrow's world of work. The CEOs, CIOs, CHROs and
leaders from the world’s most innovative enterprises, the people and organizations
that have been there and done it, the ones who can and will share the challenges
they had to overcome to get where they are today. More than that speakers at
UNLEASH will share their passion for people, for life and for the power of
transformative technology and how it can unleash the power of people!</p>
			<button class="green-btn popup" data-popupdata="applytospeak">Become a Speaker</button>
		</div>
	</section>
	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="fix-bg betts"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<div>
						<img class="mic-logo" src="{{ URL::asset('gfx/london/mic.png') }}" alt="Keynote">
						<h4 class="ky">Keynote in London</h4>
					</div>
					<img class="U-logo" src="{{ URL::asset('gfx/london/U.png') }}" alt="Unleash">
				</div>
				<h2>Alexander Betts</h2>
				<h5 class="BettsOxford">Oxford University</h5>
				
				<p class="pdg">Coinciding with Brexit contingency planning in March 2018 for most UK, European and global organisation’s, instead of simply asking why it happened, or depicting doomsday scenarios of the future, UNLEASH will ask: what opportunities does Brexit offer for business? How will the resulting policy decisions taken by government on mobility and trade, societal changes, and economic adjustments redefine the opportunity structures for business? What needs to be done in terms of innovation, technology and leadership to grasp those opportunities?</p>
				
				<p class="pdg">Alexander Betts is a WEF Young Global Leader named to the Thinkers50 2017 Radar list of “People Most Likely to Shape the Future”. He will walk us through why Brexit happened and what comes next for enterprise organisations and their employees. Join us to hear a new vision of the positive effects of globalization and the steps leaders should take while stepping into the post-Brexit era.</p>
							

				<p class="pdg">“The biggest challenge we face in Europe is how to reconcile globalisation with democracy.”</p>
				

			</div>
			<div class="schedule-wrp">
				<button id="spkrgrd" class="white-btn popup" data-popupdata="applytospeak">Apply to Speak</button>
			</div>
		</div>
	</section>
		<!--Speakers-->
	 @include('london.components.speakergrid')
	<!--Speakers END-->
	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Your People! Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology. </p>
			<div class="your-clock"></div>
			<a href="https://unleash.swoogo.com/unleashlondon" target="_blank"><button class="green-btn">Register Now</button></a>
		</div>
	</section>
	<!--Counter END-->
	<!--Map-->
	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>The ExCeL London will host UNLEASH in March 2018. The ExCeL is London and the UK's leading venue for exhibitions and conferences. With two on-site metro stations, parking for 3,700 cars and London City Airport just five minutes away, getting to ExCeL London couldn't be easier.</p>
				</div>
				<a href="{{ route('london.floorplan') }}"><button class="green-btn">More</button></a>
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
