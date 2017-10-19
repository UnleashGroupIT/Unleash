@extends('london.main')

@section('title', 'Index')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/speakergrid.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/index.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/flipclock.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/london/common.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('headercontent')
<section class="header-title">
			<h1><img src="{{ URL::asset('gfx/london/title-logo.png') }}" alt="Unleash" title="HOME"></h1>
		</section>
		<button id="book" class="pink-btn">Book Now</button>
		<!--Mainsponsors-->
		<section class="one mainsponsors">
			<h4>Main sponsors</h4>
			<div class="mainsponsors-wrap">
				<div><img src="{{ URL::asset('gfx/london/talentBrew-white.png') }}" alt="TalentBrew"></div>
				<div><img src="{{ URL::asset('gfx/london/workday-white.png') }}" alt="Workday"></div>
				<div><img src="{{ URL::asset('gfx/london/glassdoor-white.png') }}" alt="Glassdoor"></div>
				<div><img src="{{ URL::asset('gfx/london/talentBrew-white.png') }}" alt="TalentBrew"></div>
				<div><img src="{{ URL::asset('gfx/london/workday-white.png') }}" alt="Workday"></div>
				<div><img src="{{ URL::asset('gfx/london/glassdoor-white.png') }}" alt="Glassdoor"></div>
				<div><img src="{{ URL::asset('gfx/london/talentBrew-white.png') }}" alt="TalentBrew"></div>
				<div><img src="{{ URL::asset('gfx/london/workday-white.png') }}" alt="Workday"></div>
			</div>
		</section>
	<!--Mainsponsors END-->
@endsection

@section('maincontent')
<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>The Future of Work is Now!</h2>
			<p>Unleash is much more than technology it’s about unleashing the power and potential of people. The 4th industrial revolution, leadership crises, rapid advances in technology coupled with fast paced innovation are now forever changing our world. Industries, jobs and ways of working are being disrupted and so is the role and relationship of people with work - people are back and they are taking center stage!<br /><strong>Unleash Your People!</strong></p>
			<button class="green-btn">Join us now</button>
		</div>
	</section>
	<!--Future of Work END-->
	<!--Keynote-->
	<!--Keynote-->
	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="fix-bg robinson"></div>
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
				<h2>Sir Ken Robinson</h2>
				<p class="pdg">Watch to see who we Unleash to Keynote in London in 2018. In March 2017 we hosted Sir Ken Robinson
					whose Ted TalK has been seen by an estimated 300 million people in over 150 countries. Sir Ken works
					with governments in Europe, Asia and the US, international agencies, Fortune 500 companies and leading
					cultural organizations. Called “one of the world’s elite thinkers on creativity and innovation” by Fast
					Company magazine, Sir Ken has received numerous awards and recognitions for his groundbreaking
					contributions.</p>
				<div class="testim">
					<img class="coma" src="{{ URL::asset('gfx/london/comawhite.png') }}" alt="coma">
					<span>Imagination is the source of every form of human achievement. And it's the one thing that I believe we
						are systematically jeopardizing in the way we educate our children and ourselves.</span>
						<p><strong class="strn">Sir Ken Robinson</strong></p>
				</div>
			</div>
			<div class="schedule-wrp">
				<div class="schedule">
					<img class="clock-logo" src="{{ URL::asset('gfx/london/clock.png') }}" alt="Date">
					<div class="date-place">
						<p><strong>day 01</strong> / 10.25 / Main Auditorium</p>

					</div>
				</div>
				<button class="white-btn">Apply to Speak</button>
			</div>
		</div>
	</section>
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>Our Speakers</h2>
				<p>We bring you the visionaries, the movers and shakers and the hard edged thinkers shaping and unleashing tomorrows world of work. The CEOs, CIOs, CHROs and leaders from the world’s most innovative enterprises, the people and organizations that have been there and done it, the ones who can and will share the challenges they had to overcome to get where they are today.  More than that speakers at Unleash will share their passion for people, for life and for the power of transformative technology and how it can unleash the power of people!</p>
				<div class="testim wdth">
					<img class="coma" src="http://www.unleashgroup.io/gfx/london/coma.png" alt="coma">
					<span>The best event in the world on HR and Technology</span>
						<p><strong class="strn">Josh Bersin, Principal &amp; Founder, Bersin by Deloitte</strong></p>
				</div>
			</div>
			<button class="green-btn">Become a Speaker</button>
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
			<h2>Hurry Up!</h2>
			<p>Unleash Yourself!  Book your place at the world’s leading and fastest growing show on the future of work.  Now is the time face the challenge of change and let your people loose to power your organization in the next decade of the 21st Century.</p>
			<div class="your-clock"></div>
			<button class="green-btn">Book now</button>
		</div>
	</section>
	<!--Counter END-->
<!--Expo-->
	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>The Expo</h2>
				<p>Meet the Who’s Who of the Future of Work at Unleash. Buyers of technology can take a year’s worth of
					meetings in just 2 days and all under one roof as well as meet colleagues and counterparts. At Unleash
					the expo is more than just a showcase - it’s a hub full of interactivity, excitement, fun, friendship and
					entertainment. Unleash - it’s where the future of work meets!</p>
			</div>
			<div class="testim wdth">
				<img class="coma" src="{{ URL::asset('gfx/london/coma.png') }}" alt="coma">
				<span class="blck">In my eyes by far the best and most inspiring show on HR globally</span>
				<strong class="strn">- Google</strong>
				<img class="quote-logo" src="{{ URL::asset('gfx/london/google.png') }}" alt="Google">
			</div>
			<button class="green-btn">Get Your Ticket</button>
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
				<p>In 2017 we have welcomed +7000 people from as many as +120 countries. Representing the world’s
					leading organizations across all industry verticals, Unleash is the leading show on people and technology
					both in terms of content and deals done. With a global footprint that influences millions of employees
					worldwide no other community is having such a powerful impact on shaping the Future of Work!</p>
			</div>
			<div class="testim wdth">
				<img class="coma" src="{{ URL::asset('gfx/london/coma.png') }}" alt="coma">
				<span class="blck">Fantastic opportunity to network, this show just gets better every year!</span>
				<strong class="strn">- Activision Blizzard</strong>
			</div>
			<button class="green-btn">Get Your Ticket</button>
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
				<p>Unleash is host to the world’s leading Startup Competition on the Future of Work and people technology.
					First staged in October 2011, it has successfully hosted 8 editions in total, including four in Amsterdam,
					two in London and two in Paris. As the show has matured, what started as pro-bono work is now the
					must-attend show for startups; it’s where they learn how to pitch their product to fans and critics alike
					including entrepreneurs such as Arianna Huffington and Sir Richard Branson, thinkers and analysts like
					Josh Bersin, Gary Hamel and Simon Sinek, as well as investors, vendors, media - and perhaps most
					importantly of all - the organizations they wish to serve.</p>
			</div>
			<button class="green-btn">Apply to compete</button>
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
					<p>ExCeL London, will host Unleash in March 2018. ExCeL is London and the UK’s leading venue for exhibitions, conferences, and much more. With two on-site metro stations, parking for 3,700 cars and London City Airport just 5 minutes away, getting to ExCeL London couldn’t be easier.</p>
				</div>
				<button class="green-btn">More</button>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Hurry Up!</h2>
			<p>Unleash Yourself!  Book your place at the world’s leading and fastest growing show on the future of work.  Now is the time face the challenge of change and let your people loose to power your organization in the next decade of the 21st Century.</p>
			<button class="green-btn">Book now</button>
		</div>
	</section>
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
