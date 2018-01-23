	<footer>
		<section class="one">
			<div class="wrp">
				<div class="left">
					<div class="wrap">
						<div class="footer-logo">
							<img src="{{ asset('gfx/unleash-logo.png') }}" alt="Unleash"></h1>
						</div>
						<div class="social-icons">
							<div><a href="https://www.facebook.com/unleashgroup/"><img src="{{ asset('gfx/facebook.png') }}" alt="Facebook"></a></div>
							<div><a href="https://www.youtube.com/user/hrneurope/"><img src="{{ asset('gfx/youtube.png') }}" alt="Youtube"></a></div>
							<div><a href="https://twitter.com/unleashgroup"><img src="{{ asset('gfx/twitter.png') }}" alt="Twitter"></a></div>
							<div><a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network/"><img src="{{ asset('gfx/linkedin.png') }}" alt="Linkedin"></a></div>
						</div>
					</div>
					<div class="footer-btns">
						<a href="{{ route('london.tickets') }}"><button class="green-btn">Book now</button></a>
						<button class="black-btn popup" data-popupdata="joinourcommunity">Subscribe</button>
					</div>
				</div>
				<div class="right">
					<div class="footer-menu">
						<nav>
							<ul>
								<li><a href="http://www.unleashgroup.io">News</a></li>
								<li><a href="{{ route('global.startup') }}">Startup</a></li>
								<li><a href="{{ route('ams.about') }}">About</a></li>
								<li><a href="{{ route('ams.about') }}#careers">Careers</a></li>
								<li><a href="{{ route('press') }}">Press</a></li>
							</ul>
						</nav>
					</div>
					<div class="contact-wrp">
						<p>info@unleashgroup.io</p>
						<p>+44 20 34 689 689</p>
						<p>+36 1 201 1469</p>
						<a href="{{ route('global.terms') }}"><p>HRN Terms &amp; Conditions</p></a>
						<p>Cookie Policy</p>
						<p>Copyright &copy; 2017 HRN.</p>
						<p>All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</section>
	</footer>
	<!--Footer END-->