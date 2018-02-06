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
		
		<ul class="rslides" id="slider-demo">
          <!-- Slides -->
          <li>
            <video poster="{{ URL::asset('gfx/london/v2-site/header-bg-desktop.jpg') }}" id="bgvid" loop muted autoplay>
              <source src="{{ URL::asset('gfx/london/video/video-bg.webm') }}" type="video/webm">
              <source src="{{ URL::asset('gfx/london/video/video-bg.mp4') }}" type="video/mp4">
              <source src="{{ URL::asset('gfx/london/video/video-bg.ogv') }}" type="video/ogv">
            </video>
          </li>
          <li><img src="{{ URL::asset('gfx/london/v2-site/slider-1.jpg') }}" alt=""></li>
          <li><img src="{{ URL::asset('gfx/london/v2-site/slider-2.jpg') }}" alt=""></li>
          <li><img src="{{ URL::asset('gfx/london/v2-site/slider-3.jpg') }}" alt=""></li>
          <li><img src="{{ URL::asset('gfx/london/v2-site/slider-4.jpg') }}" alt=""></li>          
      </ul>

      <!--Mainsponsors-->
		<section class="one mainsponsors">
			<span>Lead Sponsors <strong>2018</strong></span>
			<!--<h4>Main sponsors</h4>-->
			<div class="mainsponsors-wrap">
					
					
			        <div><a href="https://www.avature.net/" target="_blank" title="Avature"><img src="{{ URL::asset('gfx/london/header/sponsors/avature.svg') }}" alt="Avature"></a></div>
                    <div id="corner"><a href="http://www.cornerstoneondemand.co.uk/" target="_blank" title="Cornerstone OnDemand"><img id="cornerstone" src="{{ URL::asset('gfx/london/header/sponsors/cornerstone.svg') }}" alt="Cornerstone"></a></div>
                    <div id="orac"><a href="https://www.oracle.com/" target="_blank" title="Oracle"><img class="sppn" id="oracle" src="{{ URL::asset('gfx/london/header/sponsors/oracle.png') }}" alt="Oracle"></a></div>
                    <div><a href="http://www.successfactors.com/en_us.html" target="_blank" title="SAP SuccessFactors"><img id="sap" src="{{ URL::asset('gfx/london/header/sponsors/successfactors.svg') }}" alt="SAP SuccessFactors"></a></div>
                    <div><a href="https://www.workday.com/" target="_blank" title="Workday"><img src="{{ URL::asset('gfx/london/header/sponsors/workday.svg') }}" alt="Workday"></a>	</div>		


			</div>
		</section>
	<!--Mainsponsors END-->


	
@endsection

