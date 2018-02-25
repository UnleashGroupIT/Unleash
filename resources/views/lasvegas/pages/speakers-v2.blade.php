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
			<p>We bring you the visionaries, the movers &amp; shakers and the hard-edged thinkers shaping and unleashing tomorrow’s world of work. The CEOs, CIOs, CHROs and leaders from the world’s most innovative enterprises, the people and organizations that have been there and done it, the ones who can and will share the challenges they had to overcome to get where they are today speak and attend our events. More than that, the speakers at UNLEASH will share their passion for people, for life and for the power of transformative technology and how it can unleash the power of people!</p>
			<button class="white-btn popup" data-popupdata="applytospeak">Become a Speaker</button>
			</div>
		</div>
	</section>
	<!--Future of Work END-->
<!--Keynote-->
	<section class="two keynote">
		<div class="wrppr">
			<div class="img-bg mo"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>MO GAWDAT</h2>
				<h5>Author, Former Chief Business Officer - Google X</h5>
				
				<p>With a career rooted in innovation, Mo Gawdat is no stranger to the grit that business leaders must show to evolve and scale their organisations. We’re elated to have Mo join us for UNLEASH America in Las Vegas to give his take on what you need to harness your business’s potential.<br>
<br>


</p>
				
				<p>For the first time ever, Mo Gawdat, former Chief Business Officer for Google X, will take to the stage with strategies and ideas to help you on your way to building a successful innovation factory. In his step-by-step approach, he will deliver critical insight into what works and what can change the world.</p>
							
			</div>
			<div class="schedule-wrp">
				<button id="spkrgrd" class="red-btn popup" data-popupdata="applytospeak">Apply to Speak</button>
			</div>
		</div>
	</section>
	<section class="two keynote second">
		<div class="content">
			<div class="content-wrap">
				<h2>Rachel Botsman</h2>
				<h5>Author, Lecturer<br />Saïd Business School of the University of Oxford</h5>
				
				<p>A brilliant storyteller, Rachel Botsman has led the way in discussing how our heavy reliance on tech is redefining cultural norms, whether it be predicting the sharing economy to exploring tech’s influence on trust. In her most recent book, "Who Can You Trust?", Rachel examines the reasons and possible consequences of people losing trust in themselves and global institutions, and instead relying on (and trusting in) AI and automation far more. When we begin to trust machines more than other humans, what does that mean for humanity?<br>
<br>
</p>
				
				<p>In her talk, Rachel will delve deeper into this relationship between trust and technology, pulling from everyday examples like Amazon Echo to China’s planned citizen scores.</p>
			</div>
			<div class="schedule-wrp">
				<button id="spkrgrd" class="red-btn popup" data-popupdata="applytospeak">Apply to Speak</button>
			</div>
		</div>
		<div class="wrppr">
			<div class="img-bg bots"></div>
		</div>
	</section>
		<!--Speakers-->
	 @include('lasvegas.components.speakergrid')
	<!--Speakers END-->
	<!--Counter-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p><strong><b style="font-weight:400;">UNLEASH Your People!</b></strong><br />Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology. </p>
			<a href="{{ route('lasvegas.tickets') }}" target="_blank"><button class="red-btn">Register Now</button></a>
		</div>
	</section>
	<!--Counter END-->
	<!--Map-->
	<section id="map" class="map">
		<iframe src="https://snazzymaps.com/embed/48553" width="100%" height="600px" style="border:none;"></iframe>
		<div class="content">
			<div class="mapcont-wrp">
				<!-- Google API for MAP -->
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>UNLEASH is delighted to make its US home at the Aria Resort and Casino in Las Vegas, one of North America's premier destinations for large-scale meetings and shows.</p>
				</div>
				<a href="{{ route('lasvegas.travel') }}"><button class="darkgreen-btn">More</button></a>
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
