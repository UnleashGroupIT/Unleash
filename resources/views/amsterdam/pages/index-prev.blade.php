@extends('amsterdam.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018.">
 		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH - Amsterdam"/>
        <meta property="og:title" content="UNLEASH - Amsterdam"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/amsterdam">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/amsterdam/UNLEASH_metashare_amsterdam.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH - Amsterdam">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/amsterdam/UNLEASH_metashare_amsterdam.png') }}">
@endsection

@section('title', 'Index')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/speakergrid.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/index-prev.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/amsterdam/flipclock.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('headercontent')
<section class="header-title">
			<h1><img src="{{ URL::asset('gfx/amsterdam/title-logo.png') }}" alt="Unleash" title="HOME"></h1>
		</section>
		<!--Mainsponsors-->
		<section class="one mainsponsors">
			<button id="book" class="blue-btn popup" data-popupdata="booknow">Book Now</button>
			<!--<h4>Main sponsors</h4>-->
			<span>Lead Sponsors <strong>2017</strong></span>
			<div class="mainsponsors-wrap">
			
               <div> <a href="https://www.avature.net/" target="_blank" title="Avature"><img src="{{ URL::asset('gfx/amsterdam/header/sponsors/avature.svg') }}" alt="Avature"></a></div>
               <div> <a href="http://www.adp.com/" target="_blank" title="ADP"><img id="adp" src="{{ URL::asset('gfx/amsterdam/header/sponsors/adp.svg') }}" alt="ADP"></a></div>
                <div><a href="https://www.benify.com/p/et-en/" target="_blank" title="Benify"><img src="{{ URL::asset('gfx/amsterdam/header/sponsors/benify.svg') }}" alt="Benify"></a></div>
                <div><a href="http://www.cornerstoneondemand.co.uk/" target="_blank" title="Cornerstone OnDemand"><img id="cornerstone" src="{{ URL::asset('gfx/amsterdam/header/sponsors/cornerstone.svg') }}" alt="Cornerstone"></a></div>
                <div><a href="http://www-01.ibm.com/software/uk/smarterworkforce/" target="_blank" title="IBM"><img id="ibm" src="{{ URL::asset('gfx/amsterdam/header/sponsors/ibm.svg') }}" alt="IBM"></a></div>
               <div> <a href="http://www.ngahr.com/" target="_blank" title="NGA Human Resources"><img id="nga" src="{{ URL::asset('gfx/amsterdam/header/sponsors/nga.svg') }}" alt="NGA Human Resources"></a></div>
				<div><a href="https://www.oracle.com/uk/applications/human-capital-management/index.html" target="_blank" title="Oracle"><img src="{{ URL::asset('gfx/amsterdam/header/sponsors/oracle.svg') }}" alt="Oracle"></a></div>
               <div> <a href="http://www.successfactors.com/en_us.html" target="_blank" title="SAP SuccessFactors"><img id="sap" src="{{ URL::asset('gfx/amsterdam/header/sponsors/successfactors.svg') }}" alt="SAP SuccessFactors"></a></div>
               <div> <a href="http://www.talentsoft.com/" target="_blank" title="TalentSoft"><img src="{{ URL::asset('gfx/amsterdam/header/sponsors/talentsoft.png') }}" alt="TalentSoft"></a></div>
               <div> <a href="http://www.adeccogroup.com/" target="_blank" title="The Adeco Group"><img src="{{ URL::asset('gfx/amsterdam/header/sponsors/the-adeco-group.svg') }}" alt="The Adeco Group"></a></div>
               <div> <a href="http://www.workday.com/" target="_blank" title="Workday"><img src="{{ URL::asset('gfx/amsterdam/header/sponsors/workday.svg') }}" alt="Workday"></a></div>			
			
			</div>
		</section>
	<!--Mainsponsors END-->
@endsection

@section('maincontent')
	<!--Header END-->
	<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>Thank You!</h2>
			<p>A massive thank you to all of the delegates and sponsors who joined us at HR Tech World Amsterdam, our biggest show yet. We are taking our quest to improve the Future of Work for the better to the next level and have officially rebranded as UNLEASH. The fun kicks off again on March 20-21, 2018 in London!<br /><strong>See you there!</strong></p>
			<a href="https://www.slideshare.net/HRTechWorld/clipboards/hr-tech-world-amsterdam-2017"><button class="blue-btn presentations">View Presentations</button></a>
		</div>
	</section>
	<!--Future of Work END-->
	<!--Keynote-->
	<!--Keynote-->
	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="fix-bg arianna"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<div>
						<img class="mic-logo" src="{{ URL::asset('gfx/amsterdam/mic.png') }}" alt="Keynote">
						<h4 class="ky">Keynote in Amsterdam 2017</h4>
					</div>
					<img class="U-logo" src="{{ URL::asset('gfx/amsterdam/U.png') }}" alt="Unleash">
				</div>
				<h2>Arianna Huffington</h2>
				<p class="pdg">Named to Time Magazine's list of the world’s 100 most influential people, and the Forbes Most Powerful
				Women list, Arianna Huffington serves on numerous boards, including Uber and The Center for Public
				Integrity. She is also the founder of Huffington Post, the founder and CEO of Thrive Global, mother,
				sister, flat shoe advocate, sleep evangelist and the author of fifteen books, including, most recently,
				Thrive and The Sleep Revolution.</p>
				<div class="testim">
					<img class="coma" src="{{ URL::asset('gfx/amsterdam/coma.png') }}" alt="coma">
					<span>I want to help people and businesses thrive, ... take advantage of the connections between well-being
						and performance, and find and nurture their sense of purpose.</span>
						<p><strong class="strn">Arianna Huffington, Founder of Huffington Post &amp; Founder and CEO of Thrive Global</strong></p>
				</div>
			</div>
			<div class="schedule-wrp">
				<div class="schedule">
					<img class="clock-logo" src="{{ URL::asset('gfx/clock.png') }}" alt="Date">
					<div class="date-place">
						<p><strong>day 01</strong></p>

					</div>
				</div>
				<button class="white-btn popup" data-popupdata="becomeaspeaker">Apply to Speak</button>
			</div>
		</div>
	</section>
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>Our Speakers</h2>
				<p>We bring you the visionaries, the movers and shakers and the hard edged thinkers shaping and unleashing tomorrows world of work. The CEOs, CIOs, CHROs and leaders from the world’s most innovative enterprises, the people and organizations that have been there and done it, the ones who can and will share the challenges they had to overcome to get where they are today.  More than that speakers at UNLEASH will share their passion for people, for life and for the power of transformative technology and how it can unleash the power of people!</p>
				<div class="testim wdth">
					<img class="coma" src="http://www.unleashgroup.io/gfx/amsterdam/coma.png" alt="coma">
					<span>The best event in the world on HR and Technology</span>
						<p><strong class="strn">Josh Bersin, Principal &amp; Founder, Bersin by Deloitte</strong></p>
				</div>
			</div>
			<button class="blue-btn popup" data-popupdata="becomeaspeaker">Become a Speaker</button>
		</div>
		<div class="wrppr">
			<div class="fix-bg speakers right"></div>
		</div>
	</section>
	<!--Keynote END-->

	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Hurry Up!</h2>
			<p>Unleash Yourself! Book your place at the world's leading and fastest growing show on the future of work. Now is the time to face the challenge of change. Set your people loose and power your organization into the next decade of the 21st Century.<p>
			<div class="your-clock"></div>
			<button class="amsblue-btn popup" data-popupdata="booknow">Book now 2018</button>
		</div>
	</section>
	<!--Counter END-->
<!--Expo-->
	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>The Expo</h2>
				<p>Meet the Who’s Who of the Future of Work at UNLEASH. Buyers of technology can take a year’s worth of
					meetings in just 2 days and all under one roof as well as meet colleagues and counterparts. At UNLEASH
					the expo is more than just a showcase - it’s a hub full of interactivity, excitement, fun, friendship and
					entertainment. UNLEASH - it’s where the future of work meets!</p>
			</div>
			<div class="testim wdth">
				<img class="coma" src="{{ URL::asset('gfx/amsterdam/coma.png') }}" alt="coma">
				<span class="blck">In my eyes by far the best and most inspiring show on HR globally</span>
				<strong class="strn">- Google</strong>
				<img class="quote-logo" src="{{ URL::asset('gfx/amsterdam/google.png') }}" alt="Google">
			</div>
			<button class="blue-btn popup" data-popupdata="booknow">Get Your Ticket</button>
		</div>
		<div class="wrppr">
			<div class="fix-bg expobg"></div>
		</div>
	</section>
	<!--Expo END-->
	<!--Clients-->
	<section class="two clients">
		<div class="wrppr">
			<div class="fix-bg clientsbg"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>Our Clients</h2>
				<p>In 2017 we have welcomed 9000 people from as many as +120 countries. Representing the world's leading organizations across all industry verticals, UNLEASH is the leading show on people and technology both in terms of content and deals done. With a global footprint that influences over 55 million employees worldwide, no other community is having such a powerful impact on shaping the Future of Work!</p>
			</div>
			<div class="testim wdth">
				<img class="coma" src="{{ URL::asset('gfx/amsterdam/coma.png') }}" alt="coma">
				<span class="blck">Fantastic opportunity to network, this show just gets better every year!</span>
				<strong class="strn">- Activision Blizzard</strong>
			</div>
			<button class="blue-btn popup" data-popupdata="booknow">Get Your Ticket</button>
		</div>
	</section>
	<!--Clients END-->

	<!--Testimonial-->
	<section class="two testimonial">
		<div class="content">
			<div class="content-wrap">
				<h2>Startup Zone</h2>
				<p>UNLEASH is host to the world’s leading Startup Competition on the Future of Work and people technology.
					First staged in October 2011, it has successfully hosted 8 editions in total, including four in Amsterdam,
					two in London and two in Paris. As the show has matured, what started as pro-bono work is now the
					must-attend show for startups; it’s where they learn how to pitch their product to fans and critics alike
					including entrepreneurs such as Arianna Huffington and Sir Richard Branson, thinkers and analysts like
					Josh Bersin, Gary Hamel and Simon Sinek, as well as investors, vendors, media - and perhaps most
					importantly of all - the organizations they wish to serve.</p>
			</div>
			<button class="blue-btn popup" data-popupdata="compete">Apply to compete</button>
		</div>
		<div class="wrppr">
			<div class="fix-bg startupbg"></div>
		</div>
	</section>
	<!--Testimonial END-->
	<!--Map-->
	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>Known for it’s tolerance and openness Amsterdam is the world’s most multicultural city, as well as being a leading financial centre, and a major arts and cultural capital.</p>
				</div>
				<a href="{{ route('ams.floorplan') }}"><button class="blue-btn">More</button></a>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Hurry Up!</h2>
			<p>Unleash Yourself! Book your place at the world's leading and fastest growing show on the future of work. Now is the time to face the challenge of change. Set your people loose and power your organization into the next decade of the 21st Century.</p>
			<button class="amsblue-btn popup" data-popupdata="booknow">Book now 2018</button>
		</div>
	</section>
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection