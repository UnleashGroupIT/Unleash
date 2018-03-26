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
			<div class="thankYou-section">
				<h1>Thank you</h1>
				<p>We want to give a <strong>BIG THANK YOU</strong> to our attendees and sponsors this year. Our shows continue to be a place of innovation and disruption on the Future of Work &amp; Technology around the world because of your participation!</p>
			</div>
			<!--<h4>Main sponsors</h4>-->
			<div class="mainsponsors-wrap">
					
					
			        <div><a href="https://www.avature.net/" target="_blank" title="Avature"><img id="ava" src="{{ URL::asset('gfx/london/header/sponsors/avature.svg') }}" alt="Avature"></a></div>
                    <div id="corner"><a href="http://www.cornerstoneondemand.co.uk/" target="_blank" title="Cornerstone OnDemand"><img id="cornerstone" src="{{ URL::asset('gfx/london/header/sponsors/cornerstone.svg') }}" alt="Cornerstone"></a></div>
                    <div id="orac"><a href="https://www.oracle.com/" target="_blank" title="Oracle"><img class="sppn" id="oracle" src="{{ URL::asset('gfx/london/header/sponsors/oracle.png') }}" alt="Oracle"></a></div>
                    <div><a href="http://www.successfactors.com/en_us.html" target="_blank" title="SAP SuccessFactors"><img id="sap" src="{{ URL::asset('gfx/london/header/sponsors/successfactors.svg') }}" alt="SAP SuccessFactors"></a></div>
                    <div><a href="https://www.workday.com/" target="_blank" title="Workday"><img src="{{ URL::asset('gfx/london/header/sponsors/workday.svg') }}" alt="Workday"></a>	</div>		


			</div>
			<div class="threeBtn-section">
				<a href="https://jumpshare.com/b/oY41mJkgYsLQ8qrIfZJa" target="_blank"><button class="green-btn">Get Slides</button></a>
				<a href="{{ route('lasvegas.index') }}"><button class="red-btn">Join us in Las Vegas</button></a>
				<a href="{{ route('ams.index') }}"><button class="topaz-btn">Join us in Amsterdam</button></a>
			</div>
		</section>
	<!--Mainsponsors END-->


	
@endsection

@section('maincontent')
<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>The Future of Work is Now!</h2>
			<p>Today we all have a responsibility to help unleash the potential of our people. It’s up to our leaders, innovators, influencers and each of you to determine how we can transform organizations and identify the technologies and ways to apply them that will have the greatest potential impact and value. UNLEASH America gives you the platform to meet with more than just the vendors, but also the leaders, decision makers and innovators shaping the way we work and get work done.</p>
			<h3>Las Vegas <strong>|</strong> May 15-16 2018</h3>
			<a href="{{ route('lasvegas.tickets') }}" target="_blank"><button class="red-btn">Book Now</button></a>
		</div>
	</section>
	<!--Future of Work END-->
	<section class="one keynotes-title">
		<div class="wrp">
			<h2>London Keynote Speakers</h2>
		</div>
	</section>
	<!--Keynote-->
	<section class="two keynote">
		<div class="wrppr">
			<div class="img-bg pressner">
				<h3>Kristin Pressner</h3>
			</div>
		</div>
		<div class="wrppr">
			<div class="img-bg jonas">
				<h3>Jonas Kjeillberg</h3>
			</div>
		</div>
		<div class="wrppr">
			<div class="img-bg bruces">
				<h3>Bruce Daisley</h3>
			</div>
		</div>
		<div class="wrppr">
			<div class="img-bg belinda">
				<h3>Belinda Parmar</h3>
			</div>
		</div>
	</section>
	<!--Keynote END-->
	<section class="one startup">
		<div class="wrp">
			<h2>London Startup Winner</h2>
			<p>After pitching against strong HR Tech competitors and in front of a highly respected expert jury, we’re excited to announce that RoboRecruiter has won the UNLEASH Conference &amp; Expo Startup Award!</p>
			<a class="startupWinner-logo" href="https://www.roborecruiter.ai/" target="_blank"><img src="{{ URL::asset('gfx/london/v2-site/robo.png') }}" alt="Roborecruiter"></a>
			<a href="http://www.unleashgroup.io/news/roborecruiter-takes-the-top-startup-prize-by-automating-recruitment-engagement-with-intelligent-chatbots/" target="_blank"><button class="red-btn">More Information</button></a>
			<div class="startupSponsoredby">
				<p>Sponsored by</p>
				<a href="http://www.cornerstoneondemand.co.uk/" target="_blank"><img src="{{ URL::asset('gfx/london/header/sponsors/cornerstone.svg') }}" alt="IMG"></a>
			</div>
		</div>
	</section>
	<!--Speakers-->
	<section class="one past-speakers">
		<h2>OUR SPEAKERS</h2>
		@include('london.components.speakergrid')
	</section>
	<!--Speakers END-->
@endsection

