@extends('lasvegas.main')

@section('title', 'Sponsor')

@section('headercss')
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/sponsor.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/lasvegas/flipclock.css') }}">
@endsection

@section('headerjs')
<!--Empty for now-->
@endsection


@section('maincontent')
			<!--Header END-->
		<section class="speaker-dtls-wrap">
			<div class="wrp">
				<div class="speaker-soc">
					<div class="speaker-pic">
						<img src="{{ URL::asset('gfx/workday-big.png') }}" alt="HinssenP">
					</div>
					<div class="dtls-wrap">
						<h2>Workday</h2>
						<h3>Head of VP CEO Talent Manager Founder</h3>
						<div class="social-icons">
							<div><img src="{{ URL::asset('fx/facebook.png') }}" alt="Facebook"></div>
							<div><img src="{{ URL::asset('gfx/youtube.png') }}" alt="Youtube"></div>
							<div><img src="{{ URL::asset('gfx/twitter.png') }}" alt="Twitter"></div>
							<div><img src="{{ URL::asset('gfx/linkedin.png') }}" alt="Linkedin"></div>
						</div>
						<a href="#" id="website">www.websitelink.com</a>
					</div>
				</div>
				<div class="speaker-more">
					<p>Now is the most exciting time to be an HR professional – a profession still heaving with bureaucrats and administrators, politics and legacy systems. The global leadership crisis, the 4th industrial revolution and the speed at which technology is disrupting industries, companies and jobs is happening at an exponential pace never seen before. HR Tech World has become more important now than when it was born at the end of The Great Recession.</p>
					<button class="blue-btn">cta</button>
				</div>
				<a class="quit" href="http://www.oxygenperspectives.com/DEV/RC/unleash/sponsors.php#spnsrz"><img src="{{ URL::asset('gfx/x.svg') }}" alt="X"></a>
			</div>
		</section>
@endsection

@section('footerscripts')
<script src="https://use.typekit.net/oip3jmq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
@endsection
