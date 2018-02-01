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
			<button class="red-btn popup" data-popupdata="applytospeak">Become a Speaker</button>
		</div>
	</section>
	<section class="two keynote">
		<div class="wrppr">
			<div class="img-bg jonas"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>Jonas Kjellberg</h2>
				<h5>How do you DISRUPT &amp; Change the World of Work?</h5>
				
				<p>Joining us in London this March is tech investor extraordinaire Jonas Kjellberg, the co-creator of Skype - the company that changed the world of online communications forever and a technology industry that gave birth to the exponential technologies currently disrupting entire job functions and industries.</p>
				
				<p>Jonas didn’t just change the telecommunications industry. He was an early investor into the very successful and disruptive Zalando, even though London bankers &amp; analysts cried foul, and then he sold iCloud to Apple. Amongst many accolades and perhaps most poignantly, Jonas is someone who gets great solace in helping to “f**k up things” for the big lumbering (and sometimes-complacent) corporate giants of the world. </p>
							
				<p>Hear from Jonas on 20 March on how we changed the world of work as we know it.</p>
			</div>
			<div class="schedule-wrp">
				<button id="spkrgrd" class="red-btn popup" data-popupdata="applytospeak">Apply to Speak</button>
			</div>
		</div>
	</section>
		<!--Speakers-->
	 @include('london.components.speakergrid')
	<!--Speakers END-->
	<!--Counter-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Your People!<br />Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology. </p>
			<a href="{{ route('london.tickets') }}" target="_blank"><button class="red-btn">Register Now</button></a>
		</div>
	</section>
	<!--Counter END-->
	<!--Map-->
	<section id="map" class="map">
		<iframe src="https://snazzymaps.com/embed/27565" width="100%" height="600px" style="border:none;"></iframe>
		<div class="content">
			<div class="mapcont-wrp">
				<!-- Google API for MAP -->
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>The ExCeL London, will host UNLEASH in March 2018. The ExCeL is London and the UK's leading venue for exhibitions and conferences. With two on-site metro stations, parking for 3,700 cars and London City Airport just five minutes away, getting to ExCeL London couldn't be easier.</p>
				</div>
				<a href="{{ route('london.floorplan') }}"><button class="darkgreen-btn">More</button></a>
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
