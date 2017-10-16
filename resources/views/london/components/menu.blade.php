		<section id="header-menu" class="fixed">
			<!--Logo-->
				<div id="unleash-logo">
					<a href="/">
						<h1>
							<img src="{{ URL::asset('gfx/london/logo.png') }}" alt="Unleash logo" title="HOME">
						</h1>
					</a>
				</div>
			<!--Menu-->
			<nav id="desktop-menu">
				
				<ul class="menu-ul">
					<li id="news"><a href="http://www.unleashgroup.io/" title="NEWS">News</a></li>
					<!--Dropdownbox for the menu-->
					<li title="EVENTS" class="more ams">
						<a>Amsterdam</a>
						<!--Double wrap to prevent hover interrupt-->
						<div class="dropdownbox">
							<div class="ul-wrp">
								<ul class="first-ul">
									<li class="amsterdam">
										<a>Our Show in Amsterdam</a>
										<ul class="second-ul">
											<li><a href="{{ route('ams.index') }}">Event</a></li>
											<li><a href="{{ route('ams.agenda') }}">Agenda</a></li>
											<li><a href="{{ route('ams.speakers') }}">Speakers</a></li>
											<li><a href="{{ route('ams.sponsors') }}">Sponsors</a></li>
											<li><a href="{{ route('ams.startup') }}">Startup</a></li>
											<li><a href="{{ route('ams.floorplan') }}">Venue / Floorplan</a></li>
										</ul>
									</li>
									<li class="amsterdam">
										<a>Latest News For Amsterdam</a>
										<ul class="news-ul">
											<li><p>Lorem ipsum dolor sit am, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p></li>
											<li class="show-me"><a href="#"><button class="blue-btn">Show Me</button></a></li>
										</ul>
									</li>
									<li class="amsterdam">
										<ul class="news-ul">
											<div class="menu-btn"><a href="#"><button class="pink-btn">Book Now</button></a></div>
											<div class="menu-btn"><a href="#"><button class="blue-btn">Newsletter</button></a></div>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<!--Dropdownbox for the menu-->
					<li title="EVENTS" class="more lon">
						<a>London</a>
						<!--Double wrap to prevent hover interrupt-->
						<div class="dropdownbox">
							<div class="ul-wrp">
								<ul class="first-ul">
									<li class="london" title="London">
										<a>Our Show in London</a>
										<ul class="second-ul">
											<li><a href="{{ route('london.index') }}">Event</a></li>
											<li><a href="{{ route('london.speakers') }}">Past Speakers</a></li>
											<li><a href="{{ route('london.sponsors') }}">Our Clients</a></li>
											<li><a href="{{ route('london.floorplan') }}">Venue / Floorplan</a></li>

										</ul>
									</li>
									<li class="london" title="AMSTERDAM">
										<a>Latest News For London</a>
										<ul class="news-ul">
											<li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p></li>
											<li class="show-me"><a href="#"><button class="blue-btn">Show Me</button></a></li>
										</ul>
									</li>
									<li class="london">
										<ul class="news-ul">
											<div class="menu-btn"><a href="#"><button class="pink-btn">Book Now</button></a></div>
											<div class="menu-btn"><a href="#"><button class="blue-btn">Newsletter</button></a></div>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li title="EVENTS" class="more las">
						<a>Las Vegas</a>
						<!--Double wrap to prevent hover interrupt-->
						<div class="dropdownbox">
							<div class="ul-wrp">
								<ul class="first-ul">
									<li class="america" title="Las Vegas">
										<a>Our Show in Las Vegas</a>
										<ul class="second-ul">
											<li><a href="{{ route('lasvegas.index') }}">Event</a></li>
											<li><a href="{{ route('lasvegas.speakers') }}">Past Speakers</a></li>
											<li><a href="{{ route('lasvegas.sponsors') }}">Our Clients</a></li>
											<li><a href="{{ route('lasvegas.floorplan') }}">Venue / Floorplan</a></li>
										</ul>
									</li>
									<li class="america" title="AMSTERDAM">
										<a>Latest News For Las Vegas</a>
										<ul class="news-ul">
											<li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p></li>
											<li class="show-me"><a href="#"><button class="blue-btn">Show Me</button></a></li>
										</ul>
									</li>
									<li class="america">
										<ul class="news-ul">
											<div class="menu-btn"><a href="#"><button class="pink-btn">Book Now</button></a></div>
											<div class="menu-btn"><a href="#"><button class="blue-btn">Newsletter</button></a></div>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li title="EVENTS" class="more">
						<a>About</a>
						<!--Double wrap to prevent hover interrupt-->
						<div class="dropdownbox">
							<div class="ul-wrp">
								<ul class="first-ul">
									<li class="amsterdam" title="AMSTERDAM">
										<a>About The Team</a>
										<ul class="second-ul">
											<li><a href="{{ route('ams.about') }}">About</a></li>
											<li><a href="{{ route('ams.team') }}">Unleash</a></li>
											<li><a href="{{ route('ams.join') }}">Team</a></li>
											<li><a href="{{ route('ams.join') }}">Careers</a></li>
										</ul>
									</li>
									<li class="amsterdam" title="AMSTERDAM">
										<a>About Us</a>
										<ul class="news-ul">
											<li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p></li>
											<li class="show-me"><a href="#"><button class="blue-btn">More</button></a></li>
										</ul>
									</li>
									<li class="amsterdam">
										<ul class="news-ul">
											<div class="menu-btn"><a href="#"><button class="pink-btn">Book Now</button></a></div>
											<div class="menu-btn"><a href="#"><button class="blue-btn">Newsletter</button></a></div>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
				<div class="social-booknow">
					<div class="icos-wrp">
						<div><a href="https://www.youtube.com/user/hrneurope/"><img src="{{ URL::asset('gfx/london/youtube-white.png') }}" alt="Youtube"></a></div>
						<div><a href="https://www.facebook.com/hrtechworld"><img src="{{ URL::asset('gfx/london/facebook-white.png') }}" alt="Facebook"></a></div>
						<div><a href="https://www.linkedin.com/groups/3930182/profile"><img src="{{ URL::asset('gfx/london/linkedin-white.png') }}" alt="Linkedin"></a></div>
						<div><a href="https://twitter.com/hrtechworld"><img src="{{ URL::asset('gfx/london/twitter-white.png') }}" alt="Twitter"></a></div>
					</div>
					<!--Ticket button-->
					<button class="green-btn">Book now</button>
				</div>
			</nav>
		</section>
		<!--Menu icon in lower sizes.-->