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
		<ul class="rslides" id="slider-demo">
          <!-- Slides -->
          <li>
            <video poster="{{ URL::asset('gfx/lasvegas/v2-site/header-bg-desktop.jpg') }}" id="bgvid" loop muted autoplay>
              <source src="{{ URL::asset('gfx/lasvegas/video/video-bg.webm') }}" type="video/webm">
              <source src="{{ URL::asset('gfx/lasvegas/video/video-bg.mp4') }}" type="video/mp4">
              <source src="{{ URL::asset('gfx/lasvegas/video/video-bg.ogv') }}" type="video/ogv">
            </video>
          </li>
          <li><img src="{{ URL::asset('gfx/lasvegas/v2-site/slider-1.jpg') }}" alt=""></li>
          <li><img src="{{ URL::asset('gfx/lasvegas/v2-site/slider-2.jpg') }}" alt=""></li>
          <li><img src="{{ URL::asset('gfx/lasvegas/v2-site/slider-3.jpg') }}" alt=""></li>
          <li><img src="{{ URL::asset('gfx/lasvegas/v2-site/slider-4.jpg') }}" alt=""></li>          
      	</ul>

		<!--Mainsponsors-->
		<section class="one mainsponsors">
			<span>Lead Sponsors <strong>2018</strong></span>
			<div class="mainsponsors-wrap">
                   
                   
				  <div id="apple-wrp"><a href="https://www.applearn.com/" target="_blank" title="Applearn"><img id="applearn" src="{{ URL::asset('gfx/lasvegas/header/sponsors/applearn.svg') }}" alt="Applearn"></a></div>
                   <div id="cb"><a href="https://www.careerbuilder.com/" target="_blank" title="CareerBuilder"><img src="{{ URL::asset('gfx/lasvegas/header/sponsors/Careerbuilder.svg') }}" alt="CareerBuilder"></a></div>
                   
                    <div id="corner"><a href="http://www.cornerstoneondemand.co.uk/" target="_blank" title="Cornerstone OnDemand"><img id="cornerstone" src="{{ URL::asset('gfx/lasvegas/header/sponsors/cornerstone.svg') }}" alt="Cornerstone"></a></div>
                    <div id="cross"><a href="http://www.crossknowledge.com/en_US/elearning/home.html" target="_blank" title="CrossKnowledge"><img src="{{ URL::asset('gfx/lasvegas/header/sponsors/crossknowledge.svg') }}" alt="CrossKnowledge"></a></div>
                    
                    <div id="cultureamp"><a href="https://www.cultureamp.com/" target="_blank" title="Culture Amp"><img src="{{ URL::asset('gfx/lasvegas/header/sponsors/CultureAmp.svg') }}" alt="Culture Amp"></a></div>
                    <div id="ibm-wrp">  <a href="https://www.ibm.com/" target="_blank" title="IBM"><img id="ibm" src="{{ URL::asset('gfx/lasvegas/header/sponsors/ibm.svg') }}" alt="IBM"></a></div>

                  <div id="icims"><a href="https://www.icims.com/" target="_blank" title="iCims"><img src="{{ URL::asset('gfx/lasvegas/header/sponsors/icims-white.svg') }}" alt="iCims"></a></div>

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
			<p>Human Resources is no longer just HR’s responsibility anymore. It’s up to our leaders, innovators, influencers and each of you to determine how we can transform organizations and identify the technologies and ways to apply them that will have the greatest potential impact and value. Brought to you by the team behind UNLEASH World Conference &amp; Expo (formerly HR Tech World), the fastest growing HR Show in the World over the last five years, UNLEASH America gives you the platform to meet with more than vendors, but also the decision makers and innovators shaping the way we work and get work done.</p>
			<a href="{{ route('lasvegas.tickets') }}"><button class="white-btn">Book Now</button></a>
		</div>
	</section>
	<!--Future of Work END-->
	<!--Keynote-->
	<section class="two keynote">
		<div class="wrppr">
			<div class="img-bg mo"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>MO GAWDAT</h2>
				<h5>Chief Business Officer - Google X</h5>
				
				<p>With a career rooted in innovation, Mo Gawdat is no stranger to the grit business leaders must show to evolve and scale their organisations. We’re elated to have Mo join us for UNLEASH America in Las Vegas to give his take on what you need to harness your business’s potential.</p>
				
				<p>For the first time ever, Mo Gawdat, Chief Business Officer for Google X, will take to the stage with strategies and ideas to help you on your way to building a successful innovation factory. In his step-by-step approach, he will deliver critical insight into what works and what can change the world.</p>
							
			</div>
			<div class="schedule-wrp">
				<button id="spkrgrd" class="red-btn popup" data-popupdata="applytospeak">Apply to Speak</button>
			</div>
		</div>
	</section>
	<section class="one speaker-highlights">
			<div class="highlights-wrp">
				<div class="hl-member jill-larsen">
					<div class="member-wrp">
						<h2>Jill Larsen</h2>
						<h5>SVP Human Resources &amp; Talent Acquisition</h5>
						<h6>Cisco</h6>
					</div>
				</div>
				<div class="hl-member josh-bersin">
					<div class="member-wrp">
						<h2>Josh Bersin</h2>
						<h5>Founder and Principal</h5>
						<h6>Bersin by Deloitte</h6>
					</div>
				</div>
				<div class="hl-member jennifer-waldo">
					<div class="member-wrp">
						<h2>Jennifer Waldo</h2>
						<h5>Vice President,  CHRO</h5>
						<h6>GE Digital</h6>
					</div>
				</div>
				<div class="hl-member david-lee">
					<div class="member-wrp">
						<h2>David Lee</h2>
						<h5>VP, Innovation &amp; Strategic Enterprise Fund</h5>
						<h6>UPS</h6>
					</div>
				</div>
				<div class="hl-member kathleen-hogan">
					<div class="member-wrp">
						<h2>Kathleen Hogan</h2>
						<h5>Chief People Officer</h5>
						<h6>Microsoft</h6>
					</div>
				</div>
				<div class="hl-member sjoerd-gehring">
					<div class="member-wrp">
						<h2>Sjoerd Gehring</h2>
						<h5>Global VP of Talent Acquisition &amp; Employee Experience</h5>
						<h6>Johnson &amp; Johnson</h6>
					</div>	
				</div>
				<div class="hl-member diane-adams">
					<div class="member-wrp">
						<h2>Diane K. Adams</h2>
						<h5>Chief Culture and Talent Officer</h5>
						<h6>McGraw-Hill Education</h6>
					</div>
				</div>
				<div class="hl-member curt-burghardt">
					<div class="member-wrp">
						<h2>Curt Burghardt </h2>
						<h5>VP, HR Shared Services &amp; HR Systems</h5>
						<h6>Walgreens</h6>
					</div>
				</div>
			</div>
			<div class="highlight-text">
				<h2>12 stages. 120 speakers. 2500+ decision-makers.</h2>
				<div class="wrp">
					<p>Returning to the US in May to bring you the freshest thoughts on the Future of Work, UNLEASH America in Las Vegas takes you to workplace tech’s cloud 9 with our community of CEOs, CPOs, CFOs, HRIT Executives, Tech Disrupters, and Analysts that will show you how the world of work as we know it is shifting for the better. Beyond the industry's latest technological innovations, the show will also highlight the latest strategies designed to re-infuse a human perspective into the workplace.<br /><br />
					In an era of tech and socio-political uncertainty, how can you make sure your workforce maintains collaboration and innovation? UNLEASH’s dynamic speaker lineup and Expo Floor will give you the tools you need to maintain your company’s growth. We’ll guide you through adopting the best tech, protecting your 
