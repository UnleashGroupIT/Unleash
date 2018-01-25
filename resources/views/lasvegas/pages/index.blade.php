@extends('lasvegas.main')

@section('meta')
		<meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018.">
 <meta name="google-site-verification" content="n0SN8rSlfzJtkCBmSexzIG6dT59FadZc03C1eYF1qeg" />
         <!-- Open Graph data -->
        <meta property="og:site_name" content="UNLEASH - America"/>
        <meta property="og:title" content="UNLEASH - America"/>
        <meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018."/>
        <meta property="og:url" content="http://www.unleashgroup.io/america">
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}" />
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@hrtechworld">
        <meta name="twitter:creator" content="@hrneurope">
        <meta name="twitter:title" content="UNLEASH - America">
        <meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH America on 15-16 May 2018." />
        <meta name="twitter:image" content="{{ URL::asset('gfx/lasvegas/UNLEASH_metashare_america.png') }}">
@endsection

@section('title', 'Index')

@section('headercss')

	<link rel="stylesheet" type="text/css" href="{{ mix('css/lasvegas/index.css') }}">

@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('headercontent')
		<!--Mainsponsors-->
		<section class="one mainsponsors">
			<span>Lead Sponsors <strong>2018</strong></span>
			<div class="mainsponsors-wrap">
                   
                   <div id="cb"><a href="https://www.careerbuilder.com/" target="_blank" title="CareerBuilder"><img src="{{ URL::asset('gfx/lasvegas/header/sponsors/Careerbuilder.svg') }}" alt="CareerBuilder"></a></div>
                   
                    <div id="cross"><a href="http://www.crossknowledge.com/en_US/elearning/home.html" target="_blank" title="CrossKnowledge"><img src="{{ URL::asset('gfx/lasvegas/header/sponsors/crossknowledge.svg') }}" alt="CrossKnowledge"></a></div>
                    
                    <div id="cultureamp"><a href="https://www.cultureamp.com/" target="_blank" title="Culture Amp"><img src="{{ URL::asset('gfx/lasvegas/header/sponsors/CultureAmp.svg') }}" alt="Culture Amp"></a></div>
                    <div id="ibm-wrp">  <a href="https://www.ibm.com/" target="_blank" title="IBM"><img id="ibm" src="{{ URL::asset('gfx/lasvegas/header/sponsors/ibm.svg') }}" alt="IBM"></a></div>

                  <div id="icims"><a href=https://www.icims.com/" target="_blank" title="iCims"><img src="{{ URL::asset('gfx/lasvegas/header/sponsors/icims-white.svg') }}" alt="iCims"></a></div>

                  <div id="tanner"><a href="http://www.octanner.com/language.html" target="_blank" title="O.C.Tanner"><img src="{{ URL::asset('gfx/lasvegas/header/sponsors/oct.png') }}" alt="O.C.Tanner"></a></div> 
                   
                  <div id="sap-wrp"> <a href="http://www.successfactors.com/en_us.html" target="_blank" title="SAP SuccessFactors"><img id="sap" src="{{ URL::asset('gfx/lasvegas/header/sponsors/successfactors.svg') }}" alt="SAP SuccessFactors"></a></div>
                   
                  <div id="smart-wrp"><a href="https://www.smartrecruiters.com/" target="_blank" title="smartrecruiters"><img id="smart" src="{{ URL::asset('gfx/lasvegas/header/sponsors/smartrecruiters.svg') }}" alt="smartrecruiters"></a></div>

                  <div id="walkme"><a href="https://www.walkme.com/" target="_blank" title="WalkMe"><img src="{{ URL::asset('gfx/lasvegas/header/sponsors/Walkme.svg') }}" alt="WalkMe"></a></div>
                   		

			</div>
		</section>
	<!--Mainsponsors END-->
@endsection

@section('maincontent')
	<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>The Future of Work is Now!</h2>
			<p>Human Resources is not only HR’s responsibility anymore. It’s up to our leaders, innovators, influencers and each of you to determine how we can transform organizations and identify the technologies and ways to apply them that will have the greatest potential impact and value. Brought to you by the team behind UNLEASH World Conference &amp; Expo (formerly HR Tech World), the fastest growing HR Show in the World over the last five years, UNLEASH America gives you the platform to meet with more than vendors, but also the decision makers and innovators shaping the way we work and get work done.</p>
			<a href="{{ route('lasvegas.tickets') }}"><button class="red-btn">Book Now</button></a>
		</div>
	</section>
	<!--Future of Work END-->
	<!--Keynote-->
	<section class="two keynote arianna">
		<div class="wrppr">
			<div class="fix-bg keynote"></div>
		</div>
		<div class="content">
			<div class="content-wrap">

				<h2>America is the world’s supreme entrepreneurial hotspot...</h2>
				<div class="h4wrp"><img class="U-logo" src="{{ URL::asset('gfx/lasvegas/U.png') }}" alt="Unleash"></div>
				<p class="pdg">...generating a seemingly endless supply of new technologies, new companies, people-to-people networks, new ideas and diversity. Following critical acclaim at the inaugural show in San Francisco, appetite for the greatest show on Future of Work and Technology, UNLEASH, will scale to +10,000 industry leaders from over 120 countries across all three shows in London, Amsterdam and this year’s big announcement: Las Vegas in 2018! Our U.S.-based event will be headquartered at the Aria Resort &amp; Casino Las Vegas for the next two years.</p>

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
					<img class="coma" src="http://www.unleashgroup.io/gfx/lasvegas/coma.png" alt="coma">
					<span>The best event in the world on HR and Technology</span>
						<p><strong class="strn">Josh Bersin, Principal &amp; Founder, Bersin by Deloitte</strong></p>
				</div>
			</div>
			<button class="red-btn popup" data-popupdata="applytospeak">Become a Speaker</button>
		</div>
		<div class="wrppr">
			<div class="fix-bg speakers right"></div>
		</div>
	</section>
	<!--Keynote END-->

	<!--Speakers-->
	 @include('lasvegas.components.speakergrid')
	<!--Speakers END-->

	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p>Unleash Your People! Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology. </p>
			<div class="your-clock"></div>
			<a href="{{ route('lasvegas.tickets') }}"><button class="red-btn">Register Now</button></a>
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
				<img class="coma" src="{{ URL::asset('gfx/lasvegas/coma.png') }}" alt="coma">
				<span class="blck">In my eyes by far the best and most inspiring show on HR globally</span>
				<strong class="strn">- Google</strong>
				<img class="quote-logo" src="{{ URL::asset('gfx/lasvegas/google.png') }}" alt="Google">
			</div>
			<a href="{{ route('lasvegas.tickets') }}"><button id="spnsrgrd" class="red-btn">Get Your Ticket</button></a>
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
				<img class="coma" src="{{ URL::asset('gfx/lasvegas/coma.png') }}" alt="coma">
				<span class="blck">Fantastic opportunity to network, this show just gets better every year!</span>
				<strong class="strn">- Activision Blizzard</strong>
			</div>
			<button class="red-btn popup" data-popupdata="becomeasponsor">Apply to be a Sponsor</button>
		</div>
	</section>
	<!--Clients END-->

	<!--Sponsors-->
	 @include('lasvegas.components.sponsorgrid')
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
			<button class="red-btn popup" data-popupdata="compete">Apply to compete</button>
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
					<p>UNLEASH is delighted to make its US home at the Aria Resort and Casino in Las Vegas, one of North America's premier destinations for large-scale meetings and shows.</p>
				</div>
				<a href="{{ route('lasvegas.travel') }}"><button class="red-btn">More</button></a>
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
