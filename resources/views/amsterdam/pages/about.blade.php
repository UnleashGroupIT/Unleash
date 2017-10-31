@extends('amsterdam.main')

@section('title', 'About')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/amsterdam/about.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/amsterdam/common.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/amsterdam/speakergrid.css') }}">	

	<link rel="stylesheet" type="text/css" href="{{ asset('css/amsterdam/flipclock.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>About UNLEASH</h2>
				<p>Insight, inspiration, vision and innovation are watchwords for an attendee experience and richness of content that puts UNLEASH ahead of the game. Our attendees enjoy an experience that celebrates people, the age of innovation and the Future of Work. UNLEASH shows attract the most influential visionaries in the world, including Sir Richard Branson, Arianna Huffington, Sir Ken Robinson, Rachel Botsman and Gary Vaynerchuk. More than 55% of our attendees are CEO’s, EVP’s, and SVP’s of the most exciting brands and forward-thinking organizations in the world.<br /><br />With a reputation for producing the world’s fastest growing shows on the future of work. the UNLEASH portfolio has shifted the world of work on a global scale. UNLEASH is ranked as the largest Corporate Network focused on the interface between people, technology, organizations and the future. Show locations include London, Amsterdam. San Francisco, Paris and Las Vegas. In 2017 we have welcomed over 8500 attendees from more than 120 countries.</p>
			</div>
			<button class="blue-btn popup" data-popupdata="contact">Get in Touch</button>
		</div>
		<div class="wrppr">
			<div class="fix-bg showbg"></div>
		</div>
	</section>
	<section class="two keynote arianna rev">
		<div class="wrppr">
			<div class="fix-bg teambg"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<div>
						<h4 class="ky">About the Team</h4>
					</div>
					<img class="U-logo" src="{{ asset('gfx/amsterdam/U.png') }}" alt="Unleash">
				</div>
				<h2>Who we are</h2>
				<p class="pdg"><strong class="strn">We are a new breed of researchers, creators and show producers. We build customer service solutions together with our clients – creating exceptional customer experiences.</strong> A growth company, we are expanding organically and our growth has earned us the reputation of producing the fastest growing shows in the world that are helping change the future of work. We share a vision that UNLEASH will be the network of choice across the globe for all interested in tomorrow’s world of work. We have set our sights on the future and how to help change the Future of Work, blazing the trail for others to follow.</p>
			</div>
			<div class="schedule-wrp">
				<button class="white-btn popup" data-popupdata="contact">Contact Us</button>
			</div>
		</div>
	</section>
	
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
