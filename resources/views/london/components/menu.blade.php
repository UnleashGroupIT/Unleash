		<section id="header-menu">
			<div id="hamburger">
	            <div id="mobile-logo">
					<a href="/">
						<h1>
							<img src="{{ URL::asset('gfx/london/unleash-logo.png') }}" alt="Unleash logo" title="UNLEASH">
						</h1>
					</a>
				</div>	
	        	<div class="bar-wrp">
	        		<div class="bar"></div>
	        	</div>
        	</div>
			<!--Menu-->
			<nav id="desktop-menu">
				<!--Logo-->
				<div id="unleash-logo">
					<a href="/">
						<h1>
							<img id="full-logo" src="{{ URL::asset('gfx/london/unleash-logo.png') }}" alt="Unleash logo" title="UNLEASH">
						</h1>
					</a>
				</div>
				<img id="x-btn" src="{{ URL::asset('gfx/x-btn.svg') }}" alt="X">
				<ul class="menu-ul">
					<li><a href="/" title="HOME">Home</a></li>
					<li><a href="/" title="NEWS">News</a></li>
					<!--Dropdownbox for the menu-->
					<li title="EVENTS" class="more opened">
						<a class="more-a">Events</a>
						<!--Double wrap to prevent hover interrupt-->
						<div class="dropdownbox">
							<div class="ul-wrp">
								<h4>Where would you like to go?</h4>
								<ul class="first-ul">
									<li class="london" title="LONDON">
										<a class="prevent" href="{{ route('london.index') }}">
											<img src="{{ URL::asset('gfx/london-box.png') }}" alt="LONDON">
											<div class="brdr"></div>
										</a>
										<ul class="subs-ul">
											<li><a href="{{ route('london.index') }}">Show</a></li>
											<li><a href="{{ route('london.index') }}#spkrgrd">Speakers</a></li>
											<li><a href="{{ route('london.sponsors') }}">Sponsors</a></li>
											<li><a href="{{ route('london.loyalty') }}">Loyalty</a></li>
											<li><a href="{{ route('london.floorplan') }}">Venue</a></li>
											<li><a href="{{ route('london.travel') }}">Travel</a></li>
											<li><a href="{{ route('london.tickets') }}">Tickets</a></li>
										</ul>
									</li>
									<li class="lasvegas" title="LAS VEGAS">
										<a class="prevent" href="{{ route('lasvegas.index') }}">
											<img src="{{ URL::asset('gfx/vegas-box.png') }}" alt="LAS VEGAS">
											<div class="brdr"></div>
										</a>
										<ul class="subs-ul">
											<li><a href="{{ route('lasvegas.index') }}">Show</a></li>
											<li><a href="{{ route('lasvegas.index') }}#spkrgrd">Speakers</a></li>
											<li><a href="{{ route('lasvegas.index') }}#spnsrgrd">Our Clients</a></li>
											<li><a href="{{ route('lasvegas.floorplan') }}">Venue</a></li>
											<li><a href="{{ route('lasvegas.tickets') }}">Tickets</a></li>
										</ul>
									</li>
									<li class="amsterdam" title="AMSTERDAM">
										<a class="prevent" href="{{ route('ams.index') }}">
											<img src="{{ URL::asset('gfx/ams-box.png') }}" alt="AMSTERDAM">
											<div class="brdr"></div>
										</a>
										<ul class="subs-ul">
											<li><a href="{{ route('ams.index') }}">Show</a></li>
											<li><a href="{{ route('ams.index') }}#spkrgrd">Speakers</a></li>
											<li><a href="{{ route('ams.sponsors') }}">Sponsors</a></li>
											<li><a href="{{ route('ams.floorplan') }}">Venue</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="{{ route('ams.about') }}">About</a></li>
					<li><a href="{{ route('ams.about') }}#careers">Careers</a></li>
				</ul>
				<div class="social-booknow">
					<div class="icos-wrp">
						<div><a href="https://www.youtube.com/user/hrneurope/"><img class="youtube" src="{{ URL::asset('gfx/youtube-white.svg') }}" alt="Youtube"></a></div>
						<div><a href="https://www.facebook.com/unleashgroup/"><img src="{{ URL::asset('gfx/facebook-white.svg') }}" alt="Facebook"></a></div>
						<div><a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ URL::asset('gfx/linkedin-white.svg') }}" alt="Linkedin"></a></div>
						<div><a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.svg') }}" alt="Twitter"></a></div>
					</div>
					<div class="envelope popup" data-popupdata="joinourcommunity">
					  <div class="icon-envelope"></div>
					  <div class="header"></div>
					  <div class="letter"></div>
					</div>
				</div>
					
				
			</nav>
		</section>
		<nav id="sub" class="sub-menu">
			<ul class="spec-menu amsterdam">
				<li><a href="{{ route('london.index') }}">SHOW</a></li>
				<li><a href="{{ route('london.index') }}#spkrgrd">SPEAKERS</a></li>
				<li><a href="{{ route('london.sponsors') }}">SPONSORS</a></li>
				<li><a href="{{ route('london.loyalty') }}">LOYALTY</a></li>
				<li><a href="{{ route('london.floorplan') }}">VENUE</a></li>
				<li><a href="{{ route('london.travel') }}">TRAVEL</a></li>
				<li><a href="{{ route('london.tickets') }}">TICKETS</a></li>
			</ul>
		</nav>