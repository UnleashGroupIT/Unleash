@extends('amsterdam.main')

@section('title', 'About')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/amsterdam/about.css') }}">
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
				<h2>About Unleash</h2>
				<p>Insight, inspiration, vision and innovation are watchwords for an attendee experience and richness of content that puts Unleash ahead of the game. Our attendees enjoy an experience that celebrates people, the age of innovation and the Future of Work.  Unleash shows attract the most influential international thought leaders in the space, including Sir Richard Branson, Arianna Huffington, Sir Ken Robinson and Gary Vaynerchuk. More than 55% of our attendees are CHRO’s, EVP’s, and SVP’s of the leading brands and most forward-thinking organizations in the world.<br /><br />With a reputation for producing the world’s fastest growing shows on the future of work. the Unleash portfolio has shifted the world of work on a global scale.  Unleash is ranked as the largest Corporate Network focused on the interface between people, technology, organizations and the future. Show locations include London, Amsterdam. San Francisco, Paris and Las Vegas.  In 2017 we have welcomed over 7000 attendees from more than 120 countries. </p>
			</div>
			<button class="blue-btn">Get in Touch</button>
		</div>
		<div class="wrppr">
			<div class="fix-bg showbg"></div>
		</div>
	</section>
	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="fix-bg teambg"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<div>
						<img class="mic-logo" src="{{ asset('gfx/amsterdam/mic.png') }}" alt="Keynote">
						<h4 class="ky">About the Team</h4>
					</div>
					<img class="U-logo" src="{{ asset('gfx/amsterdam/U.png') }}" alt="Unleash">
				</div>
				<h2>Who we are</h2>
				<p class="pdg"><strong class="strn">We are a new breed of researchers, creators and show producers. We build customer service solutions together with our clients – creating exceptional customer experiences.</strong> A growth company, we are expanding organically and our growth has earned us the reputation of producing the fastest growing shows in the world that are helping change the future of work. We share a vision that Unleash will be the network of choice across the globe for all interested in tomorrow’s world of work. We have set our sights on the future and how to help change the Future of Work, blazing the trail for others to follow.</p>
			</div>
			<div class="schedule-wrp">
				<button class="white-btn">Contact Us</button>
			</div>
		</div>
	</section>
		<!--Speakers-->
	 @include('amsterdam.components.speakergrid')
	<!--Speakers END-->

	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="fix-bg teambg-2"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<div>
						<img class="mic-logo" src="{{ asset('gfx/amsterdam/mic.png') }}" alt="Keynote">
						<h4 class="ky pdg">Work hard, <strong>Play Hard!</strong></h4>
					</div>
					<img class="U-logo" src="{{ asset('gfx/amsterdam/U.png') }}" alt="Unleash">
				</div>
				<h2>Our goal</h2>
				<p class="pdg"><strong class="strn">We shape the Future of Work by unleashing people's potential and revolutionizing organizations.</strong> Do you value work that makes a difference, a workplace that promotes an entrepreneurial environment & accountability, a culture that exemplifies loyalty, and an environment that offers the chaos that is growth?  We are a team that never compromises integrity and we have a strong social conscience.  If you’d like to join us - there is no time like present!</p>
			</div>
			<div class="schedule-wrp">
				<button class="white-btn">Apply Today</button>
			</div>
		</div>
	</section>	
	<!--Map-->
	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Home</h2>
					<p>Budapest is a leading global city a cultural capital that excels in commerce, finance, media, art, fashion, research, technology, education, and entertainment. Budapest has the second fastest-developing urban economy in Europe.</p>
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
