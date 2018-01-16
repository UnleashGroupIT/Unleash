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
											<li><a href="{{ route('london.speakers') }}">Speakers</a></li>
											<li><a href="{{ route('london.agenda') }}">Agenda</a></li>
											<li><a href="{{ route('london.sponsors') }}">Our Clients</a></li>
											<li><a href="{{ route('london.volunteer') }}">Volunteer</a></li>
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
											<li><a href="{{ route('lasvegas.travel') }}">Venue &amp; Travel</a></li>
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
											<li><a href="{{ route('ams.sponsors') }}">Our Clients</a></li>
											<li><a href="{{ route('ams.floorplan') }}">Venue</a></li>
											<li><a href="{{ route('ams.tickets') }}">Tickets</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="{{ route('global.startup') }}">Startup</a></li>
					<li><a href="{{ route('ams.about') }}">About</a></li>
					<li><a href="{{ route('ams.about') }}#careers">Careers</a></li>
					<li><a href="{{ route('press') }}">Press</a></li>
				</ul>