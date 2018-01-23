@extends('london.main')

@section('meta')
 <meta name="description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018.">
 
	  <!-- Open Graph data -->
	<meta property="og:site_name" content="UNLEASH London - Agenda"/>
	<meta property="og:title" content="UNLEASH London - Agenda"/>
	<meta property="og:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018."/>
	<meta property="og:url" content="http://www.unleashgroup.io/london/agenda">
	<meta property="og:type" content="website"/>
	<meta property="og:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@hrtechworld">
	<meta name="twitter:creator" content="@hrneurope">
	<meta name="twitter:title" content="UNLEASH London - Agenda">
	<meta name="twitter:description" content="Unleash your people at the fastest growing Future of Work shows in the world! Join us for UNLEASH London on 20-21 March 2018." />
	<meta name="twitter:image" content="{{ URL::asset('gfx/london/UNLEASH_metashare_london.png') }}">
		
@endsection

@section('title', 'London - Agenda')

@section('headercss')
<link rel="stylesheet" type="text/css" href="{{ mix('css/london/agenda.css') }}">
@endsection

@section('headerjs')

@endsection

@section('maincontent')
	<section class="agenda">
		<div class="title-section">
			<h1>Agenda</h1>
			<h4>London 20-21 March 2018 | ExCeL</h4>
		</div>
		<div class="contents-bg">
			<div class="contents-wrp">
				<div class="tabs-wrp">
					<nav>
						<ul class="side tabs">
					    	<li class="tab active" id = "day-1">March 20.</li>
					    	<li class="tab" id = "day-2">March 21.</li>  
						</ul>
					</nav>
				</div>
				<div id="day1" class="tabContent active">

					<!-- Main Stage -->
	    			<div class="cnt-wrp main-stage">
	    				<div class="left-side">
	    					<div class="upper-side">
		    					<div class="date">
		    						<h4>March 20.</h4>
		    					</div>
		    					<div class="time">
		    						<h2>08:00</h2>
		    					</div>
		    					<div class="session-name">
		    						<h3>Main Stage</h3>
		    					</div>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>ICC Auditorium</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Inspiration Visionaries, Entrepreneurs and Thinkers.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Inspirational Visionaries, Entrepreneurs and Thinkers who get the challenges of the tech revolution and what it means for business and organizations. Our Main Stage is second to none when it comes to helping you better understand and meet the challenges posed by technology. Let our speakers inspire you to create a better and brighter future world of work, and improved organizations that feel at ease in their ability to meet the challenge of disruptive innovation.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Main Stage -->

					<!-- HR Tech -->
	    			<div class="cnt-wrp hr-tech">
	    				<div class="left-side">
	    					<div class="upper-side">
		    					<div class="date">
		    						<h4>March 20.</h4>
		    					</div>
		    					<div class="time">
		    						<h2>08:00</h2>
		    					</div>
		    					<div class="session-name">
		    						<h3>HR Tech</h3>
		    					</div>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 14</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Get behind the scene on tech-driven transformation.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Get behind the scenes and take a good hard look at what HR Technology does and does not offer. Does it do what it’s supposed to do, and if not, why not? Tech driven transformation is never going to be easy in a world where the range of solutions is bewildering. Hear from senior executives who have been there and done that to benefit from their insights about how they’d do things differently with the benefit of hindsight.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END HR Tech -->

	    			<!-- SmartData -->
	    			<div class="cnt-wrp smartdata">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 20.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Smart Data</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 17</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Analytical tools make your data work smarter, not harder!.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Making data smart is all about knowing which bits to keep and which to discard. Having smart data ensures that you make correct decisions. With analytical tools those decisions can become even smarter, more efficient and even more effective. We bring you experts and practitioners with deep experience of how to leverage data and make it smart. More than that, you can listen as they share their experiences so that you better understand what works, what doesn’t, and why.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Smart Data -->	    
	    			
	    			<!-- Talent & Recruitment -->
	    			<div class="cnt-wrp talent">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 20.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Talent &amp; Recruitment</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 1</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>A candid look at the hills and valleys of talent strategy.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Join the best minds and hear some of the most innovative solutions to talent management and candidate acquisition. More than simple success stories it’s a chance to hear from others who have taken a tough look at the tech solutions on offer.  Find out what it takes to make your organization one where ‘love at first sight” becomes sustainable, and what you need to do to make it happen.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Talent & Recruitment -->	 

	    			<!-- Learning -->
	    			<div class="cnt-wrp learning">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 20.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Learning</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 13</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Spice up your learning process with the latest L&amp;D tech.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Training and development have never been more important than in toady’s fast paced business  environment. Hear from senior learning practitioners and experts as they discuss innovative solutions to workplace learning and bring you insights into what works and what doesn’t, as well as evaluating the steps you need to take to ensure you get technology that delivers on it’s promise.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Learning -->	

	    			<!-- Wellbeing -->
	    			<div class="cnt-wrp wellbeing">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 20.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Wellbeing &amp; Engagement </h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 6</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Game-changing approaches to benefits &amp; wellbeing.</h2>
	    						</div>
	    						<div class="content">
	    							<p>The time to put your Employee First is now! Investing in comprehensive well-being programs for your employees is paramount for boosting engagement and overall productivity in your organization. With candidates actively seeking workplaces which prioritize their mental and physical health, as well as opportunities for both flexible and rewarding work, how can you ensure you are the perfect fit for this workforce? We have the experts here to explain the best strategies for creating such initiatives to nurture happy and healthy teams while increasing productivity and cutting costs, benefiting your bottom line and promoting retention at the same time.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Wellbeing -->	    				    			  	    							    			

	    			<!-- Adoption -->
	    			<div class="cnt-wrp adoption">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 20.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Adoption</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 15</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Learn how to make your tech implementation a success.</h2>
	    						</div>
	    						<div class="content">
	    							<p>When tech implementations fail, it’s usually because of poor user adoption. Experts will be on hand to share their experiences and the hard lessons learned in driving user adoption and making tech projects successful. Whether it’s giving a makeover to an unfriendly user interface, or a matter of cultural or behavioural issues that require transformation, our speakers will propose practical insights and innovative solutions to your challenges.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Adoption -->

	    			<!-- Digital -->
	    			<div class="cnt-wrp digital">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 20.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Going Digital</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 16</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Innovation, agility, entrepreneurship – what HR needs to pursue.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Innovation, agility, entrepreneurial – these are words that are top of the agenda inside many organizations today. Many want to transform themselves into businesses that reflect these values, but are held back by legacy cultures, structures, and behaviours. This is where you get to find out from thought leaders, and those with experience of making the transformation, what it takes to make the change, what HR need to do, and what are the solutions available.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Digital -->

					<!-- HR Tech Analysts -->
	    			<div class="cnt-wrp analytst">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 20.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>HR Tech Analysts</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 2</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Leading analysts showcase the latest research into the future of HR Tech.</h2>
	    						</div>
	    						<div class="content">
	    							<p>What does the future hold for HR Tech? Does HR Tech deliver the goods and who does it best? What do buyers and users really want from their suppliers, and where are those suppliers on the magic quadrant? Leading analysts will be here to guide you through their latest research into the realities of HR systems and technology. Join the experts and get objective information on the past, present and future of HR Technology.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END HR Tech Analysts -->


					<!-- Think Tank -->
	    			<div class="cnt-wrp think-tank">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 20.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Think-Tank</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 3</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Dive deeper in these interactive and intimate sessions.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Dive deeper and get more interactive in our exclusive thought leader hosted focus group sessions. Led by some of the most respected experts from the HR and the Tech marketplace. These forums are designed so you have a unique opportunity to share experiences and challenges, learn from others, get your questions answered, and make new connections in a more intimate environment.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Think Tank -->

					<!-- Product Demos -->
	    			<div class="cnt-wrp productdemo">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 20.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Product Demos</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 4</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>What's the next big thing in HR tech? Come and see.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Listen to leading solution providers provide you with the practical information you need on their latest applications, and solutions.  Whether you are in the market for a new system or app, wondering how much longer they will support the one you just implemented, or simply curious about what’s out there, don’t miss out on these valuable sessions. You’ll be informed, wooed and even wowed, plus it’s a unique chance to put your questions direct to the developers.    Sponsors who are Diamond Plus, Diamond, Emerald and Platinum get this chance to show their new products in this room.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Product Demos -->	 

					<!-- Startup Stage -->
	    			<div class="cnt-wrp startup-stage">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 20.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Startup Stage</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4></h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Listen to tomorrow’s teach leaders, today.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Rub shoulders with the next generation of entrepreneurs – the inspired innovators who are coming up with tomorrow’s solutions today.  You’ll be able to hear from dynamic and tech savvy start-ups how their cutting edge ideas and solutions are going to challenge established ideas.  Listen to the Founders and CEO’s of these emerging tech companies discuss their vision of the future of HR and solutions they propose.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Startup Stage -->		    			   			


				</div>
				<div id="day2" class="tabContent">

			<!-- Main Stage -->
	    			<div class="cnt-wrp main-stage">
	    				<div class="left-side">
	    					<div class="upper-side">
		    					<div class="date">
		    						<h4>March 21.</h4>
		    					</div>
		    					<div class="time">
		    						<h2>08:00</h2>
		    					</div>
		    					<div class="session-name">
		    						<h3>Main Stage</h3>
		    					</div>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>ICC Auditorium</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Inspiration Visionaries, Entrepreneurs and Thinkers.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Inspirational Visionaries, Entrepreneurs and Thinkers who get the challenges of the tech revolution and what it means for business and organizations. Our Main Stage is second to none when it comes to helping you better understand and meet the challenges posed by technology. Let our speakers inspire you to create a better and brighter future world of work, and improved organizations that feel at ease in their ability to meet the challenge of disruptive innovation.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Main Stage -->

					<!-- HR Tech -->
	    			<div class="cnt-wrp hr-tech">
	    				<div class="left-side">
	    					<div class="upper-side">
		    					<div class="date">
		    						<h4>March 21.</h4>
		    					</div>
		    					<div class="time">
		    						<h2>08:00</h2>
		    					</div>
		    					<div class="session-name">
		    						<h3>HR Tech</h3>
		    					</div>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 14</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Get behind the scene on tech-driven transformation.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Get behind the scenes and take a good hard look at what HR Technology does and does not offer. Does it do what it’s supposed to do, and if not, why not? Tech driven transformation is never going to be easy in a world where the range of solutions is bewildering. Hear from senior executives who have been there and done that to benefit from their insights about how they’d do things differently with the benefit of hindsight.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END HR Tech -->

	    			<!-- SmartData -->
	    			<div class="cnt-wrp smartdata">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 21.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Smart Data</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 17</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Analytical tools make your data work smarter, not harder!.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Making data smart is all about knowing which bits to keep and which to discard. Having smart data ensures that you make correct decisions. With analytical tools those decisions can become even smarter, more efficient and even more effective. We bring you experts and practitioners with deep experience of how to leverage data and make it smart. More than that, you can listen as they share their experiences so that you better understand what works, what doesn’t, and why.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Smart Data -->	    
	    			
	    			<!-- Talent & Recruitment -->
	    			<div class="cnt-wrp talent">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 21.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Talent &amp; Recruitment</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 1</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>A candid look at the hills and valleys of talent strategy.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Join the best minds and hear some of the most innovative solutions to talent management and candidate acquisition. More than simple success stories it’s a chance to hear from others who have taken a tough look at the tech solutions on offer.  Find out what it takes to make your organization one where ‘love at first sight” becomes sustainable, and what you need to do to make it happen.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Talent & Recruitment -->	 

	    			<!-- Learning -->
	    			<div class="cnt-wrp learning">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 21.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Learning</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 13</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Spice up your learning process with the latest L&amp;D tech.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Training and development have never been more important than in toady’s fast paced business  environment. Hear from senior learning practitioners and experts as they discuss innovative solutions to workplace learning and bring you insights into what works and what doesn’t, as well as evaluating the steps you need to take to ensure you get technology that delivers on it’s promise.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Learning -->	

	    			<!-- Wellbeing -->
	    			<div class="cnt-wrp wellbeing">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 21.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Wellbeing &amp; Engagement </h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 6</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Game-changing approaches to benefits &amp; wellbeing.</h2>
	    						</div>
	    						<div class="content">
	    							<p>The time to put your Employee First is now! Investing in comprehensive well-being programs for your employees is paramount for boosting engagement and overall productivity in your organization. With candidates actively seeking workplaces which prioritize their mental and physical health, as well as opportunities for both flexible and rewarding work, how can you ensure you are the perfect fit for this workforce? We have the experts here to explain the best strategies for creating such initiatives to nurture happy and healthy teams while increasing productivity and cutting costs, benefiting your bottom line and promoting retention at the same time.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Wellbeing -->	    				    			  	    							    			

				  <!-- HRSS -->
	    			<div class="cnt-wrp hrss">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 21.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>HR Shared Services &amp; Payroll </h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 15</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Actionable approaches to successful enterprise wide shared services.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Actionable approaches to successful enterprise wide shared services and payroll systems /  typically companies spend 30-60% of their revenue on payroll (people). This enormous expense goes into salaries, benefits, training, facilities, travel, and many other areas. If we want to improve profitability, customer service, revenue generation, or product quality, shouldn’t we carefully analyze the biggest expenses we have?</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END HRSS -->


				  <!-- Leadership -->
	    			<div class="cnt-wrp leadership">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 21.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Leadership</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 16</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Golden insights into what drives effective and inspiration leadership.</h2>
	    						</div>
	    						<div class="content">
	    							<p>With massive political, social and economic unrest worldwide, it’s no wonder there is a global crisis of leadership. How can enterprise leaders create a supportive environment so their employees and organisations will thrive in tandem? Here, you’ll learn how crucial purpose-driven leadership is to maintaining stability in the workforce, and how to create value as a leader all the way from your board to your front-line employees. These experts will showcase the keys to effective leadership development in uncertain times and what programs and tech can support your overall leadership strategy to make your organization secure and stable going into the Future.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Leadership -->

					<!-- HR Tech Analysts -->
	    			<div class="cnt-wrp analytst">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 21.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>HR Tech Analysts</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 2</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Leading analysts showcase the latest research into the future of HR Tech.</h2>
	    						</div>
	    						<div class="content">
	    							<p>What does the future hold for HR Tech? Does HR Tech deliver the goods and who does it best? What do buyers and users really want from their suppliers, and where are those suppliers on the magic quadrant? Leading analysts will be here to guide you through their latest research into the realities of HR systems and technology. Join the experts and get objective information on the past, present and future of HR Technology.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END HR Tech Analysts -->


					<!-- Think Tank -->
	    			<div class="cnt-wrp think-tank">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 21.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Think-Tank</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 3</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Dive deeper in these interactive and intimate sessions.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Dive deeper and get more interactive in our exclusive thought leader hosted focus group sessions. Led by some of the most respected experts from the HR and the Tech marketplace. These forums are designed so you have a unique opportunity to share experiences and challenges, learn from others, get your questions answered, and make new connections in a more intimate environment.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Think Tank -->

					<!-- Product Demos -->
	    			<div class="cnt-wrp productdemo">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 21.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Product Demos</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4>Room 4</h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>What's the next big thing in HR tech? Come and see.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Listen to leading solution providers provide you with the practical information you need on their latest applications, and solutions.  Whether you are in the market for a new system or app, wondering how much longer they will support the one you just implemented, or simply curious about what’s out there, don’t miss out on these valuable sessions. You’ll be informed, wooed and even wowed, plus it’s a unique chance to put your questions direct to the developers.    Sponsors who are Diamond Plus, Diamond, Emerald and Platinum get this chance to show their new products in this room.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Product Demos -->	 

					<!-- Startup Stage -->
	    			<div class="cnt-wrp startup-stage">
	    				<div class="left-side">
	    					<div class="date">
	    						<h4>March 21.</h4>
	    					</div>
	    					<div class="time">
	    						<h2>08:00</h2>
	    					</div>
	    					<div class="session-name">
	    						<h3>Startup Stage</h3>
	    					</div>
	    					<div class="shares">
	    						<a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a>
	    						<a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a>
	    						<a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a>
	    					</div>
	    				</div>
	    				<div class="right-side">
	    					<div class="header">
	    						<div class="place">
	    							<h4></h4>
	    						</div>
	    					</div>
	    					<div class="body">
	    						<div class="title">
	    							<h2>Listen to tomorrow’s teach leaders, today.</h2>
	    						</div>
	    						<div class="content">
	    							<p>Rub shoulders with the next generation of entrepreneurs – the inspired innovators who are coming up with tomorrow’s solutions today.  You’ll be able to hear from dynamic and tech savvy start-ups how their cutting edge ideas and solutions are going to challenge established ideas.  Listen to the Founders and CEO’s of these emerging tech companies discuss their vision of the future of HR and solutions they propose.</p>
	    						</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- END Startup Stage -->		    	

				</div>
			</div>
		</div>
	</section>	
@endsection

@section('footerscripts')
	<script>
	$('#day2').addClass('hide');

	$('#day-1').click(function() { 
		if (!$(this).hasClass('active')) {
			$('#day1').removeClass('hide');
			/*$('#day1').show();*/
			$('#day-1').addClass('active');
			$('#day-2').removeClass('active');
			$('#day2').addClass('hide');
			/*$('#day2').hide();*/
		}
	});
	$('#day-2').click(function() { 
		if (!$(this).hasClass('active')) {
			$('#day2').removeClass('hide');
			/*$('#day2').show();*/
			$('#day-2').addClass('active');
			$('#day-1').removeClass('active');
			$('#day1').addClass('hide');
			/*$('#day1').hide();*/
		}
	});
	</script>
@endsection
