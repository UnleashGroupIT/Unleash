@extends('unleash.main')

@section('title', 'Index')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/flipclock.css">
@endsection

@section('headerjs')
	<!--slim version of Jquery to minimize the resource-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/flipclock.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
@endsection


@section('headercontent')
<section class="header-title">
			<h1><img src="gfx/title-logo.png" alt="Unleash" title="HOME"></h1>
		</section>
		<button id="book" class="pink-btn">Book Now</button>
		<!--Mainsponsors-->
		<section class="one mainsponsors">
			<h4>Main sponsors</h4>
			<div class="mainsponsors-wrap">
				<div><img src="gfx/talentBrew-white.png" alt="TalentBrew"></div>
				<div><img src="gfx/workday-white.png" alt="Workday"></div>
				<div><img src="gfx/glassdoor-white.png" alt="Glassdoor"></div>
				<div><img src="gfx/talentBrew-white.png" alt="TalentBrew"></div>
				<div><img src="gfx/workday-white.png" alt="Workday"></div>
				<div><img src="gfx/glassdoor-white.png" alt="Glassdoor"></div>
				<div><img src="gfx/talentBrew-white.png" alt="TalentBrew"></div>
				<div><img src="gfx/workday-white.png" alt="Workday"></div>
			</div>
		</section>
	<!--Mainsponsors END-->
@endsection