@section('maincontent')
<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>The Future of Work is Now!</h2>
			<p>2018 marks UNLEASH’s fourth year at the ExCeL London, a ground-breaking show unlike any other. Offering unparalleled learning and networking opportunities on the Future of Work and Technology, UNLEASH Conference &amp; Expo in 2018 is officially the UK’s largest enterprise show for decision makers, with over 60 nationalities represented in 2017 and more than half of the attendees from the C-Suite. We are the fastest growing people-focused event on the planet and we pride ourselves in organising shows that make a real difference and bring a greater good to the world.</p>
			<a href="{{ route('london.tickets') }}" target="_blank"><button class="red-btn">Book Now</button></a>
		</div>
	</section>
	<!--Future of Work END-->
	<!--Keynote-->
	<!--Keynote-->
	<section class="two keynote">
		<div class="wrppr">
			<div class="img-bg jonas"></div>
		</div>
		<div class="content">
			<div class="content-wrap">
				<h2>Jonas Kjellberg</h2>
				<h5>How do you DISRUPT &amp; Change the World of Work?</h5>
				
				<p>Joining us in London this March is tech investor extraordinaire Jonas Kjellberg, the co-creator of Skype - the company that changed the world of online communications forever and a technology industry that gave birth to the exponential technologies currently disrupting entire job functions and industries.</p>
				
				<p>Jonas didn’t just change the telecommunications industry. He was an early investor into the very successful and disruptive Zalando, even though London bankers &amp; analysts cried foul, and then he sold iCloud to Apple. Amongst many accolades and perhaps most poignantly, Jonas is someone who gets great solace in helping to “f**k up things” for the big lumbering (and sometimes-complacent) corporate giants of the world. </p>
							
				<p>Hear from Jonas on 20 March on how we changed the world of work as we know it.</p>
			</div>
			<div class="schedule-wrp">
				<button id="spkrgrd" class="red-btn popup" data-popupdata="applytospeak">Apply to Speak</button>
			</div>
		</div>
	</section>
	<section class="one speaker-highlights">
			<div class="highlights-wrp">
				<div class="hl-member kristen-pressner">
					<div class="member-wrp">
						<h2>Kristen Pressner</h2>
						<h5>CHRO</h5>
						<h6>Roche Diagnostics</h6>
					</div>
				</div>
				<div class="hl-member alexander-betts">
					<div class="member-wrp">
						<h2>Alexander Betts</h2>
						<h5>Professor of International Affairs</h5>
						<h6>University of Oxford</h6>
					</div>
				</div>
				<div class="hl-member ana-segurado">
					<div class="member-wrp">
						<h2>Ana Segurado</h2>
						<h5>Global Head of HR Effectiveness</h5>
						<h6>Maersk</h6>
					</div>
				</div>
				<div class="hl-member bruce-daisley">
					<div class="member-wrp">
						<h2>Bruce Daisley</h2>
						<h5>VP EMEA</h5>
						<h6>Twitter</h6>
					</div>
				</div>
				<div class="hl-member christian-illek">
					<div class="member-wrp">
						<h2>Christian Illek</h2>
						<h5>CHRO</h5>
						<h6>Deutsche Telekom</h6>
					</div>
				</div>
				<div class="hl-member deb-lee">
					<div class="member-wrp">
						<h2>Deb Lee</h2>
						<h5>Chief People Officer</h5>
						<h6>YNAP</h6>
					</div>	
				</div>
				<div class="hl-member dk-bartley">
					<div class="member-wrp">
						<h2>DK Bartley</h2>
						<h5>VP, Head of Talent Acquisition</h5>
						<h6>Dentsu Aegis</h6>
					</div>
				</div>
				<div class="hl-member zoe-vince">
					<div class="member-wrp">
						<h2>Zoe Vince</h2>
						<h5>Head of HR Innovation and Technology</h5>
						<h6>Cabinet Office</h6>
					</div>
				</div>
			</div>
			<div class="highlight-text">
				<h2>12 stages. 120 speakers. 2500+ decision-makers.</h2>
				<h4>Coming together this March to shape a new vision of the Future of Work<br />and Technology at UNLEASH Conference &amp; Expo in London.</h4>
				<div class="wrp">
					<p>Join our community of CEOs, CPOs, CFOs, HRIT Executives, Next-Gen Entrepreneurs, Tech Disruptors and Analysts to stay a step ahead of the socio-political disruption and speed of technological innovation shaking the foundations of our global economy.</p>
					<p>Facing Brexit head-on, we'll examine how it will affect the world of work and all those involved. We’ll also be demystifying the impact of GDPR on HR, exploring the conversation-shift from AI Armageddon to reskilling the workforce, and showcasing successful digital transformation strategies to help your organization on your journey. If that wasn’t enough, we’ll be revealing the secret to ambidextrous, empathetic leadership; the golden ticket to successfully future-proofing your organization. You don't want to miss these conversations. <strong>Come UNLEASH your people!</strong></p>
				</div>
			</div>
	</section>
	<!--Keynote END-->

	<!--Speakers-->
	<section class="one past-speakers">
		<h2>PAST SPEAKERS</h2>
		@include('london.components.speakergrid')
	</section>
	<!--Speakers END-->

	<!--Counter-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Register Now!</h2>
			<p><strong><b style="font-weight:400;">UNLEASH Your People!</b></strong><br />Be inspired by the industry’s top influencers; source the best solutions and services available for your organization; and have fun meeting like-minded industry leaders and pioneers. Reward yourself and your team by joining the world’s largest community on the Future of Work and Technology. </p>
			<a href="{{ route('london.tickets') }}" target="_blank"><button class="red-btn">Register Now</button></a>
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
			<a href="{{ route('london.tickets') }}" target="_blank"><button id="spnsrgrd" class="topaz-btn">Get Your Ticket</button></a>
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
				<img class="coma" src="{{ URL::asset('gfx/london/coma.png') }}" alt="coma">
				<span class="blck">Fantastic opportunity to network, this show just gets better every year!</span>
				<strong class="strn">- Activision Blizzard</strong>
			</div>
			<button class="topaz-btn popup" data-popupdata="becomeasponsor">Apply to be a Sponsor</button>
		</div>
	</section>
	<!--Clients END-->

	<!--Sponsors-->
	 @include('london.components.sponsorgrid')
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
			<a href="/startup"><button class="topaz-btn popup" data-popupdata="compete">Learn More</button></a>
		</div>
		<div class="wrppr">
			<div class="img-bg startup"></div>
		</div>
	</section>
	<!--Testimonial END-->
	<!--Map-->
	<section id="map" class="map">
		<iframe src="https://snazzymaps.com/embed/27565" width="100%" height="600px" style="border:none;"></iframe>
		<div class="content">
			<div class="mapcont-wrp">
				<!-- Google API for MAP -->
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>The ExCeL London, will host UNLEASH in March 2018. The ExCeL is London and the UK's leading venue for exhibitions and conferences. With two on-site metro stations, parking for 3,700 cars and London City Airport just five minutes away, getting to ExCeL London couldn't be easier.</p>
				</div>
				<a href="{{ route('london.floorplan') }}"><button class="darkgreen-btn">More</button></a>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
@endsection

