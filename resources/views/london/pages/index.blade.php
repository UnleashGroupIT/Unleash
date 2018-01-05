@extends('london.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
<meta name="google-site-verification" content="n0SN8rSlfzJtkCBmSexzIG6dT59FadZc03C1eYF1qeg" />
 
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH - London"/>
        <meta property="og:title" content="UNLEASH - London"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/london">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH - London">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
@endsection


@section('title', '- London')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/london/index.css') }}">

@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('headercontent')
		<!--Mainsponsors-->
		<section class="one mainsponsors">
			<span>Lead Sponsors <strong>2018</strong></span>
			<!--<h4>Main sponsors</h4>-->
			<div class="mainsponsors-wrap">
					
					<div><a href="https://www.achievers.com/" target="_blank" title="Achievers"><img id="ach" src="{{ URL::asset('gfx/london/header/sponsors/achievers.png') }}" alt="Achievers"></a></div>
			        <div><a href="https://www.avature.net/" target="_blank" title="Avature"><img src="{{ URL::asset('gfx/london/header/sponsors/avature.svg') }}" alt="Avature"></a></div>
                    <div><a href="http://www.cornerstoneondemand.co.uk/" target="_blank" title="Cornerstone OnDemand"><img id="cornerstone" src="{{ URL::asset('gfx/london/header/sponsors/cornerstone.svg') }}" alt="Cornerstone"></a></div>
                    <div><a href="https://www.cut-e.com/assessment-solutions/" target="_blank" title="Cut-e"><img id="cute" src="{{ URL::asset('gfx/london/header/sponsors/cute.svg') }}" alt="Cut-e"></a></div>
                    <div><a href="https://www.hirevue.com/" target="_blank" title="Hirevue"><img src="{{ URL::asset('gfx/london/header/sponsors/hirevue.svg') }}" alt="Hirevue"></a></div>
                    <div><a href="https://www.instructure.com/" target="_blank" title="Instructure"><img class="sppn" id="ins" src="{{ URL::asset('gfx/london/header/sponsors/instructure.png') }}" alt="Instructure"></a></div>
                    <div><a href="https://www.mhr.co.uk/" target="_blank" title="MHR"><img id="mhr" src="{{ URL::asset('gfx/london/header/sponsors/mhr.svg') }}" alt="MHR"></a></div>
                    <div><a href="https://www.oracle.com/" target="_blank" title="Oracle"><img class="sppn" id="oracle" src="{{ URL::asset('gfx/london/header/sponsors/oracle.png') }}" alt="Oracle"></a></div>
                    <div><a href="http://www.successfactors.com/en_us.html" target="_blank" title="SAP SuccessFactors"><img id="sap" src="{{ URL::asset('gfx/london/header/sponsors/successfactors.svg') }}" alt="SAP SuccessFactors"></a></div>

			</div>
		</section>
	<!--Mainsponsors END-->
@endsection

@section('maincontent')
<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>The Future of Work is Now!</h2>
			<p>2018 marks UNLEASH’s fourth year at the ExCel London, a ground-breaking show unlike any other. Offering unparalleled learning and networking opportunities on the Future of Work and Technology, UNLEASH 2018 Conference &amp; Expo is officially the UK’s largest enterprise show for decision makers, with over 60 nationalities represented in 2017 and more than half of the attendees from the C-Level suite. We are the fastest growing people-focused event on the planet and we pride ourselves in organizing shows that make a real difference and bring a greater good to the world.</p>
			<a href="{{ route('london.tickets') }}"><button class="green-btn">Book Now</button></a>
		</div>
	</section>
	<!--Future of Work END-->
	<!--Keynote-->
	<!--Keynote-->
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
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>Past Speakers</h2>
				<p>We bring you the visionaries, the movers &amp; shakers and the hard-edged thinkers shaping and unleashing tomorrow's world of work. The CEOs, CIOs, CHROs and leaders from the world’s most innovative enterprises, the people and organizations that have been there and done it, the ones who can and will share the challenges they had to overcome to get where they are today speak and attend our events. More than that speakers at UNLEASH will share their passion for people, for life and for the power of transformative technology and how it can unleash the power of people!</p>
				<div class="testim wdth">
					<img class="coma" src="http://www.unleashgroup.io/gfx/london/coma.png" alt="coma">
					<span>The best event in the world on HR and Technology</span>
						<p><strong class="strn">Josh Bersin, Principal &amp; Founder, Bersin by Deloitte</strong></p>
				</div>
			</div>
			<button class="green-btn popup" data-popupdata="applytospeak">Become a speaker</button>
		</div>
		<div class="wrppr">
			<div class="fix-bg speakers right"></div>
		</div>
	</section>
	<!--Keynote END-->

	<!--Speakers-->
	 @include('london.components.speakergrid')
	<!--Speakers END-->

	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Your People! Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology. </p>
			<div class="your-clock"></div>
			<a href="{{ route('london.tickets') }}"><button class="green-btn">Register Now</button></a>
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
				<img class="coma" src="{{ URL::asset('gfx/london/coma.png') }}" alt="coma">
				<span class="blck">In my eyes by far the best and most inspiring show on HR globally</span>
				<strong class="strn">- Google</strong>
				<img class="quote-logo" src="{{ URL::asset('gfx/london/google.png') }}" alt="Google">
			</div>
			<button id="spnsrgrd" class="green-btn popup" data-popupdata="booknow">Get Your Ticket</button>
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
				<img class="coma" src="{{ URL::asset('gfx/london/coma.png') }}" alt="coma">
				<span class="blck">Fantastic opportunity to network, this show just gets better every year!</span>
				<strong class="strn">- Activision Blizzard</strong>
			</div>
			<button class="green-btn popup" data-popupdata="becomeasponsor">Apply to be a Sponsor</button>
		</div>
	</section>
	<!--Clients END-->

	<!--Sponsors-->
	 @include('london.components.sponsorgrid')
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
			<button class="green-btn popup" data-popupdata="compete">Apply to compete</button>
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
					<p>The ExCeL London, will host UNLEASH in March 2018. The ExCeL is London and the UK's leading venue for exhibitions and conferences. With two on-site metro stations, parking for 3,700 cars and London City Airport just five minutes away, getting to ExCeL London couldn't be easier.</p>
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
