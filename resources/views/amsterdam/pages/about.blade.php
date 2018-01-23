@extends('amsterdam.main')

@section('meta')
		<meta name="description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18">
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH - About"/>
        <meta property="og:title" content="UNLEASH - About"/>
        <meta property="og:description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18"/>
        <meta property="og:url" content="http://www.unleashgroup.io/about">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH - About">
        <meta name="twitter:description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18" />
        <meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
@endsection

@section('title', 'About')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/amsterdam/about.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>About UNLEASH</h2>
				<p>We are passionate creative people on a mission to inspire and transform the world of work &amp; technology.  Our shared vision is that by 2020 UNLEASH will be the platform of choice globally on the Future of Work. Shows that attract the world’s leading visionaries, entrepreneurs, disrupters and doers including Sir Richard Branson, Arianna Huffington, Sir Ken Robinson, Rachel Botsman, Gary Vaynerchuk and many more. Our community represents the most diverse brands and organizations from +120 countries worldwide.<br /><br />UNLEASH (previously HR Tech World) is much more than just business events; we are in the change the world for the greater good business. One mission: Unleash Your People!</p>
			</div>
			<button class="blue-btn popup" data-popupdata="contactabout">Get in Touch</button>
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
				
				<p class="pdg">The world’s fastest growing community on the future of work, UNLEASH is ranked as the largest Corporate Network focused on the interface between people, technology, organizations and the future. Past and future show locations include Amsterdam, London, San Francisco, Paris and Las Vegas and have welcomed over 9,000 attendees in 2017. In 2018, UNLEASH becomes the worlds leading marketplace and community on the future of the workplace and technology.</p>
			</div>
			<div class="schedule-wrp">
				<button class="blue-btn popup" data-popupdata="contactabout">Contact Us</button>
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
				<a href="https://jobs.smartrecruiters.com/UNLEASH/743999662133995-senior-conference-producer" target="_blank">
					<div class="job">
						<p>Senior Conference Producer</p>
					</div>
				</a>
				<a href="https://jobs.smartrecruiters.com/UNLEASH/743999662133725-conference-sales-manager" target="_blank">
					<div class="job">
						<p>Conference Sales Manager</p>
					</div>
				</a>
				<a href="https://jobs.smartrecruiters.com/UNLEASH/743999662183303-customer-success-manager" target="_blank">
					<div class="job">
						<p>Customer Success Manager</p>
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
