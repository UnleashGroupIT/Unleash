		<section id="header-menu">
			<!--Logo-->
				<div id="unleash-logo">
					<a href="/">
						<h1>
							<img id="u-logo" src="{{ URL::asset('gfx/u-logo.png') }}" alt="Unleash logo" title="UNLEASH">
							<img id="full-logo" src="{{ URL::asset('gfx/unleash-logo.png') }}" alt="Unleash logo" title="UNLEASH">
						</h1>
					</a>
				</div>
			<!--Menu-->
			<nav id="desktop-menu">
				
				<ul class="menu-ul">
					<li><a href="http://www.unleashgroup.io/" title="HOME">Home</a></li>
					<li><a href="http://www.unleashgroup.io/" title="NEWS">News</a></li>
					<!--Dropdownbox for the menu-->
					<li title="EVENTS" class="more">
						<a href="{{ route('lasvegas.index') }}">Events</a>
						<!--Double wrap to prevent hover interrupt-->
						<div class="dropdownbox">
							<div class="ul-wrp">
								<ul class="first-ul">
									<li class="amsterdam">
										<a href="{{ route('ams.index') }}"><p>Amsterdam</p> <span>|</span> 23-24 October 2018</a>
									</li>
									<li class="london">
										<a href="{{ route('london.index') }}"><p>London</p> <span>|</span> 20-21 March 2018</a>
									</li>
									<li class="lasvegas">
										<a href="{{ route('lasvegas.index') }}"><p>America</p> <span>|</span> 15-16 May 2018</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="{{ route('ams.about') }}">About</a></li>
					<li><a href="{{ route('ams.about') }}#careers">Careers</a></li>
				</ul>
				<ul class="spec-menu lasvegas">
					<li class="lasvegascolor"><strong>America</strong> 15-16 May 2018</li>
					<li><a href="{{ route('lasvegas.index') }}">SHOW</a></li>
					<li><a class="hrg" href="{{ route('lasvegas.index') }}#spkrgrd">SPEAKERS</a></li>
					<li><a class="hrg" href="{{ route('lasvegas.index') }}#spnsrgrd">OUR CLIENTS</a></li>
					<li><a href="{{ route('lasvegas.floorplan') }}">VENUE</a></li>
				</ul>
				<div class="social-booknow">
					<div class="icos-wrp">
						<div><a href="https://www.youtube.com/user/hrneurope/"><img src="{{ URL::asset('gfx/youtube-white.png') }}" alt="Youtube"></a></div>
						<div><a href="https://www.facebook.com/hrtechworld"><img src="{{ URL::asset('gfx/facebook-white.png') }}" alt="Facebook"></a></div>
						<div><a href="https://www.linkedin.com/groups/3930182/profile"><img src="{{ URL::asset('gfx/linkedin-white.png') }}" alt="Linkedin"></a></div>
						<div><a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/twitter-white.png') }}" alt="Twitter"></a></div>
					</div>
					<div class="envelope popup" data-popupdata="joinourcommunity">
					  <div class="icon-envelope"></div>
					  <div class="header"></div>
					  <div class="letter"></div>
					</div>
				</div>
					
				
			</nav>
		</section>
		<!--Menu icon in lower sizes.-->