employee’s data from cyber-attacks, improving your hiring strategies and bringing your talent branding to where exactly it needs to be. All of this and more awaits at UNLEASH America in Last Vegas. Don’t miss your chance to be part of the conversations changing the Future of Work. Challenge the status quo in the world of work and <strong>UNLEASH your people!</strong></p>
				</div>
			</div>
	</section>

	<!--Speakers-->
	<section class="one past-speakers">
		<h2>PAST SPEAKERS</h2>
		@include('lasvegas.components.speakergrid')
	</section>
	<!--Speakers END-->

	<!--Counter-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p><strong><b style="font-weight:400;">UNLEASH Your People!</b></strong><br />Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology. </p>
			<a href="{{ route('lasvegas.tickets') }}" target="_blank"><button class="red-btn">Register Now</button></a>
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
			<a href="{{ route('lasvegas.tickets') }}" target="_blank"><button id="spnsrgrd" class="red-btn">Get Your Ticket</button></a>
		</div>
		<div class="wrppr">
			<div class="img-bg expo"></div>
		</div>
	</section>
	<!--Expo END-->
	<!--Clients-->
	<section class="two clients">
		<div class="wrppr">
			<div class="img-bg clients"></div>
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
	<section class="two startup">
		<div class="content">
			<div class="content-wrap">
				<h2>Startup Zone</h2>
				<p>UNLEASH is host to the world’s leading Startup Competition on the Future of Work and Technology.
					First staged in October 2011, it has successfully hosted eight editions in total, including four in Amsterdam,
					two in London and two in Paris. As the show has matured, what started as pro-bono work, is now the
					must-attend show for startups; it’s where they learn how to pitch their product to fans and critics alike
					including entrepreneurs such as Arianna Huffington and Sir Richard Branson, thinkers and analysts like
					Josh Bersin, Gary Hamel and Simon Sinek, as well as investors, vendors, media - and perhaps most
					importantly of all - the organizations they wish to serve.</p>
			</div>
			<a href="/startup"><button class="red-btn popup" data-popupdata="compete">Learn More</button></a>
		</div>
		<div class="wrppr">
			<div class="img-bg startup"></div>
		</div>
	</section>
	<!--Testimonial END-->
	<!--Map-->
	<section id="map" class="map">
		<iframe src="https://snazzymaps.com/embed/48553" width="100%" height="600px" style="border:none;"></iframe>
		<div class="content">
			<div class="mapcont-wrp">
				<!-- Google API for MAP -->
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>UNLEASH is delighted to make its US home at the Aria Resort and Casino in Las Vegas, one of North America's premier destinations for large-scale meetings and shows.</p>
				</div>
				<a href="{{ route('lasvegas.travel') }}"><button class="darkgreen-btn">More</button></a>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->



	
@endsection

