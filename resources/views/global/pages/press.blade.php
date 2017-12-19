@extends('global.main')

@section('meta')
		<meta name="description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18">
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH - Press"/>
        <meta property="og:title" content="UNLEASH - Press"/>
        <meta property="og:description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18"/>
        <meta property="og:url" content="http://www.unleashgroup.io/press">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH - Press">
        <meta name="twitter:description" content="We are passionate creative people on a mission to inspire and transform the world of work and technology. London, Las Vegas, Amsterdam. #UNLEASH18" />
        <meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
@endsection

@section('title', 'Press')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/global/press.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
	<section class="two clients">
		<div class="wrppr">
			<div class="fix-bg press-1"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>Press Centre</h2>
				<p>Welcome to the UNLEASH Press Centre for our media, analysts and influencers! Make sure to browse the full menu for press releases, latest articles, our downloadable media kit, press images, as well, as press and analyst registration information to our UNLEASH events.<br /></p>
				<p>For any inquiries, please contact Andi Lustak on <strong>pr@unleashgroup.io</strong><br />or by calling the following numbers:<br /></p>
				<p><strong>UK: +44 20 34 689 689<br />US: +1 415 795 7022<br />EU: +36 1 201 1469</strong></p>
			</div>
			<div class="schedule-wrp">
				<button class="darkgreen-btn popup" data-popupdata="subscribe">Subscribe</button>
				<a href="#analyst"><button class="darkgreen-btn">Press Registration</button></a>
			</div>
		</div>
	</section>
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>About UNLEASH</h2>
				<p>Unleash Your People! UNLEASH (previously HR Tech World) is much more than just business events; we are in the change-the-world-for-the-greater-good business. We are passionate creative people on a mission to inspire and transform the world of work &amp; technology. Our shared vision is that by 2020, UNLEASH will be the platform of choice on the Future of Work across the globe. More than half of our community includes CEO’s, CHRO/CPOs, EVPs, and SVPs from the most exciting brands and leading organizations, located in 120+ countries worldwide.</p>
				<p>The world’s fastest growing community on the Future of Work, UNLEASH is ranked as the largest Corporate Network focused on the interface between people, technology, organizations and the future. Our events attract the world’s leading entrepreneurs, visionaries, disrupters and doers, including Sir Richard Branson, Arianna Huffington, Sir Ken Robinson, Rachel Botsman, Gary Vaynerchuk and many more. Past and future show locations include Amsterdam, London, San Francisco, Paris and Las Vegas and have welcomed over 9,000 attendees in 2017.</p>
				<p>In 2018, UNLEASH will scale significantly to become the world’s leading marketplace and community on the future of the workplace and technology. Join the community and find out more at <a style="display: inline-block;" href="http://www.unleashgroup.io">www.unleashgroup.io</a></p>
				<p>Twitter: #UNLEASH18</p>
			</div>
		</div>
		<div class="wrppr">
			<div class="fix-bg press-2"></div>
		</div>
	</section>
	<section class="one-cntr upcoming">
		<div class="wrp">
			<h3>Upcoming Events</h3>
			<div class="events-wrp">
				<div>
					<a href="{{ route('london.index') }}"><img src="{{ URL::asset('gfx/london-box.png') }}" alt="London"></a>
				</div>
				<div>
					<a href="{{ route('lasvegas.index') }}"><img src="{{ URL::asset('gfx/vegas-box.png') }}" alt="Lasvegas"></a>
				</div>
				<div>
					<a href="{{ route('ams.index') }}"><img src="{{ URL::asset('gfx/ams-box.png') }}" alt="Amsterdam"></a>
				</div>
			</div>
			<h2>JOIN our community</h2>
			<p>Unleash Yourself! Book your place at the world's leading and fastest growing show on the future of work. Now is the time to face the challenge of change. Set your people loose and power your organization into the next decade of the 21st Century.</p>
			<button class="white-btn popup" data-popupdata="joinourcommunity">Subscribe</button>
		</div>
	</section>
	<section class="two clients">
		<div class="wrppr">
			<div class="fix-bg press-3"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>PRESS RELEASES</h2>
				<p>
					<a href="">Bri Vellis Joins UNLEASH as Chief Marketing Officer (12 December 2017)</a>
					<a href="">UNLEASH Appoints Mark Downey as Head of Strategy and Corporate Ventures; Continues to Roll Out Future Growth Plans (20 November 2017)</a>
					<a href="">HR Tech World is now UNLEASH (24 October 2017)</a>
					<a href="">China Gorman joins HR Tech World as Managing Director, North America (23 October 2017)</a>
					<a href="">HR Tech World announces 2nd US show to be held in Las Vegas on May 15-16, 2018  (29 September 2017)</a>
					<a href="">HR Tech World Unveils Full Agenda for Amsterdam Show Next Month (22 September 2017)</a>
				</p>
				<h2>UNLEASH Corporate Blog</h2>
				<p>
					<a href="">UNLEASH Appoints Mark Downey as Head of Strategy and Corporate Ventures (20 November 2017)</a>
					<a href="">HR Tech World is now UNLEASH (24 October 2017)</a>
					<a href="">China Gorman joins HR Tech World as Managing Director, North America (23 October 2017)</a>
				</p>
			</div>
		</div>
	</section>
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>UNLEASH IN THE NEWS</h2>
				<p>
					<a href="">UNLEASH Appoints Mark Downey as Head of Strategy and Corporate Ventures (20 November 2017)</a>
					<a href="">HR Tech World is now UNLEASH (24 October 2017)</a>
					<a href="">China Gorman joins HR Tech World as Managing Director, North America (23 October 2017)</a>
					<a href="">HR Tech World announces 2nd US show to be held in Las Vegas on May 15-16, 2018  (29 September 2017)</a>
					<a href="">HR Tech World Unveils Full Agenda for Amsterdam Show Next Month (22 September 2017)</a>
				</p>
			</div>
			<<!--<div class="schedule-wrp">
				<a href=""><button class="darkgreen-btn">DOWNLOAD MEDIAKIT</button></a>
				<a href=""><button class="darkgreen-btn">DOWNLOAD IMAGES</button></a>
			</div>-->
		</div>
		<div class="wrppr">
			<div class="fix-bg press-4"></div>
		</div>
	</section>
	<section id="analyst" class="one-cntr">
		<div class="wrp">
			<h2>PRESS &amp; AnaLyst registration</h2>
			<p>All media and analyst representatives who plan to attend UNLEASH Conference and Expo in London must register their interest in attending the show. Press Passes are free-of-charge to all press/media/ industry analysts/ bloggers with valid and current credentials. The UNLEASH PR team will review registrations received and send notification by email within five (5) working days, as to whether attendance is approved. Register here to receive more information!</p>
			<p>If you have any questions about registration or require assistance, please contact Andi Lustak at pr@unleashgroup.io Please note: You will be required to show identification and credentials when you arrive at ExCeL, London.</p>
			<button class="white-btn popup" data-popupdata="subscribe">Subscribe</button>
		</div>
	</section>
	
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
