@extends('amsterdam.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! If you value a workplace that promotes an entrepreneurial environment & accountability, exemplifies loyalty, offers the chaos that is growth, never compromises integrity and has a strong social conscience, then start your career with us by applying now!">
 		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH - About"/>
        <meta property="og:title" content="UNLEASH - About"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! If you value a workplace that promotes an entrepreneurial environment & accountability, exemplifies loyalty, offers the chaos that is growth, never compromises integrity and has a strong social conscience, then start your career with us by applying now!"/>
        <meta property="og:url" content="http://www.unleashgroup.io/about">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH - About">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! If you value a workplace that promotes an entrepreneurial environment & accountability, exemplifies loyalty, offers the chaos that is growth, never compromises integrity and has a strong social conscience, then start your career with us by applying now!" />
        <meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
@endsection

@section('title', 'About')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/amsterdam/about.css') }}">
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
	<section id="careers" class="one-cntr">
		<div class="wrp">
			<h2>Join us!</h2>
			<p>If you value a workplace that promotes an entrepreneurial environment & accountability, exemplifies loyalty, offers the chaos that is growth, never compromises integrity and has a strong social conscience, then start your career with us by applying now!</p>
			<div class="job-wrp">
				<a href="https://jobs.smartrecruiters.com/UNLEASH/743999662025423-head-of-digital-marketing" target="_blank">
					<div class="job">
						<p>Head of Digital Marketing</p>
					</div>
				</a>
				<a href="https://jobs.smartrecruiters.com/UNLEASH/743999662011452-sponsorship-sales-manager-events" target="_blank">
					<div class="job">
						<p>Sponsorship Sales Manager – Events</p>
					</div>
				</a>
				<a href="https://jobs.smartrecruiters.com/UNLEASH/743999662011129-sales-international-tradeshows" target="_blank">
					<div class="job">
						<p>Sales international tradeshows</p>
					</div>
				</a>
				<a href="https://jobs.smartrecruiters.com/UNLEASH/743999662011619-senior-fullstack-developer" target="_blank">
					<div class="job">
						<p>Senior Fullstack Developer</p>
					</div>
				</a>
				
			</div>

		</div>
	</section>
	
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
