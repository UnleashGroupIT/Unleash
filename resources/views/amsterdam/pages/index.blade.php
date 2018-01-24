@extends('amsterdam.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH Amsterdam on 23-24 October 2018.">
 
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

	<link rel="stylesheet" type="text/css" href="{{ mix('css/amsterdam/index.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('headercontent')
		<video id="header-video" poster="{{ URL::asset('gfx/amsterdam/header-bg-desktop.jpg') }}" loop="" muted="" autoplay="">
          	<source src="{{ URL::asset('gfx/amsterdam/video/video-bg.webm') }}" type="video/webm">
         	<source src="{{ URL::asset('gfx/amsterdam/video/video-bg.mp4') }}" type="video/mp4">
         	<source src="{{ URL::asset('gfx/amsterdam/video/video-bg.ogv') }}" type="video/ogv">
		</video>
		<!--Mainsponsors-->
		<section class="one mainsponsors">
			<!--<h4>Main sponsors</h4>-->
			<span>Lead Sponsors <strong>2018</strong></span>
			<div class="mainsponsors-wrap">
			   <div><a href="https://www.achievers.com/" target="_blank" title="Achievers"><img id="ach" src="{{ URL::asset('gfx/amsterdam/header/sponsors/achievers.png') }}" alt="Achievers"></a></div>
			   <div> <a href="https://www.avature.net/" target="_blank" title="Avature"><img src="{{ URL::asset('gfx/amsterdam/header/sponsors/avature.svg') }}" alt="Avature"></a></div>
			   <div><a href="http://www.crossknowledge.com/en_US/elearning/home.html" target="_blank" title="CrossKnowledge"><img id="cross" src="{{ URL::asset('gfx/amsterdam/header/sponsors/crossknowledge.svg') }}" alt="CrossKnowledge"></a></div>
                <div><a href="http://www.cornerstoneondemand.co.uk/" target="_blank" title="Cornerstone OnDemand"><img id="cornerstone" src="{{ URL::asset('gfx/amsterdam/header/sponsors/cornerstone.svg') }}" alt="Cornerstone"></a></div>
                <div><a href="https://www.hirevue.com/" target="_blank" title="Hirevue"><img src="{{ URL::asset('gfx/amsterdam/header/sponsors/hirevue.svg') }}" alt="Hirevue"></a></div>
               <div> <a href="https://www.indeed.com/" target="_blank" title="Indeed"><img id="ind" src="{{ URL::asset('gfx/amsterdam/header/sponsors/Indeed.png') }}" alt="Indeed"></a></div>
               <div> <a href="http://www.successfactors.com/en_us.html" target="_blank" title="SAP SuccessFactors"><img id="sap" src="{{ URL::asset('gfx/amsterdam/header/sponsors/successfactors.svg') }}" alt="SAP SuccessFactors"></a></div>
               <div> <a href="http://www.sumtotalsystems.com/" target="_blank" title="Sumtotal"><img src="{{ URL::asset('gfx/amsterdam/header/sponsors/sumtotal.svg') }}" alt="Sumtotal"></a></div>
       			
			
			</div>
		</section>
	<!--Mainsponsors END-->
@endsection

@section('maincontent')
	<!--Header END-->
	<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>The Future of Work is Now!</h2>
			<p>UNLEASH World Conference & Expo returns to the RAI Amsterdam in 2018 as the largest conference in the world on the Future of Work and Technology. As organisations adapt to the future of work, models of leadership need to change if they want to have any hope of unleashing their people. Leadership needs to be as adaptive as the organisation they are seeking to create. </p><br/>
			
			<p>From 23-24 October in 2018, +6000 leaders from the most exciting brands, largest enterprises, startups, media and governments will attend our largest show to date at the RAI Amsterdam from over 120 countries worldwide for three days of inspiring stories, networking, and FUN. </p>
			<button class="blue-btn popup" data-popupdata="booknow">Book Now</button>

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
				<button id="spkrgrd" class="white-btn popup" data-popupdata="becomeaspeaker">Apply to Speak</button>
			</div>
		</div>
	</section>
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>Past Speakers</h2>
				<p>We bring you the visionaries, the movers &amp; shakers and the hard-edged thinkers shaping and unleashing tomorrow's world of work. The CEOs, CIOs, CHROs and leaders from the world’s most innovative enterprises, the people and organizations that have been there and done it, the ones who can and will share the challenges they had to overcome to get where they are today speak and attend our events. More than that speakers at UNLEASH will share their passion for people, for life and for the power of transformative technology and how it can unleash the power of people!</p>
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

	<!--Speakers-->
	 @include('amsterdam.components.speakergrid')
	<!--Speakers END-->

	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Your People! Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology.<p>
			<div class="your-clock"></div>
			<button class="amsblue-btn popup" data-popupdata="booknow">Register now </button>
		</div>
	</section>
	<!--Counter END-->
<!--Expo-->
	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>The Expo</h2>
				<p>The Expo at UNLEASH is more than just a showcase of vendors - it’s full of interactivity, excitement, fun, friendships and entertainment. Its where those shaping the future of work and technology – from large enterprises to the next innovators from around the world – network and meet up.</p>
			</div>
			<div class="testim wdth">
				<img class="coma" src="{{ URL::asset('gfx/amsterdam/coma.png') }}" alt="coma">
				<span class="blck">In my eyes by far the best and most inspiring show on HR globally</span>
				<strong class="strn">- Google</strong>
				<img class="quote-logo" src="{{ URL::asset('gfx/amsterdam/google.png') }}" alt="Google">
			</div>
			<button id="spnsrgrd" class="blue-btn popup" data-popupdata="booknow">Get Your Ticket</button>
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
				<p>In 2017, we welcomed over 9000 attendees from as many as +120 countries. Representing the world's leading organizations across most industry verticals, UNLEASH is the leading show on Future of Work and Technology both in terms of content provided from hundreds of speakers and deal-making on our expo floors. With a global footprint that influences over 55 million employees worldwide, no other community is having such a powerful impact on shaping the way the world works!</p>
			</div>
			<div class="testim wdth">
				<img class="coma" src="{{ URL::asset('gfx/amsterdam/coma.png') }}" alt="coma">
				<span class="blck">Fantastic opportunity to network, this show just gets better every year!</span>
				<strong class="strn">- Activision Blizzard</strong>
			</div>
			<button class="blue-btn popup" data-popupdata="becomeasponsor">Apply to be a Sponsor</button>
		</div>
	</section>
	<!--Clients END-->

	<!--Sponsors-->
	 @include('amsterdam.components.sponsorgrid')
	<!--Sponsors END-->

	<!--Testimonial-->
	<section class="two testimonial">
		<div class="content">
			<div class="content-wrap">
				<h2>Startup Zone</h2>
				<p>UNLEASH is host to the world’s leading Startup Competition on the Future of Work and Technology.
					First staged in October 2011, it has successfully hosted eight editions in total, including four in Amsterdam,
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
					<p>Known for its openness, Amsterdam is one of the world’s most multicultural cities, a leading financial centre, and a major arts and cultural capital.</p>
				</div>
				<a href="{{ route('ams.floorplan') }}"><button class="blue-btn">More</button></a>
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