@section('maincontent')
<!--Future of Work-->
	<section class="one futureofwork">
		<div class="wrp">
			<h2>Future of Work</h2>
			<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>
			<button class="blue-btn">cta</button>
		</div>
	</section>
	<!--Future of Work END-->
	<!--Keynote-->
	<section class="two keynote arianna">
		<div class="fix-bg" id="keynote"></div>
		<div class="content">
			<div class="content-wrap">
				<div class="h4wrp">
					<div>
						<img class="mic-logo" src="gfx/mic.png" alt="Keynote">
						<h4 class="ky">Keynote in Amsterdam</h4>
					</div>
					<img class="U-logo" src="gfx/U.png" alt="Unleash">
				</div>
				<h2>Arianna Huffington</h2>
				<p class="pdg"><strong class="strn">Now is the most exciting time to be an HR professional</strong> A profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>
			</div>
			<div class="schedule-wrp">
				<div class="schedule">
					<img class="clock-logo" src="gfx/clock.png" alt="Date">
					<div class="date-place">
						<p><strong>day 01</strong> / 10.25 / Main Auditorium</p>

					</div>
				</div>
				<button class="white-btn">cta</button>
			</div>
		</div>
	</section>
	<section class="two keynote second speakers">
		<div class="content">
			<div class="content-wrap">
				<h2>Our Speakers</h2>
				<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>
				<div class="testim">
					<img class="coma" src="gfx/coma.png" alt="coma">
					<span>Ashion axe keytar truffaut migas arm to-tablae PBR&amp;B Drinking ashion! arm to-tablae PBR&amp;B Drinking ashion! arm to-tablae PBR&amp;B Drinking ashion!</span>
					<img class="quote-logo" src="gfx/google.png" alt="Google">
				</div>
			</div>
			<button class="blue-btn">cta</button>
		</div>
		<div class="fix-bg" id="keynote-2"></div>
	</section>
	<!--Keynote END-->
	<!--Speakers-->
	<section class="speakers-grid">
		<div class="speakers-wrap">
			<div class="speaker">
				<img src="gfx/HinssenP.jpg" alt="HinssenP">
				<div class="dtls-wrap">
					<h6 class="name">Peter Hinssen</h6>
					<p class="title">Chairman &amp; Co-Founder</p>
					<span class="company">Nexxworks</span>
				</div>
			</div>
			<div class="speaker">
				<img src="gfx/BotsmanR.jpg" alt="BotsmanR">
				<div class="dtls-wrap">
					<h6 class="name">Rachel Botsman</h6>
					<p class="title">Founder</p>
					<span class="company">Collaborative Lab</span>
				</div>
			</div>
			<div class="speaker">
				<img src="gfx/ShingD.jpg" alt="ShingD">
				<div class="dtls-wrap">
					<h6 class="name">David Shing</h6>
					<p class="title">Digital Prophet</p>
					<span class="company">AOL</span>
				</div>
			</div>
			<div class="speaker">
				<img src="gfx/HinssenP.jpg" alt="HinssenP">
				<div class="dtls-wrap">
					<h6 class="name">Peter Hinssen</h6>
					<p class="title">Chairman &amp; Co-Founder</p>
					<span class="company">Nexxworks</span>
				</div>
			</div>
			<div class="speaker">
				<img src="gfx/BotsmanR.jpg" alt="BotsmanR">
				<div class="dtls-wrap">
					<h6 class="name">Rachel Botsman</h6>
					<p class="title">Founder</p>
					<span class="company">Collaborative Lab</span>
				</div>
			</div>
			<div class="speaker">
				<img src="gfx/ShingD.jpg" alt="ShingD">
				<div class="dtls-wrap">
					<h6 class="name">David Shing</h6>
					<p class="title">Digital Prophet</p>
					<span class="company">AOL</span>
				</div>
			</div>
			<div class="speaker">
				<img src="gfx/HinssenP.jpg" alt="HinssenP">
				<div class="dtls-wrap">
					<h6 class="name">Peter Hinssen</h6>
					<p class="title">Chairman &amp; Co-Founder</p>
					<span class="company">Nexxworks</span>
				</div>
			</div>
			<div class="speaker">
				<img src="gfx/BotsmanR.jpg" alt="BotsmanR">
				<div class="dtls-wrap">
					<h6 class="name">Rachel Botsman</h6>
					<p class="title">Founder</p>
					<span class="company">Collaborative Lab</span>
				</div>
			</div>
			<div class="speaker">
				<img src="gfx/ShingD.jpg" alt="ShingD">
				<div class="dtls-wrap">
					<h6 class="name">David Shing</h6>
					<p class="title">Digital Prophet</p>
					<span class="company">AOL</span>
				</div>
			</div>
			<div class="speaker">
				<img src="gfx/HinssenP.jpg" alt="HinssenP">
				<div class="dtls-wrap">
					<h6 class="name">Peter Hinssen</h6>
					<p class="title">Chairman &amp; Co-Founder</p>
					<span class="company">Nexxworks</span>
				</div>
			</div>
		</div>
	</section>
	<!--Speakers END-->
	<!--Counter-->
	<section class="one-cntr counter">
		<div class="wrp">
			<h2>Hurry Up!</h2>
			<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed.</p>
			<div class="your-clock"></div>
			<button class="pink-btn">cta</button>
		</div>
	</section>
	<!--Counter END-->
	<!--Expo-->
	<section class="two expo">
		<div class="content">
			<div class="content-wrap">
				<h2>The Expo</h2>
				<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>
			</div>
			<div class="testim">
				<img class="coma" src="gfx/coma.png" alt="coma">
				<span>Ashion axe keytar truffaut migas arm to-tablae PBR&amp;B Drinking ashion! arm to-tablae PBR&amp;B Drinking ashion! arm to-tablae PBR&amp;B Drinking ashion!</span>
				<img class="quote-logo" src="gfx/google.png" alt="Google">
			</div>
			<button class="blue-btn">cta</button>
		</div>
		<div class="fix-bg" id="expo"></div>
	</section>
	<!--Expo END-->
	<!--Clients-->
	<section class="two clients">
		<div class="fix-bg" id="clients"></div>
		<div class="content">
			<div class="content-wrap">
				<h2>Our Clients</h2>
				<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>
			</div>
			<button class="blue-btn">cta</button>
		</div>
	</section>
	<!--Clients END-->
	<!--Sponsors-->
	<section class="sponsors">
		<div class="sponsors-wrp">
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div> 
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/workday.png" alt="Workday">
			</div>
			<div class="sponsor">
				<img src="gfx/oracle.png" alt="Workday">
			</div>
		</div>
	</section>
	<!--Sponsors END-->
	<!--Testimonial-->
	<section class="two testimonial">
		<div class="content">
			<div class="content-wrap">
				<h2>Startup Zone</h2>
				<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>
			</div>
			<button class="blue-btn">cta</button>
		</div>
		<div class="fix-bg" id="testimonial"></div>
	</section>
	<!--Testimonial END-->
	<!--Map-->
	<section class="map">
		<div class="content">
			<div class="mapcont-wrp">
				<div class="content-wrap">
					<h2>Venue</h2>
					<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems.</p>
				</div>
				<button class="blue-btn">cta</button>
			</div>
			<div class="map-pic">
			</div>
		</div>
	</section>
	<!--Map END-->
	<section class="one-cntr">
		<div class="wrp">
			<h2>Hurry Up!</h2>
			<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed.</p>
			<button class="pink-btn">cta</button>
		</div>
	</section>
